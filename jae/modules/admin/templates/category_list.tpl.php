<?php include $this->admin_tpl('head');?>

<form name="myform" action="/admin.php?m=admin&c=category&a=listorder" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       <tbody>
            <tr class="thead">
          
            <th width="80"><?php echo L('listorder');?></th>
            <th width="30"><?php echo L('catid');?></th>
           
                   
            <th width="100" >栏目名称</th>
            <th width="100">栏目类型</th>
            <th width="100">所属模型</th>
             <th width="50">访问</th>
           
           
           
			<th  align="center"><?php echo L('operations_manage');?></th>
            </tr>
            
            
             <?php foreach ($data as $r){?>
            <tr>
            <td align="center"><input name='listorders[<?php echo $r['catid'];?>]' type='text' size='3' value='<?php echo $r['listorder'];?>' class='input-text-c input-text'></td>
            <td  align="center"><?php echo $r['catid'];?></td>
          
            <td><?php echo $r['catname'];?></td>
             <td><?php echo $types[$r['type']]?></td>
              <td><?php echo $models[$r['modelid']]['name']?></td>
               <td><a href="<?php echo $r['url']?>" target="_blank"><?php echo L('vistor');?></a></td>
           
           
           
            <td align="center"><?php echo '<a href="/admin.php?m=admin&c=category&a=edit&catid='.$r['catid'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=admin&c=category&a=delete&catid='.$r['catid'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
            
            
            
            </tr>
            <?php }?>
      
	
    </tbody>
   
	
    </table>
  
    <div class="btns"><input type="submit" class="button" name="dosubmit" value="<?php echo L('listorder')?>" /></div>  </div>
</div>
</div>
</form>
<div class="pages"><?php echo $pages;?></div>
<?php include $this->admin_tpl('foot');?>