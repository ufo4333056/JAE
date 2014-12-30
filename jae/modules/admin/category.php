
<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);
jae_base::load_sys_class('form','',0);

class category extends admin {
	function __construct() {
		parent::__construct();
		
		$this->category_db	 = jae_base::load_model('category_model');
		$this->db= jae_base::load_model('category_model');
		$this->menuid=84;
		$this->siteid = $this->get_siteid();
	}
	
	function init () {
		$types = array(0 => L('category_type_system'),1 => L('category_type_page'),2 => L('category_type_link'));
		$models = getcache('model','commons');	
		$page=$_GET['page'];		
		$data=$this->category_db->listinfo($where,$order = 'listorder ASC',$page, $pages = '12');	
	
		$pages=$this->category_db->pages;			
		include $this->admin_tpl('category_list');
	}
	function add() {

		$models = getcache('model','commons');	
		$type = $_GET['type'];
		if(isset($_POST['dosubmit'])) {

			$data=$_POST['info'];
			//$data['url']=$models[$data['modelid']['url'];
			$data['siteid']=$this->siteid;
			$data['module']="content";
			$data['setting']=array2string($models[$data['modelid']]);
		 	$this->category_db->insert($data);

		 	$insert_id=$this->category_db->insert_id();
		 	

		 	if ($data['type']== 0 ){$this->update_url($insert_id);}
		 	$this->cache();
		 	showmessage(L('add_success'));
			include $this->admin_tpl('category_add');
			
			
		} else {			
			
			if($type==0) {

				$exists_model = false;
				$models = getcache('model','commons');	
				foreach($models as $_m) {
					if($this->siteid == $_m['siteid']) {
						$exists_model = true;
						break;
					}
				}
				if(!$exists_model) showmessage(L('please_add_model'),'?m=content&c=sitemodel&a=init&menuid=59',5000);
				include $this->admin_tpl('category_add');
			} elseif ($type==1) {
				include $this->admin_tpl('category_page_add');
			} else {
				include $this->admin_tpl('category_link');
			}
		}
	}
	function delete() {
		$_GET['catid'] = intval($_GET['catid']);
		$this->category_db->delete('catid='.$_GET['catid']);
		showmessage(L('operation_success'));		
		
	}
	
	function edit() {
		$models = getcache('model','commons');	
		if(isset($_POST['dosubmit'])) {
			
			$catid = intval($_POST['catid']);
			$data=$_POST['info'];
			$this->category_db->update($data,'catid='.$catid);
			if ($data['type']== 0 ){$this->update_url($catid);}
			$this->cache();

			showmessage(L('operation_success'));
			include $this->admin_tpl('category_edit');
			
		} else {			
			$catid = intval($_GET['catid']);			
			$r=$this->category_db->get_one('catid='.$catid);			
			if($r) extract($r);	

			//$type = $_GET['type'];
			if($type==0) {
				include $this->admin_tpl('category_edit');
			} elseif ($type==1) {
				include $this->admin_tpl('category_page_edit');
			} else {
				include $this->admin_tpl('category_link_edit');
			}

		
			
		}
	}
	
	function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $catid => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
				$this->category_db->update(array('listorder'=>$listorder),'catid='.$catid);				
				
			}
		
			
				
				
			
			
			showmessage(L('operation_success'));
		} else {
			showmessage(L('operation_failure'));
	}

}
		/**
	* 更新栏目链接地址
	*/
	private function update_url($catid) {
		$catid = intval($catid);
		if (!$catid) return false;
		$data = array('url' =>'/index.php?m=content&c=index&a=lists&catid='.$catid);
		$where  = array('catid' => $catid );
		
		$this->category_db->update($data,'catid='.$catid);


		// $url = jae_base::load_app_class('url', 'content'); //调用URL实例
		// return $url->category_url($catid);
	}

	/**
	 * 更新缓存并修复栏目
	 */
	public function public_cache() {
		//$this->repair();
		$this->cache();

		showmessage(L('operation_success'),'/admin.php?m=admin&c=category&a=init&module=admin&menuid=83');
	}



	/**
	 * 更新缓存
	 */
	public function cache() {
		$categorys = array();
		$models = getcache('model','commons');

		foreach ($models as $modelid=>$model) {
			$datas = $this->db->select(array('modelid'=>$modelid),'catid,type,items',10000);

			$array = array();
			foreach ($datas as $r) {
				if($r['type']==0) $array[$r['catid']] = $r['items'];
			}
			setcache('category_items_'.$modelid, $array,'commons');
		}
		$array = array();
		$categorys = $this->db->select('`module`=\'content\'','catid,siteid',20000,'listorder ASC');


		foreach ($categorys as $r) {
			$array[$r['catid']] = $r['siteid'];
		}
		setcache('category_content',$array,'commons');
		$categorys = $this->categorys = array();
		$this->categorys = $this->db->select(array('siteid'=>$this->siteid, 'module'=>'content'),'*',10000,'listorder ASC');
		
		foreach($this->categorys as $r) {
			unset($r['module']);
			$setting = string2array($r['setting']);
			/*$r['create_to_html_root'] = $setting['create_to_html_root'];
			$r['ishtml'] = $setting['ishtml'];
			$r['content_ishtml'] = $setting['content_ishtml'];
			$r['category_ruleid'] = $setting['category_ruleid'];
			$r['show_ruleid'] = $setting['show_ruleid'];
			$r['workflowid'] = $setting['workflowid'];
			$r['isdomain'] = '0';
			if(!preg_match('/^(http|https):\/\//', $r['url'])) {
				$r['url'] = siteurl($r['siteid']).$r['url'];
			} elseif ($r['ishtml']) {
				$r['isdomain'] = '1';
			}*/
			$categorys[$r['catid']] = $r;
		}
		setcache('category_content_'.$this->siteid,$categorys,'commons');
		return true;
	}

}
?>