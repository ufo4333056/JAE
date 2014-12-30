<?php
/**
 * TOP API: taobao.shop.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-14 16:43:18
 */
class ShopGetRequest
{
	/** 
	 * �践�ص��ֶ��б���ѡֵ��Shop �ṹ�е������ֶΣ�����ֶ�֮���ö���(,)�ָ�
	 **/
	private $fields;
	
	/** 
	 * �����ǳ�
	 **/
	private $nick;
	
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.shop.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
