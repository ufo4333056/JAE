<?php defined('IN_JAE') or exit('No permission resources.'); ?><div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=f65a1cd8bc45f9b3983da2393c855cb2&pos=dingtong\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=f65a1cd8bc45f9b3983da2393c855cb2&pos=dingtong\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'dingtong',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
<?php include template('content','head');?>
<!-- <link rel="stylesheet" href="/statics/css/lows.css" />
<div class="lows-banner J_TWidget" style="display:none"  id="J_LowsBanner"  data-widget-type="Carousel" data-widget-config="{'navCls':'ks-switchable-nav','contentCls':'ks-switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'active','autoplay':'true','interval':3,'prevBtnCls': 'prev', 'nextBtnCls': 'next', 'disableBtnCls': 'disable' }">
    <div class="trigger-wrap">
        <span class="close J_LowsClose"></span>
        <span class="prev"></span>
        <span class="next"></span>
        <ol class="lows-trigger ks-switchable-nav">
            <li class="ks-switchable-trigger-internal297 active"></li>
            <li class="ks-switchable-trigger-internal297 "></li>
            <li class="ks-switchable-trigger-internal297"></li>
        </ol>
    </div>
    <ul class="ks-switchable-content clear-fix">
        <li class="pic1 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; "><div class="banner-pic" style="background: url(http://img02.taobaocdn.com/imgextra/i2/2063414185/TB2vZdVaXXXXXXpXXXXXXXXXXXX-2063414185.png) no-repeat 0 0;"></div></li>
        <li class="pic2 ks-switchable-panel-internal298" style="display: block; opacity: 1; position: absolute; z-index: 9; "><div class="banner-pic" style="background: url(http://img01.taobaocdn.com/imgextra/i1/2063414185/TB26QXZaXXXXXXuXXXXXXXXXXXX-2063414185.png) no-repeat 0 0;"></div></li>
        <li class="pic3 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; "><div class="banner-pic" style="background: url(http://img02.taobaocdn.com/imgextra/i2/2063414185/TB2R10VaXXXXXXNXXXXXXXXXXXX-2063414185.png) no-repeat 0 0;"></div></li>
    </ul>
</div> -->
<div class="body_bg">

<!--首屏-->
<div class="wrap" style="height:350px; position:relative; " >
<div class="fenlei">
   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=c3ed3d7e50eba5e2cf9a1fd2c69d78d4&pos=fenlei\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=c3ed3d7e50eba5e2cf9a1fd2c69d78d4&pos=fenlei\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'fenlei',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
  

</div>

    <!--shoujiao-->
    <div class="slide  w-content" >
      <div class="focus J_TWidget" data-widget-type="Carousel" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'prev', 'nextBtnCls': 'next', 'disableBtnCls': 'disable' }">
        <div class="prev"></div>
        <div class="next"></div>
        <div class="tab-content">
          <?php   $sql="SELECT * FROM jae_focus WHERE  status=1 ORDER BY listorder ASC  ";
        
        $r_focus=query($sql); foreach ($r_focus as $r) {?>
          <div><a href="<?php echo $r["link"]?>" target="_blank"> <img src="<?php echo $r["picture"]?>" width="1920" height="350"/></a></div>
          <?php }?>
        </div>
        <div class="tab-nav">
          <?php $r_focuss=query($sql); foreach ($r_focuss as $k=>$rs) {?>
          <div class="v<?php echo $k?>"></div>
          <?php }?>
        </div>
      </div>
    
    </div>
    <!--shoujia end-->

<div class="bn" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=55c64535b8170dcf84c447a814a41dfd&pos=focus_right\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=55c64535b8170dcf84c447a814a41dfd&pos=focus_right\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'focus_right',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div>
<div class="clear"></div>
</div>
<div class="blank"></div>



<!--首屏END-->
<div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=0a9b410421557918f345c0a730217395&pos=tonglan1\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=0a9b410421557918f345c0a730217395&pos=tonglan1\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan1',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
<!--每周活动-->        
<div class="wrap">
<div class="huodong J_TWidget"  data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<div class="tit_nav tab-nav">
<div class="on">9.9元尝鲜<span>周一、周二</span></div><div class="">第二件半价
<span>周三、周四</span></div><div class="">一元换购
<span>周五、周六、周日</span></div></div>
<div class="content tab-content">

<div class="cnt"><ul>  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=3ae11cd39c99a995c63150fbdb854244&action=position&posid=92&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=3ae11cd39c99a995c63150fbdb854244&action=position&posid=92&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'92','order'=>'listorder asc','limit'=>'6',));}?><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="180" height="180"><br><div class="tit"><?php echo str_cut($r[title],30,'');?></div><span class="point"><?php echo $r['coupon_price'];?>元</span><span class="ljq">立即抢</span></a></li><?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></ul><div class="clear"></div></div>


<div class="cnt" style="display:none;"><ul>  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=ce0850eb63e388a5dc1e4c9c3df82270&action=position&posid=93&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=ce0850eb63e388a5dc1e4c9c3df82270&action=position&posid=93&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'93','order'=>'listorder asc','limit'=>'6',));}?><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="180" height="180"><br><div class="tit"><?php echo str_cut($r[title],30,'');?></div><span class="point"><?php echo $r['coupon_price'];?>元</span><span class="ljq">立即抢</span></a></li><?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></ul><div class="clear"></div></div>


<div class="cnt"  style="display:none;"><ul>  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c154154caf8252bc0bc3b0ab577a77bb&action=position&posid=94&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c154154caf8252bc0bc3b0ab577a77bb&action=position&posid=94&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'94','order'=>'listorder asc','limit'=>'6',));}?><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="180" height="180"><br><div class="tit"><?php echo str_cut($r[title],30,'');?></div><span class="point"><?php echo $r['coupon_price'];?>元</span><span class="ljq">立即抢</span></a></li><?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></ul><div class="clear"></div></div>
</div>

</div>

</div>


 <div class="blank"></div>    
<div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=a126d53d57223f46c490c80a87e0961a&pos=tonglan2\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=a126d53d57223f46c490c80a87e0961a&pos=tonglan2\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan2',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
       <!--辽食 -->
    <div class="wrap subject-box " style="background:url(http://img01.taobaocdn.com/imgextra/i1/2139364924/TB2qkT0bpXXXXbMXXXXXXXXXXXX_!!2139364924.jpg) no-repeat; ">
    <a href="" target="_blank" style="height:120px; display:block;">
    </a>
        
   <ul class="sub-list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=ee1bb0a41891abb1c2efbde39e3b8770&action=position&posid=95&order=listorder+asc&num=5\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=ee1bb0a41891abb1c2efbde39e3b8770&action=position&posid=95&order=listorder+asc&num=5\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'95','order'=>'listorder asc','limit'=>'5',));}?><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><li>
                <a class="tolink" href="<?php echo $r['url'];?>" target="_blank" >
                    <div class="pic">
                        <img data-ks-lazyload="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
                    </div>
                    <div class="text">
                        <?php echo $r['title'];?>
                    </div>
                    <div class="info">
                        <div class="cost clearfix">
                            
                            <span class="prices">￥<strong><?php echo $r['coupon_price'];?></strong></span>
                            
                            <span class="discount">
                                <span class="num"><?php echo round( $r['coupon_price']/$r['price'],2)*10;?></span>折
                            </span>
                            
                        </div>
                        <div class="old">
                            <del class="prices">￥<?php echo $r['price'];?></del>
                        </div>
                        <div class="trade">
                            
                        </div>
                    </div>
                    
                    <div class="dijia">
                        <span class="di">查看详情</span>
                        
                    </div>
                    
                </a>
            </li><?php $n++;}unset($n); ?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                    
            
        </ul><div class="clear"></div></div>
       
        <!--辽食end --> 
<div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=a126d53d57223f46c490c80a87e0961a&pos=tonglan2\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=a126d53d57223f46c490c80a87e0961a&pos=tonglan2\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan2',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <!--综合comprehensive-->
   <div class="comprehensive wrap">
   <div class="category">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=7b334cd1f8cdc9d0bc7411ab0be05f2a&pos=category\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=7b334cd1f8cdc9d0bc7411ab0be05f2a&pos=category\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'category',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
   
   </div>
   <div class="grid-col-700">
   <div class="grid-col-450"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=7db9ec8bb830405590786c7cd827ab52&action=lists&id=191&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=7db9ec8bb830405590786c7cd827ab52&action=lists&id=191&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'191','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="450" height="479" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>   </div>
   <div class="grid-col-260"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=3e5e821b3d611770c647be7db36efe35&action=lists&id=192&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=3e5e821b3d611770c647be7db36efe35&action=lists&id=192&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'192','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="250" height="162" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=02f768398cdce3320da6507479c0f176&action=lists&id=193&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=02f768398cdce3320da6507479c0f176&action=lists&id=193&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'193','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="250" height="162" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=e2f8a25368cd9301c4fa75823c13ba10&action=lists&id=194&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=e2f8a25368cd9301c4fa75823c13ba10&action=lists&id=194&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'194','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="250" height="162" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>  </div>
   <div class="clear"></div>
   <div class="grid-rol-700"><!-- <div class="tip"></div> -->
   <ul>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=51e7a6112246c30a3eb0c62275f18f62&action=position&posid=96&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=51e7a6112246c30a3eb0c62275f18f62&action=position&posid=96&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'96','order'=>'listorder asc','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
   <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="176" height="176"><div class="tt"><?php echo str_cut($r[title],15,'');?></div>
   <div class="jg">￥<?php echo $r['coupon_price'];?></div>
   <div class="ljq">立即抢</div></a>
   </li>
   <?php $n++;}unset($n); ?>
   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
   
   
   </ul>
   
   
    </div>
   </div>
     <div class="grid-right-250">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=f3ccd9fb62ea132ddf6707ada31f2c41&action=lists&id=195&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=f3ccd9fb62ea132ddf6707ada31f2c41&action=lists&id=195&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'195','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="268" height="370" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=5e7e227db532e71586c6e9ae373eb7c0&action=lists&id=196&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=5e7e227db532e71586c6e9ae373eb7c0&action=lists&id=196&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'196','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="268" height="370" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>  </div>
   
   <div class="clear"></div>
</div>
   <div class="blank"></div>
<!--综合end-->    
<div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=0172b35e3b585f2be56ba50fb8ef1e95&pos=tonglan3\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=0172b35e3b585f2be56ba50fb8ef1e95&pos=tonglan3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan3',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <div class="blank"> &nbsp;</div>
<!--品牌故事-->
<div class="wrap">
<div class="gushi">

<div class="goods">
<ul><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=3f2b24590a387b598bc0a8a5636274e4&action=position&posid=97&order=listorder+asc&num=16\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=3f2b24590a387b598bc0a8a5636274e4&action=position&posid=97&order=listorder+asc&num=16\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'97','order'=>'listorder asc','limit'=>'16',));}?><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>" target="_blank"><?php if($r[isicon]==1) { ?><div class="icon"><img src="<?php echo $r['icon_url'];?>"  width="80" height="80"></div><?php } ?><img src="<?php echo $r['thumb'];?>" width="130" height="130"><br><br><?php echo str_cut($r[title],24,'');?></a></li>
<?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
</ul>
<div class="clear"></div>
</div>

</div>
</div>
<div class="blank"></div>
<div class="wrap " style=" text-align:center"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=a126d53d57223f46c490c80a87e0961a&pos=tonglan2\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=a126d53d57223f46c490c80a87e0961a&pos=tonglan2\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan2',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div> 
<div class="blank"></div> 
<!--满汉全席 -->
<div class="wrap">
  <div class=" manhan clearfix " style="background:url(http://img03.taobaocdn.com/imgextra/i3/2139364924/TB28g5EbpXXXXbpXXXXXXXXXXXX_!!2139364924.jpg) #751010 no-repeat; padding-top:5px; padding-left:480px;">
    <div class="gds">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=2d5e04c2079c7e46373517fdfeed24d3&action=position&posid=98&order=listorder+asc&num=3\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=2d5e04c2079c7e46373517fdfeed24d3&action=position&posid=98&order=listorder+asc&num=3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'98','order'=>'listorder asc','limit'=>'3',));}?>
      
      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
      
        <div class="li"><a class="tolink" href="<?php echo $r['url'];?>" target="_blank" > <img data-ks-lazyload="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="220" height="220">
          <div class="tit"><?php echo str_cut($r['title'],16,'');?></div>
          <div class="price">
            <div class="jg"><i>￥<?php echo $r['coupon_price'];?></i> <span>原价：￥<?php echo $r['price'];?></span></div>
            <div class="gm">立即抢购</div>
          </div></a>
        </div>   
     
      
      <?php $n++;}unset($n); ?>
      
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> </div>
  
    
  </div>
  </div>
  
  <!--满汉全席end -->  


  <div class="blank"> &nbsp;</div>
<div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=4093e54f8218586910e0c00dd8aaceb7&pos=tonglan5\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=4093e54f8218586910e0c00dd8aaceb7&pos=tonglan5\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan5',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <div class="blank"> &nbsp;</div>







<!-- 寻味辽宁 -->
<div class="wrap xunwei ">  
  <div class="main">
    <div class="wrap">
<div class="tanxun J_TWidget"  data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'click', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'false','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">


<div class=" tab-content">
            
<ul class="list" > <!-- 77 --><img src="http://img04.taobaocdn.com/imgextra/i4/2139364924/TB2sYeHbpXXXXbiXXXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=15512654e1b265bc29eef32f6fb41a14&action=position&posid=77&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=15512654e1b265bc29eef32f6fb41a14&action=position&posid=77&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'77','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img04.taobaocdn.com/imgextra/i4/2139364924/TB2.meAbpXXXXaRXpXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c64ae45c3d13ff8bc2c5aeee918ec2b6&action=position&posid=78&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c64ae45c3d13ff8bc2c5aeee918ec2b6&action=position&posid=78&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'78','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img04.taobaocdn.com/imgextra/i4/2139364924/TB2HtqCbpXXXXX5XpXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=677e09f450afcd4a953391dcecf1c587&action=position&posid=79&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=677e09f450afcd4a953391dcecf1c587&action=position&posid=79&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'79','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img02.taobaocdn.com/imgextra/i2/2139364924/TB2vrOCbpXXXXafXpXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=91837f7b39cf20523ddfe79d8f1576e9&action=position&posid=80&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=91837f7b39cf20523ddfe79d8f1576e9&action=position&posid=80&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'80','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img01.taobaocdn.com/imgextra/i1/2139364924/TB2lpuDbpXXXXXKXpXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=3432261a70d3edfa08bd4a41ae9acbaa&action=position&posid=81&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=3432261a70d3edfa08bd4a41ae9acbaa&action=position&posid=81&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'81','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img04.taobaocdn.com/imgextra/i4/2139364924/TB28cyGbpXXXXbSXXXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f8a7f70e0fccd07c0b1aef0f0b6e6e95&action=position&posid=82&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f8a7f70e0fccd07c0b1aef0f0b6e6e95&action=position&posid=82&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'82','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img04.taobaocdn.com/imgextra/i4/2139364924/TB2AZuKbpXXXXaDXXXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f1694237a4cfb684682445c42d4bd622&action=position&posid=83&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f1694237a4cfb684682445c42d4bd622&action=position&posid=83&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'83','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img04.taobaocdn.com/imgextra/i4/2139364924/TB2tsGMbpXXXXXEXXXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=ef9ee639df8afbbf3f4391d3e4fe5766&action=position&posid=84&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=ef9ee639df8afbbf3f4391d3e4fe5766&action=position&posid=84&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'84','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img03.taobaocdn.com/imgextra/i3/2139364924/TB2JvONbpXXXXXNXXXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=369f8dd7edb483fa5a3eb3063e668fbc&action=position&posid=85&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=369f8dd7edb483fa5a3eb3063e668fbc&action=position&posid=85&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'85','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img01.taobaocdn.com/imgextra/i1/2139364924/TB2xl1FbpXXXXb.XXXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=39baebc060823d8cbce3ffe37b4d857a&action=position&posid=86&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=39baebc060823d8cbce3ffe37b4d857a&action=position&posid=86&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'86','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img03.taobaocdn.com/imgextra/i3/2139364924/TB24ZqGbpXXXXcbXXXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=609fe764fe828a46f6fac5a312241d55&action=position&posid=87&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=609fe764fe828a46f6fac5a312241d55&action=position&posid=87&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'87','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img02.taobaocdn.com/imgextra/i2/2139364924/TB27i1BbpXXXXarXpXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=7d40b147cc9d1736334c93c31fc71de1&action=position&posid=88&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=7d40b147cc9d1736334c93c31fc71de1&action=position&posid=88&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'88','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img04.taobaocdn.com/imgextra/i4/2139364924/TB2JCmDbpXXXXXyXpXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e761bb0014389390238bbb74f21fb4cb&action=position&posid=89&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e761bb0014389390238bbb74f21fb4cb&action=position&posid=89&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'89','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" ><img src="http://img03.taobaocdn.com/imgextra/i3/2139364924/TB2aumLbpXXXXX7XXXXXXXXXXXX_!!2139364924.jpg">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=72ce155160e892ba6b98444f2611d0b0&action=position&posid=90&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=72ce155160e892ba6b98444f2611d0b0&action=position&posid=90&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'90','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
             

</div>



<div class="ditu tab-nav">
<div class="qu1">
<span></span>
朝阳
</div>
<div class="qu2">
<span></span>
阜新
</div>
<div class="qu3"><span></span>
沈阳
</div>
<div class="qu4"><span></span>
铁岭
</div>
<div class="qu5"><span></span>
葫芦岛
</div>
<div class="qu6"><span></span>
锦州
</div>
<div class="qu7"><span></span>
盘锦
</div>
<div class="qu8"><span></span>
辽阳
</div>
<div class="qu9"><span></span>
本溪
</div>
<div class="qu10"><span></span>
抚顺
</div>
<div class="qu11"><span></span>
营口
</div>
<div class="qu12"><span></span>
鞍山
</div>
<div class="qu13"><span></span>
丹东
</div>
<div class="qu14"><span></span>
大连
</div>
</div>
</div>

</div>


  </div>


</div>



<!-- 寻味辽宁END -->
  <div class="blank"> &nbsp;</div>
<div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=a7810830331b94771d88a9ca1e539e9a&pos=tonglan6\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=a7810830331b94771d88a9ca1e539e9a&pos=tonglan6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan6',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <div class="blank"> &nbsp;</div>

 <!--1楼 -->
  <div class="wrap">
    <div class="f_title" style="background:url(http://img03.taobaocdn.com/imgextra/i3/2139364924/TB2OSiGbpXXXXcrXXXXXXXXXXXX_!!2139364924.png) 8px center #fafaf8 no-repeat; padding-left:50px;" >休闲零食<span><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=7165c46517a9614aeb256edbc64130e8&pos=flool_1_list\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=7165c46517a9614aeb256edbc64130e8&pos=flool_1_list\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_1_list',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></span></div>
    <div class="louceng clearfix">
      <div class="cat">
        <div class="img"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=b1823a835f2d8c66694b6c93c9af57a5&pos=flool_1_img\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=b1823a835f2d8c66694b6c93c9af57a5&pos=flool_1_img\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_1_img',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
        
      </div>
      <div class="gds">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=26dc2cd74f5643ed1598e833caeb414f&action=position&posid=100&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=26dc2cd74f5643ed1598e833caeb414f&action=position&posid=100&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'100','order'=>'listorder asc','limit'=>'10',));}?>
  
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="li"><a href="<?php echo $r['url'];?>" target="_blank"><img width="220"  height="220" src="<?php echo $r['thumb'];?>">
          <div class="tit"><?php echo str_cut($r['title'],12,'');?></div>
          <div class="price">
            <div class="jg"><i>￥<?php echo $r['coupon_price'];?></i> <span>原价：<?php echo $r['price'];?></span></div>
           
          </div></a>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
     
      </div>
    </div>
  </div>

  <!--1楼end --> 
    <div class="blank"> &nbsp;</div>
<div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=35bf18579f79f8bd3c1ef2eed536a33a&pos=tonglan8\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=35bf18579f79f8bd3c1ef2eed536a33a&pos=tonglan8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan8',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <div class="blank"> &nbsp;</div>
  <!--2楼 -->
  <div class="wrap">
    <div class="f_title" style="background:url(http://img02.taobaocdn.com/imgextra/i2/2139364924/TB2j6yFbpXXXXcIXXXXXXXXXXXX_!!2139364924.png) 8px center #fafaf8 no-repeat; padding-left:50px;" >水产海鲜<span><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=7e064aba180692d14472001607e9386a&pos=flool_2_list\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=7e064aba180692d14472001607e9386a&pos=flool_2_list\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_2_list',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></span></div>
    <div class="louceng clearfix">
      <div class="cat">
        <div class="img"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=659a953a17160adf731b87537f39efb6&pos=flool_2_img\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=659a953a17160adf731b87537f39efb6&pos=flool_2_img\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_2_img',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
        
      </div>
      <div class="gds">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c80a5c2bf470642d1726c9d88475aaa8&action=position&posid=101&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c80a5c2bf470642d1726c9d88475aaa8&action=position&posid=101&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'101','order'=>'listorder asc','limit'=>'10',));}?>
  
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="li"><a href="<?php echo $r['url'];?>" target="_blank"><img width="220"  height="220" src="<?php echo $r['thumb'];?>">
          <div class="tit"><?php echo str_cut($r['title'],12,'');?></div>
          <div class="price">
            <div class="jg"><i>￥<?php echo $r['coupon_price'];?></i> <span>原价：<?php echo $r['price'];?></span></div>
           
          </div></a>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
     
      </div>
    </div>
  </div>

  <!--2楼end --> 
    <div class="blank"> &nbsp;</div>
  <div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=6570610ef0e8dbc484cc380f75c5f36b&pos=tonglan9\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=6570610ef0e8dbc484cc380f75c5f36b&pos=tonglan9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan9',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
    <div class="blank"> &nbsp;</div>
<!--3楼 -->
  <div class="wrap">
    <div class="f_title" style="background:url(http://img03.taobaocdn.com/imgextra/i3/2139364924/TB235iIbpXXXXbYXXXXXXXXXXXX_!!2139364924.png) 8px center #fafaf8 no-repeat; padding-left:50px;" >家居优选<span><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=3f3e48c46ad68419417b80285afda7aa&pos=flool_3_list\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=3f3e48c46ad68419417b80285afda7aa&pos=flool_3_list\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_3_list',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></span></div>
    <div class="louceng clearfix">
      <div class="cat">
        <div class="img"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=26727d3b3d4ff4fd01126dbec9e1d1a3&pos=flool_3_img\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=26727d3b3d4ff4fd01126dbec9e1d1a3&pos=flool_3_img\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_3_img',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
        
      </div>
      <div class="gds">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=491e68e518d4f6104183e357fb49ca87&action=position&posid=102&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=491e68e518d4f6104183e357fb49ca87&action=position&posid=102&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'102','order'=>'listorder asc','limit'=>'10',));}?>
  
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="li"><a href="<?php echo $r['url'];?>" target="_blank"><img width="220"  height="220" src="<?php echo $r['thumb'];?>">
          <div class="tit"><?php echo str_cut($r['title'],12,'');?></div>
          <div class="price">
            <div class="jg"><i>￥<?php echo $r['coupon_price'];?></i> <span>原价：<?php echo $r['price'];?></span></div>
           
          </div></a>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
     
      </div>
    </div>
  </div>

  <!--3楼end -->
    <div class="blank"> &nbsp;</div> 
  <div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=1bbc2fefd82ef6e542de147fccfefddf&pos=tonglan10\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=1bbc2fefd82ef6e542de147fccfefddf&pos=tonglan10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan10',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <div class="blank"> &nbsp;</div>

<!-- 特产专辑 -->
<div class="wrap zhuanti" >
    
<div class="zhuanji">

<?php   $sql="SELECT * FROM jae_special  ORDER BY listorder DESC limit 0,4  ";
        
        $result=query($sql); foreach ($result as $r) {?>


   <div class="li4"><a title="<?php echo $r['title'];?>" target="_blank" href="/index.php?m=content&c=special&a=show_special&id=<?php echo $r['id'];?>"><img border="0" height="155" style="float:none;margin:0px;" width="290" src="<?php echo $r['thumb'];?>"></a></div>

   <?php }?>
      
     
      
        
<div class="clear"></div>
</div>
</div>
<div class="blank"> &nbsp;</div>
<div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=761d8c3758cacdb9f4ea86053af19da7&pos=tonglan13\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=761d8c3758cacdb9f4ea86053af19da7&pos=tonglan13\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan13',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
<div class="blank"> &nbsp;</div>
<!--友情链接-->

<div class="wrap">
  <div class="jh">
            <?php $result=query('SELECT * FROM jae_link WHERE typeid=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,50 ');
                        foreach ($result as $v) {
                        ?>
            <a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img data-ks-lazyload="<?php echo $v['logo'];?>"></a>
            <?php }?>
            <div class="clear"></div>
                    
                    </div>
</div>

<!--友情链接END--> 

<!--版权-->
</div>

		<?php include template('content','foot');?>
<!--版权END-->