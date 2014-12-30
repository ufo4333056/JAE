<?php
/**
 * TOP API: taobao.item.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-14 16:43:18
 */
class ItemGetRequest
{
	/** 
	 * ��Ҫ���ص���Ʒ�����ֶΡ���ѡֵ��Item��Ʒ�ṹ���������ֶξ��ɷ��أ�����ֶ��á�,���ָ�������뷵�������Ӷ������ֶ�Ϊitem_img��������뷵���Ӷ���������ֶΣ����ֶ�Ϊitem_img.url�����������ֶΣ�second_kill���Ƿ���ɱ��Ʒ����auto_fill��������Ʒ���ͣ�,props_name����Ʒ�������ƣ������������ֶΣ�item_weight(��Ʒ����������ʽΪ���֣�����С��)��item_size(��Ʒ���������ʽΪ���֣�����С��)
	 **/
	private $fields;
	
	/** 
	 * ��Ʒ����ID
	 **/
	private $numIid;
	
	/** 
	 * ��Ʒ����ID(���и���Ч��)
	 **/
	private $trackIid;
	
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

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setTrackIid($trackIid)
	{
		$this->trackIid = $trackIid;
		$this->apiParas["track_iid"] = $trackIid;
	}

	public function getTrackIid()
	{
		return $this->trackIid;
	}

	public function getApiMethodName()
	{
		return "taobao.item.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMinValue($this->numIid,1,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
