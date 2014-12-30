<?php include $this->admin_tpl('head');?>

<form name="myform" action="/admin.php?m=admin&c=menu&a=listorder" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       
            <tr class="thead">
            <th width="80"><?php echo L('listorder');?></th>
            <th width="100">id</th>
            <th><?php echo L('menu_name');?></th>
			<th width="200" align="center"><?php echo L('operations_manage');?></th>
            </tr>
      
	<?php echo $categorys;?>
    
   
	
    </table>
  
    <div class="btns"><input type="submit" class="button" name="dosubmit" value="<?php echo L('listorder')?>" /></div>  </div>
</div>
</div>
</form>
<?php include $this->admin_tpl('foot');?>