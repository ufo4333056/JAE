<?php
defined('IN_JAE') or exit('No permission resources.');defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class content extends admin {
	function __construct() {
		parent::__construct();
		$this->block_db = jae_base::load_model('block_model');
		$this->weblink_db = jae_base::load_model('weblink_model');
		$this->position_data_db = jae_base::load_model('position_data_model');
		
	
	
		$this->menuid=14;
	}
	
	function init () {
		$a=$_GET['op'];
	}
	function position () {	
		
		$sql = '';
		$array = array();
		$posid = intval($_GET['posid']);
		$order = $_GET['order'];
		$data['limit'] = $_GET['num'];
		$thumb = (empty($_GET['thumb']) || intval($_GET['thumb']) == 0) ? 0 : 1;
		$siteid = $GLOBALS['siteid'] ? $GLOBALS['siteid'] : SITEID;
		$catid = (empty($_GET['catid']) || $_GET['catid'] == 0) ? '' : intval($_GET['catid']);
		if($catid) {
			$siteids = getcache('category_content','commons');
			if(!$siteids[$catid]) return false;
			$siteid = $siteids[$catid];
			$this->category = getcache('category_content_'.$siteid,'commons');
		}
		if($catid && $this->category[$catid]['child']) {
			$catids_str = $this->category[$catid]['arrchildid'];
			$pos = strpos($catids_str,',')+1;
			$catids_str = substr($catids_str, $pos);
			$sql = "`catid` IN ($catids_str) AND ";
		}  elseif($catid && !$this->category[$catid]['child']) {
				$sql = "`catid` = '$catid' AND ";
		}
		if($thumb) $sql .= "`thumb` = '1' AND ";
		if(isset($_GET['where'])) $sql .= $_GET['where'].' AND ';
		if(isset($_GET['expiration']) && $_GET['expiration']==1) $sql .= '(`expiration` >= \''.SYS_TIME.'\' OR `expiration` = \'0\' ) AND ';
		$sql .= "`posid` = '$posid' ";
		$pos_arr = $this->position_data_db->select($sql, '*', $data['limit'],$order);
		if(!empty($pos_arr)) {
			foreach ($pos_arr as $info) {
				$key = $info['catid'].'-'.$info['id'];
				$array[$key] = string2array($info['data']);
				//$array[$key]['url'] = go($info['catid'],$info['id']);
				$array[$key]['posid']=$info['posid'];
				$array[$key]['modelid']=$info['modelid'];
				$array[$key]['url']=$info['url'];
				$array[$key]['thumb']=$info['thumb'];
				$array[$key]['id'] = $info['id'];
				$array[$key]['catid'] = $info['catid'];
				$array[$key]['listorder'] = $info['listorder'];
				$array[$key]['begin_time'] = $info['begin_time'];
				$array[$key]['end_time'] = $info['end_time'];
			}
		}
		$infos=$array;
		
		include $this->admin_tpl('position_items','position');
		
	
		
		
		
	
	
	}	
	
	
	
	function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $id => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
				$this->db->update(array('listorder'=>$listorder),$this->table,'id='.$id);				
				$status = isset($_POST["status"][$id]) ? $_POST["status"][$id] : '0';								
				$this->db->update(array('status'=>$status),$this->table,'id='.$id);
			}
		
			
				
				
			
			
			showmessage(L('operation_success'));
		} else {
			showmessage(L('operation_failure'));
		}
	}
	

}
?>