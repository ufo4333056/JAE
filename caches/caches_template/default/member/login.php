<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php  
include template('content','head');



?>

<div class="wrap">
  <dl class="ui-tab clearfix" id="">
    <dt>�ҵĻ���</dt>
    <dd data-type="all" class="j_nativeHistory all select" data-template="/point/detail/all">������ϸ</dd>
    <dd data-type="income" class="j_nativeHistory income" data-template="/point/detail/income">��������</dd>
    <dd data-type="used" class="j_nativeHistory used" data-template="/point/detail/used">����֧��</dd>
    <dd data-type="expired" class="j_nativeHistory expired" data-template="/point/detail/expired">�Ѿ�����</dd>
    <dd data-type="freezed" class="j_nativeHistory freezed" data-template="/point/detail/freezed">�������</dd>
  </dl>
  <div class="border">
    <div class="pd20">
      <div class="content">
        <div id="J_pointSummary">
          <div class="summary clearfix">
            <div class="item valid"><span class="desc">���õĻ���</span><span class="point">0</span></div>
            <div class="item expired-soon"><span class="desc">��Ҫ���ڵĻ���</span><span class="point">0</span><span class="date"></span></div>
            <div class="item exchange"><a   href="/member.php"  >
               �ף����¼
           
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
