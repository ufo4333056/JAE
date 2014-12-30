<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('head');
?>


<div class="pad-10">
<form action="?m=admin&c=site&a=add" method="post" id="myform">
<div>
<fieldset>
	<legend><?php echo L('basic_configuration')?></legend>
	<table width="100%"  class="table_form">
  <tr>
    <th width="80"><?php echo L('site_name')?>£º</th>
    <td class="y-bg"><input type="text" class="input-text" name="name" id="name" size="40" /></td>
  </tr>
  
    <tr>
    <th><?php echo L('site_domain')?>£º</th>
    <td class="y-bg"><input type="text" class="input-text" name="domain" id="domain"  size="40"/></td>
  </tr>   <tr>
    <th><?php echo L('APPKEY')?>£º</th>
    <td class="y-bg"><input type="text" class="input-text" name="appkey" id="appkey" size="40" /></td>
  </tr>
   <tr>
    <th><?php echo L('SECRETKEY')?>£º</th>
    <td class="y-bg"><input type="text" class="input-text" name="secretkey" id="secretkey" size="40" /></td>
  </tr>
</table>
</fieldset>
<div class="bk15"></div>
<fieldset>
	<legend><?php echo L('seo_configuration')?></legend>
	<table width="100%"  class="table_form">
  <tr>
    <th width="80"><?php echo L('site_title')?>£º</th>
    <td class="y-bg"><input type="text" class="input-text" name="site_title" id="site_title" size="40" /></td>
  </tr>
  <tr>
    <th><?php echo L('keyword_name')?>£º</th>
    <td class="y-bg"><input type="text" class="input-text" name="keywords" id="keywords" size="40" /></td>
  </tr>
    <tr>
    <th><?php echo L('description')?>£º</th>
    <td class="y-bg"><input type="text" class="input-text" name="description" id="description" size="40" /></td>
  </tr>

</table>
</fieldset>

<div class="bk15"></div>
<fieldset>
	<legend><?php echo L('template_style_configuration')?></legend>
	<table width="100%"  class="table_form">
  <tr>
    <th width="80" valign="top"><?php echo L('style_name')?>£º</th>
    <td class="y-bg"> <select name="template[]" size="3"  style="width:200px;"  id="template" multiple title="<?php echo L('ctrl_more_selected')?>" onchange="default_list()">
    	<?php if(is_array($template_list)):
    		foreach ($template_list as $key=>$val):
    	?>
		  <option value="<?php echo $val['dirname']?>"><?php echo $val['name']?></option>
		  <?php endforeach;endif;?>
		</select></td>
  </tr>
   </tr>
    
</table>

</fieldset>
<div class="bk15"></div>
<fieldset>
      <legend>
        <?php echo L('site_att_config')?></legend>
      <table width="100%"  class="table_form">
        <tr>
          <th width="130" valign="top">
            <?php echo L('Í·²¿LOGO')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="setting[head_logo]" id="head_logo" size="50" value=""/> </td>
        </tr>

        <tr>
          <th width="130" valign="top">
            <?php echo L('µ×²¿LOGO')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="setting[foot_logo]"  id="foot_logo" size="50" value=""/> </td>
        </tr>

      </table>
    </fieldset>
</div>
<div class="bk15"></div>
    <input type="submit" class="button" id="dosubmit" name="dosubmit" value="<?php echo L('submit')?>" />


</form>
<?php

include $this->admin_tpl('foot');
?>
