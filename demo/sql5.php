<?php 
$db=new PDO();

 
	
	$file = fopen("5.csv","r");

while(! feof($file))
  {
  $row=fgetcsv($file,9000);
   $sql =  "INSERT INTO `jae_member` (`phpssouid`,`username`,`nickname`,`regdate`,`lastdate`,`loginnum`,`email`,`groupid`,`point`,`islock`,`vip`,`zipcode`,`wangwang`,`siteid`,`mobile`,`address`) VALUES  ";  
  
  
          $sql .= "(99,'".$row[0]."','".$row[1]."','".strtotime(trim($row[2]))."','".strtotime(trim($row[3]))."','".trim($row[4])."','".$row[12]."',1,'".$row[5]."',0,1,null,'".$row[9]."',1,'".$row[10]."','".$row[11]."');  ";
		   $sql.= "\r\n";	
		  
		$lastqueryid = $db->prepare($sql);
		$lastqueryid->execute();	
		$sql_info =$lastqueryid->errorinfo(); //ȡ�ô�����Ϣ����(ע��˴�ȡ����$pdo��errorInfo������$sql��)
		if($sql_info[1] != 00000) { echo 'ִ�У�' . $sql_info[2] ;$appLog->info($sql_info[2]);}; //���������Ϣ	
  
  }

fclose($file);
 
?>