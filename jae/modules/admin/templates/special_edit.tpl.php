<?php include $this->admin_tpl('head');?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=special&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
        <th width="100">标题：</th>
        <td><input style="width:300px;" type="text" name="info[title]" value="<?php echo $title;?>" id="language" class="input-text"></td>
      </tr>
      <tr>
        <th> 缩略图地址：</th>
        <td><input style="width:300px;" type="text" name="info[thumb]" value="<?php echo $thumb;?>"  id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>描述：</th>
        <td><input style="width:300px;" type="text" name="info[description]" value="<?php echo $description;?>"  class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
	<tr>
        <th>HTML：</th>
        <td><textarea style="width:600px;;height: 80px;" name="info[html]"><?php echo $html;?></textarea><div id="mTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>CSS：</th>
        <td><textarea style="width:600px;;height: 80px;" name="info[css]"><?php echo $css;?></textarea><div id="mTip" class="onShow"></div></td>
      </tr>
       
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input name="id" type="hidden" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot');?>