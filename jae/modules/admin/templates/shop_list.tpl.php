<?php include $this->admin_tpl('head');?>

<form name="myform" action="/admin.php?m=admin&c=shop&a=listorder" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       <tbody>
            <tr class="thead">
          
            <th width="80"><?php echo L('listorder');?></th>
            <th width="30"><?php echo L('id');?></th>
            <th width="30">◊¥Ã¨</th> 
            <th width="80">Àı¬‘Õºµÿ÷∑</th>           
            <th>µÍ∆Ã√˚≥∆</th>
            <th>µÍ÷˜Í«≥∆</th>
           
           
           
			<th width="200" align="center"><?php echo L('operations_manage');?></th>
            </tr>
            
            
             <?php foreach ($data as $r){?>
            <tr>
            <td align="center"><input name='listorders[<?php echo $r['id'];?>]' type='text' size='3' value='<?php echo $r['listorder'];?>' class='input-text-c input-text'></td>
            <td  align="center"><?php echo $r['id'];?></td>
            <td  align="center">  <input   type="checkbox" name="status[<?php echo $r['id']; ?>]" value="1" <?php if( $r['status']==1){echo "checked='checked'";}?>  ></td>
            <td  align="center"><a target="_blank" href="<?php echo $r['detail_url']?>"><img src="<?php echo $r['pic_url'];?>"  height="40"></a></td>
            <td><a target="_blank" href="<?php echo $r['detail_url']?>"><?php echo $r['shop_title'];?></a></td>
            <td><?php echo $r['nick'];?></td>
           
           
           
            <td align="center"><?php echo '<a href="/admin.php?m=admin&c=shop&a=edit&id='.$r['id'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=admin&c=shop&a=delete&id='.$r['id'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
            
            
            
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