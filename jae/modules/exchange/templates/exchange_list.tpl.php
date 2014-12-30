<?php include $this->admin_tpl('head','admin');?>

<div class="pad-lr-10">
  <div class="table-list">
    <form  action="/admin.php?m=exchange&c=exchange&a=listorder" method="post">
      <table width="100%" cellspacing="0" class="table_form">
        <tbody>
          <tr class="thead">
            <th width="40" >状态</th>
            <th  width="40" >排序 </th>
            <th   width="40"  >id</th>
            <th   width="100"  >商品图片</th>
            <th width="200" >商品名称</th>
            <th width="100" >昵称</th>
             <th width="200" >时间</th>
            <th width="100" >商品价格</th>
            <th  align="center"><?php echo L('operations_manage');?></th>
          </tr>
          <?php foreach ($data as $r){?>
          <tr>
               <td  align="center">  <input   type="checkbox" name="status[<?php echo $r['id']; ?>]" value="1" <?php if( $r['status']==1){echo "checked='checked'";}?>  ></td>
            <td align="center"><input name='listorders[<?php echo $r['id'];?>]' type='text' size='3' value='<?php echo $r['listorder'];?>' class='input-text-c input-text'></td>
            <td align="center"><?php echo $r['id'];?></td>
            <td  align="center"><a target="_blank" href="<?php echo $r['detail_url']?>"><img src="<?php echo $r['pic_url'];?>"  height="40"></a></td>
            <td><a target="_blank" href="<?php echo $r['detail_url']?>"><?php echo $r['title'];?></a></td>
            <td><a target="_blank" href="<?php echo $r['detail_url']?>"><?php echo $r['nick'];?></a></td>
              <td align="center">上架:<?php echo date('Y-m-d H:i:s',$r['begin_time']);  ?><br>
              下架:<?php echo date('Y-m-d H:i:s',$r['end_time']); ?></td>
            <td align="center">原价:<?php echo $r['price']; ?><br>
              现价:<?php echo $r['coupon_price']; ?></td>
            <td align="center"><?php echo '<a href="/admin.php?m=exchange&c=exchange&a=edit&id='.$r['id'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=exchange&c=exchange&a=delete&id='.$r['id'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
          </tr>
          <?php }?>
        </tbody>
      </table>
      <div class="btns">
        <input type="submit" class="button" name="dosubmit" value="<?php echo L('listorder')?>" />
      </div>
    </form>
  </div>
</div>
<div class="pages"><?php echo $pages;?></div>
<?php include $this->admin_tpl('foot','admin');?>
