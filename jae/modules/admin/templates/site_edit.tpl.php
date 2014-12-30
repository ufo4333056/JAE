<?php
defined('IN_JAE') or exit('No permission resources.');
include $this->
admin_tpl('head');
?>
<div class="pad-10">
  <form action="?m=admin&c=site&a=edit&siteid=<?php echo $siteid?>
    " method="post" id="myform">
    <fieldset>
      <legend>
        <?php echo L('basic_configuration')?></legend>
      <table width="100%"  class="table_form">
        <tr>
          <th width="80">
            <?php echo L('site_name')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="name" id="name" size="40" value="<?php echo $data['name']?>" /></td>
        </tr>
        
        <tr>
          <th>
            <?php echo L('site_domain')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="domain" id="domain"  size="40" value="<?php echo $data['domain']?>" /></td>
        </tr>   
        <tr>
          <th>
            <?php echo L('APPKEY')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="appkey" id="appkey" size="40" value="<?php echo $data['appkey']?>" /></td>
        </tr>
         <tr>
          <th>
            <?php echo L('SECRETKEY')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="secretkey" id="secretkey" size="40" value="<?php echo $data['secretkey']?>" /></td>
        </tr>
      </table>
    </fieldset>
    <div class="bk10"></div>
    <fieldset>
      <legend>
        <?php echo L('seo_configuration')?></legend>
      <table width="100%"  class="table_form">
        <tr>
          <th width="80">
            <?php echo L('site_title')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="site_title" id="site_title" size="40" value="<?php echo $data['site_title']?>" /></td>
        </tr>
        <tr>
          <th>
            <?php echo L('keyword_name')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="keywords" id="keywords" size="40" value="<?php echo $data['keywords']?>" /></td>
        </tr>
        <tr>
          <th>
            <?php echo L('description')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="description" id="description" size="40" value="<?php echo $data['description']?>" /></td>
        </tr>
      
      </table>
    </fieldset>
    <div class="bk10"></div>

    <fieldset>
      <legend>
        <?php echo L('template_style_configuration')?></legend>
      <table width="100%"  class="table_form">
        <tr>
          <th width="80" valign="top">
            <?php echo L('style_name')?></th>
          <td class="y-bg">
            <select name="template[]" size="1" style="width:200px;" id="template" multiple title="<?php echo L('ctrl_more_selected')?>
              " onchange="default_list()">
              <?php 
        $default_template_list =  array();
		
		
        if (isset($data['template'])) {
           $dirname = $data['template'];
        } else {
          $dirname = array();
        }
		
        if(is_array($template_list)):
        foreach ($template_list as $key=>
              $val):
        $default_template_list[$val['dirname']] = $val['name'];
      ?>
              <option value="<?php echo $val['dirname']?>"  <?php if($val['dirname']==$dirname){echo 'selected';}?> ><?php echo $val['name'] ;?></option>
              <?php endforeach;endif;?></select>
          </td>
        </tr>

      </table>

    </fieldset>
    <div class="bk10"></div>
    <fieldset>
      <legend>
        <?php echo L('site_att_config')?></legend>
      <table width="100%"  class="table_form">
        <tr>
          <th width="130" valign="top">
            <?php echo L('Í·²¿LOGO')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="setting[head_logo]" id="head_logo" size="50" value="<?php echo $setting['head_logo'] ? $setting['head_logo'] : '' ?>"/> </td>
        </tr>

        <tr>
          <th width="130" valign="top">
            <?php echo L('µ×²¿LOGO')?></th>
          <td class="y-bg">
            <input type="text" class="input-text" name="setting[foot_logo]"  id="foot_logo" size="50" value="<?php echo $setting['foot_logo'] ? $setting['foot_logo'] : '' ?>"/> </td>
        </tr>

      </table>
    </fieldset>
    <div class="bk15"></div>
    <input type="submit" class="button" id="dosubmit" name="dosubmit" value="<?php echo L('submit')?>" />
</form>
</div>
<?php 
include $this->admin_tpl('foot');
?>