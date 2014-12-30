<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_app_class('foreground');
class index {
	private $db;
	function __construct() {
		$this->db = new PDO();
	
	}
	
	//活动报名首页
	public function init() { 
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

if ($dopost == 'caiji')
{
    if ($num_iid != "" && rRuleNum($num_iid))
    {
        $c = new TopClient;
        $c->appkey = $appkey;     //top appkey
        $c->secretKey = $secret;  //top secretkey
        //实例化具体API对应的Request类
        $req = new ItemGetRequest();      //top 封装的php文件
        $req->setFields("num_iid,title,pic_url,detail_url,price,num,nick,freight_payer");
        $req->setNumIid($num_iid);
        $resp = $c->execute($req);
       
        if ($resp->item)
        {
            $detail_url = $resp->item->detail_url;   //商品链接
            $num_iid = $resp->item->num_iid;        //商品ID
            $title = $resp->item->title;           //商品标题
            $nick = $resp->item->nick;            //卖家昵称
            $pic_url = $resp->item->pic_url;      //商品主图
            $num = $resp->item->num;            //商品数量
            $price = $resp->item->price;       //商品原价格
            $freight_payer = $resp->item->freight_payer;       //商品原价格
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
		$pdo=new PDO();
        $rs1 = $pdo->query($sql1);
        $row1 = $rs1->fetchAll(); //取得所有记录
        $sql2 = 'SELECT * FROM `jae_goods` WHERE `num_iid`="' . $num_iid . '" OR `title`="' . $title . '"';
        $rs2 = $pdo->query($sql2);
        $row2 = $rs2->fetchAll(); //取得所有记录
        if (count($row1)+count($row2) == 0)
        {
            if (rRuleUrl($detail_url) && rRuleNum($num_iid) && rRulePrice($price) && rRulePrice($coupon_price))
            {
                $datetime = date("Y-m-d H:i:s");
                $sql = 'INSERT INTO `jae_goods` SET `num_iid`="' . $num_iid . '", `title`="' . $title .
                        '", `pic_url`="' . $pic_url . '", `detail_url`="' . $detail_url . '", `price`="' . $price .
                        '", `coupon_price`="' . $coupon_price . '", `num`="' . $num . '", `create_time`="' . time() .
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


		include template('apply','index');
	}
}
?>