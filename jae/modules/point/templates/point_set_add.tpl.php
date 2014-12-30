<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=point&c=point_set&a=add" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
    
        <th width="100">标题：</th>
        <td><input style="width:300px;" type="text" name="info[title]"  value="<?php echo $title?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th> 图片：</th>
        <td><input style="width:300px;" type="text" name="info[picture]"  value="<?php echo $picture?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
     
            <tr>
        <th>描述：</th>
        <td><input style="width:300px;" type="text" name="info[description]"  value="<?php echo $description?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
       <tr>
        <th>第几天：</th>
        <td><input style="width:300px;" type="text" name="info[day]"  value="<?php echo $day?>" id="language" class="input-text"><div id="nameTip" class="onShow">数字整数</div></td>
      </tr>
        <tr>
        <th>相应分数：</th>
        <td><input style="width:300px;" type="text" name="info[point]"  value="<?php echo $point?>" id="language" class="input-text"><div id="nameTip" class="onShow">数字整数</div></td>
      </tr>
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>