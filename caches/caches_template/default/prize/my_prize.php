<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php  
include template('content','head');
?>
<link href="/statics/css/member.css" rel="stylesheet" type="text/css" />
<div class="blank"></div>
<div class="wrap">
  <dl class="ui-tab clearfix" id="">
    <dt>�ҵĽ�Ʒ</dt>
     <!-- <dd data-type="all" class="j_nativeHistory all <?php if($trad=='all') echo "select"?> " data-template=""><a href="/index.php?m=point&c=index&a=sign&trad=all">������ϸ</a></dd>
    <dd data-type="income" class="j_nativeHistory income  <?php if($trad=='income') echo "select"?>" data-template="/point/detail/income"><a href="/index.php?m=point&c=index&a=sign&trad=income ">��������</a></dd>
    <dd data-type="used" class="j_nativeHistory used  <?php if($trad=='used') echo "select"?>" data-template="/point/detail/used"><a href="/index.php?m=point&c=index&a=sign&trad=used">����֧��</a></dd>
  <dd data-type="expired" class="j_nativeHistory expired" data-template="/point/detail/expired"><a href="/index.php?m=member&c=index&a=point_task">��������˵��</a></dd>
    <dd data-type="freezed" class="j_nativeHistory freezed" data-template="/point/detail/freezed">�������</dd>-->
  </dl>
  <div class="border">
    <div class="pd20">
      <div class="content">
        
        <!-- point .summary END -->
        <div class="detail">
          <div class="masthead clearfix"><span class="why">��Ʒ����</span><span class="what">��Ʒ״̬</span><span class="when">����</span><span class="notes">��ע</span></div>
          <div id="J_pointDetail">
            <ul class="item-list" id="J_item-list">
            
            <?php foreach ($data as $v){?>
              <li class="item clearfix">
                <div class="why"><a class="img" href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['picture']?>" width="60" height="60" alt="С���ֳ��"></a><a class="title" href="<?php echo $v['url']?>" target="_blank"><?php echo $v['title']?></a><span class="order-number">��ţ�<?php echo $v['id']?></span></div>
                <div class="express"><span class="  plus "><?php if($v['status']==0) {echo "δ����" ;} else { echo "�Ѿ�����"; echo $v['express_name'].":<br>". $v['express_num'] ;}?></span></div>
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
