 <?php

 // header("KissyIoDataType:jsonp");
 //  exit($_GET['callback'].'('.json_encode(array('data'=>'222')).')');
 // exit($_GET['callback']."({\"status\":200,\"data\":\"kissy.io 中文.  URL中文".urldecode_utf8($_GET["encodeCpt"])." ,".urldecode_utf8($_GET["encode"])."\"})");
 ?>
<?php
   header("KissyIoDataType:jsonp");

   $member=jae_base::load_app_class('foreground','member');
   $prize_db=jae_base::load_model('prize_model');
   $order_db=jae_base::load_model('order_model');
   $memberinfo = $member->memberinfo;
   if($memberinfo["userid"]){
	    $login="签到赢积分";
   		if(!empty($memberinfo["wangwang"])) { $tips= $memberinfo["wangwang"] ; } else { $tips="请填写正确的资料";}   
	}else {$login='请登录'; $tips='请登录';
   
   }
	$prizes=$prize_db->count("userid=$memberinfo[userid]");
	$orders=$order_db->count("userid=$memberinfo[userid]");
  
  
  
   exit($_GET['callback'].'('.json_encode(array('tips'=>$tips,'point'=>$memberinfo['point'],'login'=>$login,'prizes'=>$prizes,'orders'=>$orders)).')');


?>