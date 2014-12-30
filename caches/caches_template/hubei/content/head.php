<?php defined('IN_JAE') or exit('No permission resources.'); ?><cajamodules include="kissy/1.3.0/core,kissy/gallery/layer-anim/1.1/index,kissy/gallery/datalazyload/1.0/index,jquery/1.9/index" />
<script src="http://a.tbcdn.cn/apps/taesite/libs/jquery-ui/jquery1.9.min.js"></script>
<script src="/statics/js/common.js"></script>
<?php $siteinfo=siteinfo(SITEID);  $site_setting=string2array($siteinfo['setting']); ?>
<link rel="stylesheet" href="/jae/templates/hubei/css/mall.css" />

<div class="top wrap" style="height:120px;">
  <div class="logo"> <a href="/index.php"> <img  height="80" src="<?php echo $site_setting['head_logo'] ?>" /> </a> </div>
  <div class="top_right">
    <div class="member_btn">
      <div class="member_arrow" ><a href="/" target="_blank">会员中心</a></div>
      <div class="member_mini_nav" >
        <div class="prompt"><span class="fl">您好，<span class="tips"><a href="/member.php">请登录</a></span></span><span class="fr"></span></div>
        <div class="uclist">
          <ul class="fore1 fl">
            <?php $nav_arr=query('SELECT * FROM jae_member_menu WHERE display=1 AND project1=1 ORDER BY listorder,id ASC'); foreach ($nav_arr as $key =>
        $r) { ?>
            <li> <a  href="/index.php?m=<?php echo $r['m']?>&c=<?php echo $r['c']?>&a=<?php echo $r['a']?><?php if($r['data']) echo '&'.$r['data'];?>"><?php echo $r['name'] ?></a> </li>
            <?php } ?>
          </ul>
          <ul class="fore2 fl">
            <?php $nav_arr=query('SELECT * FROM jae_member_menu WHERE display=1 AND project1=0 ORDER BY listorder,id ASC'); foreach ($nav_arr as $key =>
        $r) { ?>
            <li> <a  href="/index.php?m=<?php echo $r['m']?>&c=<?php echo $r['c']?>&a=<?php echo $r['a']?><?php if($r['data']) echo '&'.$r['data'];?>"><?php echo $r['name'] ?>&nbsp;&gt;</a> </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="top_point">
      <div class="member_point "> <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank">0</a> </div>
      <div class="member_sign"> <a href="/index.php?m=member&c=index&a=init" target="_blank">请登录</a> </div>
    </div>
  </div>
</div>
<div class="wrap">
  <div class="nav">
    <ul >
      <li class="index"> <a href="/">全部商品分类</a> </li>
      <li> <a href="/index.php?m=prize&c=index&a=init">积分抽奖</a> </li>
      <li> <a href="/index.php?m=exchange&c=index&a=init">积分换购</a> </li>
      <li> <a href="/index.php?m=seckill&c=index&a=init">积分秒杀</a> </li>
      <li> <a href="/index.php?m=content&c=index&a=lists&catid=1">购物返积分</a> </li>
      <li> <a href="/index.php?m=point&c=index&a=point_invite">赚积分</a> </li>
    </ul>
    <ul class="zdtfbr">
      <li> <a href="/index.php?m=member&c=index&a=goods_apply">我是卖家</a> </li>
      <li> <a href="http://bangpai.taobao.com/group/thread/14715437-289148642.htm?spm=a216r.7118237.1.21.Cewgpk" target="_blank">服务承诺</a> </li>
      <li> <a href="http://bangpai.taobao.com/group/thread/14715437-286960706.htm?spm=a216r.7118237.1.23.Cewgpk" target="_blank">招商说明</a> </li>
    </ul>
  </div>
</div>

