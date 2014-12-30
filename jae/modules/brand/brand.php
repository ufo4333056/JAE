<?php
defined('IN_JAE') or exit('No permission resources.');defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class brand extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_brand';
		$this->type='jae_brand_type';
		$this->menuid=48;
	}
	
	function init () {
		$type=$this->db->select('*',$this->type);
		$name=$_GET['name'];
		$typeid=$_GET['typeid'];
		$where =" 1 ";
		if(!empty($typeid)) $where.= " AND typeid=".$typeid;
		
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,$where,"brandid DESC",$page,10);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('brand_list');
	}
	function add() {
		if(isset($_POST['dosubmit'])) {
		
			
		

			$data=$_POST['info'];
		 	$this->db->insert($data,$this->table);
			include $this->admin_tpl('brand_add');
			showmessage(L('add_success'));
			
			
			
		} else {		
			$type=$this->db->select('*',$this->type);
			
			
			include $this->admin_tpl('brand_add');
		}
	}
	function delete() {
		$_GET['brandid'] = intval($_GET['brandid']);
		$this->db->delete($this->table,'brandid='.$_GET['brandid']);
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		if(isset($_POST['dosubmit'])) {
			
			$brandid = intval($_POST['brandid']);
			$data=$_POST['info'];
			$this->db->update($data,$this->table,'brandid='.$brandid);
			
			showmessage(L('operation_success'));
			include $this->admin_tpl('brand_edit');
			
		} else {			
			$brandid = intval($_GET['brandid']);			
			$r=$this->db->get_one('*',$this->table,'brandid='.$brandid);	$type=$this->db->select('*',$this->type);		
			if($r) extract($r);			
			include $this->admin_tpl('brand_edit');
			
		}
	}
	
	
	function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $brandid => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
				$this->db->update(array('listorder'=>$listorder),$this->table,'brandid='.$brandid);				
				echo $passed = isset($_POST["passed"][$brandid]) ? $_POST["passed"][$brandid] : '0';								
				$this->db->update(array('passed'=>$passed),$this->table,'brandid='.$brandid);
			}
		
			
				
				
			
			
			showmessage(L('operation_success'));
		} else {
			showmessage(L('operation_failure'));
		}
	}
	

}
?>