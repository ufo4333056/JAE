<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class setting extends admin {
	function __construct() {
		parent::__construct();
		$this->db =jae_base::load_sys_class('mysql');
		$this->table='site_config';
		$this->menuid=9;
	}
	
	function init () {
		$info = isset($_POST["info"])?$_POST["info"]:'';
		extract($info);

		$updateMessage='';
		if (isset($_POST['dosubmit']))
			{
				$sql1 = 'UPDATE site_config SET `value`="' . $siteUrl . '" WHERE `alias`="siteUrl"';
			 	$sql2 = 'UPDATE site_config SET `value`="' . $wangwang . '" WHERE `alias`="wangwang"';
				$sql3 = 'UPDATE site_config SET `value`="' . $bangpai . '" WHERE `alias`="bangpai"';
				$sql4 = 'UPDATE site_config SET `value`="' . $appkey . '" WHERE `alias`="appkey"';
				$sql5 = 'UPDATE site_config SET `value`="' . $secretKey . '" WHERE `alias`="secretKey"';
				$sql6 = 'UPDATE site_config SET `value`="' . $pid . '" WHERE `alias`="pid"';
				$sql7 = 'UPDATE site_config SET `value`="' . $logo . '" WHERE `alias`="logo"';
				$sql8 = 'UPDATE site_config SET `value`="' . $sessionkey . '" WHERE `alias`="sessionkey"';
				$pdo=new PDO();
				$result1 = $pdo->exec($sql1);
				$result2 = $pdo->exec($sql2);
				$result3 = $pdo->exec($sql3);
   				$result4 = $pdo->exec($sql4);
   				$result5 = $pdo->exec($sql5);
    			$result6 = $pdo->exec($sql6);
    			$result7 = $pdo->exec($sql7);
				$result8 = $pdo->exec($sql8);
    
    if ($result1 > 0 && $result2 > 0 && $result3 > 0 && $result4 > 0 && $result5 > 0 && $result6 > 0 && $result7>0 && $result8>0)
    {  showmessage(L('operation_success'));
    }
    else
    {
     showmessage(L('operation_failure'));
    }
}

//赋值表单默认值
$res = rGetSiteConfig();
extract($res);

		include $this->admin_tpl('setting');
	}

}
?>