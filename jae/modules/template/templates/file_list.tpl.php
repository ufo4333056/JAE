<?php
defined('IN_ADMIN') or exit('No permission resources.'); 
include $this->admin_tpl('head','admin');
?>
<div class="subnav">
  <h1 class="title-2 line-x"><?php echo $this->style_info['name'].' - '.L('detail')?></h1>
</div>
<div class="pad-lr-10">
<div class="table-list">
<form action="/admin.php?m=template&c=file&a=updatefilename&style=<?php echo $this->style?>" method="post">
    <table width="100%" cellspacing="0">
        <thead>
		<tr class="thead">
		<th align="left" ><?php echo L("dir")?></th>
		<th align="left" ><?php echo L('desc')?></th>
		<th align="left" ><?php echo L('operation')?></th>
		</tr>
        </thead>
<tbody>
<tr>
<td align="left" colspan="3"><?php echo L("local_dir")?>£º<?php echo $local?></td>
</tr>
<?php if ($dir !='' && $dir != '.'):?>
<tr>
<td align="left" colspan="3"><a href="<?php echo '/admin.php?m=template&c=file&a=init&style='.$this->style ?>"><img src="/statics/images/folder-closed.gif" /><?php echo L("parent_directory")?></a></td>
</tr>
<?php endif;?>
<?php 
if(is_array($list)):
	foreach($list as $k=>$v): 
	$filename = basename($v);
?>
<tr>
<?php if (empty($dir)) {
	echo '<td align="left"><img src="/statics/images/folder-closed.gif" /> <a href="/admin.php?m=template&c=file&a=init&style='.$this->style.'&dir='.(isset($_GET['dir']) && !empty($_GET['dir']) ? stripslashes($_GET['dir']).DIRECTORY_SEPARATOR : '').$k.'"><b>'.$k.'</b></a></td><td align="left"><input type="text" class="input-text" name="file_explan['.$encode_local.']['.$filename.']" value="'.$filename.'"></td><td></td>';
} else {
 	if (substr($k,-4,4) != 'htmls') {
 		echo '<td align="left"><img src="/statics/images/file.gif" /> '.$k.'</td><td align="left"><input type="text" class="input-text" name="file_explan['.$encode_local.']['.$filename.']" value="'.$filename.'"></td>';
		if($tpl_edit=='1'){
			echo '<td> <a href="/admin.php?m=template&c=file&a=edit_file&style='.$this->style.'&dir='.urlencode(stripslashes($dir)).'&file='.$k.'">['.L('edit').']</a> <a href="/admin.php?m=template&c=file&a=visualization&style='.$this->style.'&dir='.urlencode(stripslashes($dir)).'&file='.$k.'" target="_blank">['.L('visualization').']</a> <a href="/admin.php?m=template&c=template_bak&a=init&style='. $this->style.'&dir='.urlencode(stripslashes($dir)).'&filename='.$k .'">['.L('histroy').']</a></td>';
		}else{
			echo '<td></td>';
		}
 	}
}?>
</tr>
<?php 
	endforeach;
endif;
?></tbody>
</table>
<div class="btns"><input type="button" onclick="location.href='/admin.php?m=template&c=style&a=init&pc_hash=<?php echo $_SESSION['pc_hash'];?>'" class="button" name="dosubmit" value="<?php echo L('returns_list_style')?>" /> <input  type="button" class="button" name="dosubmit" value="<?php echo L('new')?>" onclick="add_file()" /> <input type="submit" class="button" name="dosubmit" value="<?php echo L('update')?>" ></div> 
</form>
</div>
<div id="pages"><?php echo $pages?></div>
</div>

<?php
include $this->admin_tpl('foot','admin');
?>