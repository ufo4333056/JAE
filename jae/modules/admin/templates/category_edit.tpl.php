<?php include $this->admin_tpl('head');

			
?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=category&a=edit" method="post">
<table width="100%" class="table_form ">
 
		<tr>
        <th width="200"><?php echo L('select_model')?>£º</th>
        <td>
		  <?php
			$model_datas = array();
			foreach($models as $_k=>$_v) {
				//if($_v['siteid']!=$this->siteid) continue;
				$model_datas[$_v['modelid']] = $_v['name'];
			}
			echo form::select($model_datas,$modelid,'name="info[modelid]" id="modelid" onchange="change_tpl(this.value)"',L('select_model'));
		?>
		</td>
      </tr>
      <tr>
        <th width="200"><?php echo L('parent_category')?>£º</th>
        <td> <?php echo form::select_category('category_content_'.$this->siteid,$parentid,'name="info[parentid]"',L('please_select_parent_category'),0,-1);?>
		
		</td>
      </tr>
     
      <tr>
        <th><?php echo L('catname')?>£º</th>
        <td>
        <span id="normal_add"><input type="text" name="info[catname]" id="catname" class="input-text" value="<?php echo $catname?>"></span>
        <span id="batch_add" style="display:none"> 
        <table width="100%" class="sss"><tr><td width="310"><textarea name="batch_add" maxlength="255" style="width:300px;height:60px;"></textarea></td>
        <td align="left">
        <?php echo L('batch_add_tips');?>
 </td></tr></table>
        </span>
		</td>
      </tr>
	<tr id="catdir_tr">
        <th><?php echo L('catdir')?>£º</th>
        <td><input type="text" name="info[catdir]" id="catdir" class="input-text" value="<?php echo $catdir?>"></td>
      </tr>
	<tr>
        <th><?php echo L('catgory_img')?>£º</th>
        <td><input type="text" name="info[image]" id="catdir" class="input-text" value="<?php echo $catgory_img?>"></td>
      </tr>
	<tr>
        <th><?php echo L('description')?>£º</th>
        <td>
		<textarea name="info[description]" maxlength="255" style="width:300px;height:60px;"><?php echo $description;?></textarea>
		</td>
      </tr>

	
<tr>
     <th><?php echo L('ismenu');?>£º</th>
      <td> <input type='hidden' name='info[type]' value='0'> <input type='hidden' name='catid' value='<?php echo $catid?>'>
	  <input type='radio' name='info[ismenu]' value='1'<?php if($ismenu==1) echo "checked" ?> > <?php echo L('yes');?>&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type='radio' name='info[ismenu]' value='0' <?php if($ismenu==0) echo "checked" ?> > <?php echo L('no');?></td>
    </tr>
</table>
<!--table_form_off-->
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="Ìá½»"></div>

</form>
<?php include $this->admin_tpl('foot');?>