<?php
defined('IN_JAE') or exit('No permission resources.');defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class block extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_block';
		$this->type='jae_block_type';
		$this->menuid=14;
	}
	
	function init () {
		$sitelist=getcache('sitelist','commons');	
		$type=$this->db->select('*',$this->type);
		$typeid=$_POST['info']['typeid'];
		$kw=$_POST['kw'];
		$where =1;
		if(!empty($typeid)) $where.= " AND typeid='$typeid'";
		if(!empty($kw)) $where.= " AND name like '%$kw%'";
		
		
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,$where,"id DESC",$page,10);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('block_list','block');
	}
	function add() {
		$sitelist=getcache('sitelist','commons');	
		if(isset($_POST['dosubmit'])) {
			

			$data=$_POST['info'];
			$_POST['info']['data']=htmlspecialchars($_POST['info']['data']);
			$data['siteid']=get_siteid();
		 	$this->db->insert($data,$this->table);
			include $this->admin_tpl('block_add');
			showmessage(L('add_success'));
			
			
		} else {		
			$typeid=$_GET['typeid'];		
			$type=$this->db->select('*',$this->type);
			
			include $this->admin_tpl('block_add','block');
		}
	}
	function delete() {
		$_GET['id'] = intval($_GET['id']);
		$this->db->delete($this->table,'id='.$_GET['id']);
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		$sitelist=getcache('sitelist','commons');	
		if(isset($_POST['dosubmit'])) {
			
			$id = intval($_POST['id']);
			$data=$_POST['info'];
			$_POST['info']['data']=htmlspecialchars($_POST['info']['data']);
			$this->db->update($data,$this->table,'id='.$id);
			
			showmessage(L('operation_success'));
			include $this->admin_tpl('block_edit');
			
		} else {			
		
		$typeid=$_GET['typeid'];		
			$type=$this->db->select('*',$this->type);
		
			$id = intval($_GET['id']);	
			$pos =$_GET['pos'];
			$r=$this->db->get_one('*',$this->table," `id`= '$id' or `pos`='$pos'");			
			if($r) extract($r);			
			include $this->admin_tpl('block_edit');
			
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