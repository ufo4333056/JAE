<?php
defined('IN_JAE') or exit('No permission resources.');defined('IN_ADMIN') or exit('No permission resources.');
jae_base::load_app_class('admin','admin',0);

class index extends admin {	
	public function __construct() {				
		$this->db= jae_base::load_model('member_model');		
		parent::__construct();
	}
	
	
	public function init() { 	
		
		$targetdir = JAE_PATH.'upgrade'.DIRECTORY_SEPARATOR;
		$siteinfo=siteinfo(get_siteid());
		$dir=dir($targetdir);

		while($entry=$dir->read())
		{	
   			if($entry == '.' || $entry == '..') continue; 
   			$date=substr($entry, 0, 8); 
   			if($date > $siteinfo['date'])	{$pathlist[]=$entry;}
  		}
  		if(isset($_POST['dosubmit'])) {
			sort($pathlist);
  			foreach ($pathlist as $key => $value) {	

  				$sql_files=file_get_contents($targetdir.$value);

  				$sqls=explode(';', $sql_files);
  				
  				foreach ($sqls as  $exec) {
  					$this->db->query($exec);
  				}  				
  			}

  			showmessage(L('operation_success'),'/admin.php?m=upgrade&c=index&a=init&menuid=103');
  		}





		include $this->admin_tpl('upgrade_index','upgrade');

	}
	

	


	
}
?>