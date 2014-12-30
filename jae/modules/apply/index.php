<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_app_class('foreground');
class index {
	private $db;
	function __construct() {
		$this->db = new PDO();
	
	}
	
	//�������ҳ
	public function init() { 
	//��ȡվ��������Ϣ
		$siteinfo=siteinfo(SITEID);          
		$appkey =$siteinfo['appkey']; 
		$secret =$siteinfo['secretkey'];
	
	jae_base::load_top('topclient');
	jae_base::load_top('ItemGetRequest');
	//��ʼ������
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
        //ʵ��������API��Ӧ��Request��
        $req = new ItemGetRequest();      //top ��װ��php�ļ�
        $req->setFields("num_iid,title,pic_url,detail_url,price,num,nick,freight_payer");
        $req->setNumIid($num_iid);
        $resp = $c->execute($req);
       
        if ($resp->item)
        {
            $detail_url = $resp->item->detail_url;   //��Ʒ����
            $num_iid = $resp->item->num_iid;        //��ƷID
            $title = $resp->item->title;           //��Ʒ����
            $nick = $resp->item->nick;            //�����ǳ�
            $pic_url = $resp->item->pic_url;      //��Ʒ��ͼ
            $num = $resp->item->num;            //��Ʒ����
            $price = $resp->item->price;       //��Ʒԭ�۸�
            $freight_payer = $resp->item->freight_payer;       //��Ʒԭ�۸�
        }else
            $createMessage = '�����������Ʒ';
        
    }
    else
    {
        $createMessage = "��ƷID������Ϊ�ա����ҡ����������֡���";
    }
}

if ($dopost == 'create')
{
   
    if($end_time-$begin_time>604800){
        $createMessage = 'ʧ�ܣ�����ʱ�䲻�ܳ������죬����д��ȷ�Ŀ�ʼʱ��ͽ���ʱ��';
    }
    elseif ($num_iid == "" || $detail_url == "" || $title == "" || $pic_url == "" || $price == "" || $coupon_price == "" || intval($coupon_price)==0)
    {
        $createMessage = "ʧ�ܣ������Ʒ��Ϣ��д�������Ǻ�Ϊ�������";
    }
    else
    {
        $sql1 = 'SELECT * FROM `jae_goods` WHERE `num_iid`="' . $num_iid . '" OR `title`="' . $title . '"';
		$pdo=new PDO();
        $rs1 = $pdo->query($sql1);
        $row1 = $rs1->fetchAll(); //ȡ�����м�¼
        $sql2 = 'SELECT * FROM `jae_goods` WHERE `num_iid`="' . $num_iid . '" OR `title`="' . $title . '"';
        $rs2 = $pdo->query($sql2);
        $row2 = $rs2->fetchAll(); //ȡ�����м�¼
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
                    $createMessage = "�����ɹ�";
                }
                else
                {
                    echo $sql;
                    $createMessage = "���ʧ��";
                }
            }
            else
            {
                if (!rRuleUrl($detail_url))
                    $createMessage.='��Ʒ����url��д���淶����http://ģʽ<br>';
                elseif (!rRuleNum($num_iid))
                    $createMessage.='��Ʒid��д���淶������ģʽ<br>';
                elseif (!rRulePrice($price))
                    $createMessage.='��Ʒ�۸���д���淶��С��ģʽ��10.00<br>';
                elseif (!rRulePrice($coupon_price))
                    $createMessage.='�����۸���д���淶��С��ģʽ��10.00<br>';
            }
        }
        else
        {
            $createMessage = "��Ʒ�Ѿ����ڡ�ͬһid����ͬһ���⡿����";
        }
    }
}


		include template('apply','index');
	}
}
?>