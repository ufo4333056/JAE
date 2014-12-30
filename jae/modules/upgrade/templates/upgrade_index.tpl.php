<?php include $this->admin_tpl('head','admin');
	
?>

<div class="pad-lr-10">
<div class="table-list">

<div class="explain-col">
<?php echo L('upgrade_notice');?>
</div>
<div class="bk15"></div>

<form name="myform" action="" method="post" id="myform">
<input type="hidden" name="s" value="1" />
<input type="hidden" name="cover" value="<?php echo $_GET['cover']?>" />
<input name="m" value="upgrade" type="hidden" />
<input name="c" value="index" type="hidden" />
<input name="a" value="init" type="hidden" />
<table width="100%" cellspacing="0">
  <thead>
    <tr class="thead">
      <th align="left" width="300"><?php echo L('currentversion')?><?php if(empty($pathlist)) {?><?php echo L('lastversion')?><?php }?></th>
      <th align="left"><?php echo L('updatetime')?></th>
    </tr>
  </thead>
<tbody>
    <tr>
    <td align="left"><?php echo $siteinfo['version'];?></td>
    <td align="left"><?php echo $siteinfo['date'];?></td>
    </tr>

</tbody>
</table>
<?php if(!empty($pathlist)) {?>
<div class="bk15"></div>
<table width="100%" cellspacing="0" class="table-list" >
<thead>
  <tr class="thead">
    <th align="left" width="300"><?php echo L('updatelist')?></th>
    <th align="left"><?php echo L('updatetime')?></th>
  </tr>
</thead>
<tbody> 
  <?php foreach($pathlist as $v) { ?>
  <tr>
    <td><?php echo $v;?></td>
    <td><?php echo substr($v, 0, 8);?></td>
  </tr>
  <?php }?>
</tbody>
</table>
    <div class="bk15"></div>
  
   <div class="btns"> <input name="dosubmit" type="submit" id="dosubmit" value="<?php echo L('begin_upgrade')?>" class="button"></div>
<?php }?>
</form>
</div>
</div>
<?php include $this->admin_tpl('foot','admin');?>