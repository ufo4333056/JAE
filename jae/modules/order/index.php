<?php
defined('IN_JAE') or exit('No permission resources.');

jae_base::load_app_class('foreground','member');
jae_base::load_app_func('global');
class index extends foreground {	
	public function __construct() {		
		$this->exchange_db = jae_base::load_model('exchange_model');
		$this->seckill_db = jae_base::load_model('seckill_model');
		$this->seckill_person_db = jae_base::load_model('seckill_person_model');
		$this->order_db = jae_base::load_model('order_model');
		$this->point_db	 = jae_base::load_model('point_model');
		$this->prize_db	 = jae_base::load_model('prize_model');
		$this->member_db	 = jae_base::load_model('member_model');
		$this->point =jae_base::load_app_class('point','point');
		$this->point_db	 = jae_base::load_model('point_model');
		
		parent::__construct();
	}
	
	public function init() { 
		$memberinfo = $this->memberinfo;
		$order_follow=array(1=>'δ֧��',2=>'�ύ����',3=>'���ύ����',4=>'δ����',5=>'����',6=>'�ѷ���',7=>'δȷ���ջ�',8=>'ȷ���ջ�',9=>'��ȷ���ջ�',10=>'��ȷ���ջ�');
		$modules=array('exchange'=>'���ֻ���','seckill'=>'���������');

		
		$where=" userid=".$memberinfo['userid'];
		$page=$_GET['page'];		
		$data=$this->order_db->listinfo($where,$order = 'id DESC',$page, $pages = '10');	
		$pages=$this->order_db->pages;	
		
		include template('order','order_list');
	}
	public function convert() { 
		$memberinfo = $this->memberinfo;
		$id = intval($_GET['id']);		
		$module = $_GET['module'];
		$r=$this->exchange_db ->get_one('id='.$id);					
		if($r) extract($r);			
		include template('order','convert');
	}

	public function submit() {
		$memberinfo = $this->memberinfo;
		$id = intval($_POST['id']);
		$module = 'exchange';
		$auction_num = intval($_POST['auction_num']);
		$v=$this->exchange_db ->get_one('id='.$id);if($v) extract($v);
		
		if (SYS_TIME < $begin_time){ showmessage(L('���δ��ʼ'),$detail_url,3); exit();}
		if (SYS_TIME > $end_time) {	showmessage(L('��Ѿ�����'),$detail_url,3); exit();}	
		

		$modules=array('exchange'=>'���ֻ����','seckill'=>'������ɱ�');
		
		$auction_point=$point*$auction_num;
		if($memberinfo['point']>=$auction_point && $num>=$auction_num ) {
		
				$info=array('userid'=>$memberinfo['userid'],'point'=>'-'.$auction_point,'title'=>$title,'date'=>SYS_TIME,'picture'=>$pic_url,'description'=>$modules[$module],'module'=>$module);
				$this->point->change_point($info);//���»�����ϸ
				$this->exchange_db->update(array('num'=>$num-$auction_num),'id='.$id);
				$order_info=array('userid'=>$memberinfo['userid'],'point'=>$auction_point,'title'=>$title,'date'=>SYS_TIME,'picture'=>$pic_url,'description'=>$description,'sellerid'=>$userid,'status'=>'2', 'url'=>$detail_url,'price'=>$price,'goodsid'=>$id,'module'=>$module);
				$this->order_db->insert($order_info);				
				showmessage(L('operation_success'),"/index.php?m=order&c=index&a=init");				
		}
		else {
			showmessage(L('���ֲ������Ʒ�������㣬ֱ��ȥ�����'),$detail_url,3);
		}		
	}
	
	public function seckill_submit_pre() {
		
		$id = intval($_POST['id']);
		$goods=$this->seckill_db ->get_one('id='.$id);	
		
		if (SYS_TIME < $goods['begin_time']){ showmessage(L('���δ��ʼ'),$goods['detail_url'],3); exit();}
		if (SYS_TIME > $goods['end_time']) {	showmessage(L('��Ѿ�����'),$goods['detail_url'],3); exit();}
		if ($goods['num']==0) {showmessage(L('���ź�������̫���ˣ���Ʒ�Ѿ�����ɱ���ˣ�ֱ��ȥ����ɣ�'),$goods['detail_url']); exit();}
		include template('order','convert_seckill');
		
	}
	
	
	
	public function seckill_submit() {
		$memberinfo = $this->memberinfo;
		$modules=array('seckill'=>'��������ۻ');
		$id = intval($_POST['id']);		
		$module = 'seckill';		
		$goods=$this->seckill_db ->get_one('id='.$id);
		if (empty($_POST['answer']) ) { showmessage(L('�𰸲���Ϊ��'),$goods['detail_url'],3); exit();}		
		if ($goods['answer'] != $_POST['answer']){ showmessage(L('�𰸴���'),$goods['detail_url'],3); exit();}		
		if (SYS_TIME < $goods['begin_time']){ showmessage(L('���δ��ʼ'),$goods['detail_url'],3); exit();}
		if (SYS_TIME > $goods['end_time']) {	showmessage(L('��Ѿ�����'),$goods['detail_url'],3); exit();}
		if ($goods['num']==0) {showmessage(L('���ź�������̫���ˣ���Ʒ�Ѿ�����ɱ���ˣ�ֱ��ȥ����ɣ�'),$goods['detail_url'],3); exit();}
		if($memberinfo['point']<$goods['point'] ) {showmessage(L('���ֲ�����'),$goods['detail_url'],3); exit();}	
		
		$m=rand(0,3);
		sleep($m);
		
			/*��ɱ�û��Ŷ�*/
			$this->seckill_person_db->insert(array('userid'=>$memberinfo['userid'],'username'=>$memberinfo['username'],'goodsid'=>$id,'date'=>MICRO_TIME,'regdate'=>SYS_TIME,'begin_time'=>$goods['begin_time'],'end_time'=>$goods['end_time'])); 
			/*��ɱ�û��Ŷ�END*/	
			/*��ȡ��ɱ�����û���Ϣ*/			
			$person=$this->seckill_person_db->get_one("goodsid=$id  AND   begin_time = ".$goods['begin_time']." AND  end_time = ".$goods['end_time']." ORDER BY id ASC  ");				
			/*��ȡ��ɱ�����û���ϢEND*/
			
			
			
						
			$result = $cacheService->get('zhixin'); 
			if ($result){
				showmessage(L('���ź�������̫���ˣ���Ʒ�Ѿ�����ɱ���ˣ�ֱ��ȥ����ɣ�'),$goods['detail_url']); exit();
				//echo $result; ������ʾ
			}else{
				$result = $cacheService->set('zhixin', '1', '10'); //���ɲ�����ֹ		
				/*ֻҪ�ڵ�����ɱ��һ���Ͳ�������ɱ�ڶ���*/
				$begin_time= strtotime(date('Y-m-d',SYS_TIME))-186400;
				$end_time =SYS_TIME;			
				$zj=$this->order_db->get_one("userid=$person[userid] AND module = 'seckill' AND  date >$begin_time  AND date<$end_time ");
	
				if (!empty($zj['id'])){				
					$this->seckill_db->update(array('num'=>$goods['num']-1),'id='.$id);//������Ʒ����	
					$this->order_db->insert(array('userid'=>1,'point'=>$goods['point'],'title'=>$goods['title'],'date'=>SYS_TIME,'picture'=>$goods['pic_url'],'description'=>$memberinfo['userid'],'sellerid'=>$goods['userid'],'status'=>'2', 'url'=>$goods['detail_url'],'price'=>$goods['price'],'goodsid'=>$goods['id'],'module'=>$module));
							
					showmessage(L('���ź�������̫���ˣ���Ʒ�Ѿ�����ɱ���ˣ�ֱ��ȥ����ɣ�'),$goods['detail_url'],3); exit();
	
				}
				/*ֻҪ�ڵ�����ɱ��һ���Ͳ�������ɱ�ڶ���END*/
				
				
				//ϵͳ������ɱ��		
				if($goods['iskill']==1){
					$this->seckill_db->update(array('num'=>$goods['num']-1),'id='.$goods['id']);//������Ʒ����					
					$this->order_db->insert(array('userid'=>2,'point'=>$goods['point'],'title'=>$goods['title'],'date'=>SYS_TIME,'picture'=>$goods['pic_url'],'description'=>$memberinfo['userid'],'sellerid'=>$goods['userid'],'status'=>'2', 'url'=>$goods['detail_url'],'price'=>$goods['price'],'goodsid'=>$goods['id'],'module'=>$module));	
						
					showmessage(L('���ź�������̫���ˣ���Ʒ�Ѿ�����ɱ���ˣ�ֱ��ȥ�����'),$goods['detail_url'],3);exit();
					}
				//ϵͳ������ɱ����
				
				/*�ɹ���ɱ*/
				$this->seckill_person_db->update(array('iswin'=>1),'id='.$person['id']);			
				$this->seckill_db->update(array('num'=>$goods['num']-1),'id='.$goods['id']);//������Ʒ����
												
				$order_info=array('userid'=>$person['userid'],'point'=>$goods['point'],'title'=>$goods['title'],'date'=>SYS_TIME,'picture'=>$goods['pic_url'],'description'=>$goods['description'],'sellerid'=>$goods['userid'],'status'=>'2', 'url'=>$goods['detail_url'],'price'=>$goods['price'],'goodsid'=>$goods['id'],'module'=>$module);
				$this->order_db->insert($order_info);
				$order_result= $this->order_db->get_one(" goodsid=$goods[id] and module='seckill'  order by id asc ");
				//$this->order_db->update(array('userid'=>3), "id != $order_result[id] AND  goodsid=$goods[id] and module='seckill' ");//�滻���ඩ��
				
				//if( $this->order_db->affected_rows() ) {showmessage(L('���ź�������̫���ˣ���Ʒ�Ѿ�����ɱ���ˣ�ֱ��ȥ�����'),$goods['detail_url']);exit();}
				
				$info=array('userid'=>$order_result['userid'],'point'=>'-'.$goods['point'],'title'=>$goods['title'],'date'=>$goods['begin_time'],'picture'=>$goods['pic_url'],'description'=>$modules[$module],'module'=>$module);//�۳�����
				$this->point->change_point($info);//���»�����ϸ
				//$point_result= $this->point_db->get_one(" userid=$order_result[userid] and module='seckill' and date = $goods[begin_time] order by id asc ");
				//$this->point_db->delete( "id != $point_result[id] AND  date=$goods[begin_time] and module='seckill' ");//ɾ�����滻������Ա���ۻ���
				//$this->point->update_point($point_result['id']);//���»�����ϸ
				
			
				
				if($memberinfo['userid']==$order_result['userid']){
					showmessage(L('operation_success'),"/index.php?m=order&c=index&a=init");
					}else { showmessage(L('���ź�������̫���ˣ���Ʒ�Ѿ�����ɱ���ˣ�ֱ��ȥ�����'),$goods['detail_url'],3);exit();}
				/*�ɹ���ɱ*/	
				
					}
						
					
					
		
			
			
	}	
	
	public function receive() {
		$memberinfo = $this->memberinfo;
		$id = intval($_GET['id']);
		$this->order_db->update(array('status'=>'8'),'id='.$id);//���¶���״̬


	}

	
	
}
?>