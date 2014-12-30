<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);
jae_base::load_app_func('global','admin');

class index extends admin {
	public function __construct() {
		
		//$this->db = $pdo = new PDO();
		//$this->menu_db = jae_base::load_model('menu_model');
		
		//$this->db = new PDO();
	}
	
	public function init () {
	
	include $this->admin_tpl('main');
	}
	

	
	public function index_manage () {include $this->admin_tpl('index_manage');}
	

	
	//左侧菜单
	public function public_menu_left() {
		$menuid = intval($_GET['menuid']);
		$datas = admin::admin_menu($menuid);
		if (isset($_GET['parentid']) && $parentid = intval($_GET['parentid']) ? intval($_GET['parentid']) : 10) {
			foreach($datas as $_value) {
	        	if($parentid==$_value['id']) {
	        		echo '<li id="_M'.$_value['id'].'" class="on top_menu"><a href="javascript:_M('.$_value['id'].',\'?m='.$_value['m'].'&c='.$_value['c'].'&a='.$_value['a'].'\')" hidefocus="true" style="outline:none;">'.L($_value['name']).'</a></li>';
	        		
	        	} else {
	        		echo '<li id="_M'.$_value['id'].'" class="top_menu"><a href="javascript:_M('.$_value['id'].',\'?m='.$_value['m'].'&c='.$_value['c'].'&a='.$_value['a'].'\')"  hidefocus="true" style="outline:none;">'.L($_value['name']).'</a></li>';
	        	}      	
	        }
		} else {
			include $this->admin_tpl('left');
		}
		
	}
	//当前位置
	public function public_current_pos() {
		echo admin::current_pos($_GET['menuid']);
		exit;
	}
	

	
	public function public_ajax_add_panel() {
		$menuid = isset($_POST['menuid']) ? $_POST['menuid'] : exit('0');
		$menuarr = $this->menu_db->get_one(array('id'=>$menuid));
		$url = '?m='.$menuarr['m'].'&c='.$menuarr['c'].'&a='.$menuarr['a'].'&'.$menuarr['data'];
		$data = array('menuid'=>$menuid, 'userid'=>$_SESSION['userid'], 'name'=>$menuarr['name'], 'url'=>$url, 'datetime'=>SYS_TIME);
		$this->panel_db->insert($data, '', 1);
		$panelarr = $this->panel_db->listinfo(array('userid'=>$_SESSION['userid']), "datetime");
		foreach($panelarr as $v) {
			echo "<span><a onclick='paneladdclass(this);' target='right' href='".$v['url'].'&menuid='.$v['menuid']."&jae_hash=".$_SESSION['jae_hash']."'>".L($v['name'])."</a>  <a class='panel-delete' href='javascript:delete_panel(".$v['menuid'].");'></a></span>";
		}
		exit;
	}
	
	public function public_ajax_delete_panel() {
		$menuid = isset($_POST['menuid']) ? $_POST['menuid'] : exit('0');
		$this->panel_db->delete(array('menuid'=>$menuid, 'userid'=>$_SESSION['userid']));

		$panelarr = $this->panel_db->listinfo(array('userid'=>$_SESSION['userid']), "datetime");
		foreach($panelarr as $v) {
			echo "<span><a onclick='paneladdclass(this);' target='right' href='".$v['url']."&jae_hash=".$_SESSION['jae_hash']."'>".L($v['name'])."</a> <a class='panel-delete' href='javascript:delete_panel(".$v['menuid'].");'></a></span>";
		}
		exit;
	}
	public function public_main() { echo 22;
		jae_base::load_app_func('global');
		jae_base::load_app_func('admin');
		define('jae_VERSION', jae_base::load_config('version','jae_version'));
		define('jae_RELEASE', jae_base::load_config('version','jae_release'));	
	
		$admin_username = param::get_cookie('admin_username');
		$roles = getcache('role','commons');
		$userid = $_SESSION['userid'];
		$rolename = $roles[$_SESSION['roleid']];
		$r = $this->db->get_one(array('userid'=>$userid));
		$logintime = $r['lastlogintime'];
		$loginip = $r['lastloginip'];
		$sysinfo = get_sysinfo();
		$sysinfo['mysqlv'] = mysql_get_server_info();
		$show_header = $show_jae_hash = 1;
		/*检测框架目录可写性*/
		$jae_writeable = is_writable(jae_PATH.'base.php');
		$common_cache = getcache('common','commons');
		$logsize_warning = errorlog_size() > $common_cache['errorlog_size'] ? '1' : '0';
		$adminpanel = $this->panel_db->select(array('userid'=>$userid), '*',20 , 'datetime');
		$product_copyright = base64_decode('5LiK5rW355ub5aSn572R57uc5Y+R5bGV5pyJ6ZmQ5YWs5Y+4');
		$architecture = base64_decode('546L5Y+C5Yqg');
		$programmer = base64_decode('546L5Y+C5Yqg44CB6ZmI5a2m5pe644CB546L5a6Y5bqG44CB5byg5LqM5by644CB6YOd5Zu95paw44CB6YOd5bed44CB6LW15a6P5Lyf');
 		$designer = base64_decode('5byg5LqM5by6');
		ob_start();
		include $this->admin_tpl('main');
		$data = ob_get_contents();
		ob_end_clean();
		system_information($data);
	}



	
	//后台站点地图
	public function public_map() {
		 $array = admin::admin_menu(0);
		 $menu = array();
		 foreach ($array as $k=>$v) {
		 	$menu[$v['id']] = $v;
		 	$menu[$v['id']]['childmenus'] = admin::admin_menu($v['id']);
		 }
		 $show_header = true;
		 include $this->admin_tpl('map');
	}
	

	

}
?>