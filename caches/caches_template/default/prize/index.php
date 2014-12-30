<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head'); 
?>

<script src="/statics/js/layeranim.js"></script>
<link href="/statics/css/prize.css" rel="stylesheet" type="text/css" />
<link href="/statics/css/member.css" rel="stylesheet" type="text/css" />
<div class="game-wrap"> 
  <div class="game-content clearfix">
    <div class="period"><?php echo $setting['title']?> 只有在本馆填写了正确的收货地址的亲才能收到奖品哦！ <a target="_blank"  href="/index.php?m=member&c=index&a=setinfo" title="编辑我的收货地址">编辑我的收货地址&gt;&gt;</a>  </div>
    <div class="info-wrap"> 
      <!--中奖名单Begin -->
      <div class="winner-list-wrap">
        <div class="title">达人中奖榜</div>
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
      <!-- 中奖名单End --> 
     
      <!-- 我的奖品按钮Begin --> 
      <a target="_blank" class="my-prize-btn" href="/index.php?m=prize&c=index&a=my_prize" title="查看我的奖品">我的奖品&gt;&gt;</a> 
      <!-- 我的奖品按钮End --> 
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
        <div id="J_LotteryBtn" class="lotty-btn"  >点击抽奖</div>
        </a> </div>
      <div class="rule-wrap"> <span class="rule-content">抽奖规则：每次抽奖使用<?php echo abs($setting['point'])?>个积分，每天抽奖次数不限！ </span> <a target="_blank" href="/index.php?m=prize&c=index&a=rules" class="rule-more-btn">查看详细规则</a> </div>
    </div>
  </div>
</div>
<div class="page-rules page-content">   
    <div class="bcontent-wrap">
        <div class="rules-content">
            <h1>抽奖规则：</h1>
            <div class="rules-list">
                <?php echo htmlspecialchars_decode($rules['rules']);?>
            </div>
        </div>
    </div>
</div>
