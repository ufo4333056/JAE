<?php
defined('IN_JAE') or exit('No permission resources.');defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class weblink extends admin {
	function __construct() {
		parent::__construct();
		$this->block_db = jae_base::load_model('block_model');
		$this->weblink_db = jae_base::load_model('weblink_model');
		$this->position = jae_base::load_model('position_data_model');
		
	
	
		$this->menuid=14;
	}
	
	function init () {
		$a=$_GET['op'];
	}
	function lists() {		
		$siteid = isset($data['siteid']) && intval($data['siteid']) ? intval($data['siteid']) : get_siteid();
		$id = intval($_GET['id']);
		$typeid = intval($_GET['typeid']);
		
		if(isset($_GET['where'])) {
			$sql = $_GET['where'];
		} else {
			
			$typeid = $typeid ? " AND typeid = '$typeid'" : '';
			$id = $id ? " AND id = '$id'" : '';
			
			$sql = "1".$id.$typeid;			
		}
		$order = $_GET['order'];
		echo $sql;
		$data=$this->weblink_db->listinfo($sql,$order,$page,100);
	
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('weblink_list','weblink');
		
		
		}
	function content() { }
	
	function block() {
		if(isset($_POST['dosubmit'])) {
			
			$id = intval($_POST['id']);
			$data=$_POST['info'];
			$_POST['info']['data']=htmlspecialchars($_POST['info']['data']);
			$this->db->update($data,$this->table,'id='.$id);
			
			showmessage(L('operation_success'));
			include $this->admin_tpl('block_edit');
			
		} else {
			$id = intval($_GET['id']);
			$pos =$_GET['pos'];
			$r=$this->block_db->get_one(" `id`= '$id' or `pos`='$pos'");
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