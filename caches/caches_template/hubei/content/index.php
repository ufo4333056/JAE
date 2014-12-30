<?php defined('IN_JAE') or exit('No permission resources.'); ?><div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=f65a1cd8bc45f9b3983da2393c855cb2&pos=dingtong\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=f65a1cd8bc45f9b3983da2393c855cb2&pos=dingtong\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'dingtong',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
<?php include template('content','head');?>
<link rel="stylesheet" href="/statics/css/lows.css" />
<?php  jae_base::load_sys_class('user');?>
<div class="lows-banner J_TWidget" style="display:none"  id="J_LowsBanner"  data-widget-type="Carousel" data-widget-config="{'navCls':'ks-switchable-nav','contentCls':'ks-switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'active','autoplay':'true','interval':3,'prevBtnCls': 'prev', 'nextBtnCls': 'next', 'disableBtnCls': 'disable' }">
  <div class="trigger-wrap"> <span class="close J_LowsClose"></span> <span class="prev"></span> <span class="next"></span>
    <ol class="lows-trigger ks-switchable-nav">
      <li class="ks-switchable-trigger-internal297 active"></li>
      <li class="ks-switchable-trigger-internal297 "></li>
      <li class="ks-switchable-trigger-internal297"></li>
    </ol>
  </div>
  <ul class="ks-switchable-content clear-fix">
    <li class="pic1 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; ">
      <div class="banner-pic" style="background: url(http://img04.taobaocdn.com/imgextra/i4/1089118323/TB2_ZYlXVXXXXXxXXXXXXXXXXXX-1089118323.png) no-repeat 0 0;"></div>
    </li>
    <li class="pic2 ks-switchable-panel-internal298" style="display: block; opacity: 1; position: absolute; z-index: 9; ">
      <div class="banner-pic" style="background: url(http://img04.taobaocdn.com/imgextra/i4/1089118323/TB2CcYlXVXXXXaBXXXXXXXXXXXX-1089118323.png) no-repeat 0 0;"></div>
    </li>
    <li class="pic3 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; ">
      <div class="banner-pic" style="background: url(http://img04.taobaocdn.com/imgextra/i4/1089118323/TB2LI_lXVXXXXXaXpXXXXXXXXXX-1089118323.png) no-repeat 0 0;"></div>
    </li>
  </ul>
</div>
<div class="body_w">

 

  <div class="wrap "   data-widget-type="Slide" data-widget-config="{'navCls':'w-nav','contentCls':'w-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true,'activeTriggerCls':'on','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }"  style="height:480px;">
    <div class="fenlei">
      <div class="list">
        <ul class="w-nav" >
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=c3ed3d7e50eba5e2cf9a1fd2c69d78d4&pos=fenlei\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=c3ed3d7e50eba5e2cf9a1fd2c69d78d4&pos=fenlei\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'fenlei',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
        </ul>
      </div>
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
          <div><a href="<?php echo $r["link"]?>" target="_blank"> <img src="<?php echo $r["picture"]?>" width="1920" height="480"/></a></div>
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
    
    <div class="vPersonal" data-spm="16"> 
      <!--达人权益标题-->
      <div class="hd">会员中心</div>
      <!--个人信息区域开始-->
      <div class="info">
        <div class="photo " data-test="-1">
          <div class="p" id="J_personal_photo" data-garden="-1" data-experience="10007" data-img="http://img.taobaocdn.com/sns_logo/T1xzuvFcRcXXb1upjX.jpg_80x80.jpg"> <?php echo     '<img width=76 height=76 src="/_RS/user/picture?mixUserNick='.urlencode($nick,"UTF-8").'" />  ';?></div>
          <span class="m"></span> <span class="m mb-hide j_changeInfo"> <b>编辑资料</b> </span> </div>
        <div class="per">
          <p class="title" >HI!<span class="login_tip"><a href="/member.php" style="color:#fff;">请登录</a></span></p>
          <!--<p class="garden">您是湖北馆会员</p>-->
          <p class="bt"> 
            <!-- <a class="activied j_activied" href="javascript:void(0);">激活</a>--> 
            <a class="sign j_sign activied" href="/index.php?m=member&c=index&a=init" target="_blank">签到</a> </p>
        </div>
      </div>
      
      <!--个人信息区域结束--> 
      <!--个人资产区域开始-->
      <div class="assets unlogin"> <span class="bt1"></span> 
        <!--已登录开始-->
        <div class="row point"> <span class="icon"></span>
          <p class="ht"> <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank">我的积分:</a> <span class="pots "> <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank">0</a> </span> </p>
          <p class="bt"> 邀请好友就能赚积分 </p>
        </div>
        <div class="row coupon"> <span class="icon"></span>
          <p class="ht"> <a href="/index.php?m=prize&c=index&a=my_prize" target="_blank">我的奖品:</a> <span class="prizes_num" ><a href="/index.php?m=prize&c=index&a=my_prize" target="_blank">0</a></span> 个 </p>
          <p class="bt"> <a href="/index.php?m=prize&c=index&a=my_prize" target="_blank"> 快来参加积分抽奖吧 </a> </p>
        </div>
        <div class="row message"> <span class="icon"></span>
          <p class="ht"> <a href="/index.php?m=order&c=index&a=init" target="_blank">我的订单:</a> <span class="orders_num"><a href="/index.php?m=order&c=index&a=init" target="_blank">0</a></span> 个 </p>
          <p class="bt"> <a class="dr" href="/index.php?m=order&c=index&a=init" target="_blank">湖北馆的积分活动</a> </p>
        </div>
        <!--已登录结束--> </div>
      <!--个人资产区域结束--> 
      <!--特权区域开始-->
      <div class="privilege">
        <div class="title"></div>
        <div class="list" id="J_privilege_tab">
          <div style="position: relative; overflow: hidden; height: 130px;">
            <ul class="tab-content" style="width: 190px; overflow: hidden; height: 90px; ">
              <div style="position: absolute; overflow: hidden; width: 380px; -webkit-transition: 0s; -webkit-transform: translate3d(0px, 0px, 0px); -webkit-backface-visibility: hidden; ">
                <li class="tab-pannel" style="float: left; overflow: hidden; width: 190px; display: block; ">
                  <ul class="privList">
                    <li> <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank"> <span class="icon "></span> 我的签到 </a> </li>
                    <li> <a href="/index.php?m=prize&c=index&a=init" target="_blank"> <span class="icon "></span> 积分抽奖 </a> </li>
                    <li> <a href="/index.php?m=exchange&c=index&a=init" target="_blank"> <span class="icon "></span> 积分换购 </a> </li>
                    <li> <a href="/index.php?m=seckill&c=index&a=init" target="_blank"> <span class="icon "></span> 积分秒杀 </a> </li>
                    <li> <a href="/index.php?m=content&c=index&a=lists&catid=1" target="_blank"> <span class="icon "></span> 购物返积分 </a> </li>
                    <li> <a href="/index.php?m=point&c=index&a=point_invite" target="_blank"> <span class="icon "></span> 邀请好友 </a> </li>
                  </ul>
                </li>
                <li class="tab-pannel hidden" style="float: left; overflow: hidden; width: 190px; display: block; ">
                  <ul class="privList">
                    <li> </li>
                    <li> </li>
                  </ul>
                </li>
              </div>
            </ul>
          </div>
        </div>
      </div>
      <!--特权区域结束--> </div>
    <div class="clear"></div>
  </div>

  <div style="clear:both; height:30px;"></div>
  <div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=0a9b410421557918f345c0a730217395&pos=tonglan1\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=0a9b410421557918f345c0a730217395&pos=tonglan1\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan1',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <!-- 9.9包邮专区 -->
  <div class="wrap ">
    <div class="f_title">9.9包邮专区<span>限时特价 精选推荐</span></div>
    <div class="baoyou clearfix">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=8e3b64c070c9dd850bdcd286a79eb8ca&action=position&posid=10&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=8e3b64c070c9dd850bdcd286a79eb8ca&action=position&posid=10&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'listorder asc','limit'=>'10',));}?>
  
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    
      <div class="li"><a href="<?php echo $r['url'];?>" target="_blank"><img width="220"  height="220" src="<?php echo $r['thumb'];?>">
        <div class="tit"><?php echo str_cut($r['title'],16,'');?></div>
        <div class="price">
          <div class="jg">￥9.9 <span>原价：<?php echo $r['price'];?></span></div>
          <div class="gm">立即抢购</div>
        </div>
        <div class="time"><?php echo date("d-h-i",$r['end_time']);?></div></a>
      </div>
      <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
      
      
    </div>
  </div>
  
  <!-- 9.9包邮专区end -->
  <div style="height:30px;"></div> 
  <!-- 优质品牌推荐 -->
  <?php if(0) { ?>
  <div class="wrap">
  <div class="pinpai  J_TWidget"   data-widget-type="Slide" data-widget-config="{'navCls':'pp-nav','contentCls':'pp-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true,'activeTriggerCls':'on','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }"  >
  <div class="tp clearfix"> <div class="tits"><span>优质品牌推荐</span><i>品质护航 购物无忧</i></div><div class="dao  pp-nav"><div class="on"><img src="http://g.ald.alicdn.com/bao/uploaded/T1yMKJFlxbXXb1upjX.jpg" width="100" height="60"></div><div><img src="http://g.ald.alicdn.com/bao/uploaded/T1kTJzFhxcXXb1upjX.jpg"  width="100" height="60"></div> </div>
  
  </div>
  
  <div class="pp-content">
  <div class="gds">
        <div class="li"><img width="240"  height="240" src="http://gtms03.alicdn.com/tps/i3/TB1ixdMGXXXXXalapXXRVNATXXX-170-280.jpg">
          <div class="tit">基本原则基本原则</div>
          <div class="price">
            <div class="jg"><i>￥9.9</i> <span>原价：12.5</span></div>
            <div class="gm">立即抢购</div>
          </div>
        </div>
        <div class="li"><img width="240"  height="240" src="http://gtms03.alicdn.com/tps/i3/TB1ixdMGXXXXXalapXXRVNATXXX-170-280.jpg">
          <div class="tit">基本原则基本原则</div>
          <div class="price">
            <div class="jg"><i>￥9.9</i> <span>原价：12.5</span></div>
            <div class="gm">立即抢购</div>
          </div>
        </div>
        <div class="li"><img width="240"  height="240" src="http://gtms03.alicdn.com/tps/i3/TB1ixdMGXXXXXalapXXRVNATXXX-170-280.jpg">
          <div class="tit">基本原则基本原则</div>
          <div class="price">
            <div class="jg"><i>￥9.9</i> <span>原价：12.5</span></div>
            <div class="gm">立即抢购</div>
          </div>
        </div>
      
        <div class="li"><img width="240"  height="240" src="http://gtms03.alicdn.com/tps/i3/TB1ixdMGXXXXXalapXXRVNATXXX-170-280.jpg">
          <div class="tit">基本原则基本原则</div>
          <div class="price">
            <div class="jg"><i>￥9.9</i> <span>原价：12.5</span></div>
            <div class="gm">立即抢购</div>
          </div>
        </div>
      </div><div class="gds">
        <div class="li"><img width="240"  height="240" src="http://gtms03.alicdn.com/tps/i3/TB1ixdMGXXXXXalapXXRVNATXXX-170-280.jpg">
          <div class="tit">基本原则基本原则</div>
          <div class="price">
            <div class="jg"><i>￥9.9</i> <span>原价：12.5</span></div>
            <div class="gm">立即抢购</div>
          </div>
        </div>
        <div class="li"><img width="240"  height="240" src="http://gtms03.alicdn.com/tps/i3/TB1ixdMGXXXXXalapXXRVNATXXX-170-280.jpg">
          <div class="tit">基本原则基本原则</div>
          <div class="price">
            <div class="jg"><i>￥9.9</i> <span>原价：12.5</span></div>
            <div class="gm">立即抢购</div>
          </div>
        </div>
        <div class="li"><img width="240"  height="240" src="http://gtms03.alicdn.com/tps/i3/TB1ixdMGXXXXXalapXXRVNATXXX-170-280.jpg">
          <div class="tit">基本原则基本原则</div>
          <div class="price">
            <div class="jg"><i>￥9.9</i> <span>原价：12.5</span></div>
            <div class="gm">立即抢购</div>
          </div>
        </div>
      
        <div class="li"><img width="240"  height="240" src="http://gtms03.alicdn.com/tps/i3/TB1ixdMGXXXXXalapXXRVNATXXX-170-280.jpg">
          <div class="tit">基本原则基本原则</div>
          <div class="price">
            <div class="jg"><i>￥9.9</i> <span>原价：12.5</span></div>
            <div class="gm">立即抢购</div>
          </div>
        </div>
      </div>
  
  
  </div>
  
  </div>
  </div>
  <?php } ?>
  <!-- 优质品牌推荐end -->
  
  <div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=a126d53d57223f46c490c80a87e0961a&pos=tonglan2\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=a126d53d57223f46c490c80a87e0961a&pos=tonglan2\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan2',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  
  <!-- 特色品类 -->
  
  <div class="wrap " >
    <div   class="sort m sm-wrap J_TWidget" style="height:550px;"   data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
                    'easing': 'easeIn','triggerType':'click', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
      <div class="mt" >
        <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 2,1 ');
                        foreach ($result as $v) {
                        ?>
        <h2>
          <?php  echo $v['title'];?>
        </h2>
        <?php }
                        ?>
        <div class="ext switchable-nav">
          <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 3,1 ');
                            foreach ($result as $v) {
                            ?>
          <a href="javascript:void(0)" class="filter-item selected"> <b>
          <?php  echo $v['title'];?>
          </b> </a>
          <?php }
                            ?>
          <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 4,2 ');
                            foreach ($result as $v) {
                            ?>
          <a href="javascript:void(0)" class="filter-item"> <b>
          <?php  echo $v['title'];?>
          </b> </a>
          <?php }
                        ?>
        </div>
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
                                    "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                    ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(5);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 1,1 ');
                                        foreach ($result as $v) {
                                        ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                    ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(6);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 2,1 ');
                                        foreach ($result as $v) {
                                        ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                    ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(7);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 3,1 ');
                                        foreach ($result as $v) {
                                        ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                    ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(8);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 4,1 ');
                                        foreach ($result as $v) {
                                        ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                    ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(9);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 5,1 ');
                                        foreach ($result as $v) {
                                        ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                    ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(10);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 6,1 ');
                                        foreach ($result as $v) {
                                        ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                    ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(11);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 7,1 ');
                                        foreach ($result as $v) {
                                        ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                    ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(12);?></div>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="r1">
              <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 8,1 ');
                                        foreach ($result as $v) {
                                        ?>
              <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
              <?php }
                                    ?>
            </div>
            <div class="r1">
              <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 9,1 ');
                                        foreach ($result as $v) {
                                        ?>
              <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
              <?php }
                                    ?>
            </div>
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
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(13);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 1,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(14);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 2,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(15);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 3,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(16);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 4,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(17);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 5,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(18);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 6,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(19);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 7,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(20);?></div>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="r1">
              <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 8,1 ');
                                        foreach ($result as $v) {
                                        ?>
              <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
              <?php }
                                    ?>
            </div>
            <div class="r1">
              <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 9,1 ');
                                        foreach ($result as $v) {
                                        ?>
              <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
              <?php }
                                    ?>
            </div>
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
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(21);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 1,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(22);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 2,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(23);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 3,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(24);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 4,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(25);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 5,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(26);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 6,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(27);?></div>
              </div>
            </div>
            <div class="li3">
              <div class="li3_img">
                <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 7,1 ');
                                            foreach ($result as $v) {
                                            ?>
                <a target="_blank" href="<?php echo $v['link'];?>
                                        "> <img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
                <?php }
                                        ?>
              </div>
              <div class="li3_t">
                <div> <?php echo block(28);?></div>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="r1">
              <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 8,1 ');
                                        foreach ($result as $v) {?>
              <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
              <?php }?>
            </div>
            <div class="r1">
              <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 9,1 ');
                                        foreach ($result as $v) {?>
              <a target="_blank" href="<?php echo $v['link'];?>
                                    "> <img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
              <?php }
                                    ?>
            </div>
          </div>
          <div class="clr"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- 特色品类 end -->
  <div style="clear:both; height:10px;"></div>
 <div class="wrap"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=0172b35e3b585f2be56ba50fb8ef1e95&pos=tonglan3\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=0172b35e3b585f2be56ba50fb8ef1e95&pos=tonglan3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan3',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <!--见食 -->
  <div class="wrap jianshi clearfix " style="background:url(http://img04.taobaocdn.com/imgextra/i4/1089118323/TB27NocXVXXXXa7XpXXXXXXXXXX-1089118323.jpg) no-repeat; padding-top:120px;">
    <div class="gds">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=d1873a14efbedecaad41e79e98dffdcb&action=position&posid=7&order=listorder+asc&num=5\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=d1873a14efbedecaad41e79e98dffdcb&action=position&posid=7&order=listorder+asc&num=5\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'7','order'=>'listorder asc','limit'=>'5',));}?>
      
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
  <div style="clear:both; height:30px;"></div>
  <!--见食end -->  
  <div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=3c912622923295a3c552ceaa2f3ff427&pos=tonglan4\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=3c912622923295a3c552ceaa2f3ff427&pos=tonglan4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan4',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <!--1楼 -->
  <div class="wrap">
    <div class="f_title">休闲零食<span>湖北特色休闲零食小吃</span></div>
    <div class="louceng clearfix">
      <div class="cat">
        <div class="img"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=b1823a835f2d8c66694b6c93c9af57a5&pos=flool_1_img\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=b1823a835f2d8c66694b6c93c9af57a5&pos=flool_1_img\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_1_img',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
        <div class="cat_list"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=7165c46517a9614aeb256edbc64130e8&pos=flool_1_list\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=7165c46517a9614aeb256edbc64130e8&pos=flool_1_list\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_1_list',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
      </div>
      <div class="gds">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=18fbb0eabaa53df16e4b467cfbd6ebe5&action=position&posid=16&order=listorder+asc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=18fbb0eabaa53df16e4b467cfbd6ebe5&action=position&posid=16&order=listorder+asc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'listorder asc','limit'=>'8',));}?>
  
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="li"><a href="<?php echo $r['url'];?>" target="_blank"><img width="220"  height="220" src="<?php echo $r['thumb'];?>">
          <div class="tit"><?php echo str_cut($r['title'],16,'');?></div>
          <div class="price">
            <div class="jg"><i>￥<?php echo $r['coupon_price'];?></i> <span>原价：<?php echo $r['price'];?></span></div>
            <div class="gm">立即抢购</div>
          </div></a>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
     
      </div>
    </div>
  </div>
  
  <!--1楼end --> 
  <div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=4093e54f8218586910e0c00dd8aaceb7&pos=tonglan5\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=4093e54f8218586910e0c00dd8aaceb7&pos=tonglan5\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan5',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <!--2楼 -->
  <div class="wrap">
    <div class="f_title">生鲜蔬果<span>新鲜采摘  原产地直供</span></div>
    <div class="louceng clearfix">
      <div class="cat">
        <div class="img"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=659a953a17160adf731b87537f39efb6&pos=flool_2_img\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=659a953a17160adf731b87537f39efb6&pos=flool_2_img\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_2_img',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
        <div class="cat_list"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=7e064aba180692d14472001607e9386a&pos=flool_2_list\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=7e064aba180692d14472001607e9386a&pos=flool_2_list\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_2_list',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
      </div>
      <div class="gds">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c739471924cf5861db43a443b596e101&action=position&posid=17&order=listorder+asc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c739471924cf5861db43a443b596e101&action=position&posid=17&order=listorder+asc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'17','order'=>'listorder asc','limit'=>'8',));}?>
  
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="li"><a href="<?php echo $r['url'];?>" target="_blank"><img width="220"  height="220" src="<?php echo $r['thumb'];?>">
          <div class="tit"><?php echo str_cut($r['title'],16,'');?></div>
          <div class="price">
            <div class="jg"><i>￥<?php echo $r['coupon_price'];?></i> <span>原价：<?php echo $r['price'];?></span></div>
            <div class="gm">立即抢购</div>
          </div></a>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
     
      </div>
    </div>
  </div>
  
  <!--2楼end --> 
  <div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=a7810830331b94771d88a9ca1e539e9a&pos=tonglan6\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=a7810830331b94771d88a9ca1e539e9a&pos=tonglan6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan6',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <!--3楼 -->
  <div class="wrap">
    <div class="f_title">南北干货<span>湖北特色干货 农家自制</span></div>
    <div class="louceng clearfix">
      <div class="cat">
        <div class="img"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=26727d3b3d4ff4fd01126dbec9e1d1a3&pos=flool_3_img\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=26727d3b3d4ff4fd01126dbec9e1d1a3&pos=flool_3_img\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_3_img',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
        <div class="cat_list"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=3f3e48c46ad68419417b80285afda7aa&pos=flool_3_list\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=3f3e48c46ad68419417b80285afda7aa&pos=flool_3_list\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_3_list',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
      </div>
      <div class="gds">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e3c0089d4d64443401b092a21315c206&action=position&posid=18&order=listorder+asc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e3c0089d4d64443401b092a21315c206&action=position&posid=18&order=listorder+asc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder asc','limit'=>'8',));}?>
  
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="li"><a href="<?php echo $r['url'];?>" target="_blank"><img width="220"  height="220" src="<?php echo $r['thumb'];?>">
          <div class="tit"><?php echo str_cut($r['title'],16,'');?></div>
          <div class="price">
            <div class="jg"><i>￥<?php echo $r['coupon_price'];?></i> <span>原价：<?php echo $r['price'];?></span></div>
            <div class="gm">立即抢购</div>
          </div></a>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
     
      </div>
    </div>
  </div>
  
  <!--3楼end --> 
 <div class="wrap"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=4d605b1abfdd9cbaca52be24a179e25a&pos=tonglan7\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=4d605b1abfdd9cbaca52be24a179e25a&pos=tonglan7\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan7',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <!--4楼 -->
  <div class="wrap">
    <div class="f_title">滋补养生<span>食疗滋补  养生佳品</span></div>
    <div class="louceng clearfix">
      <div class="cat">
        <div class="img"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=e7e8a0437ab26dab3ba3ee19c808467d&pos=flool_4_img\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=e7e8a0437ab26dab3ba3ee19c808467d&pos=flool_4_img\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_4_img',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
        <div class="cat_list"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=0cfb6c3957e7aa69353ab2f8a305c34a&pos=flool_4_list\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=0cfb6c3957e7aa69353ab2f8a305c34a&pos=flool_4_list\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_4_list',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
      </div>
      <div class="gds">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=327d56447af1d5b75a32be617e3db051&action=position&posid=20&order=listorder+asc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=327d56447af1d5b75a32be617e3db051&action=position&posid=20&order=listorder+asc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder asc','limit'=>'8',));}?>
  
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="li"><a href="<?php echo $r['url'];?>" target="_blank"><img width="220"  height="220" src="<?php echo $r['thumb'];?>">
          <div class="tit"><?php echo str_cut($r['title'],16,'');?></div>
          <div class="price">
            <div class="jg"><i>￥<?php echo $r['coupon_price'];?></i> <span>原价：<?php echo $r['price'];?></span></div>
            <div class="gm">立即抢购</div>
          </div></a>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
     
      </div>
    </div>
  </div>
  
  <!--4楼end --> 
 <div class="wrap"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=35bf18579f79f8bd3c1ef2eed536a33a&pos=tonglan8\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=35bf18579f79f8bd3c1ef2eed536a33a&pos=tonglan8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan8',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
  <!--5楼 -->
  <div class="wrap">
    <div class="f_title">更多美食<span>限时特价 精选推荐</span></div>
    <div class="louceng clearfix">
      <div class="cat">
        <div class="img"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=a5eade52997ba873bc12b314cf2cc9a2&pos=flool_5_img\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=a5eade52997ba873bc12b314cf2cc9a2&pos=flool_5_img\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_5_img',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
        <div class="cat_list"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=09dc25c7748f1f92a0d4286742ebadb5&pos=flool_5_list\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=09dc25c7748f1f92a0d4286742ebadb5&pos=flool_5_list\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'flool_5_list',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
      </div>
      <div class="gds">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f8595ff29750df508abc97508396e074&action=position&posid=21&order=listorder+asc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f8595ff29750df508abc97508396e074&action=position&posid=21&order=listorder+asc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder asc','limit'=>'8',));}?>
  
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="li"><a href="<?php echo $r['url'];?>" target="_blank"><img width="220"  height="220" src="<?php echo $r['thumb'];?>">
          <div class="tit"><?php echo str_cut($r['title'],16,'');?></div>
          <div class="price">
            <div class="jg"><i>￥<?php echo $r['coupon_price'];?></i> <span>原价：<?php echo $r['price'];?></span></div>
            <div class="gm">立即抢购</div>
          </div></a>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
     
      </div>
    </div>
  </div>
  
  <!--5楼end --> 
  <div class="wrap"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=6570610ef0e8dbc484cc380f75c5f36b&pos=tonglan9\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=6570610ef0e8dbc484cc380f75c5f36b&pos=tonglan9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'tonglan9',));?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>

  
  <!-- 友链 -->
  <div class="wrap">
    <div class="jh">
      <?php $result=query('SELECT * FROM jae_link WHERE typeid=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,50 ');
                        foreach ($result as $v) {
                        ?>
      <a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img data-ks-lazyload="<?php echo $v['logo'];?>"></a>
      <?php }
                    ?>
    </div>
  </div>
  <!-- 友链 end-->
  <div style="clear:both; height:0px;"></div>
</div>
<?php include template('content','foot');?>
