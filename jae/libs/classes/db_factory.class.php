<?php
/**
 *  db_factory.class.php ���ݿ⹤����
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */

final class db_factory {
	
	/**
	 * ��ǰ���ݿ⹤���ྲ̬ʵ��
	 */
	private static $db_factory;
	
	/**
	 * ���ݿ������б�
	 */
	protected $db_config = array();
	
	/**
	 * ���ݿ����ʵ�����б�
	 */
	protected $db_list = array();
	
	/**
	 * ���캯��
	 */
	public function __construct() {
		$pdo = new PDO('mysql:host=localhost;port=3306;dbname=uzhan', 'root', 'localmysql');
	}
	
	/**
	 * ���ص�ǰ�ռ�������ʵ��
	 * @param $db_config ���ݿ�����
	 * @return object
	 */

}
?>