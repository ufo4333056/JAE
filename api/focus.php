 <?php

 header("KissyIoDataType:jsonp");
 // exit($_GET['callback'].'('.json_encode(array('data'=>'222')).')');
 exit($_GET['callback']."({\"status\":200,\"data\":\"kissy.io 中文.  URL中文".$_GET["encodeCpt"]." ,".urldecode_utf8($_GET["encode"])."\"})");
 ?>
<?php
 //   header("KissyIoDataType:jsonp"); 
 //   $focus_db=jae_base::load_model('focus_model');   
// $prizes=$prize_db->count("userid=$memberinfo[userid]");  
 //   exit($_GET['callback'].'('.json_encode(array('tips'=>$tips,'point'=>$memberinfo['point'],'login'=>$login,'prizes'=>$prizes,'orders'=>$orders)).')');
?>