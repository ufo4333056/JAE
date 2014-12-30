<?php
defined('IN_JAE') or exit('No permission resources.');defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin', 'admin', 0);

class goods extends admin
{
    function __construct()
    {
        parent::__construct();
        $this->db     = jae_base::load_sys_class('mysql');
        $this->table  = 'jae_goods';
        $this->menuid = 19;
        
    }
    function init()
    {
		$where= "status=0";
		$searchCategoryId=-1;
		$searchPindaoId=-1;
		$searchPromoteId=-1;
		$dopost = isset($_POST["dopost"]) ? $_POST["dopost"] : '';
		$page = $_GET['page'];
        $data = $this->db->listinfo("*", $this->table, $where, "id DESC", $page, 10);
		$categoryArr = rGetCategoryArr();
		$promotePositionArr = rGetPromotePositionArr('goods');
		$pindaoArr = rGetPindaoArr();        
        $pages = $this->db->pages;
        include $this->admin_tpl('goods_list','apply');
    }
    function search()
    {
		$where= " status = 0 ";
		$searchCategoryId=-1;
		$searchPindaoId=-1;
		$searchPromoteId=-1;
		$dopost = isset($_GET["dopost"]) ? $_GET["dopost"] : '';
	
		if ($dopost=="search")
		{
			$searchWord=$_GET['searchWord'];
			$searchCategoryId=$_GET['searchCategoryId'];
			$searchPindaoId=$_GET['searchPindaoId'][0];
			$searchPromoteId=$_GET['searchPromoteId'][0];
	
			if(!empty($searchWord))$where .= " AND `title` LIKE '%$searchWord%' OR `num_iid` = '$searchWord' OR `nick` = '$searchWord'";
			if($searchCategoryId>=0)$where .=" AND category_id =".$searchCategoryId;
			if($searchPindaoId>=0)$where .=" AND pindao_id =".$searchPindaoId;
			if($searchPromoteId>=0)$where .=" AND promote_id =".$searchPromoteId;	
		}
		$data = $this->db->listinfo("*", $this->table, $where, "id DESC", $page, 110);
		$categoryArr = rGetCategoryArr();
		$promotePositionArr = rGetPromotePositionArr('goods');
		$pindaoArr = rGetPindaoArr();        
        $pages = $this->db->pages;
        include $this->admin_tpl('goods_list','apply');
    }
    
    function add()
    {
        //获取站点配置信息
		$siteinfo=siteinfo(SITEID);          
		$appkey =$siteinfo['appkey']; 
		$secret =$siteinfo['secretkey'];
        jae_base::load_top('topclient');
        jae_base::load_top('ItemGetRequest');
        
        
        $promotePositionArr = rGetPromotePositionArr('goods');
        $categoryArr        = rGetCategoryArr();
        $pindaoArr          = rGetPindaoArr();
        $dopost             = isset($_POST['dopost']) ? $_POST['dopost'] : '';
        $numIid             = isset($_POST['numIid']) ? trim($_POST['numIid']) : ''; //提交过来的num_iid
        $createMessage      = '';
        
        if ($dopost == 'caiji') {
            if ($numIid != "" && rRuleNum($numIid)) {
             	$c            = new TopClient;
                $c->appkey    = $appkey;
                $c->secretKey = $secret;
                $req          = new ItemGetRequest;
                $req->setFields("detail_url,num_iid,title,nick,type,cid,seller_cids,props,input_pids,input_str,desc,pic_url,num,valid_thru,list_time,delist_time,stuff_status,location,price,post_fee,express_fee,ems_fee,has_discount,freight_payer,has_invoice,has_warranty,has_showcase,modified,increment,approve_status,postage_id,product_id,auction_point,property_alias,item_img,prop_img,sku,video,outer_id,is_virtual");
                $req->setNumIid($numIid);
                $resp = $c->execute($req, $sessionKey);
                
                
                if ($resp->item) {
                    $detail_url    = $resp->item->detail_url; //商品链接
                    $num_iid       = $resp->item->num_iid; //商品ID
                    $title         = $resp->item->title; //商品标题
                    $nick          = $resp->item->nick; //卖家昵称
                    $pic_url       = $resp->item->pic_url; //商品主图
                    $num           = $resp->item->num; //商品数量
                    $price         = $resp->item->price; //商品原价格
                    $freight_payer = $resp->item->freight_payer; //商品原价格
                } else
                    $message = '不存在这个商品';
                //print_r($resp);
            } else {
                $message = "商品ID【不能为空】并且【必须是数字】。";
            }
        }
        
        if ($dopost == 'create') {
            $categoryId    = intval($_POST["categoryId"]);
            $num_iid       = $_POST["num_iid"];
            $num           = intval($_POST["num"]);
            $detail_url    = $_POST["detail_url"];
            $title         = $_POST["title"];
            $pic_url       = $_POST["pic_url"];
            $create_time   = time();
            $begin_time    = strtotime($_POST["begin_time"]);
            $end_time      = strtotime($_POST["end_time"]);
            $price         = $_POST["price"];
            $coupon_price  = $_POST["coupon_price"];
            $freight_payer = $_POST['freight_payer'];
            $promote_id    = intval($_POST['promote_id']);
            $pindao_id     = intval($_POST['pindao_id']);
            $description   = $_POST['description']; //过滤内容
            $nick          = $_POST['nick'];
            
            if ($num_iid == "" || $detail_url == "" || $title == "" || $pic_url == "" || $price == "" || $coupon_price == "") {
                $message = "请把商品信息填写完整,星号为必填项！！";
            } else {
                
                $sql = 'SELECT * FROM `jae_goods` WHERE `num_iid`="' . $num_iid . '"';
				$pdo=new PDO();
                $rs  = $pdo->query($sql);
                $row = $rs->fetchAll(); //取得所有记录
                if (count($row) == 0) {
                    if (rRuleUrl($detail_url) && rRuleNum($num_iid) && rRulePrice($price) && rRulePrice($coupon_price)) {
                        $datetime = date("Y-m-d H:i:s");
                        $sql      = 'INSERT INTO `jae_goods` SET `num_iid`="' . $num_iid . '", `title`="' . $title . '", `pic_url`="' . $pic_url . '", `detail_url`="' . $detail_url . '", `price`="' . $price . '", `coupon_price`="' . $coupon_price . '", `num`="' . $num . '", `create_time`="' . $create_time . '", `description`="' . $description . '", `category_id`="' . $categoryId . '", `end_time`="' . $end_time . '", `promote_id`="' . $promote_id . '", `freight_payer`="' . $freight_payer . '", `nick`="' . $nick . '", `begin_time`="' . $begin_time . '", `pindao_id`="' . $pindao_id . '"';
                        
                        $count = $pdo->exec($sql);
                        
                        if ($count > 0) {
                            $message = "新增成功";
                        } else {
                            echo $sql;
                            $message = "添加失败";
                        }
                    } else {
                        if (!rRuleUrl($detail_url))
                            $message .= '商品链接url填写不规范，带http://模式<br>';
                        elseif (!rRuleNum($num_iid))
                            $message .= '商品id填写不规范，数字模式<br>';
                        elseif (!rRulePrice($price))
                            $message .= '商品价格填写不规范，小数模式：10.00<br>';
                        elseif (!rRulePrice($coupon_price))
                            $message .= '促销价格填写不规范，小数模式：10.00<br>';
                    }
                } else {
                    $message = "【商品id】或者【标题】重复！！";
                }
            }
        }
        
        include $this->admin_tpl('goods_add','apply');
    }
  
    function delete()
    {
		if(is_array($_POST['ids'])){
				foreach($_POST['ids'] as $id) {
					print_r($linkid_arr);
 					//批量删除友情链接
					
					 $this->db->delete($this->table, 'id=' . $id);
					
				}
				showmessage(L('operation_success'),'?m=link&c=link');
			}
        $_GET['id'] = intval($_GET['id']);
        $this->db->delete($this->table, 'id=' . $_GET['id']);
        showmessage(L('operation_success'));
       
    }
    
    function edit()
    {
		$promotePositionArr = rGetPromotePositionArr('goods');
        $categoryArr        = rGetCategoryArr();
        $pindaoArr          = rGetPindaoArr();
        if (isset($_POST['dosubmit'])) {
            
            $id   = intval($_POST['id']);
			$_POST['info']["begin_time"]    = strtotime($_POST['info']["begin_time"]);
       		$_POST['info']["end_time"]      = strtotime($_POST['info']["end_time"]);
		  	$_POST['info']["status"] =-1;    
            $data = $_POST['info'];
            $this->db->update($data, $this->table, 'id=' . $id);
           
            showmessage(L('operation_success'));
            include $this->admin_tpl('goods_edit','apply');
            
        } else {
            $id = intval($_GET['id']);
            $r  = $this->db->get_one('*', $this->table, 'id=' . $id);
            extract($r);
            include $this->admin_tpl('goods_edit','apply');
            
        }
    }
	
	/*审核通过*/
	function pass(){
		$id = $_GET["id"];
		$data=array('status'=>1);
		$this->db->update($data, $this->table, 'id=' . $id);
		 showmessage(L('operation_success'));
	}
    
    /**
     * 排序
     */
    function listorder()
    {
        if (isset($_POST['dosubmit'])) {
            foreach ($_POST['listorders'] as $id => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
                $this->db->update(array(
                    'listorder' => $listorder
                ), $this->table, 'id=' . $id);
                $status = isset($_POST["status"][$id]) ? $_POST["status"][$id] : '0';
                $this->db->update(array(
                    'status' => $status
                ), $this->table, 'id=' . $id);
            }
            
            showmessage(L('operation_success'));
          
        } else {
            showmessage(L('operation_failure'));
            
        }
    }
    
    
}
?>