<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=order&c=order&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
    
        <th width="100">标题：</th>
        <td><input style="width:300px;" type="text" name="info[title]"  size="120" value="<?php echo $title?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th> 图片：</th>
        <td><input style="width:300px;" type="text" name="info[picture]"  value="<?php echo $picture?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
     
            <tr>
        <th>描述：</th>
        <td><input style="width:300px;" size="255" type="text" name="info[description]"  value="<?php echo $description?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
       <th>相关链接：</th>
        <td><input style="width:300px;" type="text" name="info[url]"  value="<?php echo $url?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
      
        <tr>
        <th>快递名称：</th>
        <td><input style="width:300px;"  size="6" type="text" name="info[express_name]"  value="<?php echo $express_name?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>快递单号：</th>
        <td><input style="width:300px;"  size="6" type="text" name="info[express_num]"  value="<?php echo $express_num?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
    
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns">
<input type="hidden" name="id" value="<?php echo $id?>"><input type="hidden" name="info[status]" value="6"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>