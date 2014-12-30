<?php include $this->admin_tpl('head','admin');?>
<form name="myform" action="/admin.php?m=weblink&c=weblink&a=init&menuid=<?php echo $this->menuid?>" method="post">
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
<form name="myform" action="/admin.php?m=weblink&c=weblink&a=listorder" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       <tbody>
            <tr class="thead">
          <th width="20">id</th> 
            <th width="20">排序</th> 
            
            <th width="140">标题</th> 
            <th width="80">图片</th>  
             <th width="80">链接</th>  
			<th  width="80" align="center">链接描述</th>	
            <th width="100">所属站点</th>      
            <th align=""><?php echo L('operations_manage');?></th>
              
            </tr>
            
            
             <?php foreach ($data as $r){?>
            <tr>
            <td><?php echo $r['id'];?></td>
            <td ><input name='listorders[<?php echo $r['id'];?>]' type='text' size='3' value='<?php echo $r['listorder'];?>' class='input-text-c input-text'></td> 
            <td  align=""><input style="width:140px;" type="text" name="title[<?php echo $r['id'];?>]" value="<?php echo $r['title'];?>" class="input-text"> </td>
            <td  align=""><input style="width:140px;" type="text" name="picture[<?php echo $r['id'];?>]" value="<?php echo $r['picture'];?>" class="input-text"></td>
              <td  align=""><input style="width:140px;" type="text" name="link[<?php echo $r['id'];?>]" value="<?php echo $r['link'];?>" class="input-text"></td>
            <td align=""><input style="width:140px;" type="text" name="description[<?php echo $r['id'];?>]" value="<?php echo $r['description'];?>" class="input-text"></td>
             <td  align=""><?php echo $sitelist[$r['siteid']]['name'];?></td>
             <td align=""><?php echo '<a href="/admin.php?m=weblink&c=weblink&a=edit&id='.$r['id'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=weblink&c=weblink&a=delete&id='.$r['id'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
            
            
            </tr>
            <?php }?>
      
	
    </tbody>
   
	
    </table>
  
    <div class="btns"><input type="submit" class="button" name="dosubmit" value="<?php echo L('submit')?>" /></div>  </div>
</div>
</div>
</form>
<div class="pages"><?php echo $pages;?></div>
<?php include $this->admin_tpl('foot','admin');?>