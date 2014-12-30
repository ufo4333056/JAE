<?php
/**
 * 当前在线用户的信息获取
 *
 * @author Balsampear
 * 2013-03-22
 */
class User {
	const TYPE_ADMIN = 9;//最高权限管理员
	const TYPE_ITEM_CHECK = 6;//商品审核
	const TYPE_GENERAL = 0;//普通用户
	private static $nick = null;
	private static $data = null;
	
	//取得当前用户的nick
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
	
	//取得当前用户的旺旺
	public static function getCurrentWangwang() {
		self::getCurrentNick();
		return self::$data['wangwang'];
	}
	
	//取得当前用户在vgogo的user id
	public static function getCurrentId() {
		self::getCurrentNick();
		return self::$data['su_id'];
	}
	
	//取得当前用户的类型（相当于权限）
	public static function getCurrentType() {
		self::getCurrentNick();
		return self::$data['user_type'];
	}
	
	//检测是否有指定的权限
	public static function checkRight($needUserType) {
		return self::getCurrentType() >= $needUserType;
	}
	
	
}



