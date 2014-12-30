<?php
defined('IN_JAE') or exit('No permission resources.');

jae_base::load_app_class('foreground','member');
jae_base::load_app_func('global');
class index extends foreground {	
	public function __construct() {		
		$this->prize_set_db = jae_base::load_model('prize_set_model');
		$this->point_db	 = jae_base::load_model('point_model');
		$this->point_set_db	 = jae_base::load_model('point_set_model');
		$this->prize_db	 = jae_base::load_model('prize_model');
		$this->member_db	 = jae_base::load_model('member_model');
		$this->trade_db	 = jae_base::load_model('trade_model');

		$this->point =jae_base::load_app_class('point','point');
		parent::__construct();
	}
	
	//�������ҳ
	public function init() { 
		$memberinfo = $this->memberinfo;	
		$where=" status=1 ";
		$prize_arr=$this->prize_set_db->listinfo($where,$order = 'listorder,id DESC',$page, $pages = '12');	
		
		$data=$this->prize_db->listinfo($where2,$order = 'id DESC',$page, $pages = '8');	

		include template('prize','index');
	}


	public function receive_point() { 
		$memberinfo = $this->memberinfo;	
		$where =' 1 ';
		$page=$_GET['page'];		
		$where.=" AND `buyer_nick` = '".$memberinfo['username']."'" ;
		$receive=$_GET['receive']?$_GET['receive']:0 ;
		$where.=" AND receive =$receive ";
		
		$data=$this->trade_db->listinfo($where,$order = 'pub_time DESC',$page, $pages = '10');	
		
		$pages=$this->trade_db->pages;

		include template('point','receive_point');
	}

	public function receive() { 
		$memberinfo = $this->memberinfo;	
		$where =' 1 ';
		$where.=" AND `buyer_nick` = '".$memberinfo['username']."'" ;
		$id=$_GET['id'];
		$where.=" AND  id=$id ";
		$data=$this->trade_db->get_one($where);	

		$info['userid']=$memberinfo['userid'];
		$info['point']=floor($data['paid_fee']/100);
		$info['title']=$data['auction_title'];
		$info['date']=SYS_TIME;
		$info['picture']=$data[''];
		$info['description']="���Ѷһ�����";
		$info['status']=1;
		$info['module']=$data['trade'];

		if ($data['receive']==0) {
			$data=$this->trade_db->update(array('receive' =>1 ),"id=$id");

			$this->point->change_point($info);	
		
			showmessage(L('operation_success'));
		} else {

			showmessage(L('��������Ѿ���ȡ�˻���'));
		}

		//include template('point','receive_point');
	}
	

	
	public function sign (){
		
		$memberinfo = $this->memberinfo;//��Ա��ϸ��Ϣ	
		if ($memberinfo) {
		$pointinfo=$this->point_db->get_one('userid="'.$memberinfo['userid'].'" AND typeid=1','*','id DESC');			
		$signtime=strtotime(date('Y-m-d',SYS_TIME));			
		if ($signtime-$pointinfo['date']>0 || empty($pointinfo['date'])) { 			
			//ǩ�����ֲ���	
			if ($signtime-$pointinfo['date']>86400  || empty($pointinfo['date'])){ $continue=1;$day=1;}
			else {$continue=$pointinfo['continue']+1 ; $day=$pointinfo['continue']+1;}//����һ��ſ���ǩ�� 
			
			$lastday=$this->point_set_db->get_one("","*","day DESC");//ȡ���һ��Ļ���
			
			if ($continue>$lastday['day']) $continue=$lastday['day'];
			//����ǩ��������������ǩ���������ȡ���һ��
			
			$point_set=$this->point_set_db->get_one("day=".$continue,'*');
			
			
			
			$data= array('userid'=>$memberinfo['userid'],'date'=>SYS_TIME ,'title'=>$point_set['title'] ,'picture'=>$point_set['picture'],'point'=>$point_set['point'],'description'=>$point_set['description'],'status'=>'1','continue'=>$continue,'typeid'=>'1','module'=>'sign'  );
			//'typeid'=>'1'����Ϊǩ��
			$this->point_db->insert($data);
			
			$msg="ǩ���ɹ�"."����������".$day."��ǩ��";			
			//����member�����
			$sum=$this->point_db->query("select sum(point) as point from jae_point where userid=".$memberinfo['userid']);
			$row = $sum->fetch();			
			$this->member_db->update(array('point'=>$row['point']),'userid="'.$memberinfo['userid'].'"');			
		} else {
			$msg="�����Ѿ�ǩ�����ˣ�����������";
			}		
			//ͳ���Ѿ����ĵĻ��� 	
			$sum=$this->member_db->query("select sum(point) as point from jae_point where point<0 and userid=".$memberinfo['userid'] );
			$pointeds = $sum->fetch();		
			//*������ϸ
			
			$invite_sum=$this->member_db->count("fromuserid= ".$memberinfo['userid']." AND islock=0 " );
			
			
			$page=$_GET['page'];
			
			$trad=$_GET['trad'];
			
			if ($_GET['trad']=='income')	
			{$data=$this->point_db->listinfo("userid='$memberinfo[userid]' AND  point >0 ","id DESC",$page,50);}
			elseif ($_GET['trad']=='used')	
			{$data=$this->point_db->listinfo("userid='$memberinfo[userid]' AND  point <0 ","id DESC ",$page,50);}
			else 
			{$data=$this->point_db->listinfo("userid=".$memberinfo['userid'],"id DESC",$page,50);

			}	
			$pages=$this->point_db->pages;	
			
			
			//������ϸģ��		
			include template('point','point');	
		}
		else  {
				include template('member','login');	
			}
	}
	public function point_task() {
		
		$data=getcache_sql('point','commons');	
		include template('point','task');
		}

	public function point_invite() {
		$memberinfo = $this->memberinfo;//��Ա��ϸ��Ϣ	
		$data=getcache_sql('point_invite','commons');
		if ($data['enable']==0){showmessage(L('�Բ��𣬸ù�����ʱû�п���!'),"/index.php");}

		 $siteinfo=siteinfo(get_siteid());

		include template('point','invite');
		}
	
}
?>