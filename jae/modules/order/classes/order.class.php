<?php
defined('IN_JAE') or exit('No permission resources.');
class order {
	private $urlrules,$categorys,$html_root;
	public function __construct() {
		$this->order_db	 = jae_base::load_model('order_model');
		$this->member_db	 = jae_base::load_model('member_model');
		//self::set_siteid();
		
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
	public function buy_order($data) {
		$this->order_db->insert($data);
		$sum=$this->point_db->query("select sum(point) as point from jae_point where userid=".$data['userid']);
		$row = $sum->fetch();
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