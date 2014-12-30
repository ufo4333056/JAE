<?php include $this->admin_tpl('head','admin');

			
?>

<form name="myform" id="myform" action="/admin.php?m=weblink&c=weblink_type&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody>
      <tr>
        <th>所属站点:<?php echo $r['siteid'];?></th>
        <td><select name="info[siteid]">
        <?php foreach ($sitelist as $c) : ?>
        
        <option value="<?php echo  $c['siteid']?>" <?php if ($c['siteid']==$siteid) echo "selected";?> ><?php echo $c['name']?></option>
        <?php endforeach?>
        
        </select></td>
      </tr>
        <th width="100">名称：</th>
        <td><input style="width:300px;" type="text" name="info[name]" value="<?php echo $name?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>描述：</th>
        <td><textarea style="width:300px;height: 80px;" name="info[description]"><?php echo $description?></textarea><div id="nameTip" class="onShow"></div></td>
      </tr>
     
	
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input type="hidden" name="typeid" value="<?php echo $typeid?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>