<?php include $this->admin_tpl('head');

			
?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=link&a=add" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
        <th width="100">�������ƣ�</th>
        <td><input style="width:300px;" type="text" name="info[name]" id="language" class="input-text"></td>
      </tr>
      <tr>
        <th> ����ͼ��ַ��</th>
        <td><input style="width:300px;" type="text" name="info[logo]" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>���ӵ�ַ��</th>
        <td><input style="width:300px;" type="text" name="info[url]" id="name" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
	<tr>
        <th>��ɫ�����ƣ�</th>
        <td><input style="width:300px;" type="text" name="info[username]" id="m" class="input-text"><div id="mTip" class="onShow"></div></td>
      </tr>
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="�ύ"></div>

</form>
<?php include $this->admin_tpl('foot');?>