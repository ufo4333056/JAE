<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=point&c=point_set&a=point_task" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody> 
       <tr>
        <th> ������ɫ��</th>
        <td><input style="width:100px;" type="text" name="setting[bg_color]"  value="<?php echo $bg_color?>" class="input-text"><div id="languageTip" class="onShow">#85151E</div></td>
      </tr>
        <tr>
        <th> ͼƬ��</th>
        <td><input style="width:300px;" type="text" name="setting[bg_img]"  value="<?php echo $bg_img?>" class="input-text"><div id="languageTip" class="onShow">/statics/images/sign.png</div></td>
      </tr>
      <tr>
        <th>��������˵����</th>
        <td> <div class="kg_editorContainer" data-config='{"width":"700","height":"200"}'><textarea class="ks-editor-textarea" tabindex="0" style="width:600px;;height: 200px;" name="setting[task]"><?php echo $task;?></textarea></div><div id="nameTip" class="onShow"></div></td>
      </tr>      
      
     
      
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns">
<input type="hidden" name="id" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="�ύ"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>