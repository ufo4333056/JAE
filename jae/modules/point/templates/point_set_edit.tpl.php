<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=point&c=point_set&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
    
        <th width="100">���⣺</th>
        <td><input style="width:300px;" type="text" name="info[title]"  value="<?php echo $title?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th> ͼƬ��</th>
        <td><input style="width:300px;" type="text" name="info[picture]"  value="<?php echo $picture?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
     
            <tr>
        <th>������</th>
        <td><input style="width:300px;" type="text" name="info[description]"  value="<?php echo $description?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
       <tr>
        <th>�ڼ��죺</th>
        <td><input style="width:300px;" type="text" name="info[day]"  value="<?php echo $day?>" id="language" class="input-text"><div id="nameTip" class="onShow">��������</div></td>
      </tr>
        <tr>
        <th>��Ӧ������</th>
        <td><input style="width:300px;" type="text" name="info[point]"  value="<?php echo $point?>" id="language" class="input-text"><div id="nameTip" class="onShow">��������</div></td>
      </tr>
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns">
<input type="hidden" name="id" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="�ύ"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>