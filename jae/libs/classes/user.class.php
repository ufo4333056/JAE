<?php
/**
 *  user.class.php ����ģ�ͻ���
 *
 * @copyright			(C) 20013-2014 JAE
 * @license				http://www.ehoneycomb.com/
 * @lastmodify			2014-6-7
 * @�Ա�����ȡͷ��ͻ����ǳ�
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
		
	//��ǰ�û�ͷ���÷�
	$browser=$context->getbrowser();
	$nick=$browser->nick;
	//echo 	'<img src="/_RS/user/picture?mixUserNick='.urlencode($nick,"UTF-8").'" />  ';

	
	
?>