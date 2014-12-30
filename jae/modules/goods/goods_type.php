<?php
defined('IN_JAE') or exit('No permission resources.');
defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class goods_type extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_goods_type';
		$this->menuid=69;
	}
	
	function init () {
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,"","typeid DESC",$page,10);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('goods_type_list','goods');
	}
	function add() {
		if(isset($_POST['dosubmit'])) {

			$data=$_POST['info'];
		 	$this->db->insert($data,$this->table);
			
			showmessage(L('add_success'));
			include $this->admin_tpl('goods_type_add');
			header('location:/admin.php?m=goods&c=goods_type&a=init&menuid='.$this->menuid);
		} else {		
			
			include $this->admin_tpl('goods_type_add','goods');
		}
	}
	function delete() {
		$_GET['typeid'] = intval($_GET['typeid']);
		$this->db->delete($this->table,'typeid='.$_GET['typeid']);
		showmessage(L('operation_success'));		
		header('location:/admin.php?m=goods&c=goods_type&a=init&menuid='.$this->menuid);
	}
	
	function edit() {
		if(isset($_POST['dosubmit'])) {
			
			$typeid = intval($_POST['typeid']);
			$data=$_POST['info'];
			$this->db->update($data,$this->table,'typeid='.$typeid);
			
			showmessage(L('operation_success'));
			include $this->admin_tpl('goods_type_edit');
			
		} else {			
			$typeid = intval($_GET['typeid']);			
			$r=$this->db->get_one('*',$this->table,'typeid='.$typeid);			
			if($r) extract($r);			
			include $this->admin_tpl('goods_type_edit');
			
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
			showmessage(L('operation_failure'));
		}
	}
	

}
?>