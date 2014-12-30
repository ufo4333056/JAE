<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class member_menu extends admin {
	function __construct() {
		parent::__construct();
		$this->db = jae_base::load_model('member_menu_model');
		
		$this->menuid=3;
	}
	
	function init () {
		$tree = jae_base::load_sys_class('tree');
		$tree->icon = array('&nbsp;&nbsp;&nbsp;�� ','&nbsp;&nbsp;&nbsp;���� ','&nbsp;&nbsp;&nbsp;���� ');
		$tree->nbsp = '&nbsp;&nbsp;&nbsp;';	
		$result = $this->db->select('','*','','listorder ASC,id DESC');
		$array = array();
		foreach($result as $r) {
			$r['cname'] = L($r['name']);
			$r['str_manage'] = '<a href="/admin.php?aid='.$_GET['aid'].'&cid='.$_GET['cid'].'&did='.$_GET['did'].'&m=member&c=member_menu&a=add&parentid='.$r['id'].'&menuid='.$_GET['menuid'].'">'.L('add_submenu').'</a> | <a href="/admin.php?aid='.$_GET['aid'].'&cid='.$_GET['cid'].'&did='.$_GET['did'].'&m=member&c=member_menu&a=edit&id='.$r['id'].'&menuid='.$_GET['menuid'].'">'.L('modify').'</a> | <a href="/admin.php?m=member&c=member_menu&a=delete&id='.$r['id'].'&menuid='.$_GET['menuid'].'">'.L('delete').'</a> ';
			$array[] = $r;
		}


		
		$tree->init($array);
		 $categorys = $tree->get_tree(0, $str);

		
		include $this->admin_tpl('member_menu');
	}
	function add() {
		
			
			$result = $this->db->select('','*','','listorder ASC,id DESC');
			 
		
		if(isset($_POST['dosubmit'])) {

			$data=$_POST['info'];
		 	$this->db->insert($data);
			//���������������Զ��������԰�
			$file = JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'languages'.DIRECTORY_SEPARATOR.'zh-cn'.DIRECTORY_SEPARATOR.'system_menu.lang.php';
			if(file_exists($file)) {
				$content = file_get_contents($file);
				$content = substr($content,0,-2);
				$key = $_POST['info']['name'];
				$data = $content."\$LANG['$key'] = '$_POST[language]';\r\n?>";
				file_put_contents($file,$data);
			} else {
				
				$key = $_POST['info']['name'];
				$data = "<?php\r\n\$LANG['$key'] = '$_POST[language]';\r\n?>";
				file_put_contents($file,$data);
			}
			//����
			showmessage(L('add_success'));
			include $this->admin_tpl('member_menu_add');
			
			
		} else {
			$show_validator = '';
			$tree = jae_base::load_sys_class('tree');
			//$result = $this->db->select();
			$array = array();
			foreach($result as $r) {
				$r['cname'] = L($r['name']);
				$r['selected'] = $r['id'] == $_GET['parentid'] ? 'selected' : '';
				$array[] = $r;
			}
			//$str  = "<option value='\$id' \$selected>\$spacer \$cname</option>";
			$tree->init($array);

			$select_categorys = $tree->get_option(0, $str);
			//$models = jae_base::load_config('model_config');
			
			include $this->admin_tpl('member_menu_add');
		}
	}
	function delete() {
		$_GET['id'] = intval($_GET['id']);
		$this->db->delete('id='.$_GET['id']);
		showmessage(L('operation_success'));
		
	}
	
	function edit() {
		if(isset($_POST['dosubmit'])) {
			$id = intval($_POST['id']);			
		
			$data=$_POST['info'];
			$this->db->update($data,'id='.$id);
			//�޸������ļ�
			$file = JAE_PATH.'jae'.DIRECTORY_SEPARATOR.'languages'.DIRECTORY_SEPARATOR.'zh-cn'.DIRECTORY_SEPARATOR.'system_menu.lang.php';
			require $file;
			$key = $_POST['info']['name'];
			if(!isset($LANG[$key])) {
				$content = file_get_contents($file);
				$content = substr($content,0,-2);
				$data = $content."\$LANG['$key'] = '$_POST[language]';\r\n?>";
				file_put_contents($file,$data);
			} elseif(isset($LANG[$key]) && $LANG[$key]!=$_POST['language']) {
				$content = file_get_contents($file);
				$content = str_replace($LANG[$key],$_POST['language'],$content);
				file_put_contents($file,$content);
			}
			//$this->update_menu_models($id, $r, $_POST['info']);
			
			//���������ļ��޸�
			showmessage(L('operation_success'));
		} else {
			$show_validator = $array = $r = '';
			$tree = jae_base::load_sys_class('tree');
			$id = intval($_GET['id']);
			
			$r=$this->db->get_one('id='.$id);
			
			if($r) extract($r);
			$result = $this->db->select('','*','','listorder ASC,id DESC');
			foreach($result as $r) {
				$r['cname'] = L($r['name']);
				$r['selected'] = $r['id'] == $parentid ? 'selected' : '';
				$array[] = $r;  
			}
			//$str  = "<option value='\$id' \$selected>\$spacer \$cname</option>";
			$tree->init($array);
			$select_categorys = $tree->get_option(0, $str);
			
			//$models = jae_base::load_config('model_config');print_r($c);
			include $this->admin_tpl('member_menu_edit');
			
		}
	}
	
	/**
	 * ����
	 */
	function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $id => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	

				$this->db->update(array('listorder'=>$listorder),'id='.$id);
			}
			showmessage(L('operation_success'));
		} else {
			showmessage(L('operation_failure'));
		}
	}
	
	/**
	 * ���²˵�������ģʽ
	 * @param $id INT �˵���ID
	 * @param $old_data �ò˵���������
	 * @param $new_data �˵���������
	 **/
	private function update_menu_models($id, $old_data, $new_data) {
		$models_config = jae_base::load_config('model_config');
		if (is_array($models_config)) {
			foreach ($models_config as $_k => $_m) { 
				if (!isset($new_data[$_k])) $new_data[$_k] = 0;
				if ($old_data[$_k]==$new_data[$_k]) continue; //����û�б仯ʱ����ִ����һ��
				$r = $this->db->get_one(array('id'=>$id), 'parentid');
				$this->db->update(array($_k=>$new_data[$_k]), array('id'=>$id));
				if ($new_data[$_k] && $r['parentid']) {
					$this->update_parent_menu_models($r['parentid'], $_k); //�����������ģʽ�����¸����˵�������ģʽ
				}
			}
		}
		return true;
	}

	/**
	 * ���¸����˵�������ģʽ
	 * @param $id int �˵�ID
	 * @param $field  �޸��ֶ���
	 */
	private function update_parent_menu_models($id, $field) {
		$id = intval($id);
		$r = $this->db->get_one(array('id'=>$id), 'parentid');
		$this->db->update(array($field=>1), array('id'=>$id)); //�޸ĸ���������ģʽ��Ȼ���жϸ����Ƿ���ڸ���
		if ($r['parentid']) {
			$this->update_parent_menu_models($r['parentid'], $field);
		}
		return true;
	}
}
?>