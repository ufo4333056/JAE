<?php include $this->admin_tpl('head','admin');?>

<form name="myform" action="/admin.php?m=prize&c=prize_set&a=listorder" method="post">
  <div class="pad-lr-10">
    <div class="table-list">
      <table width="100%" cellspacing="0" class="table_form">
        <tbody>
          <tr class="thead">
          
            <th width="20">ID</th>
          
            <th width="100">标题</th>
            <th width="60">图片</th>
            <th width="120">描述</th>
            <th width="60">中奖人姓名</th>
              <th width="100">中奖人旺旺</th>
                <th width="80">中奖人电话</th>
                 <th width="100">中奖人地址</th>
                  <th width="100">奖品是否发送</th>
                    <th width="100">快递名称 </th>
                  <th width="100">快递单号 </th>
                   <th width="100">时间 </th>
            
            
            
            <th align="center"><?php echo L('operations_manage');?></th>
          </tr>
          <?php foreach ($data as $v){?>
          <tr>
      
            <td align="center"><?php echo $v['id'];?></td>
            
            <td ><?php echo $v['title']?></td>
            <td  align="center"><img src="<?php echo $v['picture']?>" height="60"></td>
            <td  ><?php echo $v['description']?></td>
             <td  align="center" ><?php echo  get_memberinfo($v['userid'],'nickname')?></td>
                <td  align="center" ><?php echo  get_memberinfo($v['userid'],'wangwang')?></td>
                   <td  align="center" ><?php echo  get_memberinfo($v['userid'],'mobile')?></td>
                      <td  align="center" ><?php echo  get_memberinfo($v['userid'],'address')?></td>
                       <td  align="center" ><?php if( $v['status']==0) echo "未发"; elseif ( $v['status']==1) echo "已发" ;else  "已收" ?></td>
                       <td  align="center" ><?php  echo $v['express_name']?></td>
                       <td  align="center" ><?php  echo $v['express_num']?></td>
           <td><?php echo date("m-d H:i",$v['date'])?></td>
            <td align="center"><?php echo '<a href="/admin.php?m=prize&c=prize&a=edit&id='.$v['id'].'&menuid='.$menuid.'">'.L('发货').'</a> | <a href="/admin.php?m=prize&c=prize&a=delete&id='.$v['id'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
           
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
