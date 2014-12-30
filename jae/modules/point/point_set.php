<?php
defined('IN_JAE') or exit('No permission resources.');
defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);
jae_base::load_app_func('global','admin');

class point_set extends admin {
	public function __construct() {	
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_point_set';
		$this->menuid=36;
		
	}
	
	public function init () {
		$where=1;
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,$where,"id DESC",$page,1000);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('point_set');
	}
	function add() {
		if(isset($_POST['dosubmit'])) {

			$data=$_POST['info'];
		 	$this->db->insert($data,$this->table);
			include $this->admin_tpl('weblink_add');
			showmessage(L('add_success'));
		
			
		} else {
			
			
			include $this->admin_tpl('point_set_add');
			
			
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
			include $this->admin_tpl('point_set_edit');			
		} else {					
			$id = intval($_GET['id']);			
			$r=$this->db->get_one('*',$this->table,'id='.$id);			
			if($r) extract($r);			
			include $this->admin_tpl('point_set_edit');			
		}
	}	
	function point_task(){
		$m_db = jae_base::load_model('module_model');
	$data = $m_db->get_one(array('module'=>'point'));//array('module'=>'prize')
	$setting = string2array($data['setting']);
	@extract($setting);	
	if(isset($_POST['dosubmit'])) {
			
			$variable = $_POST['setting'];
  			
			//更新模型数据库,重设setting 数据. 
			
			foreach ($variable as $key => $value) {
				$sets[$key]=$value;
			}  
			$sets=new_html_special_chars($sets);
 			$set = array2string($sets);
 			setcache('point', $sets, 'commons');  

			$m_db->update(array('setting'=>$set), array('module'=>ROUTE_M));
			showmessage(L('setting_updates_successful'));
			
		} else {

			
			
			
			include $this->admin_tpl('point_task');	
			
		
		}
			
		
		
		

		
	}
	
//完善资料获取积分	
	function point_setinfo(){	
	if(isset($_POST['dosubmit'])) {			
			$variable = $_POST['setting'];  			
			foreach ($variable as $key => $value) {
				$sets[$key]=$value;
			}  
			$sets=new_html_special_chars($sets);
 			$set = array2string($sets);
 			setcache('point_setinfo', $sets, 'commons');  			
			showmessage(L('setting_updates_successful'));			
		} else {		
			
			$setting=getcache_sql('point_setinfo','commons');				
			@extract($setting);
			include $this->admin_tpl('point_setinfo');	
			
		
		}
	}
	//point_invite 邀请会员赚积分
	function point_invite(){	
	if(isset($_POST['dosubmit'])) {			
			$variable = $_POST['setting'];  			
			foreach ($variable as $key => $value) {
				$sets[$key]=$value;
			}  
			$sets=new_html_special_chars($sets);
 			$set = array2string($sets);
 			setcache('point_invite', $sets, 'commons');  			
			showmessage(L('setting_updates_successful'));			
		} else {
			$setting=getcache_sql('point_invite', 'commons');			
			@extract($setting);
			include $this->admin_tpl('point_invite');	
			
		
		}
	}



}