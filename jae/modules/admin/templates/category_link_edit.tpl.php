<?php include $this->admin_tpl('head');

			
?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=category&a=edit" method="post">
<table width="100%" class="table_form ">
  <tr>
        <th width="200"><?php echo L('parent_category')?>£º</th>
        <td>
    <?php echo form::select_category('category_content_'.$this->siteid,$parentid,'name="info[parentid]"',L('please_select_parent_category'),0,-1);?>
    </td>
      </tr>
      <tr>
        <th><?php echo L('catname')?>£º</th>
        <td><input type="text" name="info[catname]" id="catname" class="input-text" value="<?php echo $catname;?>"></td>
      </tr>

  <tr>
        <th><?php echo L('catgory_img')?>£º</th>
        <td><input type="text" name="info[image]" id="catname" class="input-text" value="<?php echo $image;?>"></td>
      </tr>
    <tr>
        <th><?php echo L('link_url')?>£º</th>
        <td><input type="text" name="info[url]" id="url" size="50" class="input-text" value="<?php echo $url;?>"></td>
      </tr>
      <tr>
     <th><?php echo L('ismenu');?>£º</th>
      <td> <input type='hidden' name='info[type]' value='2'> <input type='hidden' name='catid' value='<?php echo $catid?>'>
	  <input type='radio' name='info[ismenu]' value='1'<?php if($ismenu==1) echo "checked" ?> > <?php echo L('yes');?>&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type='radio' name='info[ismenu]' value='0' <?php if($ismenu==0) echo "checked" ?> > <?php echo L('no');?></td>
    </tr>
</table>
<!--table_form_off--><input type='hidden' name='info[type]' value='2'><input type='hidden' name='catid' value='<?php echo $catid;?>'>
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="Ìá½»"></div>

</form>
<?php include $this->admin_tpl('foot');?>