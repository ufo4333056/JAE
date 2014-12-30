<?php include $this->admin_tpl('head','admin');?>

<form name="myform" action="/admin.php?m=admin&c=focus&a=listorder" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       <tbody>
            <tr class="thead">
          
            
            <td width="30"><?php echo L('posid');?></td>
           
              
            <td width="220" align="left">推荐位名称</td>
           	<td width="220" align="left">显示标题</td>
            	<td width="120" align="left">所属站点</td>
                	<td width="120" align="left">所属模型</td>
          
           
			<td align="center"><?php echo L('operations_manage');?></td>
            </tr>
            
            
             <?php foreach ($data as $r){?>
            <tr>
            
            <td   align="center"><?php echo $r['posid'];?></td>
           
             <td  align="left"><?php echo $r['name'];?></td>
            <td ><?php echo $r['title'];?></td>
             <td ><?php echo $sitelist[$r['siteid']]['name'];?></td>
              <td ><?php echo $models[$r['modelid']]['name'];?></td>
            
           
            <td align="center"><?php echo '<a href="/admin.php?m=position&c=position&a=public_item&posid='.$r['posid'].'&menuid='.$this->menuid.'">'.L('信息管理').'</a> | <a href="/admin.php?m=position&c=position&a=edit&posid='.$r['posid'].'&menuid='.$this->menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=position&c=position&a=delete&posid='.$r['posid'].'&menuid='.$this->menuid.'">'.L('delete').'</a> ';?></td>
            
            
            
            </tr>
            <?php }?>
      
	
    </tbody>
   
	
    </table>
  
    <div class="btns"><input type="submit" class="button" name="dosubmit" value="<?php echo L('listorder')?>" /></div>  </div>
</div>
</div>
</form>
<div class="pages"><?php echo $pages;?></div>
<?php include $this->admin_tpl('foot','admin');?>