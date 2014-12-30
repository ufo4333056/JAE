<?php
/**
 * TOP API: taobao.items.list.get request
 * 
 * @author auto create
 * @since 1.0, 2013-02-28 12:45:02
 */
class ItemsListGetRequest
{
	/** 
	 * ��Ҫ���ص���Ʒ�����ֶΡ���ѡֵ��Item��Ʒ�ṹ���������ֶξ��ɷ��أ�����ֶ��á�,���ָ�������뷵�������Ӷ������ֶ�Ϊitemimg��������뷵���Ӷ���������ֶΣ����ֶ�Ϊitemimg.url��
	 **/
	private $fields;
	
	/** 
	 * ��Ʒ����id�б����num_iid�ö��Ÿ�����һ�β�����20����
	 **/
	private $numIids;
	
	/** 
	 * ��Ʒ����id�б����track_iid�ö��Ÿ�����һ�β�����20����
	 **/
	private $trackIids;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setNumIids($numIids)
	{
		$this->numIids = $numIids;
		$this->apiParas["num_iids"] = $numIids;
	}

	public function getNumIids()
	{
		return $this->numIids;
	}

	public function setTrackIids($trackIids)
	{
		$this->trackIids = $trackIids;
		$this->apiParas["track_iids"] = $trackIids;
	}

	public function getTrackIids()
	{
		return $this->trackIids;
	}

	public function getApiMethodName()
	{
		return "taobao.items.list.get";
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
