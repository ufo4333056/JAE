<?php
defined('IN_JAE') or exit('No permission resources.');

jae_base::load_app_class('foreground','member');
jae_base::load_app_func('global');
class index extends foreground {	
	public function __construct() {		
		$this->prize_set_db = jae_base::load_model('prize_set_model');
		$this->point_db	 = jae_base::load_model('point_model');
		$this->prize_db	 = jae_base::load_model('prize_model');
		$this->member_db	 = jae_base::load_model('member_model');
		parent::__construct();
	}
	
	//活动报名首页
	public function init() { 
		$rules=getcache('prize','commons');	
		$memberinfo = $this->memberinfo;	
		$setting=getcache('prize','commons');	
		$where=" status=1 ";
		$prize_arr=$this->prize_set_db->listinfo($where,$order = 'listorder,id DESC',$page, $pages = '12');	
		
		$prize_data=$this->prize_db->listinfo($where2,$order = 'id DESC',$page, $pages = '8');

		
		if($setting['enable']==1) {include template('prize','index_f');}
		else {include template('prize','index_unable');}
		
	}
	
	public function my_prize() { 
		$memberinfo = $this->memberinfo;	
		$page=$_GET['page'];
		$where=" userid= $memberinfo[userid]";
		$data=$this->prize_db->listinfo($where,$order = 'id DESC',$page, $pages = '10');	
		$pages=$this->prize_db->pages;
		
		include template('prize','my_prize');
	}
	
	public function check() {
		$rules=getcache('prize','commons');
		if($rules['enable']==0){showmessage(L('sorry'),'/index.php?m=prize'); }

		$memberinfo = $this->memberinfo;

		/*if(empty($memberinfo['wangwang'])) {showmessage(L('请填写正确的旺旺'),'/index.php?m=member&c=index&a=setinfo');}
		if(empty($memberinfo['nickname'])) {showmessage(L('请填写正确的姓名'),'/index.php?m=member&c=index&a=setinfo');}
		if(empty($memberinfo['mobile'])) {showmessage(L('请填写正确的手机'),'/index.php?m=member&c=index&a=setinfo');}
		if(empty($memberinfo['address'])) {showmessage(L('请填写正确的地址'),'/index.php?m=member&c=index&a=setinfo');}
		if(empty($memberinfo['zipcode'])) {showmessage(L('请填写正确的邮编'),'/index.php?m=member&c=index&a=setinfo');}
		if(empty($memberinfo['email'])) {showmessage(L('请填写正确的邮箱'),'/index.php?m=member&c=index&a=setinfo');}*/




		$prize_data=$this->prize_db->listinfo($where='',$order = 'id DESC',$page, $pages = '8');	
		
		$where=" status=1 ";		
		
		$prize_arr=$this->prize_set_db->listinfo($where,$order = 'listorder,id DESC',$page, $pages = '12');
	
		$setting=getcache('prize','commons');	
		
	if ($memberinfo['point']>=abs($setting['point'])) {
		
		
			$data= array('userid'=>$memberinfo['userid'],'date'=>SYS_TIME ,'title'=>$setting['title'] ,'picture'=>$setting['picture'],'point'=>$setting['point'],'description'=>$setting['description'],'status'=>'1','typeid'=>'2','module'=>'prize' );//扣除积分
			//'typeid'=>'1'类型为签到
			$this->point_db->insert($data);	
		
			//更新member表积分
			$sum=$this->member_db->query("select sum(point) as point from jae_point where userid=".$memberinfo['userid']);
			$row = $sum->fetch();			
			$this->member_db->update(array('point'=>$row['point']),'userid="'.$memberinfo['userid'].'"');	
		
		//	
		
		
		
		$odds_arr=$this->prize_set_db->listinfo($where,$order = 'listorder,id DESC',$page, $pages = '12');
		$pro_arr=array();
		foreach ($odds_arr as $key=>$value){
			$pro_arr[$value['id']]=$value['odds'];//生成概率数组
			}		
		$result=get_rand($pro_arr);//返回中奖的商品ID  


		/*只要在当天当了一个实物奖品就不能再中实物奖品*/
		$prize=$this->prize_set_db->get_one("id=$result");
		$begin_time= strtotime(date('Y-m-d',SYS_TIME)) ;
		$end_time =$begin_time+86400;
		//echo date('Y-m-d H:i:s',$begin_time);echo date('Y-m-d H:i:s',$end_time)
		$zj=$this->prize_db->get_one("userid=$memberinfo[userid] AND typeid=0 AND  date >$begin_time  AND date<$end_time ");
		//echo date('Y-m-d H:s:s',$zj['date']);
		//echo $zj['id'];echo $prize['typeid'];
		if(!empty($zj['id']) && $prize['typeid']==2){ $prize=$this->prize_set_db->get_one("typeid=0");include template('prize','index'); exit();}
		/*只要在当天当了一个实物奖品就不能再中实物奖品END*/


		if ($prize['typeid']==0||$prize['num']==0){


			$prize=$this->prize_set_db->get_one("typeid=0");		
			$prize_msg= "很遗憾！您没有中奖";
			}
		else if ($prize['typeid']==1 && $prize['num']!=0){ 
			$prize_msg= "恭喜您中奖了！";			
			$data= array('userid'=>$memberinfo['userid'],'date'=>SYS_TIME ,'title'=>$prize['title'] ,'picture'=>$prize['picture'],'point'=>$prize['point'],'description'=>$prize['description'],'status'=>'1','typeid'=>'2','module'=>'prize' );
			//'typeid'=>'1'类型为签到
			$this->point_db->insert($data);	
			$this->prize_db->insert($data);	
			//更新奖品剩余量
			$num=$prize['num']-1;
			$this->prize_set_db->update(array('num'=>$num),"id=$result");				
		
			//更新member表积分
			$sum=$this->member_db->query("select sum(point) as point from jae_point where userid=".$memberinfo['userid']);
			$row = $sum->fetch();			
			$this->member_db->update(array('point'=>$row['point']),'userid="'.$memberinfo['userid'].'"');	
			
			
		}
		else if ($prize['typeid']==2 && $prize['num']!=0){
			$data= array('userid'=>$memberinfo['userid'],'date'=>SYS_TIME ,'title'=>$prize['title'] ,'picture'=>$prize['picture'],'point'=>0,'description'=>$prize['description'],'status'=>'0','url'=>$prize['url'],'module'=>'prize' ); //状态为0 奖品未发
			$this->prize_db->insert($data);				
			//更新奖品剩余量
			$num=$prize['num']-1;
			$this->prize_set_db->update(array('num'=>$num),"id=$result");		
			
			$prize_msg= "<a href='/index.php?m=member&c=index&a=setinfo'>恭喜您中奖了！请填写收货地址！</a>";
		}
	}else {
			$prize_msg="您的积分不够";
		
		}
		
		
		
		
		include template('prize','index');
	
	
	}
	public function rules() {
		
		$data=getcache('prize','commons');	
		include template('prize','rules');
		}
	
}
?>