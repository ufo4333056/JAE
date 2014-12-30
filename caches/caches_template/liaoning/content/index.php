<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>
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
<div class="wrap" style="height:35              0px; position:relative; ">
<div class="root61" style="z-index:22">
<div class="smCategorys">
                    <div class="sm-c-wrap J_TWidget"  data-widget-type="Slide" 
data-widget-config="{'navCls':'yslider-stick','contentCls':'yslider-stage','activeTriggerCls':'curr',
'delay':0.2,'effect':'fade','easing':'easeBoth','duration':0.8,'autoplay':false}" >
                        <div class="menu yslider-stick"  >

  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=eab0d7e8a2cd1da6e61c4b8e7dd085dc&action=lists&typeid=10&num=4&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=eab0d7e8a2cd1da6e61c4b8e7dd085dc&action=lists&typeid=10&num=4&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'10','order'=>'listorder ASC','limit'=>'4',));}?>

    <div class="item fore1 ">
      <i class="i1 "></i><span class="blank"></span>
      <h3><a href="<?php echo $data['0']['link'];?>" target="_blank"><?php echo $data['0']['title'];?></a></h3>
                <div class="ext"><a href="<?php echo $data['1']['link'];?>" target="_blank"><?php echo $data['1']['title'];?></a><a href="<?php echo $data['2']['link'];?>" target="_blank"><?php echo $data['2']['title'];?></a><a href="<?php echo $data['3']['link'];?>" target="_blank"><?php echo $data['3']['title'];?></a> </div>
    </div>

 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=fdae7c06f08ea5bb6c8545b60578f732&action=lists&typeid=16&num=4&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=fdae7c06f08ea5bb6c8545b60578f732&action=lists&typeid=16&num=4&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'16','order'=>'listorder ASC','limit'=>'4',));}?>

    <div class="item fore2 ">
      <i class="i2 "></i><span class="blank"></span>
      <h3><a href="<?php echo $data['0']['link'];?>" target="_blank"><?php echo $data['0']['title'];?></a></h3>
               <div class="ext"><a href="<?php echo $data['1']['link'];?>" target="_blank"><?php echo $data['1']['title'];?></a><a href="<?php echo $data['2']['link'];?>" target="_blank"><?php echo $data['2']['title'];?></a><a href="<?php echo $data['3']['link'];?>" target="_blank"><?php echo $data['3']['title'];?></a> </div>
    </div>

 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=1640ed4f9dd20684ef3f6e615b5d7244&action=lists&typeid=17&num=4&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=1640ed4f9dd20684ef3f6e615b5d7244&action=lists&typeid=17&num=4&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'17','order'=>'listorder ASC','limit'=>'4',));}?>

    <div class="item fore3 ">
      <i class="i3 "></i><span class="blank"></span>
      <h3><a href="<?php echo $data['0']['link'];?>" target="_blank"><?php echo $data['0']['title'];?></a></h3>
                 <div class="ext"><a href="<?php echo $data['1']['link'];?>" target="_blank"><?php echo $data['1']['title'];?></a><a href="<?php echo $data['2']['link'];?>" target="_blank"><?php echo $data['2']['title'];?></a><a href="<?php echo $data['3']['link'];?>" target="_blank"><?php echo $data['3']['title'];?></a> </div>
    </div>

 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=142994642bf1c91846857dac96046d2a&action=lists&typeid=18&num=4&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=142994642bf1c91846857dac96046d2a&action=lists&typeid=18&num=4&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'18','order'=>'listorder ASC','limit'=>'4',));}?>

    <div class="item fore4 ">
      <i class="i4"></i><span class="blank"></span>
      <h3><a href="<?php echo $data['0']['link'];?>" target="_blank"><?php echo $data['0']['title'];?></a></h3>
                <div class="ext"><a href="<?php echo $data['1']['link'];?>" target="_blank"><?php echo $data['1']['title'];?></a><a href="<?php echo $data['2']['link'];?>" target="_blank"><?php echo $data['2']['title'];?></a><a href="<?php echo $data['3']['link'];?>" target="_blank"><?php echo $data['3']['title'];?></a> </div>
    </div>

 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=d5897117a01ab57b058a910c7925769e&action=lists&typeid=19&num=4&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=d5897117a01ab57b058a910c7925769e&action=lists&typeid=19&num=4&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'19','order'=>'listorder ASC','limit'=>'4',));}?>

    <div class="item fore5 ">
      <i class="i5 "></i><span class="blank"></span>
      <h3><a href="<?php echo $data['0']['link'];?>" target="_blank"><?php echo $data['0']['title'];?></a></h3>
                 <div class="ext"><a href="<?php echo $data['1']['link'];?>" target="_blank"><?php echo $data['1']['title'];?></a><a href="<?php echo $data['2']['link'];?>" target="_blank"><?php echo $data['2']['title'];?></a><a href="<?php echo $data['3']['link'];?>" target="_blank"><?php echo $data['3']['title'];?></a> </div>
    </div>

 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div></div></div>
</div> 

<div class="focus J_TWidget" data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [700], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
 	<div class="prev"></div><div class="next"></div>
	<div class="tab-content">
 		<?php   $sql="SELECT * FROM jae_focus WHERE  status=1 ORDER BY listorder ASC  ";
		
		$r_focus=query($sql); foreach ($r_focus as $r) {?>
       <div><a href="<?php echo $r["link"]?>" target="_blank"> <img src="<?php echo $r["picture"]?>" width="740" height="340"/></a></div>
        <?php }?>
 	</div>
 	<div class="tab-nav">
 		 <?php $r_focuss=query($sql); foreach ($r_focuss as $k=>$rs) {?>
          <div class="v<?php echo $k?>"></div>
        <?php }?>
 	</div>
</div>

<div class="bn" >
<a target="_blank" href="/index.php?m=point&c=index&a=point_invite"><b>赚积分</b><br>邀请好友入驻</a>
<a target="_blank" href="/index.php?m=prize&c=index&a=init"><b>小积分抽大奖</b><br>每天送积分</a>
<a target="_blank"  href="/index.php?m=seckill&c=index&a=init"><b>积分秒杀</b><br>0元天天秒杀</a>
<a target="_blank"  href="/index.php?m=exchange&c=index&a=init"><b>积分换购</b><br>换购好礼不限时</a>

</div>
<div class="clear"></div>
</div>
<div class="blank"></div>



<!--首屏END-->
<!--限时秒杀-->  
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=8b08b0afeb2669ed06c98a21b553bd67&action=position&posid=75&order=listorder%2Cid+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=8b08b0afeb2669ed06c98a21b553bd67&action=position&posid=75&order=listorder%2Cid+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'75','order'=>'listorder,id desc','limit'=>'4',));}?>
<?php if($data) { ?>
<div class="wrap">
  
 
        <div class="sk-con" >
        <div class="sk-item">
        <ul class="clearfix">
      
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img width="240" height="240" data-ks-lazyload="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>￥<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['url'];?>" target="_blank">立即秒杀</a></div>
<div class="remind_time" ><?php  if ($r['end_time']>SYS_TIME  ) {?>  开始时间：<span><?php echo  date( 'm月d日 H时i分s秒', $r['begin_time'] ); } elseif ($r['end_time']<SYS_TIME ) echo "已经结束";?></span></div>



                            </li>
                            <?php $n++;}unset($n); ?> </ul>
        </div>
        </div>
        <div class="clear"> </div>
     
</div><?php } ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
<!--限时秒杀END--> 
<!--精品推荐-->
<div class="wrap">
<div class="title" ><img src="http://img03.taobaocdn.com/imgextra/i3/2139364924/TB2r00vaVXXXXXvXpXXXXXXXXXX_!!2139364924.png"/></div><div  class="jinxuan">
<div class="sk-item">
<ul class="clearfix"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=8d9ccfa19c1319bdb81ddceda3de5f64&action=position&posid=76&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=8d9ccfa19c1319bdb81ddceda3de5f64&action=position&posid=76&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'76','order'=>'listorder asc','limit'=>'6',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img width="380" height="380" data-ks-lazyload="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>￥<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="" href="<?php echo $r['url'];?>" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/2139364924/TB2HY8AaVXXXXbHXXXXXXXXXXXX_!!2139364924.png"></a></div></li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                            </ul></div>
</div>


</div>
<!--精品推荐END-->
<!--特色品类-->
<div class="blank"> &nbsp;</div>
<div class="wrap ">
  <img src="http://img03.taobaocdn.com/imgextra/i3/2139364924/TB2hoxxaVXXXXczXXXXXXXXXXXX_!!2139364924.png">
  <div class="main tese">
    <div class="main_t">
      <div class="main_b">


        <div class="left">
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=4a28a4b8b001e7a4a3cbc85c11fa4a55&pos=pinlei\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=4a28a4b8b001e7a4a3cbc85c11fa4a55&pos=pinlei\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'pinlei',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
        </div>

        <div class="right"><div class="slide J_TWidget" data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [300], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
  <div class="prev"></div><div class="next"></div>
  <div class="tab-content">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=fb2918ff2e4177aecd7da51b780c3080&action=lists&id=163&num=1&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=fb2918ff2e4177aecd7da51b780c3080&action=lists&id=163&num=1&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'163','order'=>'listorder ASC','limit'=>'1',));}?>
       <div><a href="<?php echo $data['0']['link'];?>" title="<?php echo $data['0']['title'];?>" target="_blank"> <img src="<?php echo $data['0']['picture'];?>" width="300" height="300"/></a></div>
       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=1c3de7ade978d4dc42150ba3e87718ec&action=lists&id=164&num=1&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=1c3de7ade978d4dc42150ba3e87718ec&action=lists&id=164&num=1&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'164','order'=>'listorder ASC','limit'=>'1',));}?>
       <div><a href="<?php echo $data['0']['link'];?>" title="<?php echo $data['0']['title'];?>" target="_blank"> <img src="<?php echo $data['0']['picture'];?>" width="300" height="300"/></a></div>
       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
       
  </div>
  <div class="tab-nav">     
          <div class="v1"></div><div class="v2"></div>       
  </div>
</div></div>

        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--特色品类END--> 
<!-- 寻味辽宁 -->
<div class="wrap xunwei ">
  <div class="title"><img src="http://img02.taobaocdn.com/imgextra/i2/2139364924/TB2BvlwaVXXXXXWXpXXXXXXXXXX_!!2139364924.png"></div>
  <div class="main">
    <div class="wrap">
<div class="tanxun J_TWidget"  data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'click', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'false','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">


<div class=" tab-content">
             
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=15512654e1b265bc29eef32f6fb41a14&action=position&posid=77&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=15512654e1b265bc29eef32f6fb41a14&action=position&posid=77&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'77','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c64ae45c3d13ff8bc2c5aeee918ec2b6&action=position&posid=78&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c64ae45c3d13ff8bc2c5aeee918ec2b6&action=position&posid=78&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'78','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=677e09f450afcd4a953391dcecf1c587&action=position&posid=79&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=677e09f450afcd4a953391dcecf1c587&action=position&posid=79&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'79','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=91837f7b39cf20523ddfe79d8f1576e9&action=position&posid=80&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=91837f7b39cf20523ddfe79d8f1576e9&action=position&posid=80&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'80','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=3432261a70d3edfa08bd4a41ae9acbaa&action=position&posid=81&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=3432261a70d3edfa08bd4a41ae9acbaa&action=position&posid=81&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'81','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f8a7f70e0fccd07c0b1aef0f0b6e6e95&action=position&posid=82&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f8a7f70e0fccd07c0b1aef0f0b6e6e95&action=position&posid=82&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'82','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f1694237a4cfb684682445c42d4bd622&action=position&posid=83&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f1694237a4cfb684682445c42d4bd622&action=position&posid=83&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'83','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=ef9ee639df8afbbf3f4391d3e4fe5766&action=position&posid=84&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=ef9ee639df8afbbf3f4391d3e4fe5766&action=position&posid=84&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'84','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=369f8dd7edb483fa5a3eb3063e668fbc&action=position&posid=85&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=369f8dd7edb483fa5a3eb3063e668fbc&action=position&posid=85&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'85','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=39baebc060823d8cbce3ffe37b4d857a&action=position&posid=86&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=39baebc060823d8cbce3ffe37b4d857a&action=position&posid=86&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'86','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=609fe764fe828a46f6fac5a312241d55&action=position&posid=87&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=609fe764fe828a46f6fac5a312241d55&action=position&posid=87&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'87','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=7d40b147cc9d1736334c93c31fc71de1&action=position&posid=88&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=7d40b147cc9d1736334c93c31fc71de1&action=position&posid=88&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'88','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e761bb0014389390238bbb74f21fb4cb&action=position&posid=89&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e761bb0014389390238bbb74f21fb4cb&action=position&posid=89&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'89','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
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

<!-- 必买推荐 -->

<div class="wrap bimai">
  <div class="title"><img src="http://img03.taobaocdn.com/imgextra/i3/2139364924/TB2Az4FaVXXXXXMXpXXXXXXXXXX_!!2139364924.png"></div>
  <div class="main">
<div class="l_img">  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=ac0cdf5cc22841a52604b9b9be2d33b8&action=lists&id=165&num=1&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=ac0cdf5cc22841a52604b9b9be2d33b8&action=lists&id=165&num=1&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'165','order'=>'listorder ASC','limit'=>'1',));}?>
      <a href="<?php echo $data['0']['link'];?>" title="<?php echo $data['0']['title'];?>" target="_blank"> <img src="<?php echo $data['0']['picture'];?>" width="320" height="590"/></a>
       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>    
<div class="r_list">  <div class="list">
            <ul>
      
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c78041c4be1c9ccb16f18bfad3d74b32&action=position&posid=91&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c78041c4be1c9ccb16f18bfad3d74b32&action=position&posid=91&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'91','order'=>'listorder asc','limit'=>'6',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <li> <a href="<?php echo $r['url']?>" target="_blank"><img height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">￥<?php echo round($r['coupon_price'],1);?></span><span class="yj">￥<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">立即购买</span></a></li>  
                         <?php $n++;}unset($n); ?>
                         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

            </ul>
          </div></div>


  </div>


</div>









<!-- 必买推荐END  -->


<!--1楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap clearfix">
  <div class="title"> <img src="http://img02.taobaocdn.com/imgextra/i2/2139364924/TB2YNdLaVXXXXbdXXXXXXXXXXXX_!!2139364924.png"  /></div>
  <div class="main">
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=59b710c5fabac45bd87fbec0b8af322c&action=lists&typeid=30&num=5&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=59b710c5fabac45bd87fbec0b8af322c&action=lists&typeid=30&num=5&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'30','order'=>'listorder ASC','limit'=>'5',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="img<?php echo $n;?>"><a href="<?php echo $r['link'];?>" title="<?php echo $r['title'];?>"  target="_blank"><img src="<?php echo $r['picture'];?>"></a></div>
  <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>


  </div>
</div>
<!--1楼END--> 


<!--2楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap clearfix">
  <div class="title"> <img src="http://img01.taobaocdn.com/imgextra/i1/2139364924/TB24aNLaVXXXXaZXXXXXXXXXXXX_!!2139364924.png"  /></div>
  <div class="main">

   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=db7f5605dd1ed934a9fffa4f167a78af&action=lists&typeid=31&num=5&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=db7f5605dd1ed934a9fffa4f167a78af&action=lists&typeid=31&num=5&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'31','order'=>'listorder ASC','limit'=>'5',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="img<?php echo $n;?>"><a href="<?php echo $r['link'];?>" title="<?php echo $r['title'];?>"  target="_blank"><img src="<?php echo $r['picture'];?>"></a></div>
  <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

  </div>
</div>
<!--2楼END--> 

<!--3楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap clearfix">
  <div class="title"> <img src="http://img04.taobaocdn.com/imgextra/i4/2139364924/TB24SXIaVXXXXbQXXXXXXXXXXXX_!!2139364924.png"  /></div>
  <div class="main">

   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=124cb65aa55906ed9a90f3e02ccd503c&action=lists&typeid=32&num=5&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=124cb65aa55906ed9a90f3e02ccd503c&action=lists&typeid=32&num=5&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'32','order'=>'listorder ASC','limit'=>'5',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="img<?php echo $n;?>"><a href="<?php echo $r['link'];?>" title="<?php echo $r['title'];?>"  target="_blank"><img src="<?php echo $r['picture'];?>"></a></div>
  <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

  </div>
</div>
<!--3楼END--> 

<!--4楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap clearfix">
  <div class="title"> <img src="http://img04.taobaocdn.com/imgextra/i4/2139364924/TB2_z8EaVXXXXawXpXXXXXXXXXX_!!2139364924.png"  /></div>
  <div class="main">

   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=1ff0a913f0ef06c76269bce3799478dc&action=lists&typeid=33&num=5&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=1ff0a913f0ef06c76269bce3799478dc&action=lists&typeid=33&num=5&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'33','order'=>'listorder ASC','limit'=>'5',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="img<?php echo $n;?>"><a href="<?php echo $r['link'];?>" title="<?php echo $r['title'];?>"  target="_blank"><img src="<?php echo $r['picture'];?>"></a></div>
  <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>


  </div>
</div>
<!--4楼END--> 

<!--5楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap clearfix">
  <div class="title"> <img src="http://img02.taobaocdn.com/imgextra/i2/2139364924/TB2zchGaVXXXXXlXpXXXXXXXXXX_!!2139364924.png"  /></div>
  <div class="main">

  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=1fc29ae06b94fede0bdcd8af20abdfe5&action=lists&typeid=34&num=5&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=1fc29ae06b94fede0bdcd8af20abdfe5&action=lists&typeid=34&num=5&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'34','order'=>'listorder ASC','limit'=>'5',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="img<?php echo $n;?>"><a href="<?php echo $r['link'];?>" title="<?php echo $r['title'];?>"  target="_blank"><img src="<?php echo $r['picture'];?>"></a></div>
  <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>


  </div>
</div>
<!--5楼END--> 

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