<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=prize&c=prize_set&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
    
        <th width="100">���⣺</th>
        <td><input style="width:300px;" type="text" name="info[title]"  size="120" value="<?php echo $title?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th> ͼƬ��</th>
        <td><input style="width:300px;" type="text" name="info[picture]"  value="<?php echo $picture?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
     
            <tr>
        <th>������</th>
        <td><input style="width:300px;" size="255" type="text" name="info[description]"  value="<?php echo $description?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
       <th>������ӣ�</th>
        <td><input style="width:300px;" type="text" name="info[url]"  value="<?php echo $url?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
       <tr>
        <th>��Ʒ���� ��</th>
        <td>
		<select name="info[typeid]">
		<?php foreach($prize_type as $type_id=>$name) {?><option <?php if( $type_id==$typeid) echo "selected"?>   value="<?php echo $type_id?>"> <?php echo $name?></option><?php }?>
        
        </select>
        </td>
      </tr>
        <tr>
        <th>�н����ʣ�</th>
        <td><input size="6" type="text" name="info[odds]"  value="<?php echo $odds?>" id="language" class="input-text"><div id="nameTip" class="onShow">������������</div></td>
      </tr>
      <tr>
        <th>��Ʒ������</th>
        <td><input size="6" type="text" name="info[num]"  value="<?php echo $num?>" id="language" class="input-text"><div id="nameTip" class="onShow">������������</div></td>
      </tr>
       <tr>
        <th>�н����֣�</th>
        <td><input size="6" type="text" name="info[point]"  value="<?php echo $point?>" id="language" class="input-text"><div id="nameTip" class="onShow">������������</div></td>
      </tr>
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns">
<input type="hidden" name="id" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="�ύ"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>