<?php include $this->admin_tpl('head','admin');?>

<div class="pad-lr-10">
  <form name="searchform" action="" method="get" accept-charset="UTF-8">
    <input type="hidden" value="member" name="m">
    <input type="hidden" value="seller" name="c">
    <input type="hidden" value="init" name="a">
    <input type="hidden" value="<?php echo $this->menuid;?>" name="menuid">
    <table width="100%" cellspacing="0" class="search-form">
      <tbody>
        <tr>
          <td><div class="explain-col"> USERID
              <input name="userid" type="text" value="<?php echo $userid?>" class="input-text">
              �û�����
              <input name="nickname" type="text" value="<?php echo $nickname?>" class="input-text">
              �ֻ���
              <input name="mobile" type="text" value="<?php echo $mobile?>" class="input-text">
              <input type="submit" name="search" class="button" value="����">
            </div></td>
        </tr>
      </tbody>
    </table>
    <input name="pc_hash" type="hidden" value="4ua2L3">
  </form>
  ���֣�<?php echo $userinfo['point']?>  �ǳƣ�<?php echo $userinfo['nickname']?> �绰��<?php echo $userinfo['mobile']?> ������<?php echo $userinfo['wangwang']?>
  <div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
      <tbody>
        <tr class="thead">
          <th width="30"><?php echo L('id');?></th>
          <th width="200">����</th>
          <th width="80">ͼƬ</th>
          <th width="80">���� </th>
         
          <th width="80">ʱ�� </th>
           <th width="80">���� </th>
        
          <th width="200" align="center"><?php echo L('operations_manage');?></th>
        </tr>
        <?php foreach ($data as $r){?>
        <tr>
          <td  align="center"><?php echo $r['id'];?></td>
          <td  align="center"><?php echo $r['title'];?></td>
          <td  align="center"><img src="<?php echo $r['picture'];?> " height="40"></td>
       
          <td  align="center"><?php echo $r['point'];?></td>
           <td  align="center"><?php echo date('Y-m-d H:i' ,$r['date']);?></td>
          <td  align="center"><?php echo $r['module'];?></td>
         
          <td align="center"><?php echo '<a href="/admin.php?m=member&c=buyer&a=delete_point&id='.$r['id'].'&userid='.$r['userid'].'&menuid='.$menuid.'">'.L('delete').'</a> | <a href="/admin.php?m=member&c=buyer&a=edit_point&id='.$r['id'].'&userid='.$r['userid'].'&menuid='.$menuid.'">'.L('edit').'</a>  ';?></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
     <div class="pages"><?php echo $pages?></div>
    <div class="btns">
      <input type="submit" class="button" name="dosubmit" value="<?php echo L('submit')?>" />
    </div>
  </div>
 
</div>
<?php include $this->admin_tpl('foot','admin');?>
