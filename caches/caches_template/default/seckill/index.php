<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head'); ?>
<link href="/statics/css/seckill.css" rel="stylesheet" type="text/css" />

<div  style=" background:<?php echo $page_setting['bg_color']?>; display:block" >
  <div class="i_step i_step1" style="height: 440px;
background: url(<?php echo $page_setting['bg_img']?>) no-repeat center 0;" >
    <div  style="width: 990px;margin: 0 auto;position: relative;"><a target="_blank" href="/index.php?m=seckill&c=index&a=rules"> <img style="display:block" src="<?php echo $page_setting['img']?>"></a></div>
  </div>
  
  <div class="mslbgz">
  <?php echo htmlspecialchars_decode($page_setting['rules'])?>
 
  </div>
  
  
  <div class="blank"></div>
  
  <?php foreach($data as $v){?>
  <div class="detail-main" >
    <div class="normal-pic-wrapper floatleft" data-spm="ne" data-spm-max-idx="2">
      <div class="normal-pic"> <a href="http://item.taobao.com/item.htm?id=<?php echo $v['num_iid'];?>" target="_blank" data-spm-anchor-id="608.7065813.ne.1"> <img data-ks-lazyload="<?php echo $v['pic_url'];?>"  width="300" height="300"  class="J_zoom "></a> </div>
    </div>
    <div class="detail-status floatleft ">
      <div class="main-box avil">
        <div class="name-box">
          <h2 class="name"> <?php echo $v['title'];?></h2>
		  
        </div>
		
        <div class="description"><h2 class="name" style="color: #CC0000; font-weight:bold;"> 开始时间：<?php echo date("Y-m-d H:i:s",$v['begin_time']);?></h2><?php echo $v['description'];?></div>
        <div class="status-banner J_juBuyBtns  "> <span class="currentPrice floatleft"> <?php echo $v['point'];?> <small>积分</small> </span>
          <div class="floatleft">
            <div class="discount"> 节省 <small></small> </div>
            <del class="originPrice">￥ <?php echo $v['price'];?></del> </div>
          <form class="J_BuySubForm" data-ccb="0" data-ques="0" action="/index.php?m=order&c=index&a=seckill_submit_pre" method="post">
            <input name="_tb_token_" type="hidden" value="UWMl0EA5RGG4">
            <input type="hidden" name="_input_charset" value="utf-8">
            <input type="hidden" name="num_iid" value="<?php echo $v['num_iid'];?>">
            <input type="hidden" name="id" value="<?php echo $v['id'];?>">
            <input type="hidden" name="module" value="seckill">
            <input type="hidden" name="auction_num" value="1">
            <input type="submit" class="buyaction J_BuySubmit" title="马上抢" value="马上抢">
          </form>
        </div>
        <div class="time-banner">
          <p class="tit"></p>
          
          <div class="J_TWidget ju-spltimer" data-widget-type="Countdown"  data-widget-config="{'endTime': '<?php  if($v['num']==0){ echo 0;} else{ if($v['begin_time']<SYS_TIME) { echo ($v['end_time']- SYS_TIME)*1000 ;} else { echo ($v['begin_time']- SYS_TIME)*1000 ; } }   ?>', 'interval': 1000,    'timeRunCls': '.ks-countdown-run','timeUnitCls':{'d': '.ks-d','h': '.ks-h','m': '.ks-m','s': '.ks-s','i': '.ks-i'},'minDigit': 1,'timeEndCls': '.ks-countdown-end'}">
    <!-- 倒计时结束时隐藏-->
    <!--可以写多个 -->
    <div class="ks-countdown-run">
   距 <span><?php if($v['begin_time']<SYS_TIME) { echo "结束" ;} else { echo "开始" ; }?></span>还有
    <span class="ks-d"></span>天
    <span class="ks-h"></span>小时
    <span class="ks-m"></span>分
        <!-- 如果有0.1秒级别的变化建议以gif背景图片的形式变化 -->
    <span class="ks-s"></span>秒
        
    <span class="buy"><a target="_blank" href="http://item.taobao.com/item.htm?id=<?php echo $v['num_iid'];?>">直接去购买</a></span>
    </div>
 


   
     <!-- 倒计时结束时显示-->
     <!--可以写多个 -->

     <?php if ($v['num']==0){ ?>
    <div class=" sell_end" style="">
    <img src="/statics/images/sell_end.png">
    </div>

	<?php }?>
  
</div>
          
          
          
        </div>
      
     
      </div>
      
    </div>
	<div class="invite_copy">
快来邀请您的朋友成为本馆会员，通过下面的专属链接邀请朋友成为会员，每成功邀请1位可以获得<span><?php $data=getcache_sql('point_invite','commons');  echo $data['point']?></span>积分哟!
<div class="fxcp"><textarea><?php echo $data['content_url']."\r\n".$siteinfo['domain']."index.php?fromuserid=".$memberinfo['userid']  ; ?></textarea></div>
</div>
     
    <div class="clear"></div>
	
		
	
  </div>
  <div class="blank"></div>
  <?php }?>
  <div id="J_pointPager" class="pages">
            <?php echo $pages;?>
          </div>
  <div class="blank"></div>
</div>
