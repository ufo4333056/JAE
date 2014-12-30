<?php include $this->admin_tpl('head','admin');?>

<div class="pad-lr-10">
  <form name="searchform" action="" method="get" accept-charset="UTF-8">
    <input type="hidden" value="member" name="m">
    <input type="hidden" value="buyer" name="c">
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
  <div class="table-list">
    <table width="100%" cellspacing="0" class="table_form">
      <tbody>
        <tr class="thead">
          <th width="30"><?php echo L('userid');?></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=nickname">����ID</a></th>
          <th width="80">�Ա������ǳ�</th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=nickname">�û�����</a></th>
          
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=wangwang">����</a></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=mobile">�ֻ�</a></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=address">��ַ</a></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=address">EMAIL</a></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=regdate">��פʱ��</a> </th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=lastdate">����¼ʱ��</a> </th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=loginnum">��Ծָ��</a> </th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=point">����</a></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=vip">vip</a></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=point">ǩ������</a> </th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=point">���ǩ������</a> </th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=point">���ǩ��ʱ��</a> </th>
          <th align="center"><?php echo L('operations_manage');?></th>
        </tr>
        <?php foreach ($data as $r){  $last_sign=$this->point_db->get_one("userid=".$r['userid'], $data = '*',$order =' date desc');?>
        <tr>
          <td  align="center"><a href="/admin.php?m=member&c=buyer&a=show&userid=<?php echo $r['userid'];?>&menuid=<?php echo $menuid?>"><?php echo $r['userid'];?></a></td>
          <td  align="center"><a href="/admin.php?m=member&c=buyer&a=show&userid=<?php echo $r['fromuserid'];?>&menuid=<?php echo $menuid?>"><?php echo $r['fromuserid'];?></a></td>
          <td  align="center"  title="<?php echo $r['username'];?>"><a href="/admin.php?m=member&c=buyer&a=show&userid=<?php echo $r['userid'];?>&menuid=<?php echo $menuid?>"><?php echo str_cut($r['username'],5) ;?></a></td>
          <td  align="center"><?php echo $r['nickname'];?></td>
          <td  align="center"><?php echo $r['wangwang'];?></td>
          <td  align="center"><?php echo $r['mobile'];?></td>
          <td  align="center" title="<?php echo $r['address'];?>"><?php echo str_cut($r['address'],20);?></td>
           <td  align="center"><?php echo $r['email'];?></td>
          <td  align="center"><?php echo date('Y-m-d H:i' ,$r['regdate']);?></td>
          <td  align="center"><?php echo date('Y-m-d H:i' ,$r['lastdate']);?></td>
          <td  align="center"><?php echo $r['loginnum'];?></td>
           <td  align="center"><a href="/admin.php?m=member&c=buyer&a=show&userid=<?php echo $r['userid'];?>&menuid=<?php echo $menuid?>"><?php echo $r['point'];?></a></td>
          <td  align="center"><?php echo $r['vip'];?></td>
          <td  align="center"><?php echo $sign_num=$this->point_db->count("userid=".$r['userid']." AND typeid=1");?></td>
          <td  align="center"><?php echo $last_sign['continue'];?></td>
          <td  align="center"><?php echo date('Y-m-d H:i',$last_sign['date']);?></td>


          <td align="center"><?php echo '<a href="/admin.php?m=member&c=buyer&a=edit&userid='.$r['userid'].'&menuid='.$menuid.'">'.L('modify').'</a>  ';?></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
    <div class="btns">
      <input type="submit" class="button" name="dosubmit" value="<?php echo L('submit')?>" />
    </div>
  </div>

  <div class="pages"><?php echo $pages?></div>
</div>
<?php include $this->admin_tpl('foot','admin');?>
