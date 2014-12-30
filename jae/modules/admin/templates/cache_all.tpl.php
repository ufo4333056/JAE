<style type="text/css">
	.sbs{}
	.sbul{margin:10px;}
	.sbul li{line-height:30px;}
	.button{margin-top:20px;}
	.subnav,.ifm{display:none;}
	
</style>
<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('head','admin');?>
<div class="pad-10">
<form action="?m=admin&c=cache_all&a=init&pc_hash=<?php echo $_SESSION['pc_hash']?>" target="cache_if" method="post" id="myform" name="myform">
  <input type="hidden" name="dosubmit" value="1">
<div class="col-2">
<h6><?php echo L('tip_zone')?></h6>
<div class="sbs" id="update_tips" style="height:360px; overflow:auto;">
	<ul id="file" class="sbul">
	</ul>
</div>
</div>
<!-- <input name="dosubmit" type="submit" class="dialog" id="dosubmit" value="<?php echo L('start_update')?>" onclick="$('#file').html('');return true;" class="button"> -->
</form>

</div>
<?php
include $this->admin_tpl('foot','admin');?>