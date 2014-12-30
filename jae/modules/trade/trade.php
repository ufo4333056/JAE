<?php
defined('IN_JAE') or exit('No permission resources.');
defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);
jae_base::load_app_func('global','admin');

class trade extends admin {
	public function __construct() {	
		parent::__construct();
		$this->db = jae_base::load_model('trade_model');
		$this->menuid=90;
		
	}
	
	public function init () {


		$page=$_GET['page'];		
		$data=$this->db->listinfo($where,$order = 'pub_time DESC',$page, $pages = '10');	


		$pages=$this->db->pages;			
		include $this->admin_tpl('trade_list');
	}


	public function request() { 		

		$siteinfo=siteinfo(SITEID);          
		$appkey =$siteinfo['appkey']; 
		$secret =$siteinfo['secretkey'];
        jae_base::load_top('topclient');
        jae_base::load_top('RequestCheckUtil');
        jae_base::load_top('TmcMessagesConsumeRequest');
        jae_base::load_top('TmcMessagesConfirmRequest');
        $c = new TopClient;
        $c->appkey = $appkey;
        $c->secretKey =$secret;
       // $c->gatewayUrl = "http://gw.api.tbsandbox.com/router/rest"; 
        $req = new TmcMessagesConsumeRequest;           
        $req->setQuantity(100);
        $resp = $c->execute($req);
       // print_r($resp);

        
        for ($i=0; $i<count($resp->messages->tmc_message); $i++)
            {
                $messages_ids.=$resp->messages->tmc_message[$i]->id.",";
              	$data['id']=$resp->messages->tmc_message[$i]->id;
                $data['user_id']=$resp->messages->tmc_message[$i]->user_id;
                $data['content']=htmlspecialchars($resp->messages->tmc_message[$i]->content);

				$contents=json_decode(htmlspecialchars_decode($resp->messages->tmc_message[$i]->content),true);

				$data['buyer_nick']=$contents['buyer_nick'];
  				$data['auction_id']=$contents['auction_id'];
   				$data['paid_fee']=$contents['paid_fee'];
    			$data['auction_count']=$contents['auction_count'];
     			$data['auction_title']=$contents['auction_title'];

                $data['pub_time']=strtotime($resp->messages->tmc_message[$i]->pub_time);
                $data['pub_app_key']=$resp->messages->tmc_message[$i]->pub_app_key;
                $data['topic']=$resp->messages->tmc_message[$i]->topic;

               // print_r($data);
                
                
                $this->db->insert($data);
            }
         //È·ÈÏÏûÏ¢
         $req2 = new TmcMessagesConfirmRequest;
         $req2->setSMessageIds($messages_ids);
         $resp2 = $c->execute($req2);
//stdClass Object ( [messages] => stdClass Object ( [tmc_message] => Array ( [0] => stdClass Object ( [user_id] => 0 [content] => {"buyer_nick":"ÖÓ01sFPHkvIUn+0iz7SFXIznPxzFidsYny1qVs/ZHI2U3s4\u003d","auction_id":36261151986,"paid_fee":990,"auction_count":1,"auction_title":"º«¹ú·çÎ¶ Ë®¹û²è ÃÛÁ¶·äÃÛèÖ×Ó²è248g ²£Á§Æ¿×Ó Âò2Æ¿ËÍÉ××Ó°üÓÊ"} [id] => 7112500108330773705 [pub_time] => 2014-04-11 23:38:23 [pub_app_key] => 12497914 [topic] => jae_trade_PaidSuccessed ) ) ) )


				
		showmessage(L('add_success').count($resp->messages->tmc_message).'Ìõ');
		//include $this->admin_tpl('trade_list');
	}

	
	public function add() {

 $data['id']='7112500108330773705';
 $data['user_id']='0';
 $data['content']= htmlspecialchars('{"buyer_nick":"ÖÓ01sFPHkvIUn+0iz7SFXIznPxzFidsYny1qVs/ZHI2U3s4\u003d","auction_id":36261151986,"paid_fee":990,"auction_count":1,"auction_title":"º«¹ú·çÎ¶ Ë®¹û²è ÃÛÁ¶·äÃÛèÖ×Ó²è248g ²£Á§Æ¿×Ó Âò2Æ¿ËÍÉ××Ó°üÓÊ"}') ;

 $data['buyer_nick']='ÖÓ01sFPHkvIUn+0iz7SFXIznPxzFidsYny1qVs/ZHI2U3s4\u003d';
  $data['auction_id']='36261151986';
   $data['paid_fee']='990';
    $data['auction_count']='1';
     $data['auction_title']='º«¹ú·çÎ¶ Ë®¹û²è ÃÛÁ¶·äÃÛèÖ×Ó²è248g ²£Á§Æ¿×Ó Âò2Æ¿ËÍÉ××Ó°üÓÊ';
$data['pub_time']=strtotime('2014-04-11 23:38:23');
$data['pub_app_key']='12497914';
$data['topic']="jae_trade_PaidSuccessed";

$this->db->insert($data);



		if(isset($_POST['dosubmit'])) {
			$data=$_POST['info'];
		 	$this->db->insert($data);			
			showmessage(L('add_success'));
			
		} else {
			$prize_type=jae_base::load_config('prize_type');	
			include $this->admin_tpl('trade_list');			
		}
	}
	public function delete() {
		$_GET['id'] = intval($_GET['id']);
		$this->db->delete('id='.$_GET['id']);
		showmessage(L('operation_success'));		
		
	}
	
	public function edit() {
		if(isset($_POST['dosubmit'])) {
			
			$id = intval($_POST['id']);
			$data=$_POST['info'];
			$data['status']=1;
			$this->db->update($data,'id='.$id);		
		
			showmessage(L('operation_success'));			
		} else {
			$prize_type=jae_base::load_config('prize_type');				
			$id = intval($_GET['id']);			
			$r=$this->db->get_one('id='.$id ,'*');			
			if($r) extract($r);			
			include $this->admin_tpl('prize_edit');
			
		}
	}
	
	/**
	 * ÅÅÐò
	 */
	public function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $id => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
				
				$this->db->update(array('listorder'=>$listorder),'id='.$id);				
				$status = isset($_POST["status"][$id]) ? $_POST["status"][$id] : '0';								
				$this->db->update(array('status'=>$status),'id='.$id);
			}			
			showmessage(L('operation_success'));
		} else {
			showmessage(L('operation_failure'));
		}
	}

	/**
	 * ³é½±Ä£¿éÅäÖÃ
	 */
	public function setting() { 
	$m_db = jae_base::load_model('module_model');
	$data = $m_db->get_one(array('module'=>'prize'));//array('module'=>'prize')


	$setting = string2array($data['setting']);


	if(isset($_POST['dosubmit'])) {
			
			$variable = $_POST['setting'];
  			
			//¸üÐÂÄ£ÐÍÊý¾Ý¿â,ÖØÉèsetting Êý¾Ý. 
			
			foreach ($variable as $key => $value) {
				$sets[$key]=$value;
			}  
			$sets=new_html_special_chars($sets);
 			$set = array2string($sets);
 			setcache('prize', $sets, 'commons');  

			$m_db->update(array('setting'=>$set), array('module'=>ROUTE_M));
			showmessage(L('setting_updates_successful'), '/admin.php?m=prize&c=prize&a=setting&menuid=76');
			
		} else {

			@extract($setting);		

			include $this->admin_tpl('setting');		
			
		
		}
			
			
			
			
			
	
	
	}
	
}