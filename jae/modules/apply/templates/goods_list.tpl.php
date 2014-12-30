<?php include $this->admin_tpl('head','admin');?>


      
    
      
      <div class="pad-lr-10">
<form name="searchform" action="" method="get" accept-charset="UTF-8">
    <input type="hidden" name="m" value="apply">
    <input type="hidden" name="c" value="goods">
    <input type="hidden" name="a" value="search">   
    <input type="hidden" name="dopost" value="search">  
    <input type="hidden" value="<?php echo $this->menuid;?>" name="menuid"> 
    <table width="100%" cellspacing="0" class="search-form">
      <tbody>
        <tr>
          <td><div class="explain-col"> 
            分类： <select name="searchCategoryId">
          <option<?php if(intval($searchCategoryId)==-1){?> selected="selected"<?php }?> value="-1">全部</option>
          <?php
                                foreach ($categoryArr as $catid => $name)
                                {
                                    ?>
          <option <?php if ($searchCategoryId == $catid)
                                {
                                        ?>selected="selected" <?php }; ?>value="<?php echo $catid; ?>"><?php echo $name; ?></option>
          <?php }; ?>
          <option <?php if(intval($searchCategoryId)==0){?> selected="selected"<?php }?> value="0">无分类</option>
        </select>
      推荐位：  <select name="searchPromoteId[<?php echo $row['id']?>]">
          <option<?php if(intval($searchPromoteId)==-1){?> selected="selected"<?php }?> value="-1">全部</option>
          <?php foreach($promotePositionArr as $promoteId=>$promoteName){; ?>
          <option<?php if( $promoteId==$searchPromoteId){; ?>  selected="selected"<?php }; ?> value="<?php echo $promoteId?>"> <?php echo $promoteName; ?></option>
          <?php }; ?>
          <option  <?php if(intval($searchPromoteId)==0){?> selected="selected"<?php }?> value="0">无推荐位</option>
        </select>
      频道：  <select name="searchPindaoId[<?php echo $row['id']?>]">
          <option<?php if(intval($searchPindaoId)==-1){?> selected="selected"<?php }?> value="-1">全部</option>
          <?php foreach($pindaoArr as $pindaoId=>$pindaoName){; ?>
          <option <?php if( $pindaoId==$searchPindaoId){; ?> selected="selected"<?php }; ?> value="<?php echo $pindaoId?>"> <?php echo $pindaoName; ?></option>
          <?php }; ?>
          <option  <?php if(intval($searchPindaoId)==0){?> selected="selected"<?php }?> value="0">无频道</option>
        </select>
           关键字查询:
        <input class="input-text" type="text" name="searchWord" value="<?php echo $searchWord ?>">
          
              <input type="submit" name="search" class="button" value="查询"> （商品名称、NUMID、用户昵称）
            </div></td>
        </tr>
      </tbody>
    </table>
    <input name="pc_hash" type="hidden" value="4ua2L3">
  </form>
  </div>



<form name="myform" action="/admin.php?m=apply&c=goods&a=delete" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
       <tbody>
            <tr class="thead">
            <th   width="40"  ><input type="checkbox" value="" id="check_box" onclick="selectall('ids[]');"></th>
           <th   width="40"  >id</th>
            <th   width="100"  >商品图片</th>
            <th  >商品名称</th>
            <th  >昵称</th>
            <th width="10%" >商品价格</th>
             <th width="10%" >状态</th>
          
           
          
           
         
           
			<th width="200" align="center"><?php echo L('operations_manage');?></th>
            </tr>
            
            
             <?php foreach ($data as $r){?>
            <tr>
             <td align="center"><input   type="checkbox" name="ids[]" value="<?php echo $r['id']; ?>"  ></td>
             <td align="center"><?php echo $r['id'];?></td>
            <td  align="center"><a target="_blank" href="<?php echo $r['detail_url']?>"><img src="<?php echo $r['pic_url'];?>"  height="40"></a></td>
            <td><a target="_blank" href="<?php echo $r['detail_url']?>"><?php echo $r['title'];?></a></td>
             <td><a target="_blank" href="<?php echo $r['detail_url']?>"><?php echo $r['nick'];?></a></td>
            <td align="center">原价:<?php echo $r['price']; ?><br>
              现价:<?php echo $r['coupon_price']; ?></td>
              <td align="center"><?php if( $r['status']==0) echo "未审核"  ; if( $r['status']==-1) echo "被拒绝"  ; if( $r['status']==1) echo "审核通过"  ;?></td>
            
           
            
            
            
               
                  
           
           
           
            <td align="center"><?php echo '<a href="/admin.php?m=apply&c=goods&a=pass&id='.$r['id'].'&menuid='.$menuid.'">通过</a> |<a href="/admin.php?m=apply&c=goods&a=edit&id='.$r['id'].'&menuid='.$menuid.'">拒绝</a> | <a href="/admin.php?m=apply&c=goods&a=delete&id='.$r['id'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
            
            
            
            </tr>
            <?php }?>
      
	
    </tbody>
   
	
    </table>
  
    <div class="btns"><input type="submit" class="button" name="dosubmit" value="<?php echo L('delete')?>" /></div>  </div>
</div>
</div>
</form>
<div class="pages"><?php echo $pages;?></div>
<?php include $this->admin_tpl('foot','admin');?>