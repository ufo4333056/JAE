<?php include $this->admin_tpl('head','admin');?>

<form name="myform" action="/admin.php?m=prize&c=prize_set&a=listorder" method="post">
  <div class="pad-lr-10">
    <div class="table-list">
      <table width="100%" cellspacing="0" class="table_form">
        <tbody>
          <tr class="thead">
            <th width="20">排序</th>
            <th width="20">ID</th>
            <th width="40">状态</th>
            <th width="140">标题</th>
            <th width="80">图片</th>
            <th width="100">描述</th>
            <th width="80">奖品类型</th>
            <th width="60">中奖机率</th>
            <th width="60">奖品件数</th>
            <th width="60">奖励积分</th>
            <th align="center"><?php echo L('operations_manage');?></th>
          </tr>
          <?php foreach ($data as $v){?>
          <tr>
            <td align="center"><input name='listorders[<?php echo $v['id'];?>]' type='text' size='3' value='<?php echo $v['listorder'];?>' class='input-text-c input-text'></td>
            <td align="center"><?php echo $v['id'];?></td>
            <td  align="center"><input   type="checkbox" name="status[<?php echo $v['id']; ?>]" value="1" <?php if( $v['status']==1){echo "checked='checked'";}?>  ></td>
            <td ><?php echo $v['title']?></td>
            <td  align="center"><img src="<?php echo $v['picture']?>" height="60"></td>
            <td  ><?php echo $v['description']?></td>
            <td  align="center"><?php echo $prize_type[$v['typeid']]?></td>
            <td  align="center"><?php echo $v['odds']?></td>
            <td  align="center"><?php echo $v['num']?></td>
            <td align="center"><?php echo $v['point']?></td>
            <td align="center"><?php echo '<a href="/admin.php?m=prize&c=prize_set&a=edit&id='.$v['id'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=prize&c=prize_set&a=delete&id='.$v['id'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
          </tr>
          <?php }?>
        </tbody>
      </table>
      <div class="btns">
        <input type="submit" class="button" name="dosubmit" value="<?php echo L('submit')?>" />
      </div>
    </div>
  </div>
  </div>
</form>
<div class="pages"><?php echo $pages;?></div>
<?php include $this->admin_tpl('foot','admin');?>
