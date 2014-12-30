<?php

class foreground {
	public $db, $memberinfo;
	private $_member_modelinfo;
	
	public function __construct() {
		//self::check_ip()		
		$this->member_db=jae_base::load_model('member_model');
		$this->point_db=jae_base::load_model('point_model');
		$this->point_set_db=jae_base::load_model('point_set_model');
		$this->point =jae_base::load_app_class('point','point');
		if(substr(ROUTE_A, 0, 7) != 'public_') {
			self::check_member();
		}
		
		
		self::check_member();
	}
	
	/**
	 * �ж��û��Ƿ��Ѿ���½
	 */
	final public function check_member() {
		jae_base::load_sys_class('user');
		$browser=$context->getbrowser();
		$nick=$browser->nick;
		
		
		// && in_array(ROUTE_A, array('init', 'sign', 'setinfo','point_task','seller_apply','goods_apply','goods_manage','apply_task','edit','delete'))
		if(ROUTE_M =='member' || ROUTE_M =='point' ) {
			
			if (!empty($nick)) {
				$result  = $this->member_db->get_one ("username='$nick'");
				$this->memberinfo=$result;
				
				if(empty($result)){

					$fromuserid=intval($_GET['fromuserid']);
					if ($fromuserid==0) {$islock=1;}else {$islock=0;}
	
					$data = array('username'=>$nick,'regdate' =>SYS_TIME ,'lastdate'=>SYS_TIME ,'loginnum'=>1,'groupid'=>1,'islock'=>$islock,'fromuserid'=>$fromuserid );//'groupid'=>1 Ϊ��һ�Ա
					
					$this->member_db->insert($data);
					$result  = $this->member_db->get_one ("username='$nick'");
					$this->memberinfo=$result;
					self::first_login();
					//$point_invite_cache=getcache('point_invite','commons');
					
					//if($point_invite_cache['enable']==1)  self::invite($fromuserid);
				}
				else
				{			
					$loginnum = $result['loginnum'] + 1;
					$this->member_db->update(array('lastdate'=>SYS_TIME ,'loginnum'=>$loginnum),'userid='.$result['userid']);
				}
				
				//showmessage(L('login_success', '', 'member'), 'index.php?m=member&c=index');
			} else {
				$forward= isset($_GET['forward']) ?  urlencode($_GET['forward']) : urlencode(get_url());
				header('location:/member.php?forward='.$forward);
				//showmessage(L('please_login', '', 'member'), '/index.php?m=member&c=index&a=login&forward='.$forward);
				
				//showmessage(L('please_login', '', 'member'), '/member.php?forward='.$forward);
			
			}
		} else {
			//�ж��Ƿ����auth cookie
			if (!empty($nick)) {
				$result  = $this->member_db->get_one ("username='$nick'");
				$this->memberinfo=$result;
				
				
				} else {
				$forward= isset($_GET['forward']) ?  urlencode($_GET['forward']) : urlencode(get_url());
				header('location:/member.php?forward='.$forward);
				
				//showmessage(L('please_login', '', 'member'), '/member.php?forward='.$forward);
				
			}
		}
	}
	
	/*��һ�ε�¼�ͻ���*/
	final public function first_login(){
			$memberinfo = $this->memberinfo;//��Ա��ϸ��Ϣ	
		
			$continue=0;
			$point_set=$this->point_set_db->get_one("day=".$continue);//�״ε�¼���ͻ���			
			$data= array('userid'=>$memberinfo['userid'],'date'=>SYS_TIME ,'title'=>$point_set['title'] ,'picture'=>$point_set['picture'],'point'=>$point_set['point'],'description'=>$point_set['description'],'status'=>'1','continue'=>$continue,'typeid'=>2);
			$this->point_db->insert($data);
			
					
			//����member�����
			$sum=$this->member_db->query("select sum(point) as point from jae_point where userid=".$memberinfo['userid']);
			$row = $sum->fetch();			
			$this->member_db->update(array('point'=>$row['point']),'userid="'.$memberinfo['userid'].'"');			
		
		}


	/*�������׬����*/
	final public function invite($fromuserid){			
			$setting=getcache_sql('point_invite', 'commons');			
			if($setting['enable']==1) {			
				
				$array_point=array('userid'=>$fromuserid,'point'=>$setting['point'],'title'=>$setting['title'],'date'=>SYS_TIME,'picture'=>$setting['thumb'],'description'=>$setting['description'],'status'=>'2','module'=>'invite');
				$this->point->change_point($array_point);//���»�����ϸ
				
				
				 }
			
		
		}

	/**
	 * 
	 * IP��ֹ�ж� ...
	 */
	final private function check_ip(){
		$this->ipbanned = pc_base::load_model('ipbanned_model');
		$this->ipbanned->check_ip();
 	}
	
	
}