<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=member&c=buyer&a=export" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody>
       <tr>
        <th> USERID开始</th>
        <td><input style="width:300px;" type="text" name="limit_start"  value="" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      
      <tr>
    
        <th width="100"> USERID结束</th>
        <td><input style="width:300px;" type="text" name="limit_end"  value="" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
     
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns">
<input type="hidden" name="userid" value="<?php echo $userid?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>