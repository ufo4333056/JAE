<?php
/**
 * TOP API: taobao.taobaoke.items.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-14 16:43:18
 */
class TaobaokeItemsGetRequest
{
	/** 
	 * ��Ʒ���ڵ�
	 **/
	private $area;
	
	/** 
	 * �Ƿ��Զ�����
	 **/
	private $autoSend;
	
	/** 
	 * �Ƿ�֧�ֵּ�ȯ������Ϊtrue��ʾ����Ʒ֧�ֵּ�ȯ������Ϊfalse�����ñ�ʾ���ж��������
	 **/
	private $cashCoupon;
	
	/** 
	 * �Ƿ�֧�ֻ����������Ϊtrue��ʾ����Ʒ��֧�ֻ����������Ϊfalse�����ñ�ʾ���ж��������
	 **/
	private $cashOndelivery;
	
	/** 
	 * ��׼��Ʒ��̨��Ŀid����ID����ͨ��taobao.itemcats.get�ӿڻ�ȡ����
	 **/
	private $cid;
	
	/** 
	 * 30���ۼ��ƹ������뷵�������е�commission_num�ֶζ�Ӧ������.
	 **/
	private $endCommissionNum;
	
	/** 
	 * Ӷ��������ޣ��磺2345��ʾ23.45%��ע��start_commissionRate��end_commissionRateһ�����ò���Ч��
	 **/
	private $endCommissionRate;
	
	/** 
	 * ��ѡֵ��start_creditһ��.start_credit��ֵһ��ҪС�ڻ����end_credit��ֵ��ע��end_credit��start_creditһ��ʹ�ò���Ч
	 **/
	private $endCredit;
	
	/** 
	 * ��߼۸�
	 **/
	private $endPrice;
	
	/** 
	 * ��Ʒ�ܳɽ������뷵���ֶ�volume��Ӧ�����ޡ�
	 **/
	private $endTotalnum;
	
	/** 
	 * �践�ص��ֶ��б�.��ѡֵ:num_iid,title,nick,pic_url,price,click_url,commission,commission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume
;�ֶ�֮����","�ָ�
	 **/
	private $fields;
	
	/** 
	 * �Ƿ��ѯ��������
	 **/
	private $guarantee;
	
	/** 
	 * ��ʶһ��Ӧ���Ƿ��������߻����ֻ�Ӧ��,�����true���ʹ������������ܵ����.�������ֵ,��Ĭ����false.
	 **/
	private $isMobile;
	
	/** 
	 * ��Ʒ�����а����Ĺؼ���. ע��:��ѯʱkeyword,cid����ѡ������һ������
	 **/
	private $keyword;
	
	/** 
	 * �Ƿ��̳ǵ���Ʒ������Ϊtrue��ʾ����Ʒ�������Ա��̳ǵ���Ʒ������Ϊfalse�����ñ�ʾ���ж��������
	 **/
	private $mallItem;
	
	/** 
	 * �Ա��û��ǳƣ�ע��ָ�����Ա��Ļ�Ա��¼��.����ǳƴ���,��ô�ͻ����ղ���Ӷ��.ÿ���Ա��ǳƶ���Ӧ��һ��pid������������Ҫ����Ӷ����Ա��ǳƣ����ƹ����Ʒ�ɹ���Ӷ�������������Ա��ǳƵ��˻����������Ϣ���Ե��밢���������վ�鿴.
<font color="red">ע��nick��pid������Ҫ����һ��,���2��������,����pidΪ׼</font>
	 **/
	private $nick;
	
	/** 
	 * �Ƿ�30��ά�ޣ�����Ϊtrue��ʾ����Ʒ��֧��30��ά�ޣ�����Ϊfalse�����ñ�ʾ���ж��������
	 **/
	private $onemonthRepair;
	
	/** 
	 * �Զ������봮.��ʽ:Ӣ�ĺ��������;���Ȳ��ܴ���12���ַ�,���ֲ�ͬ���ƹ�����,��:bbs,��ʾbbsΪ�ƹ�����;blog,��ʾblogΪ�ƹ�����.
	 **/
	private $outerCode;
	
	/** 
	 * �Ƿ�����Ʒ������Ϊtrue��ʾ����Ʒ�����ں�����Ʒ��Ĭ��Ϊfalse
	 **/
	private $overseasItem;
	
	/** 
	 * ���ҳ��.1~10
	 **/
	private $pageNo;
	
	/** 
	 * ÿҳ���ؽ����.���ÿҳ40
	 **/
	private $pageSize;
	
	/** 
	 * �û���pid,������mm_xxxx_0_0���ָ�ʽ�м��"xxxx".
<font color="red">ע��nick��pid������Ҫ����һ��,���2��������,����pidΪ׼,��pid����󳤶���20</font>����һ�ε��ýӿڵ��û����Ƽ�����β�Ҫ��д��ʹ��nick=���Ա��˺ţ��ķ�ʽȥ��ȡ���������
	 **/
	private $pid;
	
	/** 
	 * �Ƿ���ʵ����(��:�����⸶)��Ʒ������Ϊtrue��ʾ����Ʒ����ʵ��������Ʒ������Ϊfalse�����ñ�ʾ���ж��������
	 **/
	private $realDescribe;
	
	/** 
	 * �Ƿ�֧��7���˻�������Ϊtrue��ʾ����Ʒ֧��7���˻�������Ϊfalse�����ñ�ʾ���ж��������
	 **/
	private $sevendaysReturn;
	
	/** 
	 * Ĭ������:default

price_desc(�۸�Ӹߵ���) 
price_asc(�۸�ӵ͵���) 
credit_desc(���õȼ��Ӹߵ���) 
commissionRate_desc(Ӷ����ʴӸߵ���) 
commissionRate_asc(Ӷ����ʴӵ͵���) 
commissionNum_desc(�ɽ����ɸߵ���) 
commissionNum_asc(�ɽ����ӵ͵���) 
commissionVolume_desc(��֧��Ӷ��Ӹߵ���) 
commissionVolume_asc(��֧��Ӷ��ӵ͵���) 
delistTime_desc(��Ʒ�¼�ʱ��Ӹߵ���) 
delistTime_asc(��Ʒ�¼�ʱ��ӵ͵���)
	 **/
	private $sort;
	
	/** 
	 * 30���ۼ��ƹ������뷵�������е�commission_num�ֶζ�Ӧ������.ע�����ֶ�Ҫ��end_commissionNumһ��ʹ�ò���Ч
	 **/
	private $startCommissionNum;
	
	/** 
	 * Ӷ��������ޣ��磺1234��ʾ12.34%
	 **/
	private $startCommissionRate;
	
	/** 
	 * ��������:

1heart(һ��) 
2heart (����) 
3heart(����) 
4heart(����) 
5heart(����) 
1diamond(һ��) 
2diamond(����) 
3diamond(����) 
4diamond(����) 
5diamond(����) 
1crown(һ��) 
2crown(����) 
3crown(����) 
4crown(�Ĺ�) 
5crown(���) 
1goldencrown(һ�ƹ�) 
2goldencrown(���ƹ�) 
3goldencrown(���ƹ�) 
4goldencrown(�Ļƹ�) 
5goldencrown(��ƹ�)
	 **/
	private $startCredit;
	
	/** 
	 * ��ʼ�۸�.����۸����ʱ,��ע����ʼ�۸����߼۸����һ����,���� start_price <= end_price
	 **/
	private $startPrice;
	
	/** 
	 * ��Ʒ�ܳɽ������뷵���ֶ�volume��Ӧ�����ޡ�
	 **/
	private $startTotalnum;
	
	/** 
	 * �Ƿ�֧��VIP��������Ϊtrue��ʾ����Ʒ֧��VIP��������Ϊfalse�����ñ�ʾ���ж��������
	 **/
	private $vipCard;
	
	private $apiParas = array();
	
	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setAutoSend($autoSend)
	{
		$this->autoSend = $autoSend;
		$this->apiParas["auto_send"] = $autoSend;
	}

	public function getAutoSend()
	{
		return $this->autoSend;
	}

	public function setCashCoupon($cashCoupon)
	{
		$this->cashCoupon = $cashCoupon;
		$this->apiParas["cash_coupon"] = $cashCoupon;
	}

	public function getCashCoupon()
	{
		return $this->cashCoupon;
	}

	public function setCashOndelivery($cashOndelivery)
	{
		$this->cashOndelivery = $cashOndelivery;
		$this->apiParas["cash_ondelivery"] = $cashOndelivery;
	}

	public function getCashOndelivery()
	{
		return $this->cashOndelivery;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setEndCommissionNum($endCommissionNum)
	{
		$this->endCommissionNum = $endCommissionNum;
		$this->apiParas["end_commissionNum"] = $endCommissionNum;
	}

	public function getEndCommissionNum()
	{
		return $this->endCommissionNum;
	}

	public function setEndCommissionRate($endCommissionRate)
	{
		$this->endCommissionRate = $endCommissionRate;
		$this->apiParas["end_commissionRate"] = $endCommissionRate;
	}

	public function getEndCommissionRate()
	{
		return $this->endCommissionRate;
	}

	public function setEndCredit($endCredit)
	{
		$this->endCredit = $endCredit;
		$this->apiParas["end_credit"] = $endCredit;
	}

	public function getEndCredit()
	{
		return $this->endCredit;
	}

	public function setEndPrice($endPrice)
	{
		$this->endPrice = $endPrice;
		$this->apiParas["end_price"] = $endPrice;
	}

	public function getEndPrice()
	{
		return $this->endPrice;
	}

	public function setEndTotalnum($endTotalnum)
	{
		$this->endTotalnum = $endTotalnum;
		$this->apiParas["end_totalnum"] = $endTotalnum;
	}

	public function getEndTotalnum()
	{
		return $this->endTotalnum;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setGuarantee($guarantee)
	{
		$this->guarantee = $guarantee;
		$this->apiParas["guarantee"] = $guarantee;
	}

	public function getGuarantee()
	{
		return $this->guarantee;
	}

	public function setIsMobile($isMobile)
	{
		$this->isMobile = $isMobile;
		$this->apiParas["is_mobile"] = $isMobile;
	}

	public function getIsMobile()
	{
		return $this->isMobile;
	}

	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
	}

	public function setMallItem($mallItem)
	{
		$this->mallItem = $mallItem;
		$this->apiParas["mall_item"] = $mallItem;
	}

	public function getMallItem()
	{
		return $this->mallItem;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setOnemonthRepair($onemonthRepair)
	{
		$this->onemonthRepair = $onemonthRepair;
		$this->apiParas["onemonth_repair"] = $onemonthRepair;
	}

	public function getOnemonthRepair()
	{
		return $this->onemonthRepair;
	}

	public function setOuterCode($outerCode)
	{
		$this->outerCode = $outerCode;
		$this->apiParas["outer_code"] = $outerCode;
	}

	public function getOuterCode()
	{
		return $this->outerCode;
	}

	public function setOverseasItem($overseasItem)
	{
		$this->overseasItem = $overseasItem;
		$this->apiParas["overseas_item"] = $overseasItem;
	}

	public function getOverseasItem()
	{
		return $this->overseasItem;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setRealDescribe($realDescribe)
	{
		$this->realDescribe = $realDescribe;
		$this->apiParas["real_describe"] = $realDescribe;
	}

	public function getRealDescribe()
	{
		return $this->realDescribe;
	}

	public function setSevendaysReturn($sevendaysReturn)
	{
		$this->sevendaysReturn = $sevendaysReturn;
		$this->apiParas["sevendays_return"] = $sevendaysReturn;
	}

	public function getSevendaysReturn()
	{
		return $this->sevendaysReturn;
	}

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function setStartCommissionNum($startCommissionNum)
	{
		$this->startCommissionNum = $startCommissionNum;
		$this->apiParas["start_commissionNum"] = $startCommissionNum;
	}

	public function getStartCommissionNum()
	{
		return $this->startCommissionNum;
	}

	public function setStartCommissionRate($startCommissionRate)
	{
		$this->startCommissionRate = $startCommissionRate;
		$this->apiParas["start_commissionRate"] = $startCommissionRate;
	}

	public function getStartCommissionRate()
	{
		return $this->startCommissionRate;
	}

	public function setStartCredit($startCredit)
	{
		$this->startCredit = $startCredit;
		$this->apiParas["start_credit"] = $startCredit;
	}

	public function getStartCredit()
	{
		return $this->startCredit;
	}

	public function setStartPrice($startPrice)
	{
		$this->startPrice = $startPrice;
		$this->apiParas["start_price"] = $startPrice;
	}

	public function getStartPrice()
	{
		return $this->startPrice;
	}

	public function setStartTotalnum($startTotalnum)
	{
		$this->startTotalnum = $startTotalnum;
		$this->apiParas["start_totalnum"] = $startTotalnum;
	}

	public function getStartTotalnum()
	{
		return $this->startTotalnum;
	}

	public function setVipCard($vipCard)
	{
		$this->vipCard = $vipCard;
		$this->apiParas["vip_card"] = $vipCard;
	}

	public function getVipCard()
	{
		return $this->vipCard;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.items.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->cid,2147483647,"cid");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxValue($this->pageNo,10,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,400,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
