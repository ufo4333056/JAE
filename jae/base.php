<?php
define('IN_JAE', true);

//JAE¿ò¼ÜÂ·¾¶
define('JAE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
if(!defined('JAE_PATH')) define('JAE_PATH', JAE_PATH.'..'.DIRECTORY_SEPARATOR);


//»º´æÎÄ¼þ¼ÐµØÖ·
define('CACHE_PATH', JAE_PATH.'caches'.DIRECTORY_SEPARATOR);
//Ö÷»úÐ­Òé
define('SITE_PROTOCOL', isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://');
//µ±Ç°·ÃÎÊµÄÖ÷»úÃû
define('SITE_URL', (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ''));
//À´Ô´
//define('SITE_IP', (isset($_SERVER["HTTP_CLIENT_IP"]) ?$_SERVER["HTTP_CLIENT_IP"] : ''));


define('HTTP_REFERER', isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars_decode($_SERVER['HTTP_REFERER']) : '');

//ÏµÍ³¿ªÊ¼Ê±¼ä
//echo $time =strtotime(date('Y-m-d H:i:s'));
//define('SYS_START_TIME', $time);
date_default_timezone_set("Asia/Hong_Kong");
//echo date('Y-m-d H:i:s',$time);
//¼ÓÔØ¹«ÓÃº¯Êý¿â
jae_base::load_sys_func('global');
jae_base::load_sys_func('extention');
jae_base::auto_load_func();
define('SITEID', get_siteid());
//ÉèÖÃ±¾µØÊ±²î
//function_exists('date_default_timezone_set') && date_default_timezone_set(jae_base::load_config('system','timezone'));

//µ±Ç°Ê±¼ä ¾«È·µ½Ãë
define('SYS_TIME', time());
//µ±Ç°Ê±¼ä ¾«È·µ½ºÁÃë
define('MICRO_TIME', microtime(true));


//echo SYS_TIME;

//¶¨ÒåÍøÕ¾¸ùÂ·¾¶
define('WEB_PATH',jae_base::load_config('system','web_path'));
//js Â·¾¶
define('JS_PATH',jae_base::load_config('system','js_path'));
//css Â·¾¶
define('CSS_PATH',jae_base::load_config('system','css_path'));
//img Â·¾¶
define('IMG_PATH',jae_base::load_config('system','img_path'));
//¶¯Ì¬³ÌÐòÂ·¾¶
define('APP_PATH',jae_base::load_config('system','app_path'));

//
define('UPLOAD_PATH',jae_base::load_config('system','upload_path'));

//Ó¦ÓÃ¾²Ì¬ÎÄ¼þÂ·¾¶
define('PLUGIN_STATICS_PATH',WEB_PATH.'statics/plugin/');

class jae_base {
	
	/**
	 * ³õÊ¼»¯Ó¦ÓÃ³ÌÐò
	 */
	public static function creat_app() {
		return self::load_sys_class('application');
	}
	/**
	 * ¼ÓÔØÏµÍ³Àà·½·¨
	 * @param string $classname ÀàÃû
	 * @param string $path À©Õ¹µØÖ·
	 * @param intger $initialize ÊÇ·ñ³õÊ¼»¯
	 */
	public static function load_sys_class($classname, $path = '', $initialize = 1) { 
			return self::_load_class($classname, $path, $initialize);
	}
	
	/**
	 * ¼ÓÔØÓ¦ÓÃÀà·½·¨
	 * @param string $classname ÀàÃû
	 * @param string $m Ä£¿é
	 * @param intger $initialize ÊÇ·ñ³õÊ¼»¯
	 */
	public static function load_app_class($classname, $m = '', $initialize = 1) {
		$m = empty($m) && defined('ROUTE_M') ? ROUTE_M : $m;
		if (empty($m)) return false;
		return self::_load_class($classname, 'modules'.DIRECTORY_SEPARATOR.$m.DIRECTORY_SEPARATOR.'classes', $initialize);
	}
	
	/**
	 * ¼ÓÔØÊý¾ÝÄ£ÐÍ
	 * @param string $classname ÀàÃû
	 */
	public static function load_model($classname) {
		return self::_load_class($classname,'model');
	}
		
	/**
	 * ¼ÓÔØÀàÎÄ¼þº¯Êý
	 * @param string $classname ÀàÃû
	 * @param string $path À©Õ¹µØÖ·
	 * @param intger $initialize ÊÇ·ñ³õÊ¼»¯
	 */
	private static function _load_class($classname, $path = '', $initialize = 1) { 
		static $classes = array();
		if (empty($path)) $path = 'jae'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'classes';
		
		else $path='jae'.DIRECTORY_SEPARATOR.$path;
		

		$key = md5($path.$classname);
		if (isset($classes[$key])) {
			if (!empty($classes[$key])) {
				return $classes[$key];
			} else {
				return true;
			}
		}

		if (file_exists(JAE_PATH.$path.DIRECTORY_SEPARATOR.$classname.'.class.php')) {
		
			 
			
			//include '../jae/libs/classes/application.class.php';
			//echo  JAE_PATH.$path.DIRECTORY_SEPARATOR.$classname.'.class.php////////////////';
			
			include JAE_PATH.$path.DIRECTORY_SEPARATOR.$classname.'.class.php';
			$name = $classname;
			if ($my_path = self::my_path(JAE_PATH.$path.DIRECTORY_SEPARATOR.$classname.'.class.php')) {
				include $my_path;
				$name = 'MY_'.$classname;
			}
			
			if ($initialize) {		
			
			    $classes[$key] = new $name; 
			} else {
				$classes[$key] = true;
			}
			
			return $classes[$key];
		} else { //echo "this file is no exist.";
			return false;
		}
	}
	
	/**
	 * ¼ÓÔØÏµÍ³µÄº¯Êý¿â
	 * @param string $func º¯Êý¿âÃû
	 */
	public static function load_sys_func($func) {
		return self::_load_func($func);
	}
	
	/**
	 * ×Ô¶¯¼ÓÔØautoloadÄ¿Â¼ÏÂº¯Êý¿â
	 * @param string $func º¯Êý¿âÃû
	 */
	public static function auto_load_func($path='') {
		return self::_auto_load_func($path);
	}
	
	/**
	 * ¼ÓÔØÓ¦ÓÃº¯Êý¿â
	 * @param string $func º¯Êý¿âÃû
	 * @param string $m Ä£ÐÍÃû
	 */
	public static function load_app_func($func, $m = '') {
		$m = empty($m) && defined('ROUTE_M') ? ROUTE_M : $m;
		if (empty($m)) return false;
		return self::_load_func($func, 'jae'.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.$m.DIRECTORY_SEPARATOR.'functions');
	}
	
	/**
	 * ¼ÓÔØ²å¼þÀà¿â
	 */
	public static function load_plugin_class($classname, $identification = '' ,$initialize = 1) {
		$identification = empty($identification) && defined('PLUGIN_ID') ? PLUGIN_ID : $identification;
		if (empty($identification)) return false;
		return jae_base::load_sys_class($classname, 'plugin'.DIRECTORY_SEPARATOR.$identification.DIRECTORY_SEPARATOR.'classes', $initialize);
	}
	
	/**
	 * ¼ÓÔØ²å¼þº¯Êý¿â
	 * @param string $func º¯ÊýÎÄ¼þÃû³Æ
	 * @param string $identification ²å¼þ±êÊ¶
	 */
	public static function load_plugin_func($func,$identification) {
		static $funcs = array();
		$identification = empty($identification) && defined('PLUGIN_ID') ? PLUGIN_ID : $identification;
		if (empty($identification)) return false;
		$path = 'plugin'.DIRECTORY_SEPARATOR.$identification.DIRECTORY_SEPARATOR.'functions'.DIRECTORY_SEPARATOR.$func.'.func.php';
		$key = md5($path);
		if (isset($funcs[$key])) return true;
		if (file_exists(JAE_PATH.$path)) {
			include JAE_PATH.$path;
		} else {
			$funcs[$key] = false;
			return false;
		}
		$funcs[$key] = true;
		return true;
	}
	
	/**
	 * ¼ÓÔØ²å¼þÊý¾ÝÄ£ÐÍ
	 * @param string $classname ÀàÃû
	 */
	public static function load_plugin_model($classname,$identification) {
		$identification = empty($identification) && defined('PLUGIN_ID') ? PLUGIN_ID : $identification;
		$path = 'plugin'.DIRECTORY_SEPARATOR.$identification.DIRECTORY_SEPARATOR.'model';
		return self::_load_class($classname,$path);
	}
	
	/**
	 * ¼ÓÔØº¯Êý¿â
	 * @param string $func º¯Êý¿âÃû
	 * @param string $path µØÖ·
	 */
	private static function _load_func($func, $path = '') {
		static $funcs = array();
		if (empty($path)) $path = 'jae'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'functions';
		
		$path .= DIRECTORY_SEPARATOR.$func.'.func.php';
		$key = md5($path);
		if (isset($funcs[$key])) return true;
		if (file_exists(JAE_PATH.$path)) {
		include JAE_PATH.$path;
		} else {
			$funcs[$key] = false;
			return false;
		}
		$funcs[$key] = true;
		return true;
	}
	
	/**
	 * ¼ÓÔØº¯Êý¿â
	 * @param string $func º¯Êý¿âÃû
	 * @param string $path µØÖ·
	 */
	private static function _auto_load_func($path = '') {
		if (empty($path)) $path = 'libs'.DIRECTORY_SEPARATOR.'functions'.DIRECTORY_SEPARATOR.'autoload';
		$path .= DIRECTORY_SEPARATOR.'*.func.php';
		$auto_funcs = glob(JAE_PATH.DIRECTORY_SEPARATOR.$path);
		if(!empty($auto_funcs) && is_array($auto_funcs)) {
			foreach($auto_funcs as $func_path) {
				include $func_path;
			}
		}
	}
	/**
	 * ÊÇ·ñÓÐ×Ô¼ºµÄÀ©Õ¹ÎÄ¼þ
	 * @param string $filepath Â·¾¶
	 */
	public static function my_path($filepath) {
		$path = pathinfo($filepath);
		if (file_exists($path['dirname'].DIRECTORY_SEPARATOR.'MY_'.$path['basename'])) {
			return $path['dirname'].DIRECTORY_SEPARATOR.'MY_'.$path['basename'];
		} else {
			return false;
		}
	}
	
	/**
	 * ¼ÓÔØÅäÖÃÎÄ¼þ
	 * @param string $file ÅäÖÃÎÄ¼þ
	 * @param string $key  Òª»ñÈ¡µÄÅäÖÃ¼ö
	 * @param string $default  Ä¬ÈÏÅäÖÃ¡£µ±»ñÈ¡ÅäÖÃÏîÄ¿Ê§°ÜÊ±¸ÃÖµ·¢Éú×÷ÓÃ¡£
	 * @param boolean $reload Ç¿ÖÆÖØÐÂ¼ÓÔØ¡£
	 */
	public static function load_config($file, $key = '', $default = '', $reload = false) {
		static $configs = array();
		if (!$reload && isset($configs[$file])) {
			if (empty($key)) {
				return $configs[$file];
			} elseif (isset($configs[$file][$key])) {
				return $configs[$file][$key];
			} else {
				return $default;
			}
		}
		$path = CACHE_PATH.'configs'.DIRECTORY_SEPARATOR.$file.'.php';
		
		if (file_exists($path)) {
			$configs[$file] = include $path;
		}
		if (empty($key)) {
			return $configs[$file];
		} elseif (isset($configs[$file][$key])) {
			return $configs[$file][$key];
		} else {
			return $default;
		}
	}
	
	
		/**
	 * ¼ÓÔØÌÔ±¦TOPÅäÖÃÎÄ¼þ
	 * @param string $file ÅäÖÃÎÄ¼þ
	 * @param string $key  Òª»ñÈ¡µÄÅäÖÃ¼ö
	 * @param string $default  Ä¬ÈÏÅäÖÃ¡£µ±»ñÈ¡ÅäÖÃÏîÄ¿Ê§°ÜÊ±¸ÃÖµ·¢Éú×÷ÓÃ¡£
	 * @param boolean $reload Ç¿ÖÆÖØÐÂ¼ÓÔØ¡£
	 */
	public static function load_top($file, $key = '', $default = '', $reload = false) {
		static $configs = array();
		if (!$reload && isset($configs[$file])) {
			if (empty($key)) {
				return $configs[$file];
			} elseif (isset($configs[$file][$key])) {
				return $configs[$file][$key];
			} else {
				return $default;
			}
		}
			$path = JAE_PATH.'top'.DIRECTORY_SEPARATOR.$file.'.php';
		
		if (file_exists($path)) {
			$configs[$file] = include $path;
		}
		if (empty($key)) {
			return $configs[$file];
		} elseif (isset($configs[$file][$key])) {
			return $configs[$file][$key];
		} else {
			return $default;
		}
	}
}

?>