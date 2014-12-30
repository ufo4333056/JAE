<?php
/**
 * ��ǰ�����û�����Ϣ��ȡ
 *
 * @author Balsampear
 * 2013-03-22
 */
class User {
	const TYPE_ADMIN = 9;//���Ȩ�޹���Ա
	const TYPE_ITEM_CHECK = 6;//��Ʒ���
	const TYPE_GENERAL = 0;//��ͨ�û�
	private static $nick = null;
	private static $data = null;
	
	//ȡ�õ�ǰ�û���nick
	public static function getCurrentNick() {
		global $context;
		
		if (is_null(self::$nick)) {
			if ($context->getBrowser()){
				self::$nick = $context->getBrowser()->getNick();
			}else{
				self::$nick = '';
			}
		}
		if (is_null(self::$data)) {
			if (self::$nick) {
				$db = Database::instance();
				self::$data = $db->getOne("select su_id,wangwang,user_type from seller_user where nick='".self::$nick."'");
			}else{
				self::$data = array();
			}
		}
		return self::$nick;
	}
	
	public static function reInit() {
		self::$nick = null;
		self::$data = null;
	}
	
	//ȡ�õ�ǰ�û�������
	public static function getCurrentWangwang() {
		self::getCurrentNick();
		return self::$data['wangwang'];
	}
	
	//ȡ�õ�ǰ�û���vgogo��user id
	public static function getCurrentId() {
		self::getCurrentNick();
		return self::$data['su_id'];
	}
	
	//ȡ�õ�ǰ�û������ͣ��൱��Ȩ�ޣ�
	public static function getCurrentType() {
		self::getCurrentNick();
		return self::$data['user_type'];
	}
	
	//����Ƿ���ָ����Ȩ��
	public static function checkRight($needUserType) {
		return self::getCurrentType() >= $needUserType;
	}
	
	
}



