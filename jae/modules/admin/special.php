<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class special extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_special';
		$this->menuid=27;
	}
	
	function init () {
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,"","id DESC",$page,10);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('special_list');
	}
	function add() {
		if(isset($_POST['dosubmit'])) {

			$data=$_POST['info'];
			$_POST['info']['html']=htmlspecialchars(trim($_POST['info']['html']));
			$_POST['info']['css']=htmlspecialchars(trim($_POST['info']['css']));
			$_POST['info']['url']=htmlspecialchars(trim($_POST['info']['url']));
			$_POST['info']['islink']=$_POST['info']['islink']?$_POST['info']['islink']:0;
		 	$this->db->insert($data,$this->table);
		
			showmessage(L('add_success'),'/admin.php?m=admin&c=special&a=init&menuid=27');
			
			
			
		} else {		
			
			include $this->admin_tpl('special_add');
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
			$_POST['info']['html']=htmlspecialchars(trim($_POST['info']['html']));
			$_POST['info']['css']=htmlspecialchars(trim($_POST['info']['css']));
			$_POST['info']['url']=htmlspecialchars(trim($_POST['info']['url']));
			$_POST['info']['islink']=$_POST['info']['islink']?$_POST['info']['islink']:0;
			$this->db->update($data,$this->table,'id='.$id);
			
			showmessage(L('operation_success'));
			
			
		} else {			
			$id = intval($_GET['id']);			
			$r=$this->db->get_one('*',$this->table,'id='.$id);			
			if($r) extract($r);			
			include $this->admin_tpl('special_edit');
			
		}
	}
	
	/**
	 * еепР
	 */
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
	
	/**
	 * иЗЁиCSS
	 */
	function special_css(){
		
		
		$data=$this->db->listinfo("*",$this->table,"","id DESC",$page,10);
		
		
		
		include $this->admin_tpl('special_css');
		
		}
	

}
?>