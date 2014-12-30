<?php
defined('IN_JAE') or exit('No permission resources.');

jae_base::load_app_class('admin','admin',0);
jae_base::load_app_func('global','mysql',0);
class mysql extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		
		$this->menuid=78;
	}
	
	function init () {	
		
		$tables=jae_base::load_config('tables');
		$db_config = jae_base::load_config('database');	
		$tablepre=$db_config['default']['tablepre'];
		$table=$_GET['table'];			
		if(!empty($table)){
			$db=jae_base::load_model($table.'_model');
			$page=$_GET['page'];		
			$data=$db->listinfo($where=1,'',$page,100);	
			$pages=$db->pages;
			if(!empty($data)){			
				$array=$data->fetchAll();
				$dump=mysqldump($tablepre.$table,$array,false);	
				
			}else {
				$dump ="没有数据";
				}
		}
		include $this->admin_tpl('mysql_list','mysql');
	}
	function add() {
		if(isset($_POST['dosubmit'])) {

			$data=$_POST['info'];
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
	
	

}
?>