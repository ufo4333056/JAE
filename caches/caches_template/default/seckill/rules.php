<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head'); ?>
<link href="/statics/css/seckill.css" rel="stylesheet" type="text/css" />

<div  style=" background:<?php echo $page_setting['bg_color']?>; display:block" >
  <div class="i_step i_step1" style="height: 440px;
background: url(<?php echo $page_setting['bg_img']?>) no-repeat center 0;" >
    <div  style="width: 990px;margin: 0 auto;position: relative;"><a target="_blank" href="/index.php?m=seckill&c=index&a=rules"> <img style="display:block" src="<?php echo $page_setting['img']?>"></a></div>
  </div>
  <div class="blank"></div>
   <div  style="font-size:14px; width:990px; margin:0 auto; font-family:'Î¢ÈíÑÅºÚ';  line-height:30px;"><?php echo htmlspecialchars_decode($page_setting['rules']);?></div>
  <div class="blank"></div>
</div>
