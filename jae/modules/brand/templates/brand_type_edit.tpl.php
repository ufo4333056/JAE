<?php include $this->admin_tpl('head','admin');

			
?>

<form name="myform" id="myform" action="/admin.php?m=brand&c=brand_type&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody>
     
        <th width="100">Ãû³Æ£º</th>
        <td><input style="width:300px;" type="text" name="info[name]" value="<?php echo $name?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>ÃèÊö£º</th>
        <td><textarea style="width:300px;height: 80px;" name="info[description]"><?php echo $description?></textarea><div id="nameTip" class="onShow"></div></td>
      </tr>
     
	
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input name="typeid" type="hidden" value="<?php echo $typeid?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="Ìá½»"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>