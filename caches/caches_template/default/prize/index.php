<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head'); 
?>

<script src="/statics/js/layeranim.js"></script>
<link href="/statics/css/prize.css" rel="stylesheet" type="text/css" />
<link href="/statics/css/member.css" rel="stylesheet" type="text/css" />
<div class="game-wrap"> 
  <div class="game-content clearfix">
    <div class="period"><?php echo $setting['title']?> ֻ���ڱ�����д����ȷ���ջ���ַ���ײ����յ���ƷŶ�� <a target="_blank"  href="/index.php?m=member&c=index&a=setinfo" title="�༭�ҵ��ջ���ַ">�༭�ҵ��ջ���ַ&gt;&gt;</a>  </div>
    <div class="info-wrap"> 
      <!--�н�����Begin -->
      <div class="winner-list-wrap">
        <div class="title">�����н���</div>
        <div class="winner-list-item-wrap" id="J_WinnerList" style="position: relative; ">
          <ul class="j-winner-list" style="position: absolute; top: 0px; ">
            <li class="clearfix ks-switchable-panel-internal224" style="display: block; ">
              <?php foreach ($prize_data as $v){ ?> 
              <div class="winner-list-item">
                <div class="nick"><?php echo str_cut(get_memberinfo($v['userid'],'username'),6,"****") ?></div>
                <div class="prize" title="<?php echo $v['title']?>"><?php echo $v['title']?></div>
              </div>
              <?php }?>
            </li>
          </ul>
        </div>
      </div>
      <!-- �н�����End --> 
     
      <!-- �ҵĽ�Ʒ��ťBegin --> 
      <a target="_blank" class="my-prize-btn" href="/index.php?m=prize&c=index&a=my_prize" title="�鿴�ҵĽ�Ʒ">�ҵĽ�Ʒ&gt;&gt;</a> 
      <!-- �ҵĽ�Ʒ��ťEnd --> 
    </div>
    <div class="lottery-wrap">
      <div class="msg">
        <div class="tip"><?php echo $prize_msg?></div>
        <div class="pz_w">
          <div class="pz_img"><a  href="/index.php?m=prize&c=index&a=my_prize"><img class="prize-img" height="105" src="<?php echo $prize['picture']?>"></a></div>
          <div class="pz_tit"><?php echo $prize['title']?></div>
          <div class="pz_note"><?php echo $prize['description']?></div>
          <div class="pz_agin"><a href="/index.php?m=prize&c=index&a=init"><img src="/statics/images/cas.gif"></a></div>
        </div>
      </div>
      <div id="J_Lottery" class="lottery-content">
        <?php foreach ($prize_arr as $k=> $v){ $k=$k+1; ?>
        <div class="tm-prize-item prize-<?php echo $k;?>" > <a target="_blank" href="<?php echo $v['url']?>"> <img src="<?php echo $v['picture']?>" class="prize-img" alt="<?php echo $v['title']?>" title="<?php echo $v['title']?>"> </a> </div>
        <?php }?>
        <a class="run"  >
        <div id="J_LotteryBtn" class="lotty-btn"  >����齱</div>
        </a> </div>
      <div class="rule-wrap"> <span class="rule-content">�齱����ÿ�γ齱ʹ��<?php echo abs($setting['point'])?>�����֣�ÿ��齱�������ޣ� </span> <a target="_blank" href="/index.php?m=prize&c=index&a=rules" class="rule-more-btn">�鿴��ϸ����</a> </div>
    </div>
  </div>
</div>
<div class="page-rules page-content">   
    <div class="bcontent-wrap">
        <div class="rules-content">
            <h1>�齱����</h1>
            <div class="rules-list">
                <?php echo htmlspecialchars_decode($rules['rules']);?>
            </div>
        </div>
    </div>
</div>
