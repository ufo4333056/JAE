<?php
defined('IN_ADMIN') or exit('No permission resources.'); 
include $this->admin_tpl('head','admin');
?>
<div class="pad-lr-10">
<div class="table-list">
<form action="?m=template&c=style&a=updatename" method="post">
    <table width="100%" cellspacing="0">
        <thead>
		<tr class="thead">
		<th width="80"><?php echo L("style_identity")?></th>
		<th><?php echo L("style_chinese_name")?></th>
		<th><?php echo L("author")?></th>
		<th><?php echo L("style_version")?></th>
		<th><?php echo L("status")?></th>
		<th width="150"><?php echo L('operations_manage')?></th>
		</tr>
        </thead>
<tbody>
<?php 
if(is_array($list)):
	foreach($list as $v):
?>
<tr>
<td width="80" align="center"><?php echo $v['dirname']?></td>
<td ><?php echo $v['name']?></td>
<td ><?php if($v['homepage']) {echo  '<a href="'.$v['homepage'].'" target="_blank">';}?><?php echo $v['author']?><?php if($v['homepage']) {echo  '</a>';}?></td>
<td ><?php echo $v['version']?></td>
<td ><?php if($v['disable']){echo L('icon_locked');}else{echo L("icon_unlock");}?></td>
<td   width="150"><a href="/admin.php?m=template&c=style&a=disable&style=<?php echo $v['dirname']?>"><?php if($v['disable']){echo L("enable");}else{echo L('disable');}?></a> | <a href="/admin.php?m=template&c=file&a=init&style=<?php echo $v['dirname']?>"><?php echo L("detail")?></a> |<!-- <a href="/admin.php?m=template&c=style&a=export&style=<?php echo $v['dirname']?>"><?php echo L('export')?></a>--></td>
</tr>
<?php 
	endforeach;
endif;
?>
</tbody>
</table>
<div class="btns"><input type="submit" class="button" name="dosubmit" value="<?php echo L('submit')?>" /></div> 
</form>
</div>
</div>
<div id="pages"><?php echo $pages?></div>
<?php include $this->admin_tpl('foot','admin');?>