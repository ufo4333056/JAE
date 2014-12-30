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
              用户姓名
              <input name="nickname" type="text" value="<?php echo $nickname?>" class="input-text">
              手机号
              <input name="mobile" type="text" value="<?php echo $mobile?>" class="input-text">
              <input type="submit" name="search" class="button" value="搜索">
            </div></td>
        </tr>
      </tbody>
    </table>
    <input name="pc_hash" type="hidden" value="4ua2L3">
  </form>
  <div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
      <tbody>
        <tr class="thead">
          <th width="30"><?php echo L('userid');?></th>
          <th width="200">淘宝混肴昵称</th>
          <th width="80">用户姓名</th>
          <th width="80">入驻时间 </th>
          <th width="80">店铺名称 </th>
          <th width="80">店铺地址 </th>
          <th width="80">店铺简介 </th>
          <th width="200" align="center"><?php echo L('operations_manage');?></th>
        </tr>
        <?php foreach ($data as $r){?>
        <tr>
          <td  align="center"><?php echo $r['userid'];?></td>
          <td  align="center"><?php echo $r['username'];?></td>
          <td  align="center"><?php echo $r['nickname'];?></td>
          <td  align="center"><?php echo date('Y-m-d h:i' ,$r['regdate']);?></td>
          <td  align="center"><?php echo $r['shop_title'];?></td>
          <td  align="center"><a href="<?php echo $r['shop_url'];?>" target="_blank">访问店铺</a></td>
          <td  align="center"><?php echo  str_cut($r['shop_profile'],50);?></td>
          <td align="center"><?php echo '<a href="/admin.php?m=member&c=buyer&a=edit&userid='.$r['userid'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=member&c=buyer&a=delete&userid='.$r['userid'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
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
