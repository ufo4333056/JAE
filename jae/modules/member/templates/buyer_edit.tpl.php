<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=member&c=buyer&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody>
       <tr>
        <th> 淘宝混肴昵称：</th>
        <td><?php echo $username;?><div id="languageTip" class="onShow"></div></td>
      </tr>
      
      <tr>
    
        <th width="100">用户姓名：</th>
        <td><input style="width:300px;" type="text" name="info[nickname]"  value="<?php echo $nickname?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th> 旺旺：</th>
        <td><input style="width:300px;" type="text" name="info[wangwang]"  value="<?php echo $wangwang?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
     
            <tr>
        <th>手机：</th>
        <td><input style="width:300px;" type="text" name="info[mobile]"  value="<?php echo $mobile?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
       <tr>
        <th>地址：</th>
        <td><input style="width:300px;" type="text" name="info[address]"  value="<?php echo $address?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
    <?php if ($groupid==2) {?>  
      
      <tr>
        <th>店铺名称：</th>
        <td><input style="width:300px;" type="text" name="info[shop_title]"  value="<?php echo $shop_title?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
        <tr>
        <th>店铺简介：</th>
        <td><input style="width:300px;" type="text" name="info[shop_profile]"  value="<?php echo $shop_profile?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
        <tr>
        <th>店铺地址：</th>
        <td><input style="width:300px;" type="text" name="info[shop_url]"  value="<?php echo $shop_url?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
      
	<?php }?>
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns">
<input type="hidden" name="userid" value="<?php echo $userid?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>