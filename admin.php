<?php

define('JAE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('IN_ADMIN',true);
include JAE_PATH.'/jae/base.php';
$_GET['m']? $_GET['m'] : $_GET['m']='admin';
jae_base::creat_app();
?>