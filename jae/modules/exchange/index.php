<?php
defined('IN_JAE') or exit('No permission resources.');

jae_base::load_app_class('foreground','member');
jae_base::load_app_func('global');
class index extends foreground {	
	public function __construct() {		
		$this->exchange_db = jae_base::load_model('exchange_model');
		$this->point_db	 = jae_base::load_model('point_model');
		$this->prize_db	 = jae_base::load_model('prize_model');
		$this->member_db	 = jae_base::load_model('member_model');
		parent::__construct();
	}
	
	//活动报名首页
	public function init() { 
		$memberinfo = $this->memberinfo;	
		$page=$_GET['page'];
		$where=" status=1 AND end_time > " .SYS_TIME;		
		$data=$this->exchange_db->listinfo($where,$order = 'listorder ASC',$page, $pages = '24');	
		$pages=$this->exchange_db->pages;
		include template('exchange','index');
	}
	
	public function exchange() { 
		$memberinfo = $this->memberinfo;
		$id = intval($_GET['id']);			
		$data=$this->exchange_db ->get_one('id='.$id);					
		if($data) extract($data);		
		include template('exchange','show_ex');
	}
	
	
	

	
	
}
?>