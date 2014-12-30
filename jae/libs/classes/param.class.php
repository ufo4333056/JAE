<?php
/**
 *  param.class.php	����������
 *
 * @copyright			(C) 2005-2012 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2012-9-17
 */


class param {
	

	//·������
	private $route_config = '';
	
	public function __construct() {
	
		
	

		$this->route_config = jae_base::load_config('route', SITE_URL) ? jae_base::load_config('route', SITE_URL) : jae_base::load_config('route', 'default');

		if(isset($this->route_config['data']['POST']) && is_array($this->route_config['data']['POST'])) {
			foreach($this->route_config['data']['POST'] as $_key => $_value) {
				if(!isset($_POST[$_key])) $_POST[$_key] = $_value;
			}
		}
		if(isset($this->route_config['data']['GET']) && is_array($this->route_config['data']['GET'])) {
			foreach($this->route_config['data']['GET'] as $_key => $_value) {
				if(!isset($_GET[$_key])) $_GET[$_key] = $_value;
			}
		}
		if(isset($_GET['page'])) {
			$_GET['page'] = max(intval($_GET['page']),1);
			$_GET['page'] = min($_GET['page'],1000000000);
		}
		return true;
	}

	/**
	 * ��ȡģ��
	 */
	 	
	public function route_m() {
		
		$m = isset($_GET['m']) && !empty($_GET['m']) ? $_GET['m'] : (isset($_POST['m']) && !empty($_POST['m']) ? $_POST['m'] : '');
		$m = $this->safe_deal($m);
		if (empty($m)) {
			return $this->route_config['m'];
		} else {
			if(is_string($m)) return $m;
		}
		
	}

	/**
	 * ��ȡ������
	 */
	public function route_c() {
		$c = isset($_GET['c']) && !empty($_GET['c']) ? $_GET['c'] : (isset($_POST['c']) && !empty($_POST['c']) ? $_POST['c'] : '');
		$c = $this->safe_deal($c);
		
		if (empty($c)) {
			return $this->route_config['c'];
		} else {
			if(is_string($c)) return $c;
		}
	}

	/**
	 * ��ȡ�¼�
	 */
	public function route_a() {
		$a = isset($_GET['a']) && !empty($_GET['a']) ? $_GET['a'] : (isset($_POST['a']) && !empty($_POST['a']) ? $_POST['a'] : '');
		$a = $this->safe_deal($a);
		if (empty($a)) {
			return $this->route_config['a'];
		} else {
			if(is_string($a)) return $a;
		}
	}

	/**
	 * ��ȡͨ�� set_cookie ���õ� cookie ���� 
	 * @param string $var ������
	 * @param string $default Ĭ��ֵ 
	 * @return mixed �ɹ��򷵻�cookie ֵ�����򷵻� false
	 
	public static function get_cookie($var, $default = '') {
		$var = jae_base::load_config('system','cookie_pre').$var;
		$value = isset($_COOKIE[$var]) ? sys_auth($_COOKIE[$var], 'DECODE') : $default;
		if(in_array($var,array('_userid','siteid'))) {
			$value = intval($value);
		} elseif($var=='_usename') {
			$value = safe_replace($value);
		}
		return $value;
	}
*/

	/**
	 * ��ȫ������
	 * ����m,a,c
	 */
	private function safe_deal($str) {
		return str_replace(array('/', '.'), '', $str);
	}

}
?>