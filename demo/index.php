<?php

$result = $fileStoreService->saveTextFile("<?php array('a'=>'1'); ?>", "index.php"); 
 
 if( $fileStoreService->isFileExist("index.html")  && $_GET['nocache']==false ){ 
 			echo "���û���";
			echo $getFileTextResult = $fileStoreService->getFileText("index.php") ;
			
		}else {echo "�����û���";}
		
		
?>