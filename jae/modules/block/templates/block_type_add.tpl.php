<?php include $this->admin_tpl('head','admin');

			
?>

<form name="myform" id="myform" action="/admin.php?m=block&c=block_type&a=add" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody>
     
     
        <th width="100">���ƣ�</th>
        <td><input style="width:300px;" type="text" name="info[name]" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>������</th>
        <td><textarea style="width:300px;height: 80px;" name="info[description]"></textarea><div id="nameTip" class="onShow"></div></td>
      </tr>
     
	
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="�ύ"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>