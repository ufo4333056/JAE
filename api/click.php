 <?php

 // header("KissyIoDataType:jsonp");
 //  exit($_GET['callback'].'('.json_encode(array('data'=>'222')).')');
 // exit($_GET['callback']."({\"status\":200,\"data\":\"kissy.io ����.  URL����".urldecode_utf8($_GET["encodeCpt"])." ,".urldecode_utf8($_GET["encode"])."\"})");
 ?>
<?php
   header("KissyIoDataType:jsonp");
   $member=jae_base::load_app_class('foreground','member');
   $point_db=jae_base::load_model('point_model');
   
   $memberinfo = $member->memberinfo;
   if($memberinfo["userid"]){
	    $login="ǩ��Ӯ����";
   		if(!empty($memberinfo["wangwang"])) { $tips= $memberinfo["wangwang"] ; } else { $tips="����д��ȷ������";}   
	}else {$login='���¼'; $tips='���¼';
   
   }
   
   
	$prizes=$prize_db->count("userid=$memberinfo[userid]");
	$orders=$order_db->count("userid=$memberinfo[userid]");
  
  
  
   exit($_GET['callback'].'('.json_encode(array('tips'=>$tips,'point'=>$memberinfo['point'],'login'=>$login,'prizes'=>$prizes,'orders'=>$orders)).')');


?>