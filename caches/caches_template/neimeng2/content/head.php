<?php defined('IN_JAE') or exit('No permission resources.'); ?><cajamodules include="kissy/1.3.0/core,kissy/gallery/layer-anim/1.1/index,kissy/gallery/datalazyload/1.0/index,jquery/1.9/index" />
<script src="http://a.tbcdn.cn/apps/taesite/libs/jquery-ui/jquery1.9.min.js"></script>
<script src="/statics/js/common.js"></script>
<link rel="stylesheet" href="/jae/templates/neimeng2/css/index.css" />
<?php $siteinfo=siteinfo(SITEID);  $site_setting=string2array($siteinfo['setting'])  ; ?>

<div class="topnav">
<div class="wrap">
<div class="wel">
你好，欢迎来到内蒙古馆！<span class="member_sign">
				<a href="/index.php?m=member&c=index&a=init" target="_blank">请登录</a>
			</span> </div>

<div class="member_btn">
			<div class="member_arrow" ><a href="/" target="_blank">会员中心</a></div>
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
<div class="navbar">
  <ul>
    <li class="li1"><a href="/index.php?m=point&c=index&a=sign">我的积分</a>|</li><li class="li2"><a href="/index.php?m=prize&c=index&a=my_prize">我的奖品</a>|</li><li class="li3"><a href="/index.php?m=order&c=index&a=init">我的订单</a></li>
  </ul>
</div>
</div>
</div>

<div class="head">
<div class="wrap">
<div class="mgb"><img src="http://img04.taobaocdn.com/imgextra/i4/1863579612/TB2k.c2aXXXXXX3XXXXXXXXXXXX-1863579612.png"></div>
	<div class="logo">
		<a href="/index.php">
			<img   src="<?php echo $site_setting['head_logo'] ?>" />
		</a>
	</div>
    <div class="bz"><img src="http://img02.taobaocdn.com/imgextra/i2/1863579612/TB2NysZaXXXXXcGXXXXXXXXXXXX-1863579612.png"></div>
    
	<div class="top_right">

		

		<div class="top_point">			
			<div class="member_sign">
				<a href="/index.php?m=member&c=index&a=init" target="_blank">请登录</a>
			</div>
		</div>

	</div>
   </div>
</div>

<div class="nav">
	<div class="wrap">
		
		<div class="nav_li">
			<ul>
				<li>
					<a href="/">首页</a>
				</li>
				<?php $nav_arr=query('SELECT * FROM jae_category WHERE ismenu=1 ORDER BY listorder,catid ASC'); foreach ($nav_arr as $key =>
				$v) { ?>
				<li><a target="_blank"  href="<?php echo $v['url'] ?>"><?php echo $v['catname'] ?></a></li>
				<?php } ?></ul>
		</div>
	</div>
</div>