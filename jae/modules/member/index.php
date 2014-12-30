<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_top('topclient');
jae_base::load_top('ItemGetRequest');

jae_base::load_app_class('foreground');

class index extends foreground{
	public function __construct(){
		
		//$this->menu_db = jae_base::load_model('menu_model');
		//$this->db =jae_base::load_sys_class('mysql');
		$this->point_db=jae_base::load_model('point_model');
		$this->member_db=jae_base::load_model('member_model');
		$this->goods_db=jae_base::load_model('goods_model');
		$this->point_set_db=jae_base::load_model('point_set_model');
		
		/*$this->table='jae_member';
		$this->point='jae_point';
		$this->goods='jae_goods';
		$this->point_set='jae_point_set';*/
		
		
		$this->point =jae_base::load_app_class('point','point');
		parent::__construct();
		
		
	}

	public function init ()
	{	$memberinfo = $this->memberinfo;	
		include template('point','point');
	}
	
	public function login (){	
		include template('member','login');
	}
	public function point_task (){	
		$memberinfo = $this->memberinfo;	
		include template('member','point_task');
	}	
	public function setinfo (){
		$memberinfo = $this->memberinfo;	
	
		if(isset($_POST['dopost'])){
			$data=$_POST['info'];
			
			if(empty($data['wangwang'])) {showmessage(L('请填写正确的旺旺'),'/index.php?m=member&c=index&a=setinfo');}
			if(empty($data['nickname'])) {showmessage(L('请填写正确的姓名'),'/index.php?m=member&c=index&a=setinfo');}
			if(empty($data['mobile'])) {showmessage(L('请填写正确的手机'),'/index.php?m=member&c=index&a=setinfo');}
			if(empty($data['address'])) {showmessage(L('请填写正确的地址'),'/index.php?m=member&c=index&a=setinfo');}
			/*if(empty($data['zipcode'])) {showmessage(L('请填写正确的邮编'),'/index.php?m=member&c=index&a=setinfo');}
			if(empty($data['email'])) {showmessage(L('请填写正确的邮箱'),'/index.php?m=member&c=index&a=setinfo');}
			
			$wangwang=$this->member_db->get_one("wangwang = $data[wangwang]") ;
			if ($wangwang['userid'])  {showmessage(L('该旺旺已存在'),'/index.php?m=member&c=index&a=setinfo');}			
			
			$mobile=$this->member_db->get_one("mobile = $data[mobile]") ;
			if ($wangwang['userid'])  {showmessage(L('该旺旺已存在'),'/index.php?m=member&c=index&a=setinfo');}
			
			$email=$this->member_db->get_one("email = $data[email]") ;
			if ($wangwang['email'])  {showmessage(L('该旺旺已存在'),'/index.php?m=member&c=index&a=setinfo');}
		
			*/
		
			$data['shop_profile']=htmlspecialchars($_POST['info']);
		
		
		
		
			$this->member_db->update($data,'username="'.$memberinfo['username'].'"');
			
			
		
			$setting=getcache_sql('point_setinfo', 'commons');			
			if($memberinfo['vip']==0 && $setting['enable']==1) {			
				
				$array_point=array('userid'=>$memberinfo['userid'],'point'=>$setting['point'],'title'=>$setting['title'],'date'=>SYS_TIME,'picture'=>$setting['thumb'],'description'=>$setting['description'],'status'=>'2','module'=>'setinfo');
				$this->point->change_point($array_point);//
				$this->member_db->update(array('vip'=>1),'username="'.$memberinfo['username'].'"');
				
				 }
			
		
		
			$result=$this->member_db->get_one ('username="'.$memberinfo['username'].'"');
			@extract($result);
			showmessage(L('资料更新成功'),'/index.php');		
			include template('member','setinfo');
		
		}
		else{
			$result=$this->member_db->get_one ('username="'.$memberinfo['username'].'"' );
			@extract($result);
			include template('member','setinfo');
		}   
		
	}
	
	
	
	
	public function seller_apply (){
		$memberinfo = $this->memberinfo;
		
		
		if(isset($_POST['dopost'])){
			
			$data=$_POST['info'];
			$data['groupid']=2;//groupid=2为卖家
			$data['islock']=0; 
			
		
			$this->member_db->update($data,'userid="'.$memberinfo['userid'].'"');
		
		
			$result=$this->member_db->get_one ('userid="'.$memberinfo['userid'].'"');
			@extract($result);
			$msg="<font color=#FF0000>申请已经提交</font>";	
		
			include template('member','setinfo');
		
		}
		else{
			$result=$this->member_db->get_one ('userid="'.$memberinfo['userid'].'"' );
			@extract($result);
			include template('member','seller_apply');
		}
		
		
	
	}
	
	public function goods_apply (){	
	
	
		$memberinfo = $this->memberinfo;		
		if ($memberinfo['groupid']==2 && $memberinfo['islock']==1 ){
				$msg="您还不是馆内卖家";
		
		}
		
		
		//获取站点配置信息
		$siteinfo=siteinfo(SITEID);          
		$appkey =$siteinfo['appkey']; 
		$secret =$siteinfo['secretkey'];
		jae_base::load_top('topclient');
		jae_base::load_top('ItemGetRequest');
		//初始化变量
		$pindaoArr = rGetPindaoArr();
		$categoryArr = rGetCategoryArr();
		$dopost = isset($_POST['dopost']) ? $_POST['dopost'] : '';
		$createMessage='';
		$begin_time = isset($_POST['begin_time']) ? strtotime($_POST['begin_time']) : time();
		$end_time = isset($_POST['end_time']) ? strtotime($_POST['end_time']) : time()+604800;
		$detail_url = isset($_POST['detail_url']) ? $_POST['detail_url'] : '';
		$freight_payer = isset($_POST['freight_payer']) ? $_POST['freight_payer'] : '';
		$nick = isset($_POST['nick']) ? $_POST['nick'] : '';
		$price = isset($_POST['price']) ? $_POST['price'] : 0;
		$coupon_price = isset($_POST['coupon_price']) ? $_POST['coupon_price'] : 0;
		$num = isset($_POST['num']) ? $_POST['num'] : 0;
		$pic_url = isset($_POST['pic_url']) ? $_POST['pic_url'] : '';
		$category_id = isset($_POST['category_id']) ? $_POST['category_id'] : 0;
		$title = isset($_POST['title']) ? $_POST['title'] : '';
		$desctiption = isset($_POST['desctiption']) ? $_POST['desctiption'] : '';
		$pindao_id =isset($_POST['pindao_id']) ? $_POST['pindao_id'] : 0;
		$num_iid = isset($_POST['num_iid']) ? trim($_POST['num_iid']) : '';
		$shop_url=$memberinfo['shop_url']?$memberinfo['shop_url']:'';

		if ($dopost == 'caiji')
		{
		    if ($num_iid != "" && rRuleNum($num_iid))
		    {
		        $c = new TopClient;
		        $c->appkey = $appkey;     //top appkey
		        $c->secretKey = $secret;  //top secretkey
		         //实例化具体API对应的Request类
		        $req = new ItemGetRequest();       //top 封装的php文件
		        $req->setFields("num_iid,title,pic_url,detail_url,price,num,nick,freight_payer");
		        $req->setNumIid($num_iid);
		        $resp = $c->execute($req);
		       
		        if ($resp->item)
		        {
		            $detail_url = $resp->item->detail_url;   //商品链接
		            $num_iid = $resp->item->num_iid;         //商品ID
		            $title = $resp->item->title;           //商品标题
		            $nick = $resp->item->nick;            //卖家昵称
		            $pic_url = $resp->item->pic_url;      //商品主图
		            $num = $resp->item->num;            //商品数量
		            $price = $resp->item->price;       //商品原价格
		            $freight_payer = $resp->item->freight_payer;      //商品原价格
		        }else
		             $createMessage = '不存在这个商品';
		        
		    }
		    else
		    {
		         $createMessage = "商品ID【不能为空】并且【必须是数字】。";
		    }
		}

		if ($dopost == 'create')
		{
		   $pdo=new PDO();
		    if($end_time-$begin_time>604800){
		         $createMessage = '失败！促销时间不能超过七天，请填写正确的开始时间和结束时间';
		    }
		    elseif ($num_iid == "" || $detail_url == "" || $title == "" || $pic_url == "" || $price == "" || $coupon_price == "" || intval($coupon_price)==0)
		    {
		         $createMessage = "失败！请把商品信息填写完整，星号为必填项！！";
		    }
		    else
		    {
		        $sql1 = 'SELECT * FROM `jae_goods` WHERE `num_iid`="' . $num_iid . '" OR `title`="' . $title . '"';
		        $rs1 = $pdo->query($sql1);
		        $row1 = $rs1->fetchAll(); //è?μ??ùóD????
		        $sql2 = 'SELECT * FROM `jae_goods` WHERE `num_iid`="' . $num_iid . '" OR `title`="' . $title . '"';
		        $rs2 = $pdo->query($sql2);
		        $row2 = $rs2->fetchAll(); //è?μ??ùóD????
		        if (count($row1)+count($row2) == 0)
		        {
		            if (rRuleUrl($detail_url) && rRuleNum($num_iid) && rRulePrice($price) && rRulePrice($coupon_price))
		            {
		                $datetime = date("Y-m-d H:i:s");
		                $sql = 'INSERT INTO `jae_goods` SET `num_iid`="' . $num_iid . '", `title`="' . $title .
		                        '", `pic_url`="' . $pic_url . '", `detail_url`="' . $detail_url . '", `shop_url`="' . $shop_url . '", `price`="' . $price .
		                        '", `coupon_price`="' . $coupon_price . '", `num`="' . $num . '", `userid`="' . $memberinfo[userid] . '", `create_time`="' . time() .
		                        '", `description`="' . $description . '", `category_id`="' . $category_id .
		                        '", `end_time`="' . $end_time . '", `freight_payer`="' . $freight_payer .
		                        '", `nick`="' . $nick . '", `begin_time`="' . $begin_time . '", `pindao_id`="' . $pindao_id . '"';
		                
		                $count = $pdo->exec($sql);
		                
		                if ($count > 0)
		                {
		                     $createMessage = "新增成功";
		                }
		                else
		                {
		                    echo $sql;
		                     $createMessage = "添加失败";
		                }
		            }
		            else
		            {
		             
		                if (!rRuleUrl($detail_url))
		                    $createMessage.='商品链接url填写不规范，带http://模式<br>';
		                elseif (!rRuleNum($num_iid))
		                    $createMessage.='商品id填写不规范，数字模式<br>';
		                elseif (!rRulePrice($price))
		                    $createMessage.='商品价格填写不规范，小数模式：10.00<br>';
		                elseif (!rRulePrice($coupon_price))
		                    $createMessage.='促销价格填写不规范，小数模式：10.00<br>';
		            }
		        }
		        else
		        {
		               $createMessage = "商品已经存在【同一id或者同一标题】！！";
		        }
		    }
		}


		include template('member','goods_apply');
	
	}
	
	public function goods_manage (){
		$memberinfo = $this->memberinfo;
		$manage=$_GET['manage']?$_GET['manage']:'refuse';
		
		if ($_GET['manage']=='pass')	
			{$data=$this->goods_db->listinfo("userid='$memberinfo[userid]' AND  status=1 ","id DESC",$page,10);}
			elseif ($_GET['manage']=='check')	
			{  $data=$this->goods_db->listinfo("userid='$memberinfo[userid]' AND  status=0 ","id DESC",$page,10);}
			else if ($_GET['manage']=='refuse')	
			{$data=$this->goods_db->listinfo("userid='$memberinfo[userid]' AND  status=-1  ","id DESC",$page,10);}	
		
		include template('member','goods_manage');
		
		}
	public function apply_task (){
		$memberinfo = $this->memberinfo;
		include template('member','apply_task');
		
		}
	public function delete (){
		$memberinfo = $this->memberinfo;	
		$_GET['id'] = intval($_GET['id']);
		$this->goods_db->delete('id='.$_GET['id'].' AND  userid ='.$memberinfo['userid'] );
		showmessage(L('operation_success'));		
		header('location:/index.php?m=member&c=index&a=goods_manage');	
	}
	public function edit (){
		$memberinfo = $this->memberinfo;	
		$pindaoArr = rGetPindaoArr();
		$categoryArr = rGetCategoryArr();
		
		if(isset($_POST['dosubmit'])) {			
			$id = intval($_GET['id']);
			$data=$_POST['info'];
			$data['status']=0;
			$this->goods_db->update($data,'id='.$id.' AND  userid ='.$memberinfo['userid'] );
			$msg="修改成功，请等待审核";
			
			$r=$this->goods_db->get_one('id='.$id.' AND  userid ='.$memberinfo['userid'] );			
			if($r) extract($r);			
			include template('member','goods_edit');
			
			//showmessage(L('operation_success'));
			//include template('member','login');
			
		} else {			
			$id = intval($_GET['id']);			
			$r=$this->goods_db->get_one('id='.$id.' AND  userid ='.$memberinfo['userid'] );			
			if($r) extract($r);			
			include template('member','goods_edit');
			
		}
		}
	
}

	