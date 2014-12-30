<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>

<link rel="stylesheet" href="/statics/css/order.css" />
<div class="blank"></div>
<div class="wrap">
  <dl class="ui-tab clearfix" id="">
    <dt>我的订单</dt>
   <!--  <dd data-type="all" class="j_nativeHistory all <?php if($receive==0) echo "select"?> " data-template=""><a href="/index.php?m=point&c=index&a=receive_point&receive=0">未领取的宝贝</a></dd>
    <dd data-type="income" class="j_nativeHistory income  <?php if($receive==1) echo "select"?>" data-template="/point/detail/income"><a href="/index.php?m=point&c=index&a=receive_point&receive=1 ">已经领取的宝贝</a></dd> -->
    <!-- <dd data-type="used" class="j_nativeHistory used  <?php if($trad=='used') echo "select"?>" data-template="/point/detail/used"><a href="/index.php?m=point&c=index&a=sign&trad=used">积分支出</a></dd>  -->
  <!-- <dd data-type="expired" class="j_nativeHistory expired" data-template="/point/detail/expired"><a href="/index.php?m=point&c=index&a=point_task" target="_blank">积分任务说明</a></dd> -->
     <!-- <dd data-type="freezed" class="j_nativeHistory freezed" data-template="/point/detail/freezed">冻结积分</dd>-->
  </dl>
  <div class="border">
    <div class="pd20">
      <div class="content">
      
        <!-- point .summary END -->
        <div class="detail">
          <div class="masthead clearfix"><span class="why">消费项目</span><span class="what">消费积分</span><span class="when" style="width:150px;">日期</span><span class="what">物流</span><span style="width:130px;" class="notes">状态</span><span class="notes" style="width:120px;">订单类型</span></div>
          <div id="J_pointDetail">
            <ul class="item-list" id="J_item-list">
            
            <?php foreach ($data as $v){?>
              <li class="item clearfix">
                <div class="why"><a class="img" href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['picture']?>" width="60" height="60" alt="<?php echo $v['title']?>"></a><a class="title" href="<?php echo $v['url']?>" target="_blank"><?php echo $v['title']?></a><span class="order-number">编号：<?php echo $v['id']?></span></div>
                <div class="what"><span class=" plus"><?php echo $v['point'] ?></span></div>
                <div class="when" style="width:150px;"><?php echo date('Y-m-d H:i:s',$v['date'])?></div>
                <div class="notes" style="width:200px;">快递名称： <?php  echo $v['express_name']?> <br>快递单号：<?php  echo $v['express_num']?> </div>
                <div class="notes" style="width:150px;"><span class="<?php if($v['status']==6) echo "btn_receive"; else echo "btn_received" ; ?>"><a href="<?php if($v['status']==6) echo "/index.php?m=order&c=index&a=receive&id=".$v['id']; else echo "" ; ?>"><?php  echo  $order_follow[$v['status']+2]; ?></a></span></div>
                <div class="notes" style="width:120px; text-align:center"><?php echo $modules[$v['module']]?></div>
              </li>
              <?php }?>
              
            </ul>
          </div>
          <div id="J_pointError" class="hidden error"></div>
          <div id="J_pointPager" class="pages">
            <?php echo $pages;?>
          </div>
        </div>
        <!-- point .detail END --></div>
      <div class="blank"></div>
      <div class="m_main"> </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
</div>
<div class="blank"></div>










<link rel="stylesheet" href="/statics/css/order.css" />
<div class="blank"></div>
<div class="wrap">

 <?php foreach ($data as $k => $v) {
   
    
    ?>
  <div >
   
    <table class="order_list">
      <tr class="thead">
        <td> 产品</td>
        <td>标题</td>
        <td>单价</td>
        <td>数量</td>
        <td>消耗积分</td>
        <td width="100">快递名称 </td>
        <td width="100">快递单号 </td>
        <th width="100">时间 </th>
      </tr>
      <tr>
        <td><img width="80" height="80" src="<?php echo $v['picture']?>"></td>
        <td><?php echo $v['title']?></td>
        <td><?php echo $v['price']?></td>
        <td><?php echo $v['num']?></td>
        <td><?php echo $v['point']?></td>
         <td  align="center" ><?php  echo $v['express_name']?></td>
                       <td  align="center" ><?php  echo $v['express_num']?></td>
                       <th width="100">时间 </th>
      </tr>

    </table>

  </div>
<?php }?>
 

  <div class="clear"></div>
</div>