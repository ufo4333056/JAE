<?php include $this->admin_tpl('head');?>

<form name="myform" action="/admin.php?m=admin&c=special&a=listorder" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       <tbody>
            <tr class="thead">
          
               <th width="20" align="left">ID</th> 
            <th width="200" align="left">标题</th>
           
           
           
			<th  align="left"><?php echo L('operations_manage');?></th>
            </tr>
            
            
             <?php foreach($data as $v){
			$path=special_css($v['id'],$v['css']);
			
			?>
            <tr> <td align="left"><?php echo $v['id'];?></td>
            <td align="left"><?php echo $v['title'];?></td>
                   
            <td align="left"><?php echo '成功生成CSS文件'.$path.''?></td>
            
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