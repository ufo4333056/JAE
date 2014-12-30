<?php
defined('IN_JAE') or exit('No permission resources.');
defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class weblink_type extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_weblink_type';
		$this->menuid=60;
	}
	
	function init () {
		$sitelist=getcache('sitelist','commons');
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,"","typeid DESC",$page,10);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('weblink_type_list','weblink');
	}
	function add() {
		$sitelist=getcache('sitelist','commons');
		if(isset($_POST['dosubmit'])) {

			$data=$_POST['info'];
		 	$this->db->insert($data,$this->table);
			
			showmessage(L('add_success'));
			include $this->admin_tpl('weblink_type_add');
			
		} else {		
			
			include $this->admin_tpl('weblink_type_add','weblink');
		}
	}
	function delete() {
		$_GET['typeid'] = intval($_GET['typeid']);
		$this->db->delete($this->table,'typeid='.$_GET['typeid']);
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		$sitelist=getcache('sitelist','commons');
		if(isset($_POST['dosubmit'])) {
			
			$typeid = intval($_POST['typeid']);
			$data=$_POST['info'];
			$this->db->update($data,$this->table,'typeid='.$typeid);
			
			showmessage(L('operation_success'));
			include $this->admin_tpl('weblink_edit');
			
		} else {			
			$typeid = intval($_GET['typeid']);			
			$r=$this->db->get_one('*',$this->table,'typeid='.$typeid);			
			if($r) extract($r);			
			include $this->admin_tpl('weblink_type_edit');
			
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