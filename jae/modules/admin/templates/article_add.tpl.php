<?php include $this->admin_tpl('head');

			
?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=article&a=add" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
        <th width="100">标题：</th>
        <td><input style="width:600px;" type="text" name="info[title]" id="language" class="input-text"></td>
      </tr>
      <tr>
        <th width="100">缩略图：</th>
        <td><input style="width:600px;" type="text" name="info[thumb]" id="language" class="input-text"></td>
      </tr>
      <tr>
        <th> 关键字：</th>
        <td><input style="width:600px;" type="text" name="info[keyword]" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>文章描述：</th>
        <td><textarea style="width:600px;height:80px;" name="info[description]"></textarea><div id="nameTip" class="onShow"></div></td>
      </tr>
	<tr>
        <th>文章内容：</th>
        <td>
        <textarea style="width:600px;height:600px;" name="info[content]"></textarea>
        <div id="mTip" class="onShow"></div></td>
      </tr>
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot');?>