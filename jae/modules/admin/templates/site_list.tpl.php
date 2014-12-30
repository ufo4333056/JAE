<?php
defined('IN_JAE') or exit('No permission resources.');
include $this->admin_tpl('head');
?>
<div class="pad_10">
<div class="table-list">
    <table width="100%" cellspacing="0">
      
		<tr class="thead">
		<th width="80">Siteid</th>
		<th><?php echo L('site_name')?></th>
		
		<th><?php echo L('site_domain')?></th>
		<th ><?php echo L('template')?></th>
		<th width="150"><?php echo L('operations_manage')?></th>
		</tr>
       
        <tbody>
<?php 

	foreach($list as $v){ 
?>
<tr >
<td width="80" align="center"><?php echo $v['siteid']?></td>
<td><?php echo $v['name']?></td>

<td><?php echo $v['domain']?></td>
<td><?php  foreach ($template_list as $key=> $val){  if($val['dirname']== $v['template']) { echo $val['name']; }   } ?></td>
<td ><a href="/admin.php?m=admin&c=site&a=set_site&siteid=<?php echo $v['siteid']?>&menuid=<?php echo $menuid?>"><?php echo L('设成当前站点')?></a> |<a href="/admin.php?m=admin&c=site&a=edit&siteid=<?php echo $v['siteid']?>&menuid=<?php echo $menuid?>"><?php echo L('edit')?></a> | 
<?php if($v['siteid']!=1) { ?><a href="?m=admin&c=site&a=del&siteid=<?php echo $v['siteid']?>" onclick="return confirm('<?php echo new_addslashes(htmlspecialchars(L('confirm', array('message'=>$v['name']))))?>')"><?php echo L('delete')?></a><?php } else { ?><font color="#cccccc"><?php echo L('delete')?></font><?php } ?></td>
</tr>
<?php 
	}
?>
</tbody>
</table>
</div>
</div>
<div id="pages"><?php echo $pages?></div>

<?php
include $this->admin_tpl('foot');
?>