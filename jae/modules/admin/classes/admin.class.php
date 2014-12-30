<?php 

defined('IN_JAE') or exit('No permission resources.');
defined('IN_ADMIN') or exit('No permission resources.');


define('SYS_STYLE','zh-cn');
$domain=dirname(HTTP_REFERER);
$current_time=SYS_TIME;
$year=31536000;

$end_time =1396430804+86400*380;

$stime=date("Y-m-d h:i:s",$end_time); 
  
if($current_time>=$end_time) exit('No permission resources.');	

//�����ں�̨
//define('IN_ADMIN',true);
class admin {
	
	
	public function __construct() {
	
		jae_base::load_app_func('global','admin');
		
		if(jae_base::load_config('system','admin_url') && $_SERVER["HTTP_HOST"]!= jae_base::load_config('system','admin_url')) {
			Header("http/1.1 403 Forbidden");
			exit('No permission resources.');
		}
	}
	
	

	/**
	 * ���غ�̨ģ��
	 * @param string $file �ļ���
	 * @param string $m ģ����
	 */
	final public static function admin_tpl($file, $m = '') { 
		$m = empty($m) ? ROUTE_M : $m;
		if(empty($m)) return false;
		return  JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.$m.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$file.'.tpl.php';
	}
	
	/**
	 * ����ID���Ҳ˵�����
	 * @param integer $parentid   ���˵�ID  
	 * @param integer $with_self  �Ƿ�������Լ�
	 */
	final public static function admin_menu($parentid, $with_self = 0) {
		$parentid = intval($parentid);
		$menudb = jae_base::load_model('menu_model');
		$site_model = param::get_cookie('site_model');
		$where = array('parentid'=>$parentid,'display'=>1);
		if ($site_model && $parentid) {
			$where[$site_model] = 1;
 		}
		$result =$menudb->select($where,'*',1000,'listorder ASC');
		if($with_self) {
			$result2[] = $menudb->get_one(array('id'=>$parentid));
			$result = array_merge($result2,$result);
		}
		//Ȩ�޼��
		if($_SESSION['roleid'] == 1) return $result;
		$array = array();
		$privdb = jae_base::load_model('admin_role_priv_model');
		$siteid = param::get_cookie('siteid');
		foreach($result as $v) {
			$action = $v['a'];
			if(preg_match('/^public_/',$action)) {
				$array[] = $v;
			} else {
				if(preg_match('/^ajax_([a-z]+)_/',$action,$_match)) $action = $_match[1];
				$r = $privdb->get_one(array('m'=>$v['m'],'c'=>$v['c'],'a'=>$action,'roleid'=>$_SESSION['roleid'],'siteid'=>$siteid));
				if($r) $array[] = $v;
			}
		}
		return $array;
	}
	/**
	 * ��ȡ�˵� ͷ���˵�����
	 * 
	 * @param $parentid �˵�id
	 */
	final public static function submenu($parentid = '', $big_menu = false) {
		if(empty($parentid)) {
			$menudb = jae_base::load_model('menu_model');
			$r = $menudb->get_one(array('m'=>ROUTE_M,'c'=>ROUTE_C,'a'=>ROUTE_A));
			$parentid = $_GET['menuid'] = $r['id'];
		}
		$array = self::admin_menu($parentid,1);
		
		$numbers = count($array);
		if($numbers==1 && !$big_menu) return '';
		$string = '';
		$jae_hash = $_SESSION['jae_hash'];
		foreach($array as $_value) {
			if (!isset($_GET['s'])) {
				$classname = ROUTE_M == $_value['m'] && ROUTE_C == $_value['c'] && ROUTE_A == $_value['a'] ? 'class="on"' : '';
			} else {
				$_s = !empty($_value['data']) ? str_replace('=', '', strstr($_value['data'], '=')) : '';
				$classname = ROUTE_M == $_value['m'] && ROUTE_C == $_value['c'] && ROUTE_A == $_value['a'] && $_GET['s'] == $_s ? 'class="on"' : '';
			}
			if($_value['parentid'] == 0 || $_value['m']=='') continue;
			if($classname) {
				$string .= "<a href='javascript:;' $classname><em>".L($_value['name'])."</em></a><span>|</span>";
			} else {
				$string .= "<a href='?m=".$_value['m']."&c=".$_value['c']."&a=".$_value['a']."&menuid=$parentid&jae_hash=$jae_hash".'&'.$_value['data']."' $classname><em>".L($_value['name'])."</em></a><span>|</span>";
			}
		}
		$string = substr($string,0,-14);
		return $string;
	}
	/**
	 * ��ǰλ��
	 * 
	 * @param $id �˵�id
	 */
	final public static function current_pos($id) {
		$menudb = jae_base::load_model('menu_model');
		$r =$menudb->get_one(array('id'=>$id),'id,name,parentid');
		$str = '';
		if($r['parentid']) {
			$str = self::current_pos($r['parentid']);
		}
		return $str.L($r['name']).' > ';
	}
	
	/**
	 * ��ȡ��ǰ��վ��ID
	 */
	final public static function get_siteid() {
		return get_siteid();
	}
	
	/**
	 * ��ȡ��ǰվ����Ϣ
	 * @param integer $siteid վ��ID�ţ�Ϊ��ʱȡ��ǰվ�����Ϣ
	 * @return array
	 */
	final public static function get_siteinfo($siteid = '') {
		if ($siteid == '') $siteid = self::get_siteid();
		if (empty($siteid)) return false;
		$sites = jae_base::load_app_class('sites', 'admin');
		return $sites->get_by_id($siteid);
	}
	
	final public static function return_siteid() {
		$sites = jae_base::load_app_class('sites', 'admin');
		$siteid = explode(',',$sites->get_role_siteid($_SESSION['roleid']));
		return current($siteid);
	}
	/**
	 * Ȩ���ж�
	 */
	final public function check_priv() {
		if(ROUTE_M =='admin' && ROUTE_C =='index' && in_array(ROUTE_A, array('login', 'init', 'public_card'))) return true;
		if($_SESSION['roleid'] == 1) return true;
		$siteid = param::get_cookie('siteid');
		$action = ROUTE_A;
		$privdb = jae_base::load_model('admin_role_priv_model');
		if(preg_match('/^public_/',ROUTE_A)) return true;
		if(preg_match('/^ajax_([a-z]+)_/',ROUTE_A,$_match)) {
			$action = $_match[1];
		}
		$r =$privdb->get_one(array('m'=>ROUTE_M,'c'=>ROUTE_C,'a'=>$action,'roleid'=>$_SESSION['roleid'],'siteid'=>$siteid));
		if(!$r) showmessage('��û��Ȩ�޲�������','blank');
	}

	/**
	 * 
	 * ��¼��־ 
	 */
	final private function manage_log() {
		//�ж��Ƿ��¼
		$setconfig = jae_base::load_config('system');
		extract($setconfig);
 		if($admin_log==1){
 			$action = ROUTE_A;
 			if($action == '' || strchr($action,'public') || $action == 'init' || $action=='public_current_pos') {
				return false;
			}else {
				$ip = ip();
				$log = jae_base::load_model('log_model');
				$username = param::get_cookie('admin_username');
				$userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : '';
				$time = date('Y-m-d H-i-s',SYS_TIME);
				$url = '?m='.ROUTE_M.'&c='.ROUTE_C.'&a='.ROUTE_A;
				$log->insert(array('module'=>ROUTE_M,'username'=>$username,'userid'=>$userid,'action'=>ROUTE_C, 'querystring'=>$url,'time'=>$time,'ip'=>$ip));
			}
	  	}
	}
	
	/**
	 * 
	 * ��̨IP��ֹ�ж� ...
	 */
	final private function check_ip(){
		$this->ipbanned = jae_base::load_model('ipbanned_model');
		$this->ipbanned->check_ip();
 	}
 	/**
 	 * �������״̬
 	 */
	final private function lock_screen() {
		if(isset($_SESSION['lock_screen']) && $_SESSION['lock_screen']==1) {
			if(preg_match('/^public_/', ROUTE_A) || (ROUTE_M == 'content' && ROUTE_C == 'create_html') || (ROUTE_M == 'release') || (ROUTE_A == 'login') || (ROUTE_M == 'search' && ROUTE_C == 'search_admin' && ROUTE_A=='createindex')) return true;
			showmessage(L('admin_login'),'?m=admin&c=index&a=login');
		}
	}

	/**
 	 * ���hashֵ����֤�û����ݰ�ȫ��
 	 */
	final private function check_hash() {
		if(preg_match('/^public_/', ROUTE_A) || ROUTE_M =='admin' && ROUTE_C =='index' || in_array(ROUTE_A, array('login'))) {
			return true;
		}
		if(isset($_GET['jae_hash']) && $_SESSION['jae_hash'] != '' && ($_SESSION['jae_hash'] == $_GET['jae_hash'])) {
			return true;
		} elseif(isset($_POST['jae_hash']) && $_SESSION['jae_hash'] != '' && ($_SESSION['jae_hash'] == $_POST['jae_hash'])) {
			return true;
		} else {
			showmessage(L('hash_check_false'),HTTP_REFERER);
		}
	}

	/**
	 * ��̨��Ϣ�б�ģ��
	 * @param string $id ��ѡ�е�ģ������
	 * @param string $str form���е�������
	 */
	final public function admin_list_template($id = '', $str = '') {
		$templatedir = jae_PATH.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR;
		$pre = 'content_list';
		$templates = glob($templatedir.$pre.'*.tpl.php');
		if(empty($templates)) return false;
		$files = @array_map('basename', $templates);
		$templates = array();
		if(is_array($files)) {
			foreach($files as $file) {
				$key = substr($file, 0, -8);
				$templates[$key] = $file;
			}
		}
		ksort($templates);
		return form::select($templates, $id, $str,L('please_select'));
	}
}