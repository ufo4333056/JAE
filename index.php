<?php
define('JAE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);define('IN_JAE',true);
if($_GET['m']=='admin') exit('No permission resources.');
include JAE_PATH.'/jae/base.php';
jae_base::creat_app();

?>