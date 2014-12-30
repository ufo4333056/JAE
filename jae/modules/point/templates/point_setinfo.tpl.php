<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=point&c=point_set&a=point_setinfo" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody> 
      <tr>
    
        <th width="150">启用：</th>
       <td><input type="radio" name="setting[enable]" value="1" <?php if($enable==1) echo "checked"?>> 是&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio" name="setting[enable]" value="0" <?php if($enable==0) echo "checked"?>> 否</td>
      </tr>
       <tr>
        <th width="100"> 任务标题：</th>
        <td><input style="width:300px;" type="text" name="setting[title]"  value="<?php echo $title?>" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
        <tr>
        <th> 任务描述：</th>
        <td><input style="width:300px;" type="text" name="setting[description]"  value="<?php echo $description?>" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>任务图片：</th>
        <td> <input style="width:300px;" type="text" name="setting[thumb]"  value="<?php echo $thumb?>" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>    
       <tr>
        <th>任务积分：</th>
        <td><input style="width:300px;" type="text" name="setting[point]"  value="<?php echo $point?>" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>       
      
     
      
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns">
<input type="hidden" name="id" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>