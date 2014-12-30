<?php defined('IN_JAE') or exit('No permission resources.'); ?><div class="wrap " style=" text-align:center">
   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=f65a1cd8bc45f9b3983da2393c855cb2&pos=dingtong\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=f65a1cd8bc45f9b3983da2393c855cb2&pos=dingtong\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'dingtong',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> <?php include template('content','head');?>
<link rel="stylesheet" href="/statics/css/lows.css" />
<?php  jae_base::load_sys_class('user');?>
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
        <li class="pic1 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; "><div class="banner-pic" style="background: url(http://img04.taobaocdn.com/imgextra/i4/1089118323/TB2_ZYlXVXXXXXxXXXXXXXXXXXX-1089118323.png) no-repeat 0 0;"></div></li>
        <li class="pic2 ks-switchable-panel-internal298" style="display: block; opacity: 1; position: absolute; z-index: 9; "><div class="banner-pic" style="background: url(http://img04.taobaocdn.com/imgextra/i4/1089118323/TB2CcYlXVXXXXaBXXXXXXXXXXXX-1089118323.png) no-repeat 0 0;"></div></li>
        <li class="pic3 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; "><div class="banner-pic" style="background: url(http://img04.taobaocdn.com/imgextra/i4/1089118323/TB2LI_lXVXXXXXaXpXXXXXXXXXX-1089118323.png) no-repeat 0 0;"></div></li>
    </ul>
</div>

<div class="blank"></div>
<div class="body_w">
    <div class="wrap">
        <div class="vPersonal" data-spm="16">
            <!--达人权益标题-->
            <div class="hd">会员中心</div>
            <!--个人信息区域开始-->
            <div class="info">
                <div class="photo " data-test="-1">
                    <div class="p" id="J_personal_photo" data-garden="-1" data-experience="10007" data-img="http://img.taobaocdn.com/sns_logo/T1xzuvFcRcXXb1upjX.jpg_80x80.jpg">
                       <?php echo     '<img width=76 height=76 src="/_RS/user/picture?mixUserNick='.urlencode($nick,"UTF-8").'" />  ';?></div>
                    
                    <span class="m"></span>
                    <span class="m mb-hide j_changeInfo"> <b>编辑资料</b>
                    </span>
                </div>
                <div class="per">
                    <p class="title" >HI!<span class="login_tip"><a href="/member.php" style="color:#fff;">请登录</a></span></p>
                    <!--<p class="garden">您是湖北馆会员</p>-->
                    <p class="bt">
                       <!-- <a class="activied j_activied" href="javascript:void(0);">激活</a>-->
                        <a class="sign j_sign activied" href="/index.php?m=member&c=index&a=init" target="_blank">签到</a>
                    </p>
                </div>
            </div>
            
            <!--个人信息区域结束-->
            <!--个人资产区域开始-->
            <div class="assets unlogin">
                <span class="bt1"></span>
                <!--已登录开始-->
                <div class="row point">
                    <span class="icon"></span>
                    <p class="ht">
                        <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank">我的积分:</a>
                         <span class="pots ">
        <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank">0</a>
      </span>
                    </p>
                    <p class="bt">
                       邀请好友就能赚积分
                    </p>
                </div>
                <div class="row coupon">
                    <span class="icon"></span>
                    <p class="ht">
                        <a href="/index.php?m=prize&c=index&a=my_prize" target="_blank">我的奖品:</a>
                        <span class="prizes_num" ><a href="/index.php?m=prize&c=index&a=my_prize" target="_blank">0</a></span>
                        个
                    </p>
                    <p class="bt">
                        <a href="/index.php?m=prize&c=index&a=my_prize" target="_blank">
                            快来参加积分抽奖吧
                            
                        </a>
                    </p>
                </div>
                <div class="row message">
                    <span class="icon"></span>
                    <p class="ht">
                        <a href="/index.php?m=order&c=index&a=init" target="_blank">我的订单:</a>
                        <span class="orders_num"><a href="/index.php?m=order&c=index&a=init" target="_blank">0</a></span>
                        个
                    </p>
                    <p class="bt">
                        <a class="dr" href="/index.php?m=order&c=index&a=init" target="_blank">湖北馆的积分活动</a>
                        
                    </p>
                </div>
                <!--已登录结束--> </div>
            <!--个人资产区域结束-->
            <!--特权区域开始-->
            <div class="privilege">
                <div class="title"></div>
                <div class="list" id="J_privilege_tab">
                    <ul class="tab-nav">
                        
                    </ul>
                    <div style="position: relative; overflow: hidden; height: 130px;">
                        <ul class="tab-content" style="width: 190px; overflow: hidden; height: 90px; ">
                            <div style="position: absolute; overflow: hidden; width: 380px; -webkit-transition: 0s; -webkit-transform: translate3d(0px, 0px, 0px); -webkit-backface-visibility: hidden; ">
                                <li class="tab-pannel" style="float: left; overflow: hidden; width: 190px; display: block; ">
                                    <ul class="privList">
                                        <li>
                                            <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank">
                                                <span class="icon "></span>
                                                我的签到
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/index.php?m=prize&c=index&a=init" target="_blank">
                                                <span class="icon "></span>
                                                积分抽奖
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/index.php?m=exchange&c=index&a=init" target="_blank">
                                                <span class="icon "></span>
                                                积分换购
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/index.php?m=seckill&c=index&a=init" target="_blank">
                                                <span class="icon "></span>
                                                积分秒杀
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/index.php?m=content&c=index&a=lists&catid=1" target="_blank">
                                                <span class="icon "></span>
                                                购物返积分
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/index.php?m=point&c=index&a=point_invite" target="_blank">
                                                <span class="icon "></span>
                                                邀请好友
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="tab-pannel hidden" style="float: left; overflow: hidden; width: 190px; display: block; ">
                                    <ul class="privList">
                                        <li>
                                            
                                                
                                            
                                        </li>
                                        <li>
                                            
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    </div>
                   
                </div>
            </div>
            <!--特权区域结束--> </div>
        <!--shoujiao-->
        <div class="fl" style="margin-left:10px;">
            <div class="focus J_TWidget" data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
 	<div class="prev"></div><div class="next"></div>
	<div class="tab-content">
 		<?php   $sql="SELECT * FROM jae_focus WHERE  status=1 ORDER BY listorder ASC  ";
		
		$r_focus=query($sql); foreach ($r_focus as $r) {?>
       <div><a href="<?php echo $r["link"]?>" target="_blank"> <img src="<?php echo $r["picture"]?>" width="710" height="250"/></a></div>
        <?php }?>
 	</div>
 	<div class="tab-nav">
 		 <?php $r_focuss=query($sql); foreach ($r_focuss as $k=>$rs) {?>
          <div class="v<?php echo $k?>"></div>
        <?php }?>
 	</div>
</div>
            <!--shoujia end-->
            <div class="clear" style="height:10px;"></div>
            <div id="J_channelNav" class="channelNav clearfix" >
                <a href="/index.php?m=point&c=index&a=point_invite" class="properItem" target="_blank">
                    <img src="/statics/images/index_img/jifen_1.jpg" alt="赚积分"></a>
                <a href="/index.php?m=prize&c=index&a=init" class="properItem" target="_blank">
                    <img src="/statics/images/index_img/jifen_4.jpg" alt="积分抽奖"></a>
                <a href="/index.php?m=seckill&c=index&a=init" class="properItem" target="_blank">
                    <img src="/statics/images/index_img/jifen_3.jpg" alt="积分秒杀"></a>
                <a href="/index.php?m=exchange&c=index&a=init" class="properItem" target="_blank">
                    <img src="/statics/images/index_img/jifen_2.jpg" alt="积分换购"></a>
            </div>
        </div>
        <div class="fr">
            <div>
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=b185443d7aa9bf2b87b0bc2dc8cd4ccf&action=lists&id=74&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=b185443d7aa9bf2b87b0bc2dc8cd4ccf&action=lists&id=74&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'74','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="300" height="250" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                </div>
            <div class="clear" style="height:10px;"></div>
            <div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=a81d4a17c7a143815cd1f4aec3787a7e&action=lists&id=75&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=a81d4a17c7a143815cd1f4aec3787a7e&action=lists&id=75&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'75','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="300" height="180" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
               </div>
        </div>
        <div class="clear"></div>
    </div>
   
    <div style="clear:both; height:30px;"></div>
<!--品牌汇
<div  class="wrap brand-box " >
    <div class="br-left">
                <h3 class="hd">
                    <span>品牌汇</span>
                    <span>3折起</span>
                </h3>
                <div class="switch-box J_TWidget"  data-widget-type="Carousel" data-widget-config="{'navCls':'switch-nav','contentCls':'switch-cont','effect': 'scrollx',
'easing': 'easeOutStrong','triggerType':'mouse', 'steps':1, 'viewSize': [230], 'circular': true, 'activeTriggerCls':'ks-active','autoplay':'true','interval':3,'prevBtnCls': 'prev', 'nextBtnCls': 'next', 'disableBtnCls': 'disable' }">
                    <span title="上一页" class="prev" style="display: none; "><i></i></span>
                    <span title="下一页" class="next" style="display: none; "><i></i></span>
                    
                    
                    <div class="scroller">
                        <ol class="switch-cont" style="position: absolute; width: 999999px; ">
                              
                              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=6ba335ccf6073465e28259d4f7ff6d47&action=lists&id=146&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=6ba335ccf6073465e28259d4f7ff6d47&action=lists&id=146&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'146','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> <li class="ks-switchable-panel-internal14" style="display: block; float: left; "> <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" height="410"></a></li>                        
                  <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=4fe6d8215dd0c04634b66de2f5e4463e&action=lists&id=147&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=4fe6d8215dd0c04634b66de2f5e4463e&action=lists&id=147&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'147','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> <li class="ks-switchable-panel-internal14" style="display: block; float: left; "> <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" height="410"></a></li>                        
                  <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>                           
                        </ol>
                    </div>
                <ul class="switch-nav"><li class="ks-switchable-trigger-internal13 ks-active">1</li><li class="ks-switchable-trigger-internal13">2</li></ul></div>
            </div><div class="br-center J_TWidget"   data-widget-type="Carousel" data-widget-config="{'navCls':'switch-nav','contentCls':'switch-cont','effect': 'scrollx',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [752], 'activeTriggerCls':'ks-active','prevBtnCls': 'prev', 'nextBtnCls': 'next', 'disableBtnCls': 'disable','autoplay':'true','interval':3 }"> 
            
            <h3 class="hd switch-nav">
                    <span class="ks-active"><?php echo position(8);?></span>
                    <span><?php echo position(9);?></span> 
					
                </h3>
                 
             <div class="switch-cont" >   
                     <ul class="brand-list">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=2005e269f1a7b666618754e73c5b8854&action=lists&id=8&num=10&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=2005e269f1a7b666618754e73c5b8854&action=lists&id=8&num=10&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'8','order'=>'listorder ASC','limit'=>'10',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                                                                    <li>
                            <a href="<?php echo $r['url'];?>" target="_blank">
                                <div class="pic"><img src="<?php echo $r['thumb'];?>"></div>
								<div class="pinpait"><?php echo $r['title'];?></div>
								<div class="pinjge">
								<span class="prices">￥<strong><?php echo $r['coupon_price'];?></strong></span>
								<del class="prices">￥{ round($r['price'],1)}</del>
								</div>
                                
                            </a>
                        </li>
						<?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                        </ul>
						 <ul class="brand-list">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=67704b44b9ad352e879b3f14d7a24168&action=lists&id=9&num=10&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=67704b44b9ad352e879b3f14d7a24168&action=lists&id=9&num=10&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'9','order'=>'listorder ASC','limit'=>'10',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                                                                    <li>
                            <a href="<?php echo $r['url'];?>" target="_blank">
                                <div class="pic"><img src="<?php echo $r['thumb'];?>"></div>
								<div class="pinpait"><?php echo $r['title'];?></div>
								<div class="pinjge">
								<span class="prices">￥<strong><?php echo $r['coupon_price'];?></strong></span>
								<del class="prices">￥{ round($r['price'],1)}</del>
								</div>
                                
                            </a>
                        </li>
						<?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                        </ul>
                       
             </div>                                
                                                
                                                
        </div><div class="br-right">
 <?php $info=query("SELECT * FROM jae_brand WHERE typeid=12 ORDER BY listorder,brandid ASC   LIMIT 1,5") ; foreach( $info as $r) {?>       
    <a href="<?php echo $r[url]?>" target="_blank">
    <img src="<?php echo $r[logo]?>"  width="200" height="84">
	</a>
<?php }?>
  
  </div>
    <div class="clear"></div>
        </div>-->    
<!--每周活动-->        
<div class="wrap">
<div class="huodong J_TWidget"  data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<div class="tit_nav tab-nav">
<div class="on">积分秒杀<span></span></div><div class="">积分换购
<span></span></div><div class="">第二件半价
<span></span></div></div>
<div class="content tab-content">
<div class="cnt"><ul>  <?php $result=query("select * from jae_seckill  where status=1  order by listorder,id DESC limit 1,6" ); foreach($result as $r){?><li><a href="/index.php?m=seckill&c=index&a=init" target="_blank"><img src="<?php echo $r['pic_url'];?>" width="180" height="180"><br><div class="tit"><?php echo str_cut($r[title],30,'');?></div><br><span class="point"><?php echo $r['point'];?>积分</span><span class="ljq">立即抢</span>
</a></li><?php }?></ul><div class="clear"></div></div><div class="cnt"><ul>   <?php $result=query("select * from jae_exchange where status=1 order by listorder,id DESC limit 1,6" ); foreach($result as $r){?><li><a href="/index.php?m=exchange&c=index&a=exchange&id=<?php echo $r['id'];?>" target="_blank"><img src="<?php echo $r['pic_url'];?>" width="180" height="180"><br><div class="tit"><?php echo str_cut($r[title],30,'');?></div><br><span class="point"><?php echo $r['point'];?>积分</span><span class="ljq">立即抢</span></a></li><?php }?></ul><div class="clear"></div></div><div class="cnt"><ul>  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c24f6aea77b03e98c059f19a5ab38da0&action=position&posid=14&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c24f6aea77b03e98c059f19a5ab38da0&action=position&posid=14&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'14','order'=>'listorder asc','limit'=>'6',));}?><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="180" height="180"><br><div class="tit"><?php echo str_cut($r[title],30,'');?></div><br><span class="point"><?php echo $r['coupon_price'];?>元</span><span class="ljq">立即抢</span></a></li><?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></ul><div class="clear"></div></div>
</div>
</div>

</div>


 <div class="blank"></div>       
        
       <!--见食 -->
    <div class="wrap subject-box " style="background:url(http://img04.taobaocdn.com/imgextra/i4/1089118323/TB27NocXVXXXXa7XpXXXXXXXXXX-1089118323.jpg) no-repeat; ">
    <a href="http://hubei.china.taobao.com" target="_blank" style="height:120px; display:block;">
    </a>
        
   <ul class="sub-list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=d1873a14efbedecaad41e79e98dffdcb&action=position&posid=7&order=listorder+asc&num=5\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=d1873a14efbedecaad41e79e98dffdcb&action=position&posid=7&order=listorder+asc&num=5\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'7','order'=>'listorder asc','limit'=>'5',));}?><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><li>
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
        <div style="clear:both; height:30px;"></div>
        <!--见食end --> 
    
   <!--综合comprehensive-->
   <div class="comprehensive wrap">
   <div class="category">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=7b334cd1f8cdc9d0bc7411ab0be05f2a&pos=category\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=7b334cd1f8cdc9d0bc7411ab0be05f2a&pos=category\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'category',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
   
   </div>
   <div class="grid-col-700">
   <div class="grid-col-450"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=06e2b3f8bd76ffe951f24477e9d2dcfc&action=lists&id=137&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=06e2b3f8bd76ffe951f24477e9d2dcfc&action=lists&id=137&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'137','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="450" height="479" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>   </div>
   <div class="grid-col-260"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=83ba9835babcfddf2908383c1ef844cc&action=lists&id=103&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=83ba9835babcfddf2908383c1ef844cc&action=lists&id=103&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'103','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="250" height="162" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=00ac8340815356524ffd2f9025ec5b6a&action=lists&id=104&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=00ac8340815356524ffd2f9025ec5b6a&action=lists&id=104&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'104','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="250" height="162" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=c140e59d0188941069689d5ef1f00b74&action=lists&id=105&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=c140e59d0188941069689d5ef1f00b74&action=lists&id=105&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'105','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="250" height="162" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>  </div>
   <div class="clear"></div>
   <div class="grid-rol-700"><div class="tip"></div>
   <ul>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=28eeba884f1b454d3af3d16d97f6b3f0&action=position&posid=10&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=28eeba884f1b454d3af3d16d97f6b3f0&action=position&posid=10&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'listorder asc','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
   <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="176" height="176"><div class="tt"><?php echo str_cut($r[title],15,'');?></div>
   <div class="jg">￥9.9</div>
   <div class="ljq">立即抢</div></a>
   </li>
   <?php $n++;}unset($n); ?>
   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
   
   
   </ul>
   
   
    </div>
   </div>
     <div class="grid-right-250">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=e7de81e0675c95d698c88c737c8bf7a6&action=lists&id=144&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=e7de81e0675c95d698c88c737c8bf7a6&action=lists&id=144&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'144','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="268" height="370" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=9024b6c93cdd5e8da23fc111089f3707&action=lists&id=145&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=9024b6c93cdd5e8da23fc111089f3707&action=lists&id=145&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'145','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="268" height="370" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>  </div>
   
   <div class="clear"></div>
</div>
<!--综合end--> <div class="blank"></div> 
<div class="wrap " style=" text-align:center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=0a9b410421557918f345c0a730217395&pos=tonglan1\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=0a9b410421557918f345c0a730217395&pos=tonglan1\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan1',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> 
 <div class="blank"></div> 
<!--品牌故事-->
<div class="wrap">
<div class="gushi">
<div class="story"><div class="img"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=17b5a60a1d77d156407db7b6ff163132&action=lists&id=148&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=17b5a60a1d77d156407db7b6ff163132&action=lists&id=148&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'148','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="320" height="320" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>  </div>

 <div class="desc J_TWidget"  data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<div class="tab-nav"><div></div><div></div></div>
  <div class="tab-content content">

<div>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=c70a0ac2505fb84a539a70a4c406e46c&action=lists&id=149&num=1&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=c70a0ac2505fb84a539a70a4c406e46c&action=lists&id=149&num=1&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'149','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="860" height="320" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>  
</div>
<div>
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=46f31e7510ca3b83206d2c285a0d9946&action=lists&id=150&num=1&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=46f31e7510ca3b83206d2c285a0d9946&action=lists&id=150&num=1&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'150','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" title="<?php echo $r['title'];?>" width="860" height="320" border="0" ></a>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>  </div>
</div>

</div>



</div>
<div class="goods">
<ul><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=eb089da9a354149ac83c8caadbf96d2e&action=position&posid=15&order=listorder+asc&num=16\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=eb089da9a354149ac83c8caadbf96d2e&action=position&posid=15&order=listorder+asc&num=16\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'15','order'=>'listorder asc','limit'=>'16',));}?><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>" target="_blank"><?php if($r[isicon]==1) { ?><div class="icon"><img src="<?php echo $r['icon_url'];?>"  width="80" height="80"></div><?php } ?><img src="<?php echo $r['thumb'];?>" width="130" height="130"><br><br><?php echo str_cut($r[title],24,'');?></a></li>
<?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
</ul>
<div class="clear"></div>
</div>

</div>
</div>
 <div class="blank"></div>
<div class="wrap " style=" text-align:center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=a126d53d57223f46c490c80a87e0961a&pos=tonglan2\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=a126d53d57223f46c490c80a87e0961a&pos=tonglan2\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan2',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> 
 <div class="blank"></div> 
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








 <div class="blank"></div>
 <div class="wrap " style=" text-align:center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=0172b35e3b585f2be56ba50fb8ef1e95&pos=tonglan3\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=0172b35e3b585f2be56ba50fb8ef1e95&pos=tonglan3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan3',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> 
 <div class="blank"></div> 
  <!--网格楼层-->
  <!--1楼-->
  <div class="wrap floor">
  <div class="subject-title fore1">
  <h2><?php echo position(60);?></h2>
  <div class="sp b1"><?php echo position(60);?></div>
  </div>
  <div class="content">
  
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=82af6f82d8636d1a8f53e9906b1f3e3f&action=position&posid=60&order=listorder+asc&num=7\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=82af6f82d8636d1a8f53e9906b1f3e3f&action=position&posid=60&order=listorder+asc&num=7\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'60','order'=>'listorder asc','limit'=>'7',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <?php if($n==1) { ?>
  <div class="slide"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
<?php if($n==2) { ?>
  <div class="area"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="352" height="382" border="0"></a></div><div class="grid"><?php } ?>
  
  <?php if($n==3) { ?><?php } ?> <?php if($n>=3 && $n<7) { ?> <a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="202" height="192" border="0"></a><?php } ?><?php if($n==7) { ?></div><?php } ?>
   
  <?php if($n==7) { ?> <div class="column"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
   
  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
  </div>
  
  
  </div>

  <div class="wrap " style=" text-align:center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=3c912622923295a3c552ceaa2f3ff427&pos=tonglan4\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=3c912622923295a3c552ceaa2f3ff427&pos=tonglan4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan4',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> 
 <div class="blank"></div> 
  
   <!--2楼-->
  <div class="wrap floor">
  <div class="subject-title fore2">
  <h2><?php echo position(61);?></h2>
  <div class="sp b2"><?php echo position(61);?></div>
  </div>
  <div class="content">
  
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=312359854898430dfe56a83cbc6c71e6&action=position&posid=61&order=listorder+asc&num=7\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=312359854898430dfe56a83cbc6c71e6&action=position&posid=61&order=listorder+asc&num=7\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'61','order'=>'listorder asc','limit'=>'7',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <?php if($n==1) { ?>
  <div class="slide"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
<?php if($n==2) { ?>
  <div class="area"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="352" height="382" border="0"></a></div><div class="grid"><?php } ?>
  
  <?php if($n==3) { ?><?php } ?> <?php if($n>=3 && $n<7) { ?> <a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="202" height="192" border="0"></a><?php } ?><?php if($n==7) { ?></div><?php } ?>
   
  <?php if($n==7) { ?> <div class="column"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
   
  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
  </div>
  
  
  </div>
  <div class="wrap " style=" text-align:center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=4093e54f8218586910e0c00dd8aaceb7&pos=tonglan5\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=4093e54f8218586910e0c00dd8aaceb7&pos=tonglan5\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan5',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> 
 <div class="blank"></div> 
   <!--3楼-->
  <div class="wrap floor">
  <div class="subject-title fore3">
  <h2><?php echo position(62);?></h2>
  <div class="sp b3"><?php echo position(62);?></div>
  </div>
  <div class="content">
  
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=ca6405dfe975f3c75340cfc036ac0e36&action=position&posid=62&order=listorder+asc&num=7\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=ca6405dfe975f3c75340cfc036ac0e36&action=position&posid=62&order=listorder+asc&num=7\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'62','order'=>'listorder asc','limit'=>'7',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <?php if($n==1) { ?>
  <div class="slide"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
<?php if($n==2) { ?>
  <div class="area"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="352" height="382" border="0"></a></div><div class="grid"><?php } ?>
  
  <?php if($n==3) { ?><?php } ?> <?php if($n>=3 && $n<7) { ?> <a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="202" height="192" border="0"></a><?php } ?><?php if($n==7) { ?></div><?php } ?>
   
  <?php if($n==7) { ?> <div class="column"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
   
  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
  </div>
  
  
  </div>
  <div class="wrap " style=" text-align:center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=a7810830331b94771d88a9ca1e539e9a&pos=tonglan6\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=a7810830331b94771d88a9ca1e539e9a&pos=tonglan6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan6',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> 
 <div class="blank"></div> 
   <!--4楼-->
  <div class="wrap floor">
  <div class="subject-title fore4">
  <h2><?php echo position(63);?></h2>
  <div class="sp b4"><?php echo position(63);?></div>
  </div>
  <div class="content">
  
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e7811903df278f9ad9aadadda22c4d7f&action=position&posid=63&order=listorder+asc&num=7\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e7811903df278f9ad9aadadda22c4d7f&action=position&posid=63&order=listorder+asc&num=7\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'63','order'=>'listorder asc','limit'=>'7',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <?php if($n==1) { ?>
  <div class="slide"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
<?php if($n==2) { ?>
  <div class="area"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="352" height="382" border="0"></a></div><div class="grid"><?php } ?>
  
  <?php if($n==3) { ?><?php } ?> <?php if($n>=3 && $n<7) { ?> <a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="202" height="192" border="0"></a><?php } ?><?php if($n==7) { ?></div><?php } ?>
   
  <?php if($n==7) { ?> <div class="column"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
   
  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
  </div>
  
  
  </div>
  <div class="wrap " style=" text-align:center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=4d605b1abfdd9cbaca52be24a179e25a&pos=tonglan7\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=4d605b1abfdd9cbaca52be24a179e25a&pos=tonglan7\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan7',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> 
 <div class="blank"></div> 
   <!--5楼-->
  <div class="wrap floor">
  <div class="subject-title fore5">
  <h2><?php echo position(64);?></h2>
  <div class="sp b5"><?php echo position(64);?></div>
  </div>
  <div class="content">
  
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=23c9c0beb0b65ae930bf057568295aa1&action=position&posid=64&order=listorder+asc&num=7\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=23c9c0beb0b65ae930bf057568295aa1&action=position&posid=64&order=listorder+asc&num=7\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'64','order'=>'listorder asc','limit'=>'7',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <?php if($n==1) { ?>
  <div class="slide"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
<?php if($n==2) { ?>
  <div class="area"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="352" height="382" border="0"></a></div><div class="grid"><?php } ?>
  
  <?php if($n==3) { ?><?php } ?> <?php if($n>=3 && $n<7) { ?> <a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="202" height="192" border="0"></a><?php } ?><?php if($n==7) { ?></div><?php } ?>
   
  <?php if($n==7) { ?> <div class="column"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
   
  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
  </div>
  
  
  </div>
  <div class="wrap " style=" text-align:center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=35bf18579f79f8bd3c1ef2eed536a33a&pos=tonglan8\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=35bf18579f79f8bd3c1ef2eed536a33a&pos=tonglan8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan8',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> 
 <div class="blank"></div> 
   <!--6楼-->
  <div class="wrap floor">
  <div class="subject-title fore6">
  <h2><?php echo position(65);?></h2>
  <div class="sp b6"><?php echo position(65);?></div>
  </div>
  <div class="content">
  
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=539efe3d5d7af01181d5381302b5d095&action=position&posid=65&order=listorder+asc&num=7\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=539efe3d5d7af01181d5381302b5d095&action=position&posid=65&order=listorder+asc&num=7\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'65','order'=>'listorder asc','limit'=>'7',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <?php if($n==1) { ?>
  <div class="slide"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
<?php if($n==2) { ?>
  <div class="area"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="352" height="382" border="0"></a></div><div class="grid"><?php } ?>
  
  <?php if($n==3) { ?><?php } ?> <?php if($n>=3 && $n<7) { ?> <a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="202" height="192" border="0"></a><?php } ?><?php if($n==7) { ?></div><?php } ?>
   
  <?php if($n==7) { ?> <div class="column"><a href="<?php echo $r['url'];?>" target="_blank"><div class="inf"><div class="tt"><?php echo str_cut($r[title],12,'');?></div><div class="jg"><span>￥</span><?php echo $r['coupon_price'];?></div><div class="yj">￥<?php echo $r['price'];?></div></div><img src="<?php echo $r['thumb'];?>" width="380" height="380" border="0"></a></div><?php } ?>
   
  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
  </div>
  
  
  </div>

    <div class="wrap " style=" text-align:center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=6570610ef0e8dbc484cc380f75c5f36b&pos=tonglan9\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=6570610ef0e8dbc484cc380f75c5f36b&pos=tonglan9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan9',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> 
 <div class="blank"></div> 
    <!-- 特色品类 -->
    
    
    <div class="wrap " >
       
        <div   class="sort m sm-wrap J_TWidget" style="height:550px;"   data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
                    'easing': 'easeIn','triggerType':'click', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
            <div class="mt" >
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 2,1 ');
                        foreach ($result as $v) {
                        ?>
                <h2>
                    <?php  echo $v['title'];?></h2>
                <?php }
                        ?>
                <div class="ext switchable-nav">
                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 3,1 ');
                            foreach ($result as $v) {
                            ?>
                    <a href="javascript:void(0)" class="filter-item selected"> <b><?php  echo $v['title'];?></b>
                    </a>
                    <?php }
                            ?>
                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 4,2 ');
                            foreach ($result as $v) {
                            ?>
                    <a href="javascript:void(0)" class="filter-item">
                        <b><?php  echo $v['title'];?></b>
                    </a>
                    <?php }
                        ?></div>
            </div>
            <div class="mc switchable-content" style="position: relative;">
                <div class="item ui-switchable-panel selected" style="background-color: rgb(255, 255, 255); position: absolute; z-index: 1; opacity: 1;  ">
                    <div class="left">
                        <div class="li3">
                            <div class="li3_img">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 0,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                            <div class="li3_t">
                                <div>
                                    <?php echo block(5);?></div>
                            </div>
                        </div>
                        <div class="li3">
                            <div class="li3_img">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 1,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                            <div class="li3_t">
                                <div>
                                    <?php echo block(6);?></div>
                            </div>
                        </div>
                        <div class="li3">
                            <div class="li3_img">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 2,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                            <div class="li3_t">
                                <div>
                                    <?php echo block(7);?></div>
                            </div>
                        </div>
                        <div class="li3">
                            <div class="li3_img">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 3,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                            <div class="li3_t">
                                <div>
                                    <?php echo block(8);?></div>
                            </div>
                        </div>
                        <div class="li3">
                            <div class="li3_img">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 4,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                            <div class="li3_t">
                                <div>
                                    <?php echo block(9);?></div>
                            </div>
                        </div>
                        <div class="li3">
                            <div class="li3_img">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 5,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                            <div class="li3_t">
                                <div>
                                    <?php echo block(10);?></div>
                            </div>
                        </div>
                        <div class="li3">
                            <div class="li3_img">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 6,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                            <div class="li3_t">
                                <div>
                                    <?php echo block(11);?></div>
                            </div>
                        </div>
                        <div class="li3">
                            <div class="li3_img">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 7,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                            <div class="li3_t">
                                <div>
                                    <?php echo block(12);?></div>
                            </div>
                        </div>
                    </div>
                        <div class="right">
                            <div class="r1">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 8,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                            <div class="r1">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 9,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="item ui-switchable-panel selected" style="background-color: rgb(255, 255, 255); position: absolute; z-index: 1; opacity: 1;  ">
                        <div class="left">
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 0,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(13);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 1,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(14);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 2,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(15);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 3,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(16);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 4,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(17);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 5,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(18);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 6,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(19);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 7,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(20);?></div>
                                </div> 
                            </div>
                        </div>
                        <div class="right">
                            <div class="r1">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 8,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                            <div class="r1">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 9,1 ');
                                        foreach ($result as $v) {
                                        ?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="item ui-switchable-panel selected" style="background-color: rgb(255, 255, 255); position: absolute; z-index: 1; opacity: 1;  ">
                        <div class="left">
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 0,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(21);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 1,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(22);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 2,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(23);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 3,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(24);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 4,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(25);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 5,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(26);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 6,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(27);?></div>
                                </div>
                            </div>
                            <div class="li3">
                                <div class="li3_img">
                                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 7,1 ');
                                            foreach ($result as $v) {
                                            ?>
                                    <a target="_blank" href="<?php echo $v['link'];?>
                                        ">
                                        <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                    <?php }
                                        ?></div>
                                <div class="li3_t">
                                    <div>
                                        <?php echo block(28);?></div>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="r1">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 8,1 ');
                                        foreach ($result as $v) {?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }?></div>
                            <div class="r1">
                                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 9,1 ');
                                        foreach ($result as $v) {?>
                                <a target="_blank" href="<?php echo $v['link'];?>
                                    ">
                                    <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                                <?php }
                                    ?></div>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>
            </div>
   <!-- 特色品类 end -->
        <div style="clear:both; height:0px;"></div>
    
    <div class="wrap " style=" text-align:center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=1bbc2fefd82ef6e542de147fccfefddf&pos=tonglan10\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=1bbc2fefd82ef6e542de147fccfefddf&pos=tonglan10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan10',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

</div> 
 <div class="blank"></div> 
    <!-- 友链 -->
    <div class="wrap">
        <div class="jh">
            <?php $result=query('SELECT * FROM jae_link WHERE typeid=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,50 ');
                        foreach ($result as $v) {
                        ?>
            <a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img data-ks-lazyload="<?php echo $v['logo'];?>"></a>
            <?php }
                    ?></div>
    </div>
    <!-- 友链 end-->
    <div style="clear:both; height:0px;"></div>
</div>



<?php include template('content','foot');?>