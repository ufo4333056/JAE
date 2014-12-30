<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('head', 'admin');
?>
<div class="bk15"></div>
<div class="pad_10">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
		<tr class="thead">
        	<th><?php echo L('filename')?></th>
		<th><?php echo L('time')?></th>
		<th><?php echo L('who')?></th>
		<th width="150"><?php echo L('operations_manage')?></th>
		</tr>
        </thead>
        <tbody>
<?php 

	foreach($list as $v): 
?>
<tr>
<td align="center"><?php echo $v['fileid']?></td>
<td align="center"><?php echo date('Y-m-d H:i:s',$v['creat_at'])?></td>
<td align="center"><?php echo $v['username']?></td>
<td align="center"><a href="/admin.php?m=template&c=template_bak&a=restore&id=<?php echo $v['id']?>&style=<?php echo $this->style?>&dir=<?php echo $this->dir?>&filename=<?php echo $this->filename?>" onclick="return confirm('<?php echo L('are_you_sure_you_want_to_restore')?>')"><?php echo L('restore')?></a> | <a href="?m=template&c=template_bak&a=del&id=<?php echo $v['id']?>&style=<?php echo $this->style?>&dir=<?php echo $this->dir?>&filename=<?php echo $this->filename?>" onclick="return confirm('<?php echo L('confirm', array('message'=>date('Y-m-d H:i:s',$v['creat_at'])))?>')"><?php echo L('delete')?></a></td>
</tr>
<?php 
	endforeach;

?>
</tbody>
</table>
</from>
</div>
</div>
<div id="pages"><?php echo $pages?></div>
<?php include $this->admin_tpl('foot', 'admin');?>