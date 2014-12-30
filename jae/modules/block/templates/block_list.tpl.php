<?php include $this->admin_tpl('head','admin');?>
<form name="myform" action="/admin.php?m=block&c=block&a=init&menuid=<?php echo $this->menuid?>" method="post">
<table class="admin-form-table" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <th width="145">分类查询</th>
          <td width="185"> <select name="info[typeid]">
                                <option value="0">无分类</option>
                                <?php 
                                foreach($type as $r){; ?>
                                <option value="<?php echo $r['typeid']; ?>" <?php if ($r['typeid']==$typeid) echo "selected";?>><?php echo $r['name']; ?></option>
                                    <?php }; ?>
                            </select></td><td  width="60">关键字</td><td><input type="text" name="kw"  class=' input-text' value="<?php echo $kw;?>">  <input type="submit" class="button" name="dosubmit" value="<?php echo L('submit')?>" /> </td>  <td> </td><td> </td></tr></table>
</form>
<form name="myform" action="/admin.php?m=admin&c=focus&a=listorder" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       <tbody>
            <tr class="thead">
          
           
            <th width="30"><?php echo L('id');?></th>
            <th width="30">名称</th> 
            <th width="80">显示的位置</th>   
             <th width="30">描述</th>      
             <th width="80">所属站点</th>      
            
           
           
           
			<th width="200" align="center"><?php echo L('operations_manage');?></th>
            </tr>
            
            
             <?php foreach ($data as $r){?>
            <tr>
             <td  align=""><?php echo $r['id'];?></td>
            <td  align=""><?php echo $r['name'];?> </td>
            <td  align=""><?php echo $r['pos'];?></td>
            <td  align=""><?php echo $r['description'];?></td>
            <td  align=""><?php echo $sitelist[$r['siteid']]['name'];?></td>
          
           
           
            <td align="center"><?php echo '<a href="/admin.php?m=block&c=block&a=edit&id='.$r['id'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=block&c=block&a=delete&id='.$r['id'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
            
            
            
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