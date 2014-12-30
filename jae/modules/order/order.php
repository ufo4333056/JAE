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
		$order_follow=array(1=>'未支付',2=>'提交订单',3=>'已提交订单',4=>'未发货',5=>'发货',6=>'已发货',7=>'未确认收货',8=>'确认收货',9=>'已确认收货',10=>'已确认收货');

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
		
		$order_follow=array(1=>'未支付',2=>'提交订单',3=>'已提交订单',4=>'未发货',5=>'发货',6=>'已发货',7=>'未确认收货',8=>'确认收货',9=>'已确认收货');
		
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