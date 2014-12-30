<?php
define('JAE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
if($_GET['m']=='admin') exit('No permission resources.');
include JAE_PATH.'/jae/base.php';

$fromuserid=intval($_GET['fromuserid']);
if ($fromuserid) { header("location:/index.php?m=member&c=index&a=setinfo&fromuserid=$fromuserid&spm=a216r.7118237.1.16.43HMVY");}

$forward=$_GET['forward'];
if(!empty($forward)){	
	 header("location:".htmlspecialchars_decode($forward));
}
	
;
jae_base::creat_app();
?>