<?php include $this->admin_tpl('head','admin');?>

<div class="pad-lr-10">
  
  <div class="table-list">
  <form name="myform" action="/admin.php?m=member&c=buyer&a=pass_list&menuid=9" method="post">
    <table width="100%" cellspacing="0" class="table_form">
      <tbody>
        <tr class="thead">
         <th width="30">״̬</th>
          <th width="30"><?php echo L('userid');?></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=nickname">����ID</a></th>
          <th width="80">�Ա������ǳ�</th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=nickname">�û�����</a></th>
          
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=wangwang">����</a></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=mobile">�ֻ�</a></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=address">��ַ</a></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=address">EMAIL</a></th>
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=regdate">��פʱ��</a> </th>
         
         
          <th width="80"><a href="/admin.php?m=member&c=buyer&a=init&menuid=8&order=point">����</a></th>

         
        
          <th align="center"><?php echo L('operations_manage');?></th>
        </tr>
        <?php foreach ($data as $r){  $last_sign=$this->point_db->get_one("userid=".$r['userid'], $data = '*',$order =' date desc');?>
        <tr>
        <td  align="center"> <input style="cursor:pointer"  type="checkbox" name="listorders[<?php echo $r['userid']; ?>]" value="<?php echo $r['fromuserid']; ?>" }?> </td>
        
          <td  align="center"><a href="/admin.php?m=member&c=buyer&a=show&userid=<?php echo $r['userid'];?>&menuid=<?php echo $menuid?>"><?php echo $r['userid'];?></a></td>
          <td  align="center"><a href="/admin.php?m=member&c=buyer&a=show&userid=<?php echo $r['userid'];?>&menuid=<?php echo $menuid?>"><?php echo $r['fromuserid'];?></a></td>
          <td  align="center"  title="<?php echo $r['username'];?>"><?php echo str_cut($r['username'],5) ;?></td>
          <td  align="center"><?php echo $r['nickname'];?></td>
          <td  align="center"><?php echo $r['wangwang'];?></td>
          <td  align="center"><?php echo $r['mobile'];?></td>
          <td  align="center" title="<?php echo $r['address'];?>"><?php echo str_cut($r['address'],20);?></td>
           <td  align="center"><?php echo $r['email'];?></td>
          <td  align="center"><?php echo date('Y-m-d H:i' ,$r['regdate']);?></td>
       
        
           <td  align="center"><a href="/admin.php?m=member&c=buyer&a=show&fromuserid=<?php echo $r['fromuserid'];?>&userid=<?php echo $r['userid'];?>&menuid=<?php echo $menuid?>"><?php echo $r['point'];?></a></td>
        


          <td align="center"><?php echo '<a href="/admin.php?m=member&c=buyer&a=pass_point&fromuserid='.$r['fromuserid'].'&userid='.$r['userid'].'&menuid='.$menuid.'">'.L('������').'</a> <a href="/admin.php?m=member&c=buyer&a=pass_point&userid='.$r['userid'].'&menuid='.$menuid.'">'.L('��������').'</a>  ';?></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
    <div class="btns">
      <button type="submit" class="button" name="dosubmit" value="1" /><?php echo L('������')?></button><button type="submit" class="button" name="dosubmit" value="0" /><?php echo L('��������')?></button>
    </div>
  </form>

  <div class="pages"><?php echo $pages?></div>
</div>
<?php include $this->admin_tpl('foot','admin');?>
