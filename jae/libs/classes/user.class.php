<?php
/**
 *  user.class.php 数据模型基类
 *
 * @copyright			(C) 20013-2014 JAE
 * @license				http://www.ehoneycomb.com/
 * @lastmodify			2014-6-7
 * @淘宝网获取头像和混肴昵称
 */

class User {
	public $userId;
	public $nick;
	}

class context {
		function getbrowser(){
			return new User();
			} 
		function getSiteOwner(){
			return new User();
			} 
		
		}
		
	//当前用户头像用法
	$browser=$context->getbrowser();
	$nick=$browser->nick;
	//echo 	'<img src="/_RS/user/picture?mixUserNick='.urlencode($nick,"UTF-8").'" />  ';

	
	
?>