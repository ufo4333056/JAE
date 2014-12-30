<?php
defined('IN_JAE') or exit('No permission resources.');

jae_base::load_app_class('foreground','member');
jae_base::load_app_func('global');
class index extends foreground {	
	public function __construct() {		
		
		$this->point_db	 = jae_base::load_model('point_model');
		
		$this->seckill_db	 = jae_base::load_model('seckill_model');
		$this->member_db	 = jae_base::load_model('member_model');
		parent::__construct();
	}
	
	
	public function init() { 
		$setting=getcache_sql('seckill','commons');
		if($setting['enable']==0) {include template('prize','index_unable'); exit();}	
		
		$memberinfo = $this->memberinfo;
		$where =  SYS_TIME." < end_time   AND begin_time +3600 > ".SYS_TIME;	
		$page=$_GET['page'];		
		$data=$this->seckill_db->listinfo($where,$order = 'begin_time ASC',$page, $pages = '10');
		$pages=$this->seckill_db->pages;
		$page_setting=getcache_sql('seckill','commons');
		include template('seckill','index');
	}
	public function rules() { 		
		$memberinfo = $this->memberinfo;		
		$page_setting=getcache_sql('seckill','commons');	
		//print_r($setting);
		
		include template('seckill','rules');
	}

	


	
}
?>