<?php
defined('IN_JAE') or exit('No permission resources.');defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class order extends admin {
	function __construct() {
		parent::__construct();
		$this->order_db = jae_base::load_model('order_model');
		$this->menuid=89;
	}
	
	function init () {	
		$order_follow=array(1=>'δ֧��',2=>'�ύ����',3=>'���ύ����',4=>'δ����',5=>'����',6=>'�ѷ���',7=>'δȷ���ջ�',8=>'ȷ���ջ�',9=>'��ȷ���ջ�',10=>'��ȷ���ջ�');

		$where =1;	
		
	 	$title = isset($_GET['title']) ? $_GET['title'] : '';
	 	$userid = isset($_GET['userid']) ? $_GET['userid'] : '';
		
		
			
		if (!empty($title))$where .= " AND `title` LIKE '%$title%' ";
		if (!empty($userid))$where .= " AND `userid` = '$userid' ";
			
		$page=$_GET['page'];		
		$data=$this->order_db->listinfo($where,"id DESC",$page,$pages = '20');	
		$pages=$this->order_db->pages;			
		include $this->admin_tpl('order_list');
	}
	function add() {
		
		
		if(isset($_POST['dopost'])) {
		 //��ȡվ��������Ϣ
		$siteinfo=siteinfo(SITEID);          
		$appkey =$siteinfo['appkey']; 
		$secret =$siteinfo['secretkey'];
        jae_base::load_top('topclient');
        jae_base::load_top('ItemGetRequest');
		$numIid= isset($_POST['numIid']) ? trim($_POST['numIid']) : ''; //�ύ������num_iid
        if ($numIid != "" && rRuleNum($numIid)) {                    
                $c            = new TopClient;
                $c->appkey    = $appkey;
                $c->secretKey = $secret;
                $req          = new ItemGetRequest;
                $req->setFields("detail_url,num_iid,title,nick,type,cid,seller_cids,props,input_pids,input_str,desc,pic_url,num,valid_thru,list_time,delist_time,stuff_status,location,price,post_fee,express_fee,ems_fee,has_discount,freight_payer,has_invoice,has_warranty,has_showcase,modified,increment,approve_status,postage_id,product_id,auction_point,property_alias,item_img,prop_img,sku,video,outer_id,is_virtual");
                $req->setNumIid($numIid);
                $resp = $c->execute($req, $sessionKey);
                
                
                if ($resp->item) {
                    $detail_url    = $resp->item->detail_url; //��Ʒ����
                    $num_iid       = $resp->item->num_iid; //��ƷID
                    $title         = $resp->item->title; //��Ʒ����
                    $nick          = $resp->item->nick; //�����ǳ�
                    $pic_url       = $resp->item->pic_url; //��Ʒ��ͼ
                    $num           = $resp->item->num; //��Ʒ����
                    $price         = $resp->item->price; //��Ʒԭ�۸�
                    $freight_payer = $resp->item->freight_payer; //��Ʒԭ�۸�
                } else
                    $message = '�����������Ʒ';
                //print_r($resp);
            } else {
                $message = "��ƷID������Ϊ�ա����ҡ����������֡���";
            }			
		}
		
		
		if(isset($_POST['dosubmit'])) {
			$data=$_POST['info'];
			
			$data['begin_time']	=	strtotime($_POST['info']['begin_time']);
			$data['end_time']	=	strtotime($_POST['info']['end_time']);
			$data['status']=1;	
			
			
		 	$this->db->insert($data,$this->table);
			
			showmessage(L('add_success'));
			
			
		} else {		
					
			include $this->admin_tpl('exchange_add');
		}
	}
	function delete() {
		$_GET['id'] = intval($_GET['id']);
		$this->order_db->delete('id='.$_GET['id']);
		showmessage(L('operation_success'));		
		
	}
	
	function clear() {
		
		$this->order_db->delete('userid = 1 ');
		$this->order_db->delete('userid = 2 ');
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		
		$order_follow=array(1=>'δ֧��',2=>'�ύ����',3=>'���ύ����',4=>'δ����',5=>'����',6=>'�ѷ���',7=>'δȷ���ջ�',8=>'ȷ���ջ�',9=>'��ȷ���ջ�');
		
		if(isset($_POST['dosubmit'])) {
			
			$id = intval($_POST['id']);
			$data=$_POST['info'];			
			$this->order_db->update($data,'id='.$id);
			showmessage(L('operation_success'));
			
			
			
		} else {				
			$id = intval($_GET['id']);			
			$r=$this->order_db->get_one('id='.$id);			
			if($r) extract($r);			
			include $this->admin_tpl('order_edit');
			
		}
	}
	

	function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $id => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
				$this->db->update(array('listorder'=>$listorder),$this->table,'id='.$id);				
				$status = isset($_POST["status"][$id]) ? $_POST["status"][$id] : '0';								
				$this->db->update(array('status'=>$status),$this->table,'id='.$id);
			}
			showmessage(L('operation_success'));
		} else {
			showmessage(L('operation_failure'));
		}
	}
	

}
?>