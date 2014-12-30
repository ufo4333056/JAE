<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class link extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_link';
		$this->menuid=46;
	}
	
	function init () {
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,"","linkid DESC",$page,10);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('link_list');
	}
	function add() {
		if(isset($_POST['dosubmit'])) {
			print_r($info);

			$data=$_POST['info'];
		 	$this->db->insert($data,$this->table);
			include $this->admin_tpl('link_add');
			showmessage(L('add_success'));	
			
			
		} else {		
			
			include $this->admin_tpl('link_add');
		}
	}
	function delete() {
		$_GET['linkid'] = intval($_GET['linkid']);
		$this->db->delete($this->table,'linkid='.$_GET['linkid']);
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		if(isset($_POST['dosubmit'])) {
			
			$linkid = intval($_POST['linkid']);
			$data=$_POST['info'];
			$this->db->update($data,$this->table,'linkid='.$linkid);
			
			showmessage(L('operation_success'));
			include $this->admin_tpl('link_edit');
			
		} else {			
			$linkid = intval($_GET['linkid']);			
			$r=$this->db->get_one('*',$this->table,'linkid='.$linkid);			
			if($r) extract($r);			
			include $this->admin_tpl('link_edit');
			
		}
	}
	

	function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $linkid => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
				$this->db->update(array('listorder'=>$listorder),$this->table,'linkid='.$linkid);				
				echo $passed = isset($_POST["passed"][$linkid]) ? $_POST["passed"][$linkid] : '0';								
				$this->db->update(array('passed'=>$passed),$this->table,'linkid='.$linkid);
			}
		
			
				
				
			
			
			showmessage(L('operation_success'));
		} else {
			showmessage(L('operation_failure'));
		}
	}
	

}
?>