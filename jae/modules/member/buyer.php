<?php
defined('IN_JAE') or exit('No permission resources.');
defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);
jae_base::load_app_func('global','admin');

class buyer extends admin {
	public function __construct() {		
		//$this->menu_db = jae_base::load_model('menu_model');
		parent::__construct();
		$this->db =jae_base::load_model('member_model');	
		$this->point_db =jae_base::load_model('point_model');		
		$this->menuid=8;
		
	}
	
	public function init () {
		$where='1 ';		
		$userid = isset($_GET['userid']) ? $_GET['userid'] : '';
		$nickname = isset($_GET['nickname']) ? $_GET['nickname'] : '';
		$mobile = isset($_GET['mobile']) ? $_GET['mobile'] : '';
			
		if (!empty($userid))$where .= " AND `userid` = '$userid'";
		if (!empty($nickname))$where .= " AND `nickname` = '$nickname'";
		if (!empty($mobile))$where .= " AND `mobile` = '$mobile'";					
		$order = $_GET['order']?$_GET['order']:'userid';	


		$page=$_GET['page'];		
		$data=$this->db->listinfo($where,"$order DESC",$page,20);	
		$pages=$this->db->pages;			
	include $this->admin_tpl('buyer_list');
	}
	
	
	 
	public function delete() {
		$_GET['userid'] = intval($_GET['userid']);
		$this->db->delete('userid='.$_GET['userid']);
		showmessage(L('operation_success'));		
		
	}
	
	
	
	public function edit() {
		if(isset($_POST['dosubmit'])) {
			
			$userid = intval($_POST['userid']);
			$data=$_POST['info'];
			$this->db->update($data,'userid='.$userid);
			
			showmessage(L('operation_success'));
			
			
		} else {			
			$userid = intval($_GET['userid']);			
			$r=$this->db->get_one('userid='.$userid);			
			if($r) extract($r);			
			include $this->admin_tpl('buyer_edit');
			
		}
	}
	

	public function export(){
		if(isset($_POST['dosubmit'])) {
			$limit_start =$_POST['limit_start'];
			$limit_end =$_POST['limit_end'];
			header( "Cache-Control: public" );
			header( "Pragma: public" );
			header("Content-type:application/vnd.ms-excel");
			header("Content-Disposition:attachment;filename=member".date('Y-m-d',SYS_TIME).".csv");
			header('Content-Type:APPLICATION/OCTET-STREAM');
   	 		$data=$this->db->select($where = "userid >=$limit_start  AND userid <= $limit_end", );	
   	 		echo "userid,fromuserid,username,nickname,regdate,lastdate,login_num,point,vip,sign_num,last_continue,last_sign,wangwang,mobile,address,email\r\n";
   	 		foreach ($data as $key => $value) {

   	 			//$sign_num=$this->point_db->count("userid=".$value['userid']." AND typeid=1");
   	 			//$last_sign=$this->point_db->get_one("userid=".$value['userid'], $data = '*',$order =' date desc');
   	 		
   	 			echo $value['userid'].','.$value['fromuserid'].','.$value['username'].','.$value['nickname'].','.date('Y-m-d H:i',$value['regdate']).','.date('Y-m-d H:i',$value['lastdate']).','.$value['loginnum'].','.$value['point'].','.$value['vip'].','.$sign_num.','.$last_sign['continue'].','.date('Y-m-d H:i',$last_sign['date']).','.$value['wangwang'].','.$value['mobile'].','.$value['address'].','.$value['email']."\r\n";
   	 	}
   	 }else{
   	 		include $this->admin_tpl('buyer_export');
   	 	}


	}

	public function exports(){
		//header( "Cache-Control: public" );
		//header( "Pragma: public" );
		//header("Content-type:application/vnd.ms-excel");
		//header("Content-Disposition:attachment;filename=member".date('Y-m-d',SYS_TIME).".csv");
		//header('Content-Type:APPLICATION/OCTET-STREAM');
   	 	$data=$this->db->select();	
   	 	$str="userid,fromuserid,username,nickname,regdate,lastdate,login_num,point,vip,sign_num,last_continue,last_sign,wangwang,mobile,address\r\n";
   	 	foreach ($data as $key => $value) {

   	 		//$sign_num=$this->point_db->count("userid=".$value['userid']." AND typeid=1");
   	 		//$last_sign=$this->point_db->get_one("userid=".$value['userid'], $data = '*',$order =' date desc');
   	 		
   	 		$str.= $value['userid'].','.$value['fromuserid'].','.$value['username'].','.$value['nickname'].','.date('Y-m-d H:i',$value['regdate']).','.date('Y-m-d H:i',$value['lastdate']).','.$value['loginnum'].','.$value['point'].','.$value['vip'].','.$sign_num.','.$last_sign['continue'].','.date('Y-m-d H:i',$last_sign['date']).','.$value['wangwang'].','.$value['mobile'].','.$value['address']."\r\n";
   	 	}

   	 	file_put_contents("member".date('Y-m-d',SYS_TIME).".csv", $str);
		$file_name="member".date('Y-m-d',SYS_TIME).".csv";
   	 	//$file_sub_path=$_SERVER['DOCUMENT_ROOT']."marcofly/phpstudy/down/down/"; 
		$file_path=$file_sub_path.$file_name; 
		//首先要判断给定的文件存在与否 
		if(!file_exists($file_path)){ 
		echo "没有该文件文件"; 
		return ; 
		} 
		$fp=fopen($file_path,"r"); 
		$file_size=filesize($file_path); 
		//下载文件需要用到的头 
		Header("Content-type: application/octet-stream"); 
		Header("Accept-Ranges: bytes"); 
		Header("Accept-Length:".$file_size); 
		Header("Content-Disposition: attachment; filename=".$file_name); 
		$buffer=1024; 
		$file_count=0; 
		//向浏览器返回数据 
		while(!feof($fp) && $file_count<$file_size){ 
		$file_con=fread($fp,$buffer); 
		$file_count+=$buffer; 
		echo $file_con; 
		} 
		fclose($fp); 


	}
	public function show () {
		$page=$_GET['page'];	

		$userid = intval($_GET['userid']);			
		$where =" userid=$userid ";
		$userinfo=$this->db->get_one("userid = $userid");
				
		$data=$this->point_db ->listinfo($where,"id DESC",$page,50);
		
		$data=$data->fetchAll();	
		$pages=$this->point_db->pages;				
		include $this->admin_tpl('show_point');		
		}
	

	public function edit_point() {
		if(isset($_POST['dosubmit'])) {
			$id = intval($_POST['id']);
			$userid = intval($_POST['userid']);
			$data=$_POST['info'];

			$this->point_db->update($data,'id='.$id);
		
			$this->point =jae_base::load_app_class('point','point');
			$this->point->update_point($userid);//更新积分明细
		
			showmessage(L('operation_success'),"/admin.php?m=member&c=buyer&a=show&userid=$userid&menuid=8");	
		}else {
			$id = intval($_GET['id']);
			$userid = intval($_GET['userid']);
			$r=$this->point_db->get_one('id='.$id);
			if($r) extract($r);			
			include $this->admin_tpl('edit_point');		

		}	
		
	}	



	public function delete_point() {
		$_GET['id'] = intval($_GET['id']);
		$_GET['userid'] = intval($_GET['userid']);
		$this->point_db->delete('id='.$_GET['id']);
		
		$this->point =jae_base::load_app_class('point','point');
		$this->point->update_point($_GET['userid']);//更新积分明细
		
		showmessage(L('operation_success'));		
		
	}
	
	public function check_invite () {
		
		$where='1 ';	
		$page=$_GET['page'];
		$where .= " AND `fromuserid` != 0  AND `islock`= 0  ";
		$order = $_GET['order']?$_GET['order']:'userid';	
		$data=$this->db->listinfo($where,"$order DESC",$page,50);	
		$pages=$this->db->pages;			
		include $this->admin_tpl('check_invite');
		 }
		 
		 
	public function pass_point () {
		$setting=getcache_sql('point_invite', 'commons');
		$fromuserid=intval($_GET['fromuserid']);
		$userid=intval($_GET['userid']);
		$this->db->update(array('islock'=>1),"userid=$userid");
		
		if($setting['enable']==1 && $fromuserid!=0) {
			$array_point=array('userid'=>$fromuserid,'point'=>intval($setting['point']),'title'=>$setting['title']."ID".$userid,'date'=>SYS_TIME,'picture'=>$setting['thumb'],'description'=>$setting['description'],'status'=>'2','module'=>'invite');
			$this->point =jae_base::load_app_class('point','point');
			$this->point->change_point($array_point);//更新积分明细				
				 }
				 
				 
				 
		
		showmessage(L('operation_success'));
		}
		
	public function pass_list () {
		$setting=getcache_sql('point_invite', 'commons');
		
        if ($_POST['dosubmit']==1) {
            foreach ($_POST['listorders'] as $userid => $fromuserid) {
				
				$this->db->update(array('islock'=>1),"userid=$userid");
				$array_point=array('userid'=>$fromuserid,'point'=>intval($setting['point']),'title'=>$setting['title']."ID".$userid,'date'=>SYS_TIME,'picture'=>$setting['thumb'],'description'=>$setting['description'],'status'=>'2','module'=>'invite');
				$this->point =jae_base::load_app_class('point','point');
				$this->point->change_point($array_point);//更新积分明细		
			
               
            }
			
			        
            showmessage(L('operation_success'));
           
        } elseif ($_POST['dosubmit']==0) {
			 foreach ($_POST['listorders'] as $userid => $fromuserid) {				
				$this->db->update(array('islock'=>1),"userid=$userid");		
               
            }
			showmessage(L('operation_success'));	
				}
		
		
		}
	

	
}