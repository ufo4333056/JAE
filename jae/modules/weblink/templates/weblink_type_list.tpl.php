<?php include $this->admin_tpl('head','admin');?>

<form name="myform" action="/admin.php?m=admin&c=focus&a=listorder" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       <tbody>
            <tr class="thead">
          
           
            <th width="30"><?php echo L('id');?></th>
            <th width="30">名称</th> 
            <th width="80">描述</th> 
            <th width="80">所属站点</th>           
            
           
           
           
			<th width="200" align=""><?php echo L('operations_manage');?></th>
            </tr>
            
            
             <?php foreach ($data as $r){?>
            <tr>
             <td  align=""><?php echo $r['typeid'];?></td>
            <td  align=""><?php echo $r['name'];?> </td>
            <td  align=""><?php echo $r['description'];?></td>
            <td  align=""><?php echo $sitelist[$r['siteid']]['name'];?></td>
          
           
         
            <td align=""><?php echo '<a href="/admin.php?m=weblink&c=weblink&a=add&typeid='.$r['typeid'].'&menuid=59">添加子页面链接</a> | <a href="/admin.php?m=weblink&c=weblink_type&a=edit&typeid='.$r['typeid'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=weblink&c=weblink_type&a=delete&typeid='.$r['typeid'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
            
            
            
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