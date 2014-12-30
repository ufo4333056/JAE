<?php
define('JAE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
if($_GET['m']=='admin') exit('No permission resources.');
include JAE_PATH.'/jae/base.php';
 
$op = isset($_GET['op']) && trim($_GET['op']) ? trim($_GET['op']) : exit('Operation can not be empty');
if (isset($_GET['callback']) && !preg_match('/^[a-zA-Z_][a-zA-Z0-9_]+$/', $_GET['callback']))  unset($_GET['callback']);
if (!preg_match('/([^a-z_]+)/i',$op) && file_exists(JAE_PATH.'api/'.$op.'.php')) {
	include JAE_PATH.'api/'.$op.'.php';
} else {
	exit('API handler does not exist');
}

?>