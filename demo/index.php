<?php

$result = $fileStoreService->saveTextFile("<?php array('a'=>'1'); ?>", "index.php"); 
 
 if( $fileStoreService->isFileExist("index.html")  && $_GET['nocache']==false ){ 
 			echo "调用缓存";
			echo $getFileTextResult = $fileStoreService->getFileText("index.php") ;
			
		}else {echo "不调用缓存";}
		
		
?>