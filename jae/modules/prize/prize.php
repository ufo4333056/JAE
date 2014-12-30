<?php
defined('IN_JAE') or exit('No permission resources.');
defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);
jae_base::load_app_func('global','admin');

class prize extends admin {
	public function __construct() {	
		parent::__construct();
		$this->db = jae_base::load_model('prize_model');
		$this->menuid=33;
		
	}
	
	public function init () {
		$where=" typeid=2 ";
		$page=$_GET['page'];		
		$data=$this->db->listinfo($where,$order = 'id DESC',$page, $pages = '10');	
		$pages=$this->db->pages;			
		include $this->admin_tpl('prize_list');
	}

	public function prize_real () {
		$where=" typeid=0 ";
		$page=$_GET['page'];		
		$data=$this->db->listinfo($where,$order = 'id DESC',$page, $pages = '10');	
		$pages=$this->db->pages;			
		include $this->admin_tpl('prize_list');
	}
	public function add() {
		if(isset($_POST['dosubmit'])) {
			$data=$_POST['info'];
		 	$this->db->insert($data);			
			showmessage(L('add_success'));
			
		} else {
			$prize_type=jae_base::load_config('prize_type');	
			include $this->admin_tpl('prize_add');			
		}
	}
	public function delete() {
		$_GET['id'] = intval($_GET['id']);
		$this->db->delete('id='.$_GET['id']);
		showmessage(L('operation_success'));		
		
	}
	
	public function edit() {
		if(isset($_POST['dosubmit'])) {
			
			$id = intval($_POST['id']);
			$data=$_POST['info'];
			$data['status']=1;
			$this->db->update($data,'id='.$id);		
		
			showmessage(L('operation_success'));			
		} else {
			$prize_type=jae_base::load_config('prize_type');				
			$id = intval($_GET['id']);			
			$r=$this->db->get_one('id='.$id ,'*');			
			if($r) extract($r);			
			include $this->admin_tpl('prize_edit');
			
		}
	}
	
	/**
	 * 排序
	 */
	public function listorder() {
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

	/**
	 * 抽奖模块配置
	 */
	public function setting() { 
	$m_db = jae_base::load_model('module_model');
	$data = $m_db->get_one(array('module'=>'prize'));//array('module'=>'prize')


	$setting = string2array($data['setting']);


	if(isset($_POST['dosubmit'])) {
			
			$variable = $_POST['setting'];
  			
			//更新模型数据库,重设setting 数据. 
			
			foreach ($variable as $key => $value) {
				$sets[$key]=$value;
			}  
			$sets=new_html_special_chars($sets);
 			$set = array2string($sets);
 			setcache('prize', $sets, 'commons');  

			$m_db->update(array('setting'=>$set), array('module'=>ROUTE_M));
			showmessage(L('setting_updates_successful'), '/admin.php?m=prize&c=prize&a=setting&menuid=76');
			
		} else {

			@extract($setting);		

			include $this->admin_tpl('setting');		
			
		
		}
			
			
			
			
			
	
	
	}
	
}