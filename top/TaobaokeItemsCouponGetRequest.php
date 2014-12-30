<?php
/**
 * TOP API: taobao.taobaoke.items.coupon.get request
 * 
 * @author auto create
 * @since 1.0, 2012-10-28 12:33:05
 */
class TaobaokeItemsCouponGetRequest
{
	/** 
	 * ��Ʒ���ڵ�
	 **/
	private $area;
	
	/** 
	 * ��׼��Ʒ��̨��Ŀid����ID����ͨ��taobao.itemcats.get�ӿڻ�ȡ����
	 **/
	private $cid;
	
	/** 
	 * �Ż���Ʒ����.1:������Ʒ,Ĭ��ֵΪ1
	 **/
	private $couponType;
	
	/** 
	 * ����30���ۼ��ƹ������뷵�������е�commission_num�ֶζ�Ӧ������.ע�����ֶ�Ҫ��start_commissionNumһ��ʹ�ò���Ч
	 **/
	private $endCommissionNum;
	
	/** 
	 * ���Ӷ�����ѡ��磺2345��ʾ23.45%��ע��Ҫ��ʼӶ����ʺ����Ӷ�����һ�����ò���Ч��
	 **/
	private $endCommissionRate;
	
	/** 
	 * ����ۼ��ƹ�Ӷ��ѡ��
	 **/
	private $endCommissionVolume;
	
	/** 
	 * �����ۿ۱�����Χ����,�磺8000��ʾ80.00%.ע��Ҫ��ʼ�ۿ۱��ʺ�����ۿ۱���һ�����ò���Ч
	 **/
	private $endCouponRate;
	
	/** 
	 * ��ѡֵ��start_creditһ��.start_credit��ֵһ��ҪС�ڻ����end_credit��ֵ��ע��end_credit��start_creditһ��ʹ�ò���Ч
	 **/
	private $endCredit;
	
	/** 
	 * ������Ʒ�ܳɽ������뷵���ֶ�volume��Ӧ�����ޡ�
	 **/
	private $endVolume;
	
	/** 
	 * �践�ص��ֶ��б�.��ѡֵ:num_iid,title,nick,pic_url,price,click_url,commission,commission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume,coupon_price,coupon_rate,coupon_start_time,coupon_end_time,shop_type;�ֶ�֮����","�ָ�
	 **/
	private $fields;
	
	/** 
	 * ��ʶһ��Ӧ���Ƿ��������߻����ֻ�Ӧ��,�����true���ʹ������������ܵ����.�������ֵ,��Ĭ����false
	 **/
	private $isMobile;
	
	/** 
	 * ��Ʒ�����а����Ĺؼ���. ע��:��ѯʱkeyword,cid����ѡ������һ������
	 **/
	private $keyword;
	
	/** 
	 * �ƹ��ߵ��Ա���Ա�ǳ�.ע:ָ�����Ա��Ļ�Ա��¼��
	 **/
	private $nick;
	
	/** 
	 * �Զ������봮.��ʽ:Ӣ�ĺ��������;���Ȳ��ܴ���12���ַ�,���ֲ�ͬ���ƹ�����,��:bbs,��ʾbbsΪ�ƹ�����;blog,��ʾblogΪ�ƹ�����
	 **/
	private $outerCode;
	
	/** 
	 * ���ҳ��.1~99
	 **/
	private $pageNo;
	
	/** 
	 * ÿҳ���ؽ����.���ÿҳ100
	 **/
	private $pageSize;
	
	/** 
	 * �û���pid,������mm_xxxx_0_0���ָ�ʽ�м��"xxxx". ע��nick��pid������Ҫ����һ��,���2��������,����pidΪ׼,��pid����󳤶���20����һ�ε��ýӿڵ��û����Ƽ�����β�Ҫ��д��ʹ��nick=���Ա��˺ţ��ķ�ʽȥ��ȡ���������
	 **/
	private $pid;
	
	/** 
	 * ��������.Ĭ��all,�̳�:b,����:c
	 **/
	private $shopType;
	
	/** 
	 * default(Ĭ������),
price_desc(�ۿۼ۸�Ӹߵ���),
price_asc(�ۿۼ۸�ӵ͵���),
credit_desc(���õȼ��Ӹߵ���),
credit_asc(���õȼ��ӵ͵���),
commissionRate_desc(Ӷ����ʴӸߵ���),
commissionRate_asc(Ӷ����ʴӵ͵���),
volume_desc(�ɽ����ɸߵ���), volume_asc(�ɽ����ӵ͵���)
	 **/
	private $sort;
	
	/** 
	 * ����30���ۼ��ƹ������뷵�������е�commission_num�ֶζ�Ӧ������.ע�����ֶ�Ҫ��end_commissionNumһ��ʹ�ò���Ч
	 **/
	private $startCommissionNum;
	
	/** 
	 * ��ʼӶ�����ѡ��磺1234��ʾ12.34%
	 **/
	private $startCommissionRate;
	
	/** 
	 * ��ʼ�ۼ��ƹ���Ӷ��.ע�����ص�������30�����ۼ��ƹ�Ӷ�𣬸��ֶ�Ҫ������ۼ��ƹ�Ӷ��һ��ʹ�ò���Ч
	 **/
	private $startCommissionVolume;
	
	/** 
	 * �����ۿ۱�����Χ����,�磺7000��ʾ70.00%
	 **/
	private $startCouponRate;
	
	/** 
	 * ��������: 1heart(һ��) 2heart (����) 3heart(����) 4heart(����) 5heart(����) 1diamond(һ��) 2diamond(����) 3diamond(����) 4diamond(����) 5diamond(����) 1crown(һ��) 2crown(����) 3crown(����) 4crown(�Ĺ�) 5crown(���) 1goldencrown(һ�ƹ�) 2goldencrown(���ƹ�) 3goldencrown(���ƹ�) 4goldencrown(�Ļƹ�) 5goldencrown(��ƹ�)
	 **/
	private $startCredit;
	
	/** 
	 * ������Ʒ�ܳɽ������뷵���ֶ�volume��Ӧ�����ޡ�
	 **/
	private $startVolume;
	
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

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setCouponType($couponType)
	{
		$this->couponType = $couponType;
		$this->apiParas["coupon_type"] = $couponType;
	}

	public function getCouponType()
	{
		return $this->couponType;
	}

	public function setEndCommissionNum($endCommissionNum)
	{
		$this->endCommissionNum = $endCommissionNum;
		$this->apiParas["end_commission_num"] = $endCommissionNum;
	}

	public function getEndCommissionNum()
	{
		return $this->endCommissionNum;
	}

	public function setEndCommissionRate($endCommissionRate)
	{
		$this->endCommissionRate = $endCommissionRate;
		$this->apiParas["end_commission_rate"] = $endCommissionRate;
	}

	public function getEndCommissionRate()
	{
		return $this->endCommissionRate;
	}

	public function setEndCommissionVolume($endCommissionVolume)
	{
		$this->endCommissionVolume = $endCommissionVolume;
		$this->apiParas["end_commission_volume"] = $endCommissionVolume;
	}

	public function getEndCommissionVolume()
	{
		return $this->endCommissionVolume;
	}

	public function setEndCouponRate($endCouponRate)
	{
		$this->endCouponRate = $endCouponRate;
		$this->apiParas["end_coupon_rate"] = $endCouponRate;
	}

	public function getEndCouponRate()
	{
		return $this->endCouponRate;
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

	public function setEndVolume($endVolume)
	{
		$this->endVolume = $endVolume;
		$this->apiParas["end_volume"] = $endVolume;
	}

	public function getEndVolume()
	{
		return $this->endVolume;
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
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

	public function setShopType($shopType)
	{
		$this->shopType = $shopType;
		$this->apiParas["shop_type"] = $shopType;
	}

	public function getShopType()
	{
		return $this->shopType;
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
		$this->apiParas["start_commission_num"] = $startCommissionNum;
	}

	public function getStartCommissionNum()
	{
		return $this->startCommissionNum;
	}

	public function setStartCommissionRate($startCommissionRate)
	{
		$this->startCommissionRate = $startCommissionRate;
		$this->apiParas["start_commission_rate"] = $startCommissionRate;
	}

	public function getStartCommissionRate()
	{
		return $this->startCommissionRate;
	}

	public function setStartCommissionVolume($startCommissionVolume)
	{
		$this->startCommissionVolume = $startCommissionVolume;
		$this->apiParas["start_commission_volume"] = $startCommissionVolume;
	}

	public function getStartCommissionVolume()
	{
		return $this->startCommissionVolume;
	}

	public function setStartCouponRate($startCouponRate)
	{
		$this->startCouponRate = $startCouponRate;
		$this->apiParas["start_coupon_rate"] = $startCouponRate;
	}

	public function getStartCouponRate()
	{
		return $this->startCouponRate;
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

	public function setStartVolume($startVolume)
	{
		$this->startVolume = $startVolume;
		$this->apiParas["start_volume"] = $startVolume;
	}

	public function getStartVolume()
	{
		return $this->startVolume;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.items.coupon.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
