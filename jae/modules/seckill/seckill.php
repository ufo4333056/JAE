<?php
defined('IN_JAE') or exit('No permission resources.');defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class seckill extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_seckill';
		
		$this->menuid=31;
	}
	
	function init () {
		
		
		
	
		$where =1;
		
	
		
		
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,$where,"id DESC",$page,10);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('seckill_list');
	}
	function add() {
		
		
		if(isset($_POST['dopost'])) {
		 //获取站点配置信息
		$siteinfo=siteinfo(SITEID);          
		$appkey =$siteinfo['appkey']; 
		$secret =$siteinfo['secretkey'];
        jae_base::load_top('topclient');
        jae_base::load_top('ItemGetRequest');
		$numIid= isset($_POST['numIid']) ? trim($_POST['numIid']) : ''; //提交过来的num_iid
        if ($numIid != "" && rRuleNum($numIid)) {                    
                $c            = new TopClient;
                $c->appkey    = $appkey;
                $c->secretKey = $secret;
                $req          = new ItemGetRequest;
                $req->setFields("detail_url,num_iid,title,nick,type,cid,seller_cids,props,input_pids,input_str,desc,pic_url,num,valid_thru,list_time,delist_time,stuff_status,location,price,post_fee,express_fee,ems_fee,has_discount,freight_payer,has_invoice,has_warranty,has_showcase,modified,increment,approve_status,postage_id,product_id,auction_point,property_alias,item_img,prop_img,sku,video,outer_id,is_virtual");
                $req->setNumIid($numIid);
                $resp = $c->execute($req, $sessionKey);
                
                
                if ($resp->item) {
                    $detail_url    = $resp->item->detail_url; //商品链接
                    $num_iid       = $resp->item->num_iid; //商品ID
                    $title         = $resp->item->title; //商品标题
                    $nick          = $resp->item->nick; //卖家昵称
                    $pic_url       = $resp->item->pic_url; //商品主图
                    $num           = $resp->item->num; //商品数量
                    $price         = $resp->item->price; //商品原价格
                    $freight_payer = $resp->item->freight_payer; //商品原价格
                } else
                    $message = '不存在这个商品';
                //print_r($resp);
            } else {
                $message = "商品ID【不能为空】并且【必须是数字】。";
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
					
			include $this->admin_tpl('seckill_add');
		}
	}
	function delete() {
		$_GET['id'] = intval($_GET['id']);
		$this->db->delete($this->table,'id='.$_GET['id']);
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		
		
		
		if(isset($_POST['dosubmit'])) {
			
			$id = intval($_POST['id']);
			$data=$_POST['info'];	
			$data['begin_time']	=	strtotime($_POST['info']['begin_time']);
			$data['end_time']	=	strtotime($_POST['info']['end_time']);
			$this->db->update($data,$this->table,'id='.$id);
			showmessage(L('operation_success'));
			
			
			
		} else {				
			$id = intval($_GET['id']);			
			$r=$this->db->get_one('*',$this->table,'id='.$id);			
			if($r) extract($r);			
			include $this->admin_tpl('seckill_edit');
			
		}
	}
	
	/**
	 * 排序
	 */
	function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['del'] as $id => $listorder) {
					
				$status = isset($_POST["del"][$id]) ? $_POST["del"][$id] : '0';								
				$this->db->delete($this->table,'id='.$id);
			}




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
	/**
	 * 模块配置
	 */
	public function setting() { 
	$m_db = jae_base::load_model('module_model');
	$data = $m_db->get_one(array('module'=>'seckill'));//array('module'=>'prize')


	$setting = string2array($data['setting']);


	if(isset($_POST['dosubmit'])) {
			
			$variable = $_POST['setting'];
  			
			//更新模型数据库,重设setting 数据. 
			
			foreach ($variable as $key => $value) {
				$sets[$key]=$value;
			}  
			$sets=new_html_special_chars($sets);
 			$set = array2string($sets);
 			setcache('seckill', $sets, 'commons');  

			$m_db->update(array('setting'=>$set), array('module'=>ROUTE_M));
			showmessage(L('setting_updates_successful'), '/admin.php?m=seckill&c=seckill&a=setting&menuid=97');
			
		} else {

			@extract($setting);		

			include $this->admin_tpl('setting');		
			
		
		}
			
			
			
			
			
	
	
	}
	

}
?>