<?php
defined('IN_JAE') or exit('No permission resources.');
defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);
jae_base::load_app_func('global','admin');

class prize_set extends admin {
	public function __construct() {	
		parent::__construct();
		$this->db = jae_base::load_model('prize_set_model');
		$this->menuid=34;
		
	}
	
	public function init () {
		$prize_type=jae_base::load_config('prize_type');
		$where=1;
		$page=$_GET['page'];		
		$data=$this->db->listinfo($where,$order = 'listorder,id DESC',$page, $pages = '20');	
		$pages=$this->db->pages;			
		include $this->admin_tpl('prize_set');
	}
	function add() {
		if(isset($_POST['dosubmit'])) {
			$data=$_POST['info'];
		 	$this->db->insert($data);			
			showmessage(L('add_success'));
			
		} else {
			$prize_type=jae_base::load_config('prize_type');	
			include $this->admin_tpl('prize_set_add');			
		}
	}
	function delete() {
		$_GET['id'] = intval($_GET['id']);
		$this->db->delete('id='.$_GET['id']);
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		if(isset($_POST['dosubmit'])) {
			
			$id = intval($_POST['id']);
			$data=$_POST['info'];
			$this->db->update($data,'id='.$id);		
			
			showmessage(L('operation_success'));			
		} else {
			$prize_type=jae_base::load_config('prize_type');				
			$id = intval($_GET['id']);			
			$r=$this->db->get_one('id='.$id ,'*');			
			if($r) extract($r);			
			include $this->admin_tpl('prize_set_edit');
			
		}
	}
	

	function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $id => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
				
				$this->db->update(array('listorder'=>$listorder),'id='.$id);				
				$status = isset($_POST["status"][$id]) ? $_POST["status"][$id] : '0';								
				$this->db->update(array('status'=>$status),'id='.$id);
			}			
			showmessage(L('operation_success'));
		} else {
			showmessage(L('operation_failure'));
		}
	}

	
}