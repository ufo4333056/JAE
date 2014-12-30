<?php include $this->admin_tpl('head','admin');?>

<form name="myform" action="/admin.php?m=weblink&c=weblink&a=listorder" method="post">
  <div class="pad-lr-10">
    <div class="table-list">
      <table width="100%" cellspacing="0" class="table_form">
        <tbody>
          <tr class="thead">
            <th width="20">id</th>
            <th width="140">标题</th>
            <th width="80">图片</th>
            <th  align="center">描述</th>
            <th width="40">天数</th>
            <th width="40">分数</th>
            <th width="200" align="center"><?php echo L('operations_manage');?></th>
          </tr>
          <?php foreach ($data as $v){?>
          <tr>
            <td align="center"><?php echo $v['id'];?></td>
            <td ><?php echo $v['title']?></td>
            <td  align="center"><img src="<?php echo $v['picture']?>" height="60"></td>
            <td  ><?php echo $v['description']?></td>
            <td  align="center"><?php echo $v['day']?></td>
            <td align="center"><?php echo $v['point']?></td>
            <td align="center"><?php echo '<a href="/admin.php?m=point&c=point_set&a=edit&id='.$v['id'].'&menuid='.$menuid.'">'.L('modify').'</a> | <a href="/admin.php?m=point&c=point_set&a=delete&id='.$v['id'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
          </tr>
          <?php }?>
        </tbody>
      </table>
      <div class="btns">
        <input type="submit" class="button" name="dosubmit" value="<?php echo L('submit')?>" />
        （每项必填）</div>
    </div>
  </div>
  </div>
</form>
<div class="pages"><?php echo $pages;?></div>
<?php include $this->admin_tpl('foot','admin');?>
