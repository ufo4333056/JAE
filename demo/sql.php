<?php 
$db=new PDO();

 
	
	$file = fopen("ss.csv","r");

while(! feof($file))
  {
  $row=fgetcsv($file,10000);
   $sql =  "INSERT INTO `jae_member` (`phpssouid`,`username`,`nickname`,`regdate`,`lastdate`,`loginnum`,`email`,`groupid`,`point`,`islock`,`vip`,`zipcode`,`wangwang`,`siteid`,`mobile`,`address`) VALUES  ";  
  
  
          $sql .= "(99,'".$row[0]."','".$row[1]."','".strtotime(trim($row[2]))."','".strtotime(trim($row[3]))."','".trim($row[4])."','".$row[12]."',1,'".$row[5]."',0,1,null,'".$row[9]."',1,'".$row[10]."','".$row[11]."');  ";
		   $sql.= "\r\n";	
		  
		$lastqueryid = $db->prepare($sql);
		$lastqueryid->execute();	
		$sql_info =$lastqueryid->errorinfo(); //取得错误信息数组(注意此处取的是$pdo的errorInfo而不是$sql的)
		if($sql_info[1] != 00000) { echo '执行：' . $sql_info[2] ;$appLog->info($sql_info[2]);}; //输出错误信息	
  
  }

fclose($file);
 
?>