<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');
if($url_forward=='goback' || $url_forward=='') {$url_forward=HTTP_REFERER;}
header("Refresh:$ms;url=$url_forward");
?>
<link rel="stylesheet" type="text/css" href="/statics/css/message.css">
<div style="height:240px;">
<div class="showMsg" style="text-align:center" data-url="<?php echo $url_forward?>" data-ms="<?php echo $ms?>">
	<h5><?php echo L('message_tips');?></h5>
    <div class="cnt guery" style="display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline;max-width:330px"><?php echo $msg?></div>
    <div class="bottom">
    <?php if($url_forward=='goback' || $url_forward=='') {?>
	<a href="javascript:history.back();" >[<?php echo L('return_previous');?>]</a>
	<?php } elseif($url_forward=="close") {?>
	<input type="button" name="close" value="<?php echo L('close');?> " onClick="window.close();">
	<?php } elseif($url_forward=="blank") {?>
	
	<?php } elseif($url_forward) { 
		if(strpos($url_forward,'&pc_hash')===false) $url_forward .= '&pc_hash='.$_SESSION['pc_hash'];
	?>
	<a href="<?php echo $url_forward?>"><?php echo L('click_here');?></a>
	<script language="javascript">setTimeout("redirect('<?php echo $url_forward?>');",<?php echo $ms?>);</script> 
	<?php }?>
	<?php if($returnjs) { ?> <script style="text/javascript"><?php echo $returnjs;?></script><?php } ?>
	<?php if ($dialog):?><script style="text/javascript">window.top.right.location.reload();window.top.art.dialog({id:"<?php echo $dialog?>"}).close();</script><?php endif;?>
        </div>
</div>
</div>
<?php include template('content','foot');?>