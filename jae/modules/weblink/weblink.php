<?php
defined('IN_JAE') or exit('No permission resources.');

jae_base::load_app_class('admin','admin',0);

class weblink extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_weblink';
		$this->type='jae_weblink_type';
		$this->menuid=13;
	}
	
	function init () {
		$sitelist=getcache('sitelist','commons');
		$type=$this->db->select('*',$this->type);
		$typeid=$_POST['info']['typeid'];
		$kw=$_POST['kw'];
		$where =1;
		if(!empty($typeid)) $where.= " AND typeid='$typeid'";
		if(!empty($kw)) $where.= " AND title like '%$kw%'";
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,$where,"listorder,id DESC",$page,100);
	
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('weblink_list','weblink');
	}
	function add() {
		$sitelist=getcache('sitelist','commons');
		if(isset($_POST['dosubmit'])) {

			$data=$_POST['info'];
			$data['siteid']=get_siteid();
		 	$this->db->insert($data,$this->table);
			include $this->admin_tpl('weblink_add');
			showmessage(L('add_success'));
			
		} else {
			$typeid=$_GET['typeid'];		
			$type=$this->db->select('*',$this->type);
			include $this->admin_tpl('weblink_add','weblink');
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
			$this->db->update($data,$this->table,'id='.$id);
			
			showmessage(L('operation_success'));
			include $this->admin_tpl('weblink_edit');
			
		} else {		
			$type=$this->db->select('*',$this->type);	
			$id = intval($_GET['id']);			
			$r=$this->db->get_one('*',$this->table,'id='.$id);			
			if($r) extract($r);			
			include $this->admin_tpl('weblink_edit');
			
		}
	}
	

	function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $id => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
				$this->db->update(array('listorder'=>$listorder),$this->table,'id='.$id);				
			
			}
				
		foreach($_POST['link'] as $id =>$link) {		
				$this->db->update(array('link'=>$link),$this->table,'id='.$id);			
			
			}
		foreach($_POST['title'] as $id =>$title) {		
				$this->db->update(array('title'=>$title),$this->table,'id='.$id);			
			
			}
		foreach($_POST['picture'] as $id =>$picture) {		
				$this->db->update(array('picture'=>$picture),$this->table,'id='.$id);			
			
			}
		foreach($_POST['description'] as $id =>$description) {		
				$this->db->update(array('description'=>$description),$this->table,'id='.$id);			
			
			}
		
			
				
				
			
			
			showmessage(L('operation_success'));
		} else {
			showmessage(L('operation_failure'));
		}
	}
	

}
?>