<?php

$pdo = new PDO();

$r=$pdo->prepare("update jae_order set userid=4 where userid=4");
$r->execute();
echo $r->rowCount();	



$result = $cacheService->get('zhixin'); 
if ($result){
	//echo $result;
	}else{
	 //echo 123;
	  $result = $cacheService->set('zhixin', '1', '5'); 
	  }
 
//echo rand(1,5);
 $result = $fileStoreService->saveTextFile("content", "/jae/cache/a.txt"); 
 
 $result = $fileStoreService->saveTextFile("content111111111111111111111111111111", "index.html"); 
 
 if( $fileStoreService->isFileExist("index.html")  && $_GET['nocache']==false ){ 
 			
			echo $getFileTextResult = $fileStoreService->getFileText("index.html") ;
			
		}
//$result2 = $fileStoreService->getFileText("/jae/cache/a.txt");
// print_r($result2);
 ?>