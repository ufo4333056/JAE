<?php include $this->admin_tpl('head','admin');

			
?>

<form name="myform" id="myform" action="/admin.php?m=position&c=position&a=add" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
        <th width="300">�Ƽ�λ����:</th>
        <td><input style="width:300px;" type="text" name="info[name]" value="<?php echo $info['name']?>" id="language" class="input-text"></td>
      </tr>
      <tr>
        <th>��ʾ����:</th>
        <td><input style="width:300px;" type="text" name="info[title]" value="<?php echo $info['title']?>"  id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>����վ��:<?php echo $r['siteid'];?></th>
        <td><select name="info[siteid]">
        <?php foreach ($sitelist as $c) : ?>
        
        <option value="<?php echo  $c['siteid']?>" <?php if ($c['siteid']==$info['siteid']) echo "selected";?> ><?php echo $c['name']?></option>
        <?php endforeach?>
        
        </select></td>
      </tr>
      <tr>
        <th>����ģ��:</th>
        <td><select name="info[modelid]">
        <?php foreach ($models as $m) : ?>        
        <option value="<?php  echo  $m['modelid']?>" <?php if($m['modelid']== $info['modelid']) echo "selected"?> ><?php echo $m['name']?></option>
        <?php endforeach?>
        
        </select></td>
      </tr>
     
	
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="�ύ"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>