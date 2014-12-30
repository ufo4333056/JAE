<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=member&c=buyer&a=edit_point" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody>
       <tr>
        <th> 标题</th>
        <td><input style="width:300px;" type="text" name="info[title]"  value="<?php echo $title?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      
      <tr>
    
        <th width="100">图片</th>
        <td><input style="width:300px;" type="text" name="info[picture]"  value="<?php echo $picture?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th> 积分</th>
        <td><input style="width:300px;" type="text" name="info[point]"  value="<?php echo $point?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
     
            <tr>
        <th>时间</th>
        <td><input style="width:300px;" type="text" name="info[date]"  value="<?php echo $date?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
       <tr>
        <th>类型</th>
        <td><input style="width:300px;" type="text" name="info[module]"  value="<?php echo $module?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
  
	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input type="hidden" name="id" value="<?php echo $id?>">
<input type="hidden" name="userid" value="<?php echo $userid?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>