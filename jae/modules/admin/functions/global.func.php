<?php

//echo "jae_base::load_app_func('global','admin') success";
function special_css($id,$css){
	$file = fopen(JAE_PATH."/statics/special_css/special_".$id.".css",'w');
	fwrite($file, $css);
	fclose($file);
	return JAE_PATH."/statics/special_css/special_".$id.".css";
	
	}

	
	/**
	 * ģ�����б�
	 * @param integer $siteid վ��ID����ȡ����վ���ʹ�õ�ģ�����б�
	 * @param integer $disable �Ƿ���ʾͣ�õ�{1:��,0:��}
	 */
	function template_list($siteid = '', $disable = 0) {

		$targetdir = JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR;

		$dir=dir($targetdir);

		while($entry=$dir->read())
		{
   			if($entry == '.' || $entry == '..') continue; 
			$list[]=$entry;
  		}


		//$list = jae_base::load_config('templates');
		
		$arr = $template = array();
		if ($siteid) {
			$site = jae_base::load_app_class('sites','admin');
			$info = $site->get_by_id($siteid);
			print_r($info);
			if($info['template']) $template = explode(',', $info['template']);
			
		}
		
		
		foreach ($list as $key=>$v) {
			$dirname = basename($v);
			if ($siteid && !in_array($dirname, $template)) continue;
			
			if (file_exists(JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$v.DIRECTORY_SEPARATOR.'config.php')) { 
				 $arr[$key] = include JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$v.DIRECTORY_SEPARATOR.'config.php';
				
				if (!$disable && isset($arr[$key]['disable']) && $arr[$key]['disable'] == 1) { 
					//unset($arr[$key]);
					continue;
				}
			} else {
				$arr[$key]['name'] = $v;
			}
			$arr[$key]['dirname']=$dirname;
		}
		return $arr; 
	}
	/**
	 * ����config�ļ�
	 * @param $config ������Ϣ
	 * @param $filename Ҫ���õ��ļ�����
	 */
	function set_config($config, $filename="system") {
		$configfile = CACHE_PATH.'configs'.DIRECTORY_SEPARATOR.$filename.'.php';
		if(!is_writable($configfile)) showmessage('Please chmod '.$configfile.' to 0777 !');
		$pattern = $replacement = array();
		foreach($config as $k=>$v) {
			if(in_array($k,array('js_path','css_path','img_path','attachment_stat','admin_log','gzip','errorlog','phpsso','phpsso_appid','phpsso_api_url','phpsso_auth_key','phpsso_version','connect_enable', 'upload_url','sina_akey', 'sina_skey', 'snda_enable', 'snda_status', 'snda_akey', 'snda_skey', 'qq_akey', 'qq_skey','qq_appid','qq_appkey','qq_callback','admin_url'))) {
				$v = trim($v);
				$configs[$k] = $v;
				$pattern[$k] = "/'".$k."'\s*=>\s*([']?)[^']*([']?)(\s*),/is";
	        	$replacement[$k] = "'".$k."' => \${1}".$v."\${2}\${3},";					
			}
		}
		$str = file_get_contents($configfile);
		$str = preg_replace($pattern, $replacement, $str);
		return jae_base::load_config('system','lock_ex') ? file_put_contents($configfile, $str, LOCK_EX) : file_put_contents($configfile, $str);		
	}
	
	/**
	 * ��ȡϵͳ��Ϣ
	 */
	function get_sysinfo() {
		$sys_info['os']             = PHP_OS;
		$sys_info['zlib']           = function_exists('gzclose');//zlib
		$sys_info['safe_mode']      = (boolean) ini_get('safe_mode');//safe_mode = Off
		$sys_info['safe_mode_gid']  = (boolean) ini_get('safe_mode_gid');//safe_mode_gid = Off
		$sys_info['timezone']       = function_exists("date_default_timezone_get") ? date_default_timezone_get() : L('no_setting');
		$sys_info['socket']         = function_exists('fsockopen') ;
		$sys_info['web_server']     = $_SERVER['SERVER_SOFTWARE'];
		$sys_info['phpv']           = phpversion();	
		$sys_info['fileupload']     = @ini_get('file_uploads') ? ini_get('upload_max_filesize') :'unknown';
		return $sys_info;
	}
	
	/**
	 * ���Ŀ¼��д��
	 * @param $dir Ŀ¼·��
	 */
	function dir_writeable($dir) {
		$writeable = 0;
		if(is_dir($dir)) {  
	        if($fp = @fopen("$dir/chkdir.test", 'w')) {
	            @fclose($fp);      
	            @unlink("$dir/chkdir.test"); 
	            $writeable = 1;
	        } else {
	            $writeable = 0; 
	        } 
		}
		return $writeable;
	}
	
	/**
	 * ���ش�����־��С����λMB
	 */
	function errorlog_size() {
		$logfile = CACHE_PATH.'error_log.php';
		if(file_exists($logfile)) {
			return $logsize = jae_base::load_config('system','errorlog') ? round(filesize($logfile) / 1048576 * 100) / 100 : 0;
		} 
		return 0;
	}
?>