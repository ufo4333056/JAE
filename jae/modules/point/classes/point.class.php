<?php
defined('IN_JAE') or exit('No permission resources.');
class point {
	private $urlrules,$categorys,$html_root;
	public function __construct() {
		$this->point_db	 = jae_base::load_model('point_model');
		$this->member_db	 = jae_base::load_model('member_model');
		//self::set_siteid();
		
	}

	public function update_point($userid) {
		
		$sum=$this->point_db->query("select sum(point) as point from jae_point where userid=".$userid);
		$row = $sum->fetch();
		if ($row['point']<=0) $row['point']=0;
		$this->member_db->update(array('point'=>$row['point']),'userid="'.$userid.'"');
		
	}
	
	
	
	/**
	 * 变化积分
	 * @param $userid 用户ID
	 * @param $point 积分
	 * @param $title 标题
	 * @param $date 日期
	 * @param $picture 图片
	 * @param $description 当前页
	 * @param $status 积分状态 
	 * @param $module 积分模块 
	 */
	public function change_point($data) {
		$this->point_db->insert($data);
		$sum=$this->point_db->query("select sum(point) as point from jae_point where userid=".$data['userid']);
		$row = $sum->fetch();
		if ($row['point']<=0) $row['point']=0;
		$this->member_db->update(array('point'=>$row['point']),'userid="'.$data['userid'].'"');
		
	}
	
	
	/**
	 * 设置当前站点
	 */
	private function set_siteid() {
		if(defined('IN_ADMIN')) {
			$this->siteid = get_siteid();
		} else {
			if (param::get_cookie('siteid')) {
				$this->siteid = param::get_cookie('siteid');
			} else {
				$this->siteid = 1;
			}
		}
	}
}