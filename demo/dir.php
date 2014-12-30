<?php
$pdo = new PDO();
$count = $pdo->exec("INSERT INTO `jae_menu` (`name`, `language`, `parentid`, `m`, `c`, `a`, `data`, `listorder`, `display`, `project1`, `project2`, `project3`, `project4`, `project5`) VALUES
	('扩展', 'extend', 0, 'admin', 'extend', 'init', '', 10, '1', 1, 1, 1, 1, 1);");
$appLog->info("洞彻洞彻洞彻洞彻洞彻");
$targetdir = './';

$dir=dir($targetdir);

while($entry=$dir->read())
{
    if($entry == '.' || $entry == '..') continue;
    echo $entry.'<br>';
}

?>
