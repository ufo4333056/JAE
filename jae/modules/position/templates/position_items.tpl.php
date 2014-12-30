<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('head','admin');
?>
<form name="myform" action="/admin.php?m=position&c=position&a=public_item_listorder" method="post">
<input type="hidden" value="<?php echo $posid?>" name="posid">
<div class="pad_10">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr class="thead">
            <th width="40"  align="left"><input type="checkbox" value="" id="check_box" onclick="selectall('items[]');"></th>
            <th width="40"  align="left"><?php echo L('listorder');?></th>
            <th width="40"  align="left">ID</th>
            <th width=""  align="left"><?php echo L('title');?></th>
            <th width="15%"><?php echo L('catname');?></th>
            <th width="15%"><?php echo L('inputtime')?></th>
            <td width="15%" align="center"><?php echo L('posid_operation');?></td>
            </tr>
        </thead>
    <tbody>
 <?php 
if(is_array($infos)){
	foreach($infos as $info){
?>   
	<tr>
	<td >
	<input type="checkbox" name="items[]" value="<?php echo $info['id'],'-',$info['modelid']?>" id="items" boxid="items">
	</td>	
	<td >
	<input name='listorders[<?php echo $info['catid'],'-',$info['id']?>]' type='text' size='3' value='<?php echo $info['listorder']?>' class="input-text">
	</td>	
	<td   align="left"><?php echo $info['id']?></td>
	<td   align="left"><?php echo $info['title']?> <?php if($info['thumb']!='') {echo '<img src="'.IMG_PATH.'icon/small_img.gif">'; }?></td>
	<td   align="left"><?php echo $info['catname']?></td>
	<td  align="left"><?php echo date('Y-m-d H:i:s',$info['inputtime'])?></td>
	<td  align="center"><a onclick="javascript:openwinx('?m=content&c=content&a=edit&catid=<?php echo $info['catid']?>&id=<?php echo $info['id']?>','')" target="_blank" href="/admin.php?m=admin&c=goods&a=edit&id=<?php echo $info['id']?>"><?php echo L('posid_item_edit');?></a> | <a target="_blank" href="/admin.php?m=position&c=position&a=public_item_manage&id=<?php echo $info['id']?>&posid=<?php echo $info['posid']?>" ><?php echo L('posid_item_manage')?></a> | <a onclick="javascript:openwinx('?m=content&c=content&a=edit&catid=<?php echo $info['catid']?>&id=<?php echo $info['id']?>','')" target="_blank" href="/admin.php?m=position&c=position&a=delete_item&id=<?php echo $info['id']?>&posid=<?php echo $info['posid']?>&modelid=<?php echo $info['modelid']?>"><?php echo L('posid_item_remove');?></a>
	</td>
	</tr>
<?php 
	}
}
?>
    </tbody>
    </table>
  
    <div class="btns"> <input type="submit" class="button" value="<?php echo L('listorder')?>" onclick="myform.action='?m=admin&c=position&a=public_item_listorder';myform.submit();"/>  </div></div>

 <div id="pages"> <?php echo $pages?></div>
</div>
</div>
</form>

<script type="text/javascript">
	function item_manage(id,posid, modelid, name) {
	window.top.art.dialog({title:'<?php echo L('edit')?>--'+name, id:'edit', iframe:'?m=admin&c=position&a=public_item_manage&id='+id+'&posid='+posid+'&modelid='+modelid ,width:'550px',height:'430px'}, 	function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;
	var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
</script>
<?php include $this->admin_tpl('foot','admin');?>