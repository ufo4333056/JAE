<?php
defined('IN_JAE') or exit('No permission resources.');
class special {
	private $db;
	function __construct() {
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_special';
	
	}
	public function list_special() { 
		
		$where='status=1';
		$page=$_GET['page'];		
		$special=$this->db->listinfo("*",$this->table,$where,"listorder ASC",$page,10);
	
		$pages=$this->db->pages;			
		include template('content','list_special');
	}
	public function show_special() { 
		$id = intval($_GET['id']);			
		$v=$this->db->get_one('*',$this->table,'id='.$id);			
		if($v) extract($v);			
		include template('content','show_special');
	
	
	}
		
	
	
	
}

?>