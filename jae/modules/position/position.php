<?php
defined('IN_JAE') or exit('No permission resources.');defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class position extends admin {
	function __construct() {
		parent::__construct();
		$this->db = jae_base::load_model('position_model');
		$this->db_data = jae_base::load_model('position_data_model');
		$this->menuid=51;
	}
	
	function init () {
		$sitelist=getcache('sitelist','commons');	
		$models = getcache('model','commons');	
		$page=$_GET['page'];		
		$data=$this->db->listinfo($where, $order = 'listorder DESC,posid DESC', $page, $pagesize = 20);
	
		$pages=$this->db->pages;			
		include $this->admin_tpl('position_list');
	}
	function add() {
		$sitelist=getcache('sitelist','commons');	
		$models = getcache('model','commons');	
		if(isset($_POST['dosubmit'])) {

			$data=$_POST['info'];
		 	$this->db->insert($data);
			include $this->admin_tpl('position_add');
			showmessage(L('add_success'));
			
				
		} else {		
			
			include $this->admin_tpl('position_add');
		}
	}
	function delete() {
		$_GET['posid'] = intval($_GET['posid']);
		$this->db->delete('posid='.$_GET['posid']);
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		
		$sitelist=getcache('sitelist','commons');	
		$models = getcache('model','commons');		
		if(isset($_POST['dosubmit'])) {
			
			$posid = intval($_POST['posid']);
			$data=$_POST['info'];
			echo $this->db->update($data,'posid='.$posid);
			
			showmessage(L('operation_success'),'/admin.php?m=position&c=position&a=init&menuid='.$this->menuid);
			include $this->admin_tpl('position_edit');
			
		} else {			
			$posid = intval($_GET['posid']);			
			$info=$this->db->get_one('posid='.$posid);	
			
			include $this->admin_tpl('position_edit');
			
		}
	}
	
	
	/**
	 * 推荐位文章统计
	 * @param $posid 推荐位ID
	 */
	public function content_count($posid) {
		$posid = intval($posid);
		$where = array('posid'=>$posid);
		$infos = $this->db_data->get_one($where, $data = 'count(*) as count');
		return $infos['count'];
	}
	
	/**
	 * 移出推荐位文章列表
	 */
	public function public_item() {	
		if(isset($_POST['dosubmit'])) {
			$items = count($_POST['items']) > 0  ? $_POST['items'] : showmessage(L('posid_select_to_remove'),HTTP_REFERER);
			if(is_array($items)) {
				$sql = array();
				foreach ($items as $item) {
					$_v = explode('-', $item);
					$sql['id'] = $_v[0];
					$sql['modelid']= $_v[1];
					$sql['posid'] = intval($_POST['posid']);
					$this->db_data->delete($sql);
					$this->content_pos($sql['id'],$sql['modelid']);		
				}
			}
			showmessage(L('operation_success'),HTTP_REFERER);
		} else {
			$posid = intval($_GET['posid']);
			$MODEL = getcache('model','commons');
			$siteid = $this->get_siteid();
			$CATEGORY = getcache('category_content_'.$siteid,'commons');
			$page = $_GET['page'] ? $_GET['page'] : '1';
			$pos_arr = $this->db_data->listinfo(array('posid'=>$posid,'siteid'=>$siteid),'listorder DESC', $page, $pagesize = 20);
			$pages = $this->db_data->pages;
			$infos = array();
			foreach ($pos_arr as $_k => $_v) {
				$r = string2array($_v['data']);
				$r['catname'] = $CATEGORY[$_v['catid']]['catname'];
				$r['modelid'] = $_v['modelid'];
				$r['posid'] = $_v['posid'];
				$r['id'] = $_v['id'];
				$r['listorder'] = $_v['listorder'];
				$r['catid'] = $_v['catid'];
				//$r['url'] = go($_v['catid'], $_v['id']);
				$key = $r['modelid'].'-'.$r['id'];
				$infos[$key] = $r;
				
			}
			$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=admin&c=position&a=add\', title:\''.L('posid_add').'\', width:\'500\', height:\'300\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('posid_add'));			
			include $this->admin_tpl('position_items');			
		}
	}
	/**
	 * 推荐位文章管理
	 */
	public function public_item_manage() {
		if(isset($_POST['dosubmit'])) {
			$posid = intval($_POST['posid']);
			$modelid = intval($_POST['modelid']);	
			$id= intval($_POST['id']);
			$pos_arr = $this->db_data->get_one(array('id'=>$id,'posid'=>$posid));
			$array = string2array($pos_arr['data']);
			$array['inputtime'] = strtotime($_POST['info']['inputtime']);
			$array['title'] = trim($_POST['info']['title']);
			$array['thumb'] = trim($_POST['info']['thumb']);
			$array['description'] = trim($_POST['info']['description']);
			$thumb = $_POST['info']['thumb'] ? 1 : 0;
			$array = array('data'=>array2string($array),'synedit'=>intval($_POST['synedit']),'thumb'=>$thumb);
			$this->db_data->update($array,array('id'=>$id,'posid'=>$posid));
			showmessage(L('operation_success'));
		} else {
			$posid = intval($_GET['posid']);
			$modelid = intval($_GET['modelid']);	
			$id = intval($_GET['id']);		
			if($posid == 0 ) showmessage(L('linkage_parameter_error'), HTTP_REFERER);
			$pos_arr = $this->db_data->get_one(array('id'=>$id,'posid'=>$posid));
			extract(string2array($pos_arr['data']));
			$synedit = $pos_arr['synedit'];
			$show_validator = true;
			$show_header = true;		
			include $this->admin_tpl('position_item_manage');			
		}
	
	}
	/**
	 * 推荐位文章排序
	 */
	public function public_item_listorder() {
		if(isset($_POST['posid'])) {
			foreach($_POST['listorders'] as $_k => $listorder) {
				$pos = array();
				$pos = explode('-', $_k);
				$this->db_data->update(array('listorder'=>$listorder),array('id'=>$pos[1],'catid'=>$pos[0],'posid'=>$_POST['posid']));
			}
			showmessage(L('operation_success'),HTTP_REFERER);
			
		} else {
			showmessage(L('operation_failure'),HTTP_REFERER);
		}
	}
	/**
	 * 推荐位添加栏目加载
	 */
	
	function delete_item() {
		$id = intval($_GET['id']);
		$modelid = intval($_GET['modelid']);
		$posid = intval($_GET['posid']);
		$data=$this->db_data->delete(array('id'=>$id,'modelid'=>$modelid,'posid'=>$posid));
		
		showmessage(L('operation_success'),HTTP_REFERER);		
		
	}
	

}
?>