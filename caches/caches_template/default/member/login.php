<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php  
include template('content','head');



?>

<div class="wrap">
  <dl class="ui-tab clearfix" id="">
    <dt>我的积分</dt>
    <dd data-type="all" class="j_nativeHistory all select" data-template="/point/detail/all">积分明细</dd>
    <dd data-type="income" class="j_nativeHistory income" data-template="/point/detail/income">积分收入</dd>
    <dd data-type="used" class="j_nativeHistory used" data-template="/point/detail/used">积分支出</dd>
    <dd data-type="expired" class="j_nativeHistory expired" data-template="/point/detail/expired">已经过期</dd>
    <dd data-type="freezed" class="j_nativeHistory freezed" data-template="/point/detail/freezed">冻结积分</dd>
  </dl>
  <div class="border">
    <div class="pd20">
      <div class="content">
        <div id="J_pointSummary">
          <div class="summary clearfix">
            <div class="item valid"><span class="desc">可用的积分</span><span class="point">0</span></div>
            <div class="item expired-soon"><span class="desc">将要过期的积分</span><span class="point">0</span><span class="date"></span></div>
            <div class="item exchange"><a   href="/member.php"  >
               亲，请登录
           
              </a></div>
          </div>
        </div>
        <!-- point .summary END --><!-- point .detail END --></div>
      <div class="blank"></div>
      <div class="m_main"> </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
</div>
<div class="blank"></div>
