<?php include $this->admin_tpl('head');?>

<form name="myform" action="/admin.php?m=admin&c=link&a=listorder" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       <tbody>
            <tr class="thead">
          
            <th width="80"><?php echo L('listorder');?></th>
            <th width="30"><?php echo L('id');?></th>
            <th width="30">状态</th> 
            <th width="80">缩略图地址</th>           
            <th>链接名称</th>
            <th width="100">特色馆名称</th>
           
           
           
			<th width="200" align="center"><?php echo L('operations_manage');?></th>
            </tr>
            
            
             <?php foreach ($data as $r){?>
            <tr>
            <td align="center"><input name='listorders[<?php echo $r['linkid'];?>]' type='text' size='3' value='<?php echo $r['listorder'];?>' class='input-text-c input-text'></td>
            <td  align="center"><?php echo $r['linkid'];?></td>
            <td  align="center">  <input   type="checkbox" name="passed[<?php echo $r['linkid']; ?>]" value="1" <?php if( $r['passed']==1){echo "checked='checked'";}?>  ></td>
            <td  align="center"><img src="<?php echo $r['logo'];?>"  height="40"></td>
            <td><?php echo $r['name'];?></td>
            <td align="center"><?php echo $r['username'];?></td>
           
           
            <td align="center"><?php echo '<a href="/admin.php?m=admin&c=link&a=edit&linkid='.$r['linkid'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=admin&c=link&a=delete&linkid='.$r['linkid'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
            
            
            
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