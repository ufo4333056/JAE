<?php include $this->admin_tpl('head');

			
?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=article&a=add" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
        <th width="100">���⣺</th>
        <td><input style="width:600px;" type="text" name="info[title]" value="<?php echo $title;?>" id="language" class="input-text"></td>
      </tr>
      <tr>
        <th width="100">����ͼ��</th>
        <td><input style="width:600px;" type="text" name="info[thumb]" value="<?php echo $thumb;?>" id="language" class="input-text"></td>
      </tr>
      <tr>
        <th> �ؼ��֣�</th>
        <td><input style="width:600px;" type="text" name="info[keyword]"  value="<?php echo $keyword;?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>����������</th>
        <td><textarea style="width:600px;height:80px;" name="info[description]"><?php echo $description;?></textarea><div id="nameTip" class="onShow"></div></td>
      </tr>
	<tr>
        <th>�������ݣ�</th>
        <td>
        <textarea style="width:600px;height:600px;" name="info[content]"><?php echo $content;?></textarea>
        <div id="mTip" class="onShow"></div></td>
      </tr>
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="�ύ"></div>

</form>
<?php include $this->admin_tpl('foot');?>