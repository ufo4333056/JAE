<?php include $this->admin_tpl('head','admin');?>

<div class="pad-lr-10">
  <div class="table-list">
    <form  action="/admin.php?m=exchange&c=exchange&a=listorder" method="post">
      <table width="100%" cellspacing="0" class="table_form">
        <tbody>
          <tr class="thead">
            <th width="40" >״̬</th>
            <th  width="40" >���� </th>
            <th   width="40"  >id</th>
            <th   width="100"  >��ƷͼƬ</th>
            <th width="200" >��Ʒ����</th>
            <th width="100" >�ǳ�</th>
             <th width="200" >ʱ��</th>
            <th width="100" >��Ʒ�۸�</th>
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
              <td align="center">�ϼ�:<?php echo date('Y-m-d H:i:s',$r['begin_time']);  ?><br>
              �¼�:<?php echo date('Y-m-d H:i:s',$r['end_time']); ?></td>
            <td align="center">ԭ��:<?php echo $r['price']; ?><br>
              �ּ�:<?php echo $r['coupon_price']; ?></td>
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
