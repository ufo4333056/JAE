<?php defined('IN_JAE') or exit('No permission resources.'); ?><cajamodules include="kissy/1.3.0/core,kissy/gallery/layer-anim/1.1/index,kissy/gallery/datalazyload/1.0/index,jquery/1.9/index" />
<script src="http://a.tbcdn.cn/apps/taesite/libs/jquery-ui/jquery1.9.min.js"></script>
<script src="/statics/js/common.js"></script>
<?php $siteinfo=siteinfo(SITEID);  $site_setting=string2array($siteinfo['setting']); ?>
<link rel="stylesheet" href="/jae/templates/liaoning2/css/index.css" />

<div class="top">
<div class="head">
  <div class="logo">
    <a href="/index.php">
      <img  height="80" src="<?php echo $site_setting['head_logo'] ?>" />
    </a>
  </div>
  <div class="chandi">
    <img src="http://img01.taobaocdn.com/imgextra/i1/2139364924/TB2dHfsapXXXXayXpXXXXXXXXXX_!!2139364924.png">
    </div>
  <div class="top_right">

    <div class="member_btn">
      <div class="member_arrow" ><a href="/index.php?m=member&c=index&a=init" target="_blank">会员中心</a></div>
      <div class="member_mini_nav" ><div class="prompt">            <span class="fl">您好，<span class="tips">请登录</span></span>            <span class="fr"></span>        </div><div class="uclist">                
      <ul class="fore1 fl">
        <?php $nav_arr=query('SELECT * FROM jae_member_menu WHERE display=1 AND project1=1 ORDER BY listorder,id ASC'); foreach ($nav_arr as $key =>
        $r) { ?>
        <li>
          <a  href="/index.php?m=<?php echo $r['m']?>&c=<?php echo $r['c']?>&a=<?php echo $r['a']?><?php if($r['data']) echo '&'.$r['data'];?>"><?php echo $r['name'] ?></a>
        </li>
        <?php } ?>
        
      </ul>
      <ul class="fore2 fl">
        <?php $nav_arr=query('SELECT * FROM jae_member_menu WHERE display=1 AND project1=0 ORDER BY listorder,id ASC'); foreach ($nav_arr as $key =>
        $r) { ?>
        <li>
          <a  href="/index.php?m=<?php echo $r['m']?>&c=<?php echo $r['c']?>&a=<?php echo $r['a']?><?php if($r['data']) echo '&'.$r['data'];?>"><?php echo $r['name'] ?>&nbsp;&gt;</a>
        </li>
        <?php } ?>
      
      </ul>
    </div></div>



    </div>


    <div class="top_point">
      <div class="member_point">
        <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank">0</a>
      </div>
      <div class="member_sign">
        <a href="/index.php?m=member&c=index&a=init" target="_blank">请登录</a>
      </div>
    </div>

  </div>
  </div>
</div>


<div class="nav_wrap"><div class="nav">
<ul><li class="fenguan">辽宁全省分馆</li><li><a href="/index.php">首页</a></li>
  <?php $nav_arr=query('SELECT * FROM jae_category WHERE ismenu=1 ORDER BY listorder,catid ASC'); foreach ($nav_arr as $key =>
        $v) { ?>
        <li><a target="_blank"  href="<?php echo $v['url'] ?>"><?php echo $v['catname'] ?></a></li>
        <?php } ?>
</ul></div></div>
