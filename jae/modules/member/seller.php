<?php
defined('IN_JAE') or exit('No permission resources.');
defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);
jae_base::load_app_func('global','admin');

class seller extends admin {
	public function __construct() {
		
		//$this->db = $pdo = new PDO();
		//$this->menu_db = jae_base::load_model('menu_model');
		parent::__construct();		
		$this->menuid=42;
		$this->db = jae_base::load_model('member_model');
		
	}
	
	public function init () {
		$where=' groupid=2 AND islock=1 ';
		//ËÑË÷
		$userid = isset($_GET['userid']) ? $_GET['userid'] : '';
		$nickname = isset($_GET['nickname']) ? $_GET['nickname'] : '';
		$mobile = isset($_GET['mobile']) ? $_GET['mobile'] : '';
			
		if (!empty($userid))$where .= " AND `userid` = '$userid'";
		if (!empty($nickname))$where .= " AND `nickname` = '$nickname'";
		if (!empty($mobile))$where .= " AND `mobile` = '$mobile'";
		//ËÑË÷½áÊø
		
		
		
		
		$page=$_GET['page'];		
		$data=$this->db->listinfo($where,"userid DESC",$page,10);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('seller_list');
	}
	
	public function seller_check () {
		$where='groupid=2 AND islock=0';
		$page=$_GET['page'];		
		$data=$this->db->listinfo($where,"userid DESC",$page,10);
	
		$pages=$this->db->pages;			
	include $this->admin_tpl('seller_check');
	}
	
	
	
	function delete() {
		$_GET['userid'] = intval($_GET['userid']);
		$this->db->delete('userid='.$_GET['userid']);
		showmessage(L('operation_success'));		
		
	}
	
	
	
	function edit() {
		if(isset($_POST['dosubmit'])) {
			
			$typeid = intval($_POST['typeid']);
			$data=$_POST['info'];
			$this->db->update($data,'typeid='.$typeid);
			
			showmessage(L('operation_success'));
			include $this->admin_tpl('goods_type_edit');
			
		} else {			
			$typeid = intval($_GET['typeid']);			
			$r=$this->db->get_one('typeid='.$typeid);			
			if($r) extract($r);			
			include $this->admin_tpl('goods_type_edit');
			
		}
	}
	
	public function seller_pass (){
		
			$userid = intval($_GET['userid']);
			$data=array('islock'=>1);
			$this->db->update($data,'userid='.$userid);
			showmessage(L('operation_success','/admin.php?m=member&c=seller&a=seller_check&menuid='.$this->menuid));
			
		
	}
	public function seller_refuse (){
			$userid = intval($_GET['userid']);
			$data=array('groupid'=>1,'islock'=>1);
			$this->db->update($data,'userid='.$userid);
			showmessage(L('operation_success','/admin.php?m=member&c=seller&a=seller_check&menuid='.$this->menuid));
		
		
	}
	
}