<?php include $this->admin_tpl('head');?>

<form name="myform" action="/admin.php?m=admin&c=article&a=listorder" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       <tbody>
            <tr class="thead">
          
            <th width="80"><?php echo L('listorder');?></th>
            <th width="30"><?php echo L('id');?></th>
            <th width="30">״̬</th> 
            <th width="80">����ͼ��ַ</th>           
            <th>����</th>
           
           
           
			<th width="200" align="center"><?php echo L('operations_manage');?></th>
            </tr>
            
            
             <?php foreach ($data as $r){?>
            <tr>
            <td align="center"><input name='listorders[<?php echo $r['id'];?>]' type='text' size='3' value='<?php echo $r['listorder'];?>' class='input-text-c input-text'></td>
            <td  align="center"><?php echo $r['id'];?></td>
            <td  align="center">  <input   type="checkbox" name="status[<?php echo $r['id']; ?>]" value="1" <?php if( $r['status']==1){echo "checked='checked'";}?>  ></td>
            <td  align="center"><img src="<?php echo $r['thumb'];?>"  height="40"></td>
            <td><?php echo $r['title'];?></td>
           
           
           
            <td align="center"><?php echo '<a href="/admin.php?m=admin&c=article&a=edit&id='.$r['id'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=admin&c=article&a=delete&id='.$r['id'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
            
            
            
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