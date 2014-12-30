<?php
/**
 *  cache_factory.class.php ���湤����
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */

final class cache_factory {
	
	/**
	 * ��ǰ���湤���ྲ̬ʵ��
	 */
	private static $cache_factory;
	
	/**
	 * ���������б�
	 */
	protected $cache_config = array();
	
	/**
	 * �������ʵ�����б�
	 */
	protected $cache_list = array();
	
	/**
	 * ���캯��
	 */
	public function __construct() {
	}
	
	/**
	 * ���ص�ǰ�ռ�������ʵ��
	 * @param $cache_config ��������
	 * @return object
	 */
	public static function get_instance($cache_config = '') {

		if(cache_factory::$cache_factory == '' || $cache_config !='') {
			cache_factory::$cache_factory = new cache_factory();
			if(!empty($cache_config)) {
				cache_factory::$cache_factory->cache_config = $cache_config;
			}
		}
		return cache_factory::$cache_factory;
	}
	
	/**
	 * ��ȡ�������ʵ��
	 * @param $cache_name ������������
	 */
	public function get_cache($cache_name) { 
		if(!isset($this->cache_list[$cache_name]) || !is_object($this->cache_list[$cache_name])) {
			$this->cache_list[$cache_name] = $this->load($cache_name);
		}
		return $this->cache_list[$cache_name];
	}
	
	/**
	 *  ���ػ�������
	 * @param $cache_name 	������������
	 * @return object
	 */
	public function load($cache_name) {
		$object = null;
		if(isset($this->cache_config[$cache_name]['type'])) {
			switch($this->cache_config[$cache_name]['type']) {
				case 'file' :
					$object = jae_base::load_sys_class('cache_file');
					break;
				case 'memcache' :
					define('MEMCACHE_HOST', $this->cache_config[$cache_name]['hostname']);
					define('MEMCACHE_PORT', $this->cache_config[$cache_name]['port']);
					define('MEMCACHE_TIMEOUT', $this->cache_config[$cache_name]['timeout']);
					define('MEMCACHE_DEBUG', $this->cache_config[$cache_name]['debug']);
					
					$object = jae_base::load_sys_class('cache_memcache');
					break;
				case 'apc' :
					$object = jae_base::load_sys_class('cache_apc');
					break;
				default :
					$object = jae_base::load_sys_class('cache_file');
			}
		} else {
			$object = jae_base::load_sys_class('cache_file');
		}
		return $object;
	}

}
?>