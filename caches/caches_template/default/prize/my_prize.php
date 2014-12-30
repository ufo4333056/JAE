<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php  
include template('content','head');
?>
<link href="/statics/css/member.css" rel="stylesheet" type="text/css" />
<div class="blank"></div>
<div class="wrap">
  <dl class="ui-tab clearfix" id="">
    <dt>我的奖品</dt>
     <!-- <dd data-type="all" class="j_nativeHistory all <?php if($trad=='all') echo "select"?> " data-template=""><a href="/index.php?m=point&c=index&a=sign&trad=all">积分明细</a></dd>
    <dd data-type="income" class="j_nativeHistory income  <?php if($trad=='income') echo "select"?>" data-template="/point/detail/income"><a href="/index.php?m=point&c=index&a=sign&trad=income ">积分收入</a></dd>
    <dd data-type="used" class="j_nativeHistory used  <?php if($trad=='used') echo "select"?>" data-template="/point/detail/used"><a href="/index.php?m=point&c=index&a=sign&trad=used">积分支出</a></dd>
  <dd data-type="expired" class="j_nativeHistory expired" data-template="/point/detail/expired"><a href="/index.php?m=member&c=index&a=point_task">积分任务说明</a></dd>
    <dd data-type="freezed" class="j_nativeHistory freezed" data-template="/point/detail/freezed">冻结积分</dd>-->
  </dl>
  <div class="border">
    <div class="pd20">
      <div class="content">
        
        <!-- point .summary END -->
        <div class="detail">
          <div class="masthead clearfix"><span class="why">奖品名称</span><span class="what">奖品状态</span><span class="when">日期</span><span class="notes">备注</span></div>
          <div id="J_pointDetail">
            <ul class="item-list" id="J_item-list">
            
            <?php foreach ($data as $v){?>
              <li class="item clearfix">
                <div class="why"><a class="img" href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['picture']?>" width="60" height="60" alt="小积分抽大奖"></a><a class="title" href="<?php echo $v['url']?>" target="_blank"><?php echo $v['title']?></a><span class="order-number">编号：<?php echo $v['id']?></span></div>
                <div class="express"><span class="  plus "><?php if($v['status']==0) {echo "未发送" ;} else { echo "已经发送"; echo $v['express_name'].":<br>". $v['express_num'] ;}?></span></div>
                <div class="when"><?php echo date('Y-m-d H:i:s',$v['date'])?></div>
                <div class="notes"><?php echo $v['description']?></div>
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
