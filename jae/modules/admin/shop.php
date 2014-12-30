<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class shop extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='jae_shop';
		$this->menuid=23;
	}
	
	function init () {
		$page=$_GET['page'];		
		$data=$this->db->listinfo("*",$this->table,"","id DESC",$page,10);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('shop_list');
	}
	function add() {
		
		
		        //获取站点配置信息
		$siteinfo=siteinfo(SITEID);          
		$appkey =$siteinfo['appkey']; 
		$secret =$siteinfo['secretkey'];
        jae_base::load_top('topclient');
        jae_base::load_top('ShopGetRequest');
        
		
//初始化条件
$categoryArr = rGetCategoryArr();
$promoteArr = rGetPromotePositionArr('shop');
$dopost = isset($_POST['dopost'])?$_POST['dopost']:'';
$nick = isset($_POST['nick'])?$_POST['nick']:'';
$category_id= isset($_POST['category_id'])?$_POST['category_id']:0;
$detail_url= isset($_POST['detail_url'])?$_POST['detail_url']:'';
$pic_url= isset($_POST['pic_url'])?'http://logo.taobao.com/shop-logo'.$_POST['pic_url']:'';
$shop_title= isset($_POST['shop_title'])?$_POST['shop_title']:'';
$description= isset($_POST['description'])?$_POST['description']:'';
$promote_id= isset($_POST['promote_id'])?$_POST['promote_id']:0;
$sid= isset($_POST['sid'])?$_POST['sid']:0;
$create_time= time();
$createMessage='';
if ($dopost == 'caiji')
{
    if ($nick != "")
    {
        $c = new TopClient;
        $c->appkey = $appkey;     //top appkey
        $c->secretKey = $secret;  //top secretkey
        //实例化具体API对应的Request类
        $req = new ShopGetRequest();      //top 封装的php文件
        $req->setFields("sid,cid,title,nick,desc,pic_path,created,modified");
        $req->setNick($nick);
        $resp = $c->execute($req);
		
        if ($resp->shop)
        {
            $sid = $resp->shop->sid;
            $shop_title = $resp->shop->title;
            $detail_url = 'http://shop'.$resp->shop->sid.'.taobao.com';
            $description = $resp->shop->desc;
            $pic_url = $resp->shop->pic_path;
        }else
            $createMessage= '不存在这个店铺';
    }
    else
    {
        $createMessage= "商家昵称不能为空。";
    }
}

if ($dopost == 'create')
{
    
    if ($nick == "" || $detail_url == "" || $shop_title == "" || $pic_url == "")
    {
        $createMessage= "请把商品信息填写完整！！";
    }
    else
    {
        $sql = 'select * from jae_shop where nick="'.$nick.'"';
		$pdo =new PDO();
        $rs = $pdo->query($sql);
        $row = $rs->fetchAll(); //取得所有记录
        if (count($row) == 0)
        {
			
			
			
           // $detail_url.='?nick_uz='.$nick;
            $datetime = date("Y-m-d H:i:s");
            $sql = "INSERT INTO `jae_shop` (`nick`,`category_id`,`detail_url`,`pic_url`,`shop_title`,`description`,`sid`,`create_time`,`promote_id`)
                                     VALUES ('$nick','$category_id','$detail_url','$pic_url','$shop_title','$description','$sid',' $create_time',' $promote_id')";
            $count = $pdo->exec($sql);
            print_r($count);
            if ($count > 0)
            {
                $createMessage= "新增成功";
            }
            else
            {
                echo $sql;
                $createMessage= "添加失败";
            }
        }
        else
        {
            $createMessage= "店铺重复！！";
        }
    }
}


		
		
		
		include $this->admin_tpl('shop_add');
	}
	function delete() {
		$_GET['id'] = intval($_GET['id']);
		$this->db->delete($this->table,'id='.$_GET['id']);
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		if(isset($_POST['dosubmit'])) {
			
			$id = intval($_POST['id']);
			$data=$_POST['info'];
			$this->db->update($data,$this->table,'id='.$id);
			
			showmessage(L('operation_success'));
			include $this->admin_tpl('shop_edit');
			
		} else {			
			$id = intval($_GET['id']);			
			$r=$this->db->get_one('*',$this->table,'id='.$id);			
			if($r) extract($r);			
			include $this->admin_tpl('shop_edit');
			
		}
	}
	
	/**
	 * 排序
	 */
	function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $id => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
				$this->db->update(array('listorder'=>$listorder),$this->table,'id='.$id);				
				$status = isset($_POST["status"][$id]) ? $_POST["status"][$id] : '0';								
				$this->db->update(array('status'=>$status),$this->table,'id='.$id);
			}
		
			
				
				
			
			
			showmessage(L('operation_success'));
		} else {
			showmessage(L('operation_failure'));
		}
	}
	

}
?>