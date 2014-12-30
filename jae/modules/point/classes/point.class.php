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
	 * �仯����
	 * @param $userid �û�ID
	 * @param $point ����
	 * @param $title ����
	 * @param $date ����
	 * @param $picture ͼƬ
	 * @param $description ��ǰҳ
	 * @param $status ����״̬ 
	 * @param $module ����ģ�� 
	 */
	public function change_point($data) {
		$this->point_db->insert($data);
		$sum=$this->point_db->query("select sum(point) as point from jae_point where userid=".$data['userid']);
		$row = $sum->fetch();
		if ($row['point']<=0) $row['point']=0;
		$this->member_db->update(array('point'=>$row['point']),'userid="'.$data['userid'].'"');
		
	}
	
	
	/**
	 * ���õ�ǰվ��
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