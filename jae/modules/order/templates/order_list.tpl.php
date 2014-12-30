<?php include $this->admin_tpl('head','admin');?>
<div class="pages"><?php echo $pages;?></div>
<form name="searchform" action="" method="get" accept-charset="UTF-8">
    <input type="hidden" value="order" name="m">
    <input type="hidden" value="order" name="c">
    <input type="hidden" value="init" name="a">    
    <input type="hidden" value="<?php echo $this->menuid;?>" name="menuid">
    <table width="100%" cellspacing="0" class="search-form">
      <tbody>
        <tr>
          <td><div class="explain-col"> 标题
              <input name="title" type="text" value="<?php echo $title?>" class="input-text">userid
              <input name="userid" type="text" value="<?php echo $userid?>" class="input-text">   
              <input type="submit" name="search" class="button" value="搜索">
            </div></td>
        </tr>
      </tbody>
    </table>   
  </form>



<form name="myform" action="/admin.php?m=order&c=order&a=listorder" method="post">
  <div class="pad-lr-10">
    <div class="table-list">
      <table width="100%" cellspacing="0" class="table_form">
        <tbody>
          <tr class="thead">
          
            <th width="20">ID</th>
            <th width="20">USERID</th>
             <th width="20">GOODSID</th>
              <th width="20">描述</th>
          
            <th width="100">标题</th>
            <th width="60">图片</th>
            
            <th width="60">中奖人姓名</th>
              <th width="100">中奖人旺旺</th>
                <th width="80">中奖人电话</th>
                 <th width="100">中奖人地址</th>
                  <th width="100">状态</th>
                    <th width="100">快递名称 </th>
                  <th width="100">快递单号 </th>
                   <th width="100">时间 </th>
                    <th width="100">类型 </th>
            <th align="center"><?php echo L('operations_manage');?></th>
          </tr>
          <?php foreach ($data as $v){?>
          <tr>
      
            <td align="center"><?php echo $v['id'];?></td>
              <td align="center"><?php echo $v['userid'];?></td>
                <td align="center"><?php echo $v['goodsid'];?></td>
                <td align="center"><?php echo $v['description'];?></td>
            
            <td ><a href="<?php echo $v['url']?>" target="_blank"><?php echo $v['title']?></a></td>
            <td  align="center"><a href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['picture']?>" height="60"></a></td>
           
             <td  align="center" ><a href="/admin.php?m=member&c=buyer&a=show&userid=<?php echo $r['userid'];?>&menuid=<?php echo $menuid?>"><?php echo  get_memberinfo($v['userid'],'nickname')?></a></td>
                <td  align="center" ><?php echo  get_memberinfo($v['userid'],'wangwang')?></td>
                   <td  align="center" ><?php echo  get_memberinfo($v['userid'],'mobile')?></td>
                      <td  align="center" ><?php echo  get_memberinfo($v['userid'],'address')?></td>
                       <td  align="center" ><?php echo  $order_follow[$v['status']+1] ?></td>
                       <td  align="center" ><?php  echo $v['express_name']?></td>
                       <td  align="center" ><?php  echo $v['express_num']?></td>
           <td><?php echo date("m-d H:i:s",$v['date'])?></td>
           <td><?php echo $v['module'];?></td>
            <td align="center"><?php echo '<a target="_blank" href="/admin.php?m=order&c=order&a=edit&id='.$v['id'].'&menuid='.$menuid.'">'.L('发货').'</a> | <a href="/admin.php?m=order&c=order&a=delete&id='.$v['id'].'&menuid='.$menuid.'">'.L('delete').'</a> ';?></td>
           
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
