<?php
defined('IN_JAE') or exit('No permission resources.');defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class brand_type extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_brand_type';
		$this->menuid=49;
	}
	
	function init () {
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,"","typeid DESC",$page,10);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('brand_type_list','brand');
	}
	function add() {
		if(isset($_POST['dosubmit'])) {

			$data=$_POST['info'];
		 	$this->db->insert($data,$this->table);
			
			showmessage(L('add_success'));
			include $this->admin_tpl('brand_type_add');
			
		} else {		
			
			include $this->admin_tpl('brand_type_add','brand');
		}
	}
	function delete() {
		$_GET['typeid'] = intval($_GET['typeid']);
		$this->db->delete($this->table,'typeid='.$_GET['typeid']);
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		if(isset($_POST['dosubmit'])) {
			
			$typeid = intval($_POST['typeid']);
			$data=$_POST['info'];
			$this->db->update($data,$this->table,'typeid='.$typeid);
			
			showmessage(L('operation_success'));
			include $this->admin_tpl('brand_type_edit');
			
		} else {			
			$typeid = intval($_GET['typeid']);			
			$r=$this->db->get_one('*',$this->table,'typeid='.$typeid);			
			if($r) extract($r);			
			include $this->admin_tpl('brand_type_edit');
			
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