<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head_mini');
	//if ($islink==1) header("Location:".$url); 
?>
<link rel="stylesheet" href="/statics/special_css/special_<?php echo $id?>.css" />

<div class="sperai">
<?php echo htmlspecialchars_decode($html);?>
</div>
