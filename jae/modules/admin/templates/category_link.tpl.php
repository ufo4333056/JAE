<?php include $this->admin_tpl('head');

			
?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=category&a=add" method="post">
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
        <td><input type="text" name="info[image]" id="catname" class="input-text" value="<?php echo $catname;?>"></td>
      </tr>
    <tr>
        <th><?php echo L('link_url')?>£º</th>
        <td><input type="text" name="info[url]" id="url" size="50" class="input-text" value="<?php echo $url;?>"></td>
      </tr>
</table>
<!--table_form_off--><input type='hidden' name='info[type]' value='2'>
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="Ìá½»"></div>

</form>
<?php include $this->admin_tpl('foot');?>