<?php include $this->admin_tpl('head','admin');?>


 <form name="searchform" action="" method="get" accept-charset="UTF-8">
    <input type="hidden" value="brand" name="m">
    <input type="hidden" value="brand" name="c">
    <input type="hidden" value="init" name="a">
    <input type="hidden" value="<?php echo $this->menuid;?>" name="menuid">
    <table width="100%" cellspacing="0" class="search-form">
      <tbody>
        <tr>
          <td><div class="explain-col"> 品牌分类
             <select name="typeid">
                                <option value="0">无分类</option>
                                <?php 
                                foreach($type as $r){; ?>
                                <option value="<?php echo $r['typeid']; ?>" <?php if ($r['typeid']==$typeid) echo "selected";?>><?php echo $r['name']; ?></option>
                                    <?php }; ?>
                            </select>

              
              
              <input type="submit" name="search" class="button" value="搜索">
            </div></td>
        </tr>
      </tbody>
    </table>
    <input name="pc_hash" type="hidden" value="4ua2L3">
  </form>



<form name="myform" action="/admin.php?m=brand&c=brand&a=listorder" method="post">
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
            <th width="100">品牌所属单位</th>
           
           
           
			<th width="200" align="center"><?php echo L('operations_manage');?></th>
            </tr>
            
            
             <?php foreach ($data as $r){?>
            <tr>
            <td align="center"><input name='listorders[<?php echo $r['brandid'];?>]' type='text' size='3' value='<?php echo $r['listorder'];?>' class='input-text-c input-text'></td>
            <td  align="center"><?php echo $r['brandid'];?></td>
            <td  align="center">  <input   type="checkbox" name="passed[<?php echo $r['brandid']; ?>]" value="1" <?php if( $r['passed']==1){echo "checked='checked'";}?>  ></td>
            <td  align="center"><img src="<?php echo $r['logo'];?>"  height="40"></td>
            <td><?php echo $r['name'];?></td>
            <td align="center"><?php echo $r['username'];?></td>
           
           
            <td align="center"><?php echo '<a href="/admin.php?m=brand&c=brand&a=edit&brandid='.$r['brandid'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=brand&c=brand&a=delete&brandid='.$r['brandid'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
            
            
            
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