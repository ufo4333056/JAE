<?php



function shop_collect($nick){
	//��ȡվ��������Ϣ
	$siteinfo=siteinfo(SITEID);          
	$appkey =$siteinfo['appkey']; 
	$secret =$siteinfo['secretkey'];
	jae_base::load_top('topclient');
	jae_base::load_top('ShopGetRequest');	
	
	$c = new TopClient;
	$c->appkey = $appkey;     //top appkey
	$c->secretKey = $secret;  //top secretkey
	//ʵ��������API��Ӧ��Request��
	$req = new ShopGetRequest();      //top ��װ��php�ļ�
	$req->setFields("sid,cid,title,nick,desc,pic_path,created,modified");
	$req->setNick($nick);
	$resp = $c->execute($req);		
	if ($resp->shop)
		{
			$array['sid'] = $resp->shop->sid;
            $array['shop_title'] = $resp->shop->title;
            $array['detail_url'] = 'http://shop'.$resp->shop->sid.'.taobao.com';
            $array['description'] = $resp->shop->desc;
            $array['pic_url'] = $resp->shop->pic_path;
			return $array;
        }else
			return $array = '�������������';
	
	}

/**
 * ��Ʒ�ɼ�
 * @param $numiid	��ƷID
 */

function goods_collect ($numiid){
	//��ȡվ��������Ϣ
      
	$siteinfo=siteinfo(SITEID);          
	$appkey =$siteinfo['appkey']; 
	$secret =$siteinfo['secretkey'];
    jae_base::load_top('topclient');
    jae_base::load_top('ItemGetRequest');
	$c= new TopClient;
    $c->appkey    = $appkey;
	$c->secretKey = $secret;
	$req = new ItemGetRequest;
	$req->setFields("detail_url,num_iid,title,nick,type,cid,seller_cids,props,input_pids,input_str,desc,pic_url,num,valid_thru,list_time,delist_time,stuff_status,location,price,post_fee,express_fee,ems_fee,has_discount,freight_payer,has_invoice,has_warranty,has_showcase,modified,increment,approve_status,postage_id,product_id,auction_point,property_alias,item_img,prop_img,sku,video,outer_id,is_virtual");
	$req->setNumIid($numiid);
	$resp = $c->execute($req, $sessionKey);
	// print_r($resp);
	if ($resp->item) {					
		$array['detail_url']    = $resp->item->detail_url; //��Ʒ����
		$array['num_iid']      = $resp->item->num_iid; //��ƷID
		$array['title']        = $resp->item->title; //��Ʒ����
		$array['nick']          = $resp->item->nick; //�����ǳ�
		$array['pic_url']       = $resp->item->pic_url; //��Ʒ��ͼ
		$array['num']          = $resp->item->num; //��Ʒ����
		$array['price']         = $resp->item->price; //��Ʒԭ�۸�
		$array['freight_payer'] = $resp->item->freight_payer; //��Ʒԭ�۸�
		$shop_array=shop_collect($array['nick']);
		$array['shop_url']=$shop_array['detail_url'];
		
;		return $array;
		
		
		} else{
			return $array = '�����������Ʒ';
		
	}
	
	
	}


/**
 * �ж�ģ���Ƿ�װ
 * @param $m	ģ������
 */
function module_exists($m = '') {
	if ($m=='admin') return true;
	$modules = getcache('modules', 'commons');
	$modules = array_keys($modules);
	//return in_array($m, $modules);
	return 1;
}

function jae_tag($op, $data, $html){
	$tag=jae_base::load_sys_class('template_cache');
	return $tag->jae_tag($op, $data, $html);
	
	}

/**
 * ��ȡ��ǰ��վ��ID
 */
function get_siteid() {
	static $siteid;
	if (!empty($siteid)) return $siteid;
	if (0) {
	//if (defined('IN_ADMIN')) {
		if ($d = param::get_cookie('siteid')) {
			$siteid = $d;
		} else {
			return '';
		}
	} else {
		//$data = getcache('sitelist', 'commons');
		$db = jae_base::load_model('site_model');
		$data=$db->select();
		$data =$data->fetchAll();
		
		if(!is_array($data)) return '1';
		$site_url = SITE_PROTOCOL.SITE_URL;
		foreach ($data as $v) {
		if( $v['uuid']==1) $siteid = $v['siteid'];
		}
	}
	if (empty($siteid)) $siteid = 1;
	return $siteid;
}


/*��Ƭ����*/

function block($id){

	$mysql=jae_base::load_sys_class('mysql');
	$result=$mysql->get_one('*','jae_block','id='.$id);
	return htmlspecialchars_decode($result['data']);
}

/*sql���ִ��*/


function query($sql){
	$db = jae_base::load_model('module_model');;
	$result=$db->query($sql);
	
	return $result;

}

/*
��Ʒ�������� 
*/
function get_prize_num($userid){
	$prize_db	 = jae_base::load_model('prize_model');
	
	  $sum=$prize_db->count("userid=$userid");
	
	if (intval($sum)) return $sum ;	else return 0 ;
	
	}
	


/**
 * ת�� javascript ������
 *
 * @param $str
 * @return mixed
 */
 function trim_script($str) {
	if(is_array($str)){
		foreach ($str as $key => $val){
			$str[$key] = trim_script($val);
		}
 	}else{
 		$str = preg_replace ( '/\<([\/]?)script([^\>]*?)\>/si', '&lt;\\1script\\2&gt;', $str );
		$str = preg_replace ( '/\<([\/]?)iframe([^\>]*?)\>/si', '&lt;\\1iframe\\2&gt;', $str );
		$str = preg_replace ( '/\<([\/]?)frame([^\>]*?)\>/si', '&lt;\\1frame\\2&gt;', $str );
		$str = preg_replace ( '/]]\>/si', ']] >', $str );
 	}
	return $str;
}	
/**
 * ��ȡ�û���Ϣ
 * ������$field�����û�������Ϣ,
 * ����field��ȡ�û�$field�ֶ���Ϣ
 */
 
 function get_memberinfo($userid, $field='') {
	 
	if(!is_numeric($userid)) {
		return false;
	} else {
		static $memberinfo;
		if (!isset($memberinfo[$userid])) {
			$member_db = jae_base::load_model('member_model');
			$memberinfo[$userid] = $member_db->get_one(array('userid'=>$userid));
		}
		if(!empty($field) && !empty($memberinfo[$userid][$field])) {
			
			return $memberinfo[$userid][$field];
		} else {
			return $memberinfo[$userid];
		}
	}
}

/**
* ������ת��Ϊ�ַ���
*
* @param	array	$data		����
* @param	bool	$isformdata	���Ϊ0����ʹ��new_stripslashes������ѡ������Ĭ��Ϊ1
* @return	string	�����ַ����������dataΪ�գ��򷵻ؿ�
*/
function array2string($data, $isformdata = 1) {
	if($data == '') return '';
	$data_arr =array();
				foreach ( $data as $k=>$v)  {$data_arr[$k]=$v;}	
	
	if($isformdata) $data_arr = new_stripslashes($data_arr);
	return addslashes(var_export($data_arr, TRUE));
}

/**
 * ���ؾ�addslashes��������ַ���������
 * @param $string ��Ҫ������ַ���������
 * @return mixed
 */
function new_addslashes($string){
	if(!is_array($string)) return addslashes($string);
	foreach($string as $key => $val) $string[$key] = new_addslashes($val);
	return $string;
}

/**
 * ���ؾ�stripslashes��������ַ���������
 * @param $string ��Ҫ������ַ���������
 * @return mixed
 */
function new_stripslashes($string) {
	if(!is_array($string)) return stripslashes($string);
	foreach($string as $key => $val) $string[$key] = new_stripslashes($val);
	return $string;
}

/**
 * ���ؾ�htmlspecialchars��������ַ���������
 * @param $obj ��Ҫ������ַ���������
 * @return mixed
 */
function new_html_special_chars($string) {
	if(!is_array($string)) return htmlspecialchars($string);
	foreach($string as $key => $val) $string[$key] = new_html_special_chars($val);
	return $string;
}
/**
* ���ַ���ת��Ϊ����
*
* @param	string	$data	�ַ���
* @return	array	���������ʽ�������dataΪ�գ��򷵻ؿ�����
*/
function string2array($data) {
	preg_match_all ("/[\((][\s\S]*[\))]/",$data,$out, PREG_PATTERN_ORDER);
	if($data == '') return array();	
	$str= str_replace("(","",$out[0][0]);	
	$crr=str_replace(")","", $str);
	
	 $crr=str_replace("'","", $crr);
	 $crr=substr($crr,0,-2);

	$crr=explode(',',$crr);
	foreach ($crr as $v){ 
		$row=explode('=>',$v);	
		$res[trim($row[0])] = trim($row[1]);	
	}
	
	return $res;
}

function string2array2($data) {
	preg_match_all("/[\'](.*?)[\']/",$data,$matches);
	$array = array();
	$sum=count($matches[1]);
	for ($k=0;$k<=$sum;$k=$k+2){
		
		 $array[$matches[1][$k]]=chop($matches[1][$k+1]);

	}


return $array;
}

/*sql���ִ��*/


function position($where){
	$mysql=jae_base::load_sys_class('mysql');
	$result=$mysql->get_one('*','jae_position',"posid='$where'");
	
	return $result['title'];

}

/**
 * ͨ��id��ȡ��ʾ�˵�
 * @param  $menuid ��ǰ�˵�ID
 * @param  $keyid �˵�keyid
 * @param  $space �˵������
 * @param  $tyoe 1 ���ؼ�������ӣ�����·������ 3 ��������·�����飬2���ص�ǰ�����˵����ƣ�4 ֱ�ӷ���ID
 * @param  $result �ݹ�ʹ���ֶ�1
 * @param  $infos �ݹ�ʹ���ֶ�2
 */
 
 function get_menu($menuid,$infos,$result=array()){
	 if (!$infos){
	 $db =jae_base::load_sys_class('mysql');
	 $menulist=$db->select('*','jae_menu');
	 foreach ($menulist as $k => $v){ $infos[$v['id']]=$v; }
	 }
	
	if($menuid>0) {
			$result[]= $infos[$menuid];
			//print_r($result);
			$infos[$menuid]['parentid'];
			
			return  get_menu($infos[$menuid]['parentid'],$infos,$result);
		} else {
		
				krsort($result);
				foreach ($result as $k=>$c){$menu[]=$c;}
				
				return $menu;
				
			
		}
	 
	 }
 
 
 

/**
 * ����sql��䣬�������$in_cloumn ���ɸ�ʽΪ IN('a', 'b', 'c')
 * @param $data ������������ַ���
 * @param $front ���ӷ�
 * @param $in_column �ֶ�����
 * @return string
 */
function to_sqls($data, $front = ' AND ', $in_column = false) {
    if($in_column && is_array($data)) {
        $ids = '\''.implode('\',\'', $data).'\'';
        $sql = "$in_column IN ($ids)";
        return $sql;
    } else {
        if ($front == '') {
            $front = ' AND ';
        }
        if(is_array($data) && count($data) > 0) {
            $sql = '';
            foreach ($data as $key => $val) {
                $sql .= $sql ? " $front `$key` = '$val' " : " `$key` = '$val' ";
            }
            return $sql;
        } else {
            return $data;
        }
    }
}
/**
 * ��ҳ����
 *
 * @param $num ��Ϣ����
 * @param $curr_page ��ǰ��ҳ
 * @param $perpage ÿҳ��ʾ��
 * @param $urlrule URL����
 * @param $array ��Ҫ���ݵ����飬�������Ӷ���ķ���
 * @return ��ҳ
 */
function pages($num, $curr_page, $perpage = 20, $urlrule = '', $array = array(),$setpages = 10) {

    if(defined('URLRULE') && $urlrule == '') {
        $urlrule = URLRULE;
        $array = $GLOBALS['URL_ARRAY'];
    } elseif($urlrule == '') {
    	$urlrule = url_par('page={$page}');
	
        // $urlrule =get_url();
      
    }
    $multipage = '';
    if($num > $perpage) {
        $page = $setpages+1;
        $offset = ceil($setpages/2-1);
        $pages = ceil($num / $perpage);
        if (defined('IN_ADMIN') && !defined('PAGES')) define('PAGES', $pages);
        $from = $curr_page - $offset;
        $to = $curr_page + $offset;
        $more = 0;
        if($page >= $pages) {
            $from = 2;
            $to = $pages-1;
        } else {
            if($from <= 1) {
                $to = $page-1;
                $from = 2;
            }  elseif($to >= $pages) {
                $from = $pages-($page-2);
                $to = $pages-1;
            }
            $more = 1;
        }
        $multipage .= '<a class="a1">'.$num.L('page_item').'</a>';

        if($curr_page>0) {
            $multipage .= ' <a href="'.pageurl($urlrule, $curr_page-1, $array).'" class="a1">'.L('previous').'</a>';
            if($curr_page==1) {
                $multipage .= ' <span>1</span>';
            } elseif($curr_page>6 && $more) {
                $multipage .= ' <a href="'.pageurl($urlrule, 1, $array).'">1</a>..';
            } else {
                $multipage .= ' <a href="'.pageurl($urlrule, 1, $array).'">1</a>';
            }
        }
        for($i = $from; $i <= $to; $i++) {
            if($i != $curr_page) {
                $multipage .= ' <a href="'.pageurl($urlrule, $i, $array).'">'.$i.'</a>';
            } else {
                $multipage .= ' <span>'.$i.'</span>';
            }
        }
        if($curr_page<$pages) {
            if($curr_page<$pages-5 && $more) {
                $multipage .= ' ..<a href="'.pageurl($urlrule, $pages, $array).'">'.$pages.'</a> <a href="'.pageurl($urlrule, $curr_page+1, $array).'" class="a1">'.L('next').'</a>';
            } else {
                $multipage .= ' <a href="'.pageurl($urlrule, $pages, $array).'">'.$pages.'</a> <a href="'.pageurl($urlrule, $curr_page+1, $array).'" class="a1">'.L('next').'</a>';
            }
        } elseif($curr_page==$pages) {
            $multipage .= ' <span>'.$pages.'</span> <a href="'.pageurl($urlrule, $curr_page, $array).'" class="a1">'.L('next').'</a>';
        } else {
            $multipage .= ' <a href="'.pageurl($urlrule, $pages, $array).'">'.$pages.'</a> <a href="'.pageurl($urlrule, $curr_page+1, $array).'" class="a1">'.L('next').'</a>';
        }
    }
    return $multipage;
}
/**
 * ���ط�ҳ·��
 *
 * @param $urlrule ��ҳ����
 * @param $page ��ǰҳ
 * @param $array ��Ҫ���ݵ����飬�������Ӷ���ķ���
 * @return ������URL·��
 */
function pageurl($urlrule, $page, $array = array()) {
    if(strpos($urlrule, '~')) {
        $urlrules = explode('~', $urlrule);
        $urlrule = $page < 2 ? $urlrules[0] : $urlrules[1];
    }
    $findme = array('{$page}');
    $replaceme = array($page);
    if (is_array($array)) foreach ($array as $k=>$v) {
        $findme[] = '{$'.$k.'}';
        $replaceme[] = $v;
    }
    $url = str_replace($findme, $replaceme, $urlrule);
    $url = str_replace(array('http://','//','~'), array('~','/','http://'), $url);
    return  $url;
}

/**
 * URL·��������pages �����ĸ�������
 *
 * @param $par ������Ҫ�����ı��� Ĭ��Ϊ��page={$page}
 * @param $url URL��ַ
 * @return URL
 */
function url_par($par, $url = '') {
    if($url == '') $url = get_url();
    $pos = strpos($url, '?');
    if($pos === false) {
        $url .= '?'.$par;
    } else {
		
      $querystring= $querystring = substr(strstr($url, '?'), 1);	//
	
	  $ps= strpos($querystring,'&page');
	 if ($ps){ $querystring= substr($querystring,0,$ps);}
	
	
	 	
        /*parse_str($querystring, $pars);
		
        $query_array = array();
        foreach($pars as $k=>$v) {
            if($k != 'page') $query_array[$k] =  $v; 
        }
        $querystring = http_build_query($query_array).'&'.$par;*/
		
		$querystring = $querystring.'&'.$par;
		
        $url = substr($url, 0, $pos).'?'.$querystring;
    }
    return $url;
}


/**
 * ��ȫ���˺���
 *
 * @param $string
 * @return string
 */
function safe_replace($string) {
    $string = str_replace('%20','',$string);
    $string = str_replace('%27','',$string);
    $string = str_replace('%2527','',$string);
    $string = str_replace('*','',$string);
    $string = str_replace('"','&quot;',$string);
    $string = str_replace("'",'',$string);
    $string = str_replace('"','',$string);
    $string = str_replace(';','',$string);
    $string = str_replace('<','&lt;',$string);
    $string = str_replace('>','&gt;',$string);
    $string = str_replace("{",'',$string);
    $string = str_replace('}','',$string);
    $string = str_replace('\\','',$string);
    return $string;
}

/**
 * ��ȡ��ǰҳ������URL��ַ
 */
function get_url() {
    $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
  //  $php_self = $_SERVER['PHP_SELF'] ? safe_replace($_SERVER['PHP_SELF']) : safe_replace($_SERVER['SCRIPT_NAME']);

    //$path_info = isset($_SERVER['PATH_INFO']) ? safe_replace($_SERVER['PATH_INFO']) : '';
    $relate_url = safe_replace($_SERVER['REQUEST_URI']) . $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.safe_replace($_SERVER['QUERY_STRING']) : $path_info);
    $relate_url=str_replace("&amp", "&",  $relate_url);
    return $relate_url;
}


/**
* �����ļ�����
*
* @param	string		$language	��ʾ��
* @param	array		$pars	ת�������,��ά���� ,'key1'=>'value1','key2'=>'value2',
* @param	string		$modules ���ģ��֮���ð�Ƕ��Ÿ������磺member,guestbook
* @return	string		�����ַ�
*/
function L($language = 'no_language',$pars = array(), $modules = '') {
	static $LANG = array();
	static $LANG_MODULES = array();
	static $lang = '';
	if(defined('IN_ADMIN')) {
		$lang = SYS_STYLE ? SYS_STYLE : 'zh-cn';
	} else {
		$lang = jae_base::load_config('system','lang');
	}
	if(!$LANG) {
		
		require_once JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'languages'.DIRECTORY_SEPARATOR.$lang.DIRECTORY_SEPARATOR.'system.lang.php';
		
		if(defined('IN_ADMIN')) require_once JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'languages'.DIRECTORY_SEPARATOR.$lang.DIRECTORY_SEPARATOR.'system_menu.lang.php';
		if(file_exists(JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'languages'.DIRECTORY_SEPARATOR.$lang.DIRECTORY_SEPARATOR.ROUTE_M.'.lang.php')) require JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'languages'.DIRECTORY_SEPARATOR.$lang.DIRECTORY_SEPARATOR.ROUTE_M.'.lang.php';
	}
	if(!empty($modules)) {
		$modules = explode(',',$modules);
		foreach($modules AS $m) {
			if(!isset($LANG_MODULES[$m])) require JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'languages'.DIRECTORY_SEPARATOR.$lang.DIRECTORY_SEPARATOR.$m.'.lang.php';
		}
	}
	if(!array_key_exists($language,$LANG)) {
		return $language;
	} else {
		$language = $LANG[$language];
		if($pars) {
			foreach($pars AS $_k=>$_v) {
				$language = str_replace('{'.$_k.'}',$_v,$language);
			}
		}
		return $language;
	}
}

/**
 * ģ�����
 *
 * @param $module
 * @param $template
 * @param $istag
 * @return unknown_type
 */
function template($module = 'content', $template = 'index', $style = '') {

	
	$module = str_replace('/', DIRECTORY_SEPARATOR, $module);
	if(!empty($style) && preg_match('/([a-z0-9\-_]+)/is',$style)) {
	} elseif (empty($style) && !defined('STYLE')) {
		if(defined('SITEID')) {
			$siteid = SITEID;
		} else {
			//$siteid = param::get_cookie('siteid');
		}
		if (!$siteid) $siteid = 1;
		$sitelist = getcache('sitelist','commons');
		if(!empty($siteid)) {
			$style = $sitelist[$siteid]['default_style'];
		}
	} elseif (empty($style) && defined('STYLE')) {
		$style = STYLE;
	} else {
		$style = 'default';
	}
	if(!$style) $style = 'default';
	$template_cache = jae_base::load_sys_class('template_cache');
	$compiledtplfile = JAE_PATH.'caches'.DIRECTORY_SEPARATOR.'caches_template'.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.php';
	if(file_exists(JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html')) {
		if(!file_exists($compiledtplfile) || (@filemtime(JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html') > @filemtime($compiledtplfile))) {
			$template_cache->template_compile($module, $template, $style);
		}
	} else {
		$compiledtplfile = JAE_PATH.'caches'.DIRECTORY_SEPARATOR.'caches_template'.DIRECTORY_SEPARATOR.'default'.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.php';
		if(!file_exists($compiledtplfile) || (file_exists(JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'default'.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html') && filemtime(JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'default'.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html') > filemtime($compiledtplfile))) {
			$template_cache->template_compile($module, $template, 'default');
		} elseif (!file_exists(JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'default'.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html')) {
			showmessage('Template does not exist.'.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html');
		}
	}
	return $compiledtplfile;
}

/**
 * ģ�����
 *
 * @param $module
 * @param $template
 * @param $istag
 * @return unknown_type
 */
function template0000($module = 'content', $template = 'index', $style = '') {

	
	$module = str_replace('/', DIRECTORY_SEPARATOR, $module);
	$siteid=SITEID;
	if (!$siteid) $siteid = 1;
	if (empty($style)){
	$sitelist = getcache('sitelist','commons');
	
	$style = $sitelist[$siteid]['default_style'];
	}
	
	if(!$style) $style = 'default';
	
	$compiledtplfile = JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html';
	if(file_exists(JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html')) {
		
		} else {
		$compiledtplfile = JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'default'.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html';
		if (!file_exists(JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'default'.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html')) {
			showmessage('Template does not exist.'.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.$template.'.html');
		}
	}
	return $compiledtplfile;
}


/**
 * д�뻺�棬Ĭ��Ϊ�ļ����棬�����ػ������á�
 * @param $name ��������
 * @param $data ��������
 * @param $filepath ����·����ģ�����ƣ� caches/cache_$filepath/
 * @param $type ��������[file,memcache,apc]
 * @param $config ��������
 * @param $timeout ����ʱ��
 */
function setcache($name, $data, $filepath='', $type='file', $config='', $timeout=0) {
	jae_base::load_sys_class('cache_factory','',0);
	if($config) {
		$cacheconfig = jae_base::load_config('cache');
		$cache = cache_factory::get_instance($cacheconfig)->get_cache($config);
	} else {
		$cache = cache_factory::get_instance()->get_cache($type);
	}

	return $cache->set($name, $data, $timeout, '', $filepath);
}


	//�������ݿ⻺��
function getcache_sql($name, $filepath='', $type='file', $config='') {
	$cache_db = jae_base::load_model('cache_model');				
	$datas=$cache_db->get_one( "filename = '".$name.".cache.php'" );
	$data=string2array($datas['data']);
	return $data;
	}

/**
 * ��ȡ���棬Ĭ��Ϊ�ļ����棬�����ػ������á�
 * @param string $name ��������
 * @param $filepath ����·����ģ�����ƣ� caches/cache_$filepath/
 * @param string $config ��������
 */
function getcache($name, $filepath='', $type='file', $config='') {
	jae_base::load_sys_class('cache_factory','',0);
	if($config) {
		$cacheconfig = jae_base::load_config('cache');
		$cache = cache_factory::get_instance($cacheconfig)->get_cache($config);
	} else {
		$cache = cache_factory::get_instance()->get_cache($type);
	}
	return $cache->get($name, '', '', $filepath);
}

/**
 * ɾ�����棬Ĭ��Ϊ�ļ����棬�����ػ������á�
 * @param $name ��������
 * @param $filepath ����·����ģ�����ƣ� caches/cache_$filepath/
 * @param $type ��������[file,memcache,apc]
 * @param $config ��������
 */
function delcache($name, $filepath='', $type='file', $config='') {
	jae_base::load_sys_class('cache_factory','',0);
	if($config) {
		$cacheconfig = jae_base::load_config('cache');
		$cache = cache_factory::get_instance($cacheconfig)->get_cache($config);
	} else {
		$cache = cache_factory::get_instance()->get_cache($type);
	}
	return $cache->delete($name, '', '', $filepath);
}

/**
 * ��ȡ���棬Ĭ��Ϊ�ļ����棬�����ػ������á�
 * @param string $name ��������
 * @param $filepath ����·����ģ�����ƣ� caches/cache_$filepath/
 * @param string $config ��������
 */
function getcacheinfo($name, $filepath='', $type='file', $config='') {
	jae_base::load_sys_class('cache_factory');
	if($config) {
		$cacheconfig = jae_base::load_config('cache');
		$cache = cache_factory::get_instance($cacheconfig)->get_cache($config);
	} else {
		$cache = cache_factory::get_instance()->get_cache($type);
	}
	return $cache->cacheinfo($name, '', '', $filepath);
}


/**
 * ��ȡվ�����Ϣ
 * @param $siteid   վ��ID
 */
function siteinfo($siteid) {
	static $sitelist; 
	if (empty($sitelist)) $sitelist  = getcache('sitelist','commons');
	$site_db = jae_base::load_model('site_model');
	$siteinfo=$site_db->get_one("siteid=$siteid");
	$sitelist[$siteid]['version']=$siteinfo['version'];
	$sitelist[$siteid]['date']=$siteinfo['date'];
	return isset($sitelist[$siteid]) ? $sitelist[$siteid] : ''; 
}


/**
 * ��ʾ��Ϣҳ����ת����ת��ַ����������飬ҳ�����ʾ�����ַ���û�ѡ��Ĭ����ת��ַΪ����ĵ�һ��ֵ��ʱ��Ϊ5�롣
 * showmessage('��¼�ɹ�', array('Ĭ����ת��ַ'=>'http://www.phpcms.cn'));
 * @param string $msg ��ʾ��Ϣ
 * @param mixed(string/array) $url_forward ��ת��ַ
 * @param int $ms ��ת�ȴ�ʱ��
 */
function showmessage($msg, $url_forward = 'goback', $ms = 1.250, $dialog = '', $returnjs = '') {
	
	if(defined('IN_ADMIN')) {
		
		include(admin::admin_tpl('showmessage', 'admin'));
	} else {
		include(template('content', 'message'));
	}
	exit;
}


/**
 * �ַ���ȡ ֧��UTF8/GBK
 * @param $string
 * @param $length
 * @param $dot
 */

function str_cut($string, $length, $dot = '...') {
	$strlen = strlen($string);
	if($strlen <= $length) return $string;
	$string = str_replace(array(' ','&nbsp;', '&amp;', '&quot;', '&#039;', '&ldquo;', '&rdquo;', '&mdash;', '&lt;', '&gt;', '&middot;', '&hellip;'), array(' ',' ', '&', '"', "'", '��', '��', '��', '<', '>', '��', '��'), $string);
	$strcut = '';
	if(strtolower(CHARSET) == 'utf-8') {
		$length = intval($length-strlen($dot)-$length/3);
		$n = $tn = $noc = 0;
		while($n < strlen($string)) {
			$t = ord($string[$n]);
			if($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {
				$tn = 1; $n++; $noc++;
			} elseif(194 <= $t && $t <= 223) {
				$tn = 2; $n += 2; $noc += 2;
			} elseif(224 <= $t && $t <= 239) {
				$tn = 3; $n += 3; $noc += 2;
			} elseif(240 <= $t && $t <= 247) {
				$tn = 4; $n += 4; $noc += 2;
			} elseif(248 <= $t && $t <= 251) {
				$tn = 5; $n += 5; $noc += 2;
			} elseif($t == 252 || $t == 253) {
				$tn = 6; $n += 6; $noc += 2;
			} else {
				$n++;
			}
			if($noc >= $length) {
				break;
			}
		}
		if($noc > $length) {
			$n -= $tn;
		}
		$strcut = substr($string, 0, $n);
		$strcut = str_replace(array('��', '&', '"', "'", '��', '��', '��', '<', '>', '��', '��'), array(' ', '&amp;', '&quot;', '&#039;', '&ldquo;', '&rdquo;', '&mdash;', '&lt;', '&gt;', '&middot;', '&hellip;'), $strcut);
	} else {
		$dotlen = strlen($dot);
		$maxi = $length - $dotlen - 1;
		$current_str = '';
		$search_arr = array('&',' ', '"', "'", '��', '��', '��', '<', '>', '��', '��','��');
		$replace_arr = array('&amp;','&nbsp;', '&quot;', '&#039;', '&ldquo;', '&rdquo;', '&mdash;', '&lt;', '&gt;', '&middot;', '&hellip;',' ');
		$search_flip = array_flip($search_arr);
		for ($i = 0; $i < $maxi; $i++) {
			$current_str = ord($string[$i]) > 127 ? $string[$i].$string[++$i] : $string[$i];
			if (in_array($current_str, $search_arr)) {
				$key = $search_flip[$current_str];
				$current_str = str_replace($search_arr[$key], $replace_arr[$key], $current_str);
			}
			$strcut .= $current_str;
		}
	}
	return $strcut.$dot;
}












/**
 * ��ȡվ��������Ϣ
 * @global type $pdo
 * @return type 
 */
function rGetSiteConfig()
{
    $pdo=new PDO();
    $res = array();
    $sql = 'SELECT `value`, `alias` FROM site_config';
    if (!$result = $pdo->query($sql))
    {
        $sql_info = $pdo->errorInfo(); //ȡ�ô�����Ϣ����(ע��˴�ȡ����$pdo��errorInfo������$sql��)
        echo '����' . $sql_info[2]; //���������Ϣ
    }
    else
    {
        foreach ($pdo->query($sql) as $row)
        {
            $res[$row['alias']] = $row['value'];
        }
        $siteConfigCacheSet = $cacheService->set('siteConfig', $res, 0);
        return $res;
    }
}

/**
 * ��ȡ�Ƽ�λ����
 * @global type $pdo
 * @param type $type  type��goods article shop
 * @return type 
 */
function rGetPromotePositionArr($type)
{
    $pdo=new PDO();
    $res = array();
    $sql = 'SELECT `posid`, `name` FROM `jae_position` ';
    if (!$result = $pdo->query($sql))
    {
        $sql_info = $pdo->errorInfo(); //ȡ�ô�����Ϣ����(ע��˴�ȡ����$pdo��errorInfo������$sql��)
        echo '����' . $sql_info[2]; //���������Ϣ
    }
    else
    {
        foreach ($pdo->query($sql) as $row)
        {
            $res[$row['posid']] = $row['name'];
        }
        return $res;
    }
}

/**
 * ��ȡƵ������
 * @global type $pdo
 * @return type 
 */
function rGetPindaoArr()
{
    $pdo=new PDO();
    $res = array();
    $sql = 'SELECT `id`, `name` FROM `jae_channel`';
    if (!$result = $pdo->query($sql))
    {
        $sql_info = $pdo->errorInfo(); //ȡ�ô�����Ϣ����(ע��˴�ȡ����$pdo��errorInfo������$sql��)
        echo '����' . $sql_info[2]; //���������Ϣ
    }
    else
    {
        foreach ($pdo->query($sql) as $row)
        {
            $res[$row['id']] = $row['name'];
        }
        return $res;
    }
}

/**
 * ��ȡ��������
 * @global type $pdo
 * @return type 
 */
function rGetCategoryArr($limit = 100)
{
    $pdo=new PDO();
    $res = array();
    $sql = 'SELECT `typeid`, `name` FROM `jae_goods_type` ORDER BY `typeid` ASC LIMIT ' . $limit;
    if (!$result = $pdo->query($sql))
    {
        $sql_info = $pdo->errorInfo(); //ȡ�ô�����Ϣ����(ע��˴�ȡ����$pdo��errorInfo������$sql��)
        echo '����' . $sql_info[2]; //���������Ϣ
    }
    else
    {
        foreach ($pdo->query($sql) as $row)
        {
            $res[$row['typeid']] = $row['name'];
        }
        return $res;
    }
}

/**
 * URL��֤����
 * @param type $attribute
 * @return boolean 
 */
function rRuleUrl($attribute)
{
    if (preg_match('/^http:\/\/.*?i/', $attribute))
        return TRUE;
    else
        return FALSE;
}

/**
 * ������֤����
 * @param type $attribute
 * @return boolean 
 */
function rRuleNum($attribute)
{
    if (preg_match('/^\d+$/', $attribute))
        return TRUE;
    else
        return FALSE;
}

/**
 * ������ĸ��֤����
 * @param type $attribute
 * @return boolean 
 */
function rRuleLetterAndNum($attribute)
{
    if (preg_match('/[^a-zA-Z0-9]/', $attribute))
        return TRUE;
    else
        return FALSE;
}

/**
 * ��ĸ��֤����
 * @param type $attribute
 * @return boolean 
 */
function rRuleLetter($attribute)
{
    if (preg_match('/[^a-zA-Z]/', $attribute))
        return TRUE;
    else
        return FALSE;
}

/**
 * �۸���֤����
 * @param type $attribute
 * @return boolean 
 */
function rRulePrice($attribute)
{
    if (preg_match('/^\d+(\.\d+)?$/', $attribute))
        return TRUE;
    else
        return FALSE;
}

/**
 * 
 * @return  
 */
function rRuleClient()
{
        echo 'CTMDb13xD';
}



/**
 * ��ȡ��Ӧ�Ƽ�λ����Ʒ 
 * @global type $pdo 
 * @param type $promoteAlias �Ƽ�λϵͳ����
 * @param type $categoryId   ��Ʒ��������
 * @param type $limit        ����
 * @return type 
 */
function rGetPromoteGoods($posid, $categoryId = -1, $limit = 20)
{
    $pdo=new PDO();
    $resultArr = array();
    $sql = 'SELECT * FROM `jae_position` WHERE `posid`="' . $posid . '"';
    $rs = $pdo->query($sql);
    $row = $rs->fetch();
    if (isset($row['id']))
    {
        if (intval($categoryId != -1))
            $sql = 'SELECT * FROM `jae_goods` WHERE `promote_id`="' . $row['id'] . '" AND `end_time`>' . time() .' AND `begin_time`<'. time() . ' AND `category_id`="' . $categoryId . '" ORDER BY `id` DESC LIMIT ' . $limit;
        else
            $sql = 'SELECT * FROM `jae_goods` WHERE `promote_id`="' . $row['id'] . '"   ORDER BY `end_time` DESC LIMIT ' . $limit;
        $rs = $pdo->query($sql);
        $resultArr = $rs->fetchAll();
    }
    return $resultArr;
}

/**
 * ��ȡ��Ӧ�Ƽ�λ����Ʒ 
 * @global type $pdo 
 * @param type $promoteAlias �Ƽ�λϵͳ����
 * @param type $categoryId   ��Ʒ��������
 * @param type $limit        ����
 * @return type 
 */
function get_goods( $promote_id , $limit = 10)
{
    $pdo=new PDO();

  
       // if (intval($categoryId != -1))
          //  $sql = 'SELECT * FROM `goods` WHERE `promote_id`="' .$promote_id  . '" AND `end_time`>' . time() .' AND `begin_time`<'. time(). ' AND `category_id`="' . $categoryId . '" ORDER BY `id` DESC LIMIT ' . $limit;
      //  else
        $sql = 'SELECT * FROM `jae_goods` WHERE  `promote_id`= "'.$promote_id. '" AND `begin_time`< "' . time() .'" ORDER BY `listorder`,`id` DESC LIMIT ' . $limit;
        $rs = $pdo->query($sql);
        $resultArr = $rs->fetchAll();
		
   
    return $resultArr;
}

function get_goods_asc( $promote_id , $limit = 10)
{
    $pdo=new PDO();

  
       // if (intval($categoryId != -1))
          //  $sql = 'SELECT * FROM `goods` WHERE `promote_id`="' .$promote_id  . '" AND `end_time`>' . time() .' AND `begin_time`<'. time(). ' AND `category_id`="' . $categoryId . '" ORDER BY `id` DESC LIMIT ' . $limit;
      //  else
            $sql = 'SELECT * FROM `jae_goods` WHERE  `promote_id`= "'.$promote_id.'" AND  `listorder`!= 0  ORDER BY `listorder`,`id` ASC LIMIT ' . $limit;
        $rs = $pdo->query($sql);
        $resultArr = $rs->fetchAll();
		
   
    return $resultArr;
}

/**
 * ��ȡ��Ӧ�Ƽ�λ����Ʒ 
 * @global type $pdo 
 * @param type $promoteAlias �Ƽ�λϵͳ����
 * @param type $categoryId   ��Ʒ��������
 * @param type $limit        ����
 * @return type 
 */



function get_array( $num_iid , $limit = 100)
{
    $pdo=new PDO();

  
       // if (intval($categoryId != -1))
          //  $sql = 'SELECT * FROM `goods` WHERE `promote_id`="' .$promote_id  . '" AND `end_time`>' . time() .' AND `begin_time`<'. time(). ' AND `category_id`="' . $categoryId . '" ORDER BY `id` DESC LIMIT ' . $limit;
      //  else
            $sql = 'SELECT * FROM `jae_goods` WHERE `num_iid` in ('.$num_iid.')  ORDER BY `id` DESC LIMIT ' . $limit;
        $rs = $pdo->query($sql);
        $resultArr = $rs->fetchAll();
		//print_r($resultArr);
   
    return $resultArr;
}






/**
 * ��ȡ�������ӣ�������飩
 * @global type $pdo
 * @param type $limit
 * @return type 
 */
function rGetFriendLink($limit = 10)
{
    $pdo=new PDO();
    $sql = 'SELECT * FROM `friend_link` WHERE 1 ORDER BY `id` DESC LIMIT ' . $limit;
    $rs = $pdo->query($sql);
    $resultArr = $rs->fetchAll();

    return $resultArr;
}



/**
 * ��ȡ�Ƽ�λ��ϸ��Ϣ
 * @global type $pdo
 * @param type $alias
 * @return type 
 */
function rGetPromotePositionDetail($alias)
{
    $pdo=new PDO();
    $resultArr = array();
    $sql = 'SELECT * FROM `jae_position` WHERE `alias`="' . $alias . '"';

    $rs = $pdo->query($sql);
    $row = $rs->fetch();
    return $row;
}

/**
 * �ж���Ʒ�Ƿ���ڣ�����1 or 0
 * @global type $pdo
 * @param type $numIid
 * @return type 
 */
function rGetGoodsExists($numIid)
{
    $pdo=new PDO();
    $sql = 'SELECT `id` FROM `jae_goods` WHERE `num_iid`="' . $numIid . '"';
    $result = $pdo->exec($sql);
    return $result;
}

/**
 * ��ȡ������ϸ��Ϣ
 * @global type $pdo
 * @param type $id
 * @return type 
 */
function rGetCategoryDetail($id = 0, $alias = '')
{
    $pdo=new PDO();
    if ($alias == '')
        $sql = 'SELECT * FROM `category` WHERE `id`=' . $id;
    else
        $sql = 'SELECT * FROM `category` WHERE `alias`="' . $alias . '"';
    $rs = $pdo->query($sql);
    $result = $rs->fetch($sql);
    return $result;
}




?>