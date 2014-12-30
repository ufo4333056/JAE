<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=exchange&c=exchange&a=setting" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody> 
     
       <tr>
        <th>换购需知：</th>
        <td>
          <textarea style="width:350px;height:100px;" name="setting[content]"><?php echo $content?></textarea>

         <div id="nameTip" class="onShow"></div></td>
      </tr>	
</tbody></table>
<!--table_form_off-->
<div class="btns">
<input type="hidden" name="id" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>