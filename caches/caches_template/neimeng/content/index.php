<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>
<link rel="stylesheet" href="/statics/css/lows.css" />
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
        <li class="pic1 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; "><div class="banner-pic" style="background: url(http://img03.taobaocdn.com/imgextra/i3/1863579612/TB2_FMOXVXXXXX7XpXXXXXXXXXX-1863579612.png) no-repeat 0 0;"></div></li>
        <li class="pic2 ks-switchable-panel-internal298" style="display: block; opacity: 1; position: absolute; z-index: 9; "><div class="banner-pic" style="background: url(http://img04.taobaocdn.com/imgextra/i4/1863579612/TB2VhgOXVXXXXbaXXXXXXXXXXXX-1863579612.png) no-repeat 0 0;"></div></li>
        <li class="pic3 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; "><div class="banner-pic" style="background: url(http://img02.taobaocdn.com/imgextra/i2/1863579612/TB2G4ZOXVXXXXXGXXXXXXXXXXXX-1863579612.png) no-repeat 0 0;"></div></li>
    </ul>
</div>
<div class="body_w">
<!--banner-->

		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC   LIMIT 1,1 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){     
		?><a target="_blank" href="<?php echo $v['link'];?>" ><div style="background-image:url(<?php echo $v['picture'];?>); display:block; height:<?php echo $v['description'];?>px;background-repeat: no-repeat;background-position: center top;"></a></div>
		<?php } }
		?>	

<!--banner end-->
<!--Ê×½¹-->
<div class="wrap" style="height:420px; position:relative;">
<div class="root61" style="z-index:22">
<div class=" smCategorys">
                    <div class="sm-c-wrap">
                        <div class="menu switchable-nav">
							<div class="item fore1">
                                <i class="i1"></i>
                                <span class="blank"></span>
                             <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=10 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=10 ORDER BY listorder,id ASC   LIMIT 1,3 '); 
											foreach ($result as $v) {
											?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
											<?php }
											?>	
								 </div>
                            </div>	
							<div class="item fore2">
                                <i class="i2"></i>
                                <span class="blank"></span>
                             <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=16 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=16 ORDER BY listorder,id ASC   LIMIT 1,3 '); 
											foreach ($result as $v) {
											?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
											<?php }
											?>	
								 </div>
                            </div>	
                            <div class="item fore3">
                                <i class="i3"></i>
                                <span class="blank"></span>
                              <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=17 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=17 ORDER BY listorder,id ASC   LIMIT 1,3 '); 
											foreach ($result as $v) {
											?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
											<?php }
											?>	
								 </div>
                            </div>
                            <div class="item fore4">
                                <i class="i4"></i>
                                <span class="blank"></span>
                              <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=18 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=18 ORDER BY listorder,id ASC   LIMIT 1,3 '); 
											foreach ($result as $v) {
											?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
											<?php }
											?>	
								 </div>
                            </div>
                            <div class="item fore5">
                                <i class="i5"></i>
                                <span class="blank"></span>
                             <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=19 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=19 ORDER BY listorder,id ASC   LIMIT 1,3 '); 
											foreach ($result as $v) {
											?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
											<?php }
											?>	
								 </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
</div>

<div   id="J_MallSlide" class=" timeLine scrollable mall-slide J_TWidget dd" data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'curr','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<!--banner-->
                <div class="tl-theme">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 2,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="290" height="68" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
                </div>
<!--banner end-->
                <div class="mt">
				 <i class="line"></i>
               
				  <div class="tl-tab-item clearfix switchable-nav">
    				    				<a class="curr"><span ><?php echo position(7) ?></span><b></b><i></i></a>
    				                    <a><span><?php echo position(8) ?></span><b></b><i></i></a>
    				                    <a><span><?php echo position(9) ?></span><b></b><i></i></a>
    				                    <a><span><?php echo position(10) ?></span><b></b><i></i></a>
    				    				                  </div>
                </div>
                <div class="mc switchable-content" style="position: relative; ">
                    <div class="item ui-switchable-panel" style="position: absolute; ">
                      <ul class="clearfix">
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=23d41b6cd54902fea23248fbba7ca327&action=position&posid=7&order=listorder+asc&num=9\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=23d41b6cd54902fea23248fbba7ca327&action=position&posid=7&order=listorder+asc&num=9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'7','order'=>'listorder asc','limit'=>'9',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>										  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1"  alt="<?php echo $r['title']?> " src="<?php echo $r['thumb']?>">
                                </a>
                            </div>
                          
                          </li>
                          
                          <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
												                       </ul>
                    </div>
                    <div class="item ui-switchable-panel" style="position: absolute;  ">
                      <ul class="clearfix">
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=3f28fccf3eb9f9f44cf0d8bbab24eff7&action=position&posid=8&order=listorder+asc&num=9\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=3f28fccf3eb9f9f44cf0d8bbab24eff7&action=position&posid=8&order=listorder+asc&num=9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'8','order'=>'listorder asc','limit'=>'9',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>										  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1"  alt="<?php echo $r['title']?> " src="<?php echo $r['thumb']?>">
                                </a>
                            </div>
                          
                          </li>
                          
                          <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
												                       </ul>
                    </div>
                    
					<div class="item ui-switchable-panel selected" style="position: absolute;  ">
                       <ul class="clearfix">
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=bdb08adf73b10b33225d29cd0e1de972&action=position&posid=9&order=listorder+asc&num=9\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=bdb08adf73b10b33225d29cd0e1de972&action=position&posid=9&order=listorder+asc&num=9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'listorder asc','limit'=>'9',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>										  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1"  alt="<?php echo $r['title']?> " src="<?php echo $r['thumb']?>">
                                </a>
                            </div>
                          
                          </li>
                          
                          <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
												                       </ul>
                    </div>
                    <div class="item ui-switchable-panel" style="position: absolute;  ">
                      <ul class="clearfix">
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=1dd374337241126adce764052856a0bf&action=position&posid=10&order=listorder+asc&num=9\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=1dd374337241126adce764052856a0bf&action=position&posid=10&order=listorder+asc&num=9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'listorder asc','limit'=>'9',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>										  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1"  alt="<?php echo $r['title']?> " src="<?php echo $r['thumb']?>">
                                </a>
                            </div>
                          
                          </li>
                          
                          <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
												                       </ul>
                    </div>
					
                </div>
            </div>




<!--shoujiao-->
 <div class="focus J_TWidget" data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
 	<div class="prev"></div><div class="next"></div>
	<div class="tab-content">
 		<?php   $sql="SELECT * FROM jae_focus WHERE  status=1 ORDER BY listorder ASC  ";
		
		$r_focus=query($sql); foreach ($r_focus as $r) {?>
       <div><a href="<?php echo $r["link"]?>" target="_blank"> <img src="<?php echo $r["picture"]?>" width="710" height="400"/></a></div>
        <?php }?>
 	</div>
 	<div class="tab-nav">
 		 <?php $r_focuss=query($sql); foreach ($r_focuss as $k=>$rs) {?>
          <div class="v<?php echo $k?>"></div>
        <?php }?>
 	</div>
</div>
<!--shoujia end-->

</div>
<!--banner-->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 3,1 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){   
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>	
</div>
<!--banner end-->
<!--³é½± -->

<div style="height:20px; clear:both;"></div>
<div class="wrap root61">
           
		   		<h2>»áÔ±³é½±</h2>
				<div class="abenti">
				<div class="chojdkm">
				<div class="bejsl">
		<?php $result=query('SELECT * FROM jae_prize_set WHERE status=1 ORDER BY listorder,id ASC  LIMIT 0,6 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['url'];?>"><img data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
				</div>
				<div class="zjsl">
				<a target="_blank" href="/index.php?m=prize&c=index&a=init"><img data-ks-lazyload="/statics/images/cjaniu.jpg"></a>
				</div>
				<div class="bejsl">
		<?php $result=query('SELECT * FROM jae_prize_set WHERE status=1 ORDER BY listorder,id ASC  LIMIT 6,6 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['url'];?>"><img data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
				</div>
				<div class="clr"></div>
				</div>
				</div>

		   </div>
           
            
            
        
		<!--³é½±end -->
<!--ÃëÉ±-->

<div class="wrap root61 m sm-wrap">
<div  class="  seckilling" >
                <div class="mt">
				
				<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?><h2><?php  echo $v['title'];?></h2>
											<?php }
											?>	
                    <div class="ext">
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?><span class="describe"><?php  echo $v['description'];?></span>
											<?php }
											?>	
                    </div>
                </div>
                <div class="mc J_TWidget"  data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'curr','prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable','autoplay':'true','duration':'1'}">
                    <div class="sk-time" style="z-index:10">
                   
                    </div>

                    <!-- Ê±¼ätab -->
                    <div class="sk-tab" style="z-index:10">
                        <i class="line"></i>
                        <div class="sk-clock morning" style="left: -29px; "></div>
                        <div class="sk-tab-item switchable-nav">
                            <a href="javascript:void(0)" class="left ui-switchable-item killing curr">
                                <b></b>
                                <span><?php echo position(14) ?></span>
                            </a>
                            <a href="javascript:void(0)" class="center ui-switchable-item">
                                <b></b>
                                <span><?php echo position(15) ?></span>
                            </a>
                            <a href="javascript:void(0)" class="right ui-switchable-item">
                                <b></b>
                                <span><?php echo position(16) ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- Ê±¼ätab end -->
                    <div class="sk-con switchable-content" >

                        <div class="sk-item ui-switchable-panel morning selected" style="z-index: 1; opacity: 1; ">
                            <div class="sk-item-bg">
                                <span class="sun"></span>
                            </div>
                            <ul class="clearfix">
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e3d497a1453d66f99c00e3ee3e389da8&action=position&posid=14&order=listorder+asc&num=3\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e3d497a1453d66f99c00e3ee3e389da8&action=position&posid=14&order=listorder+asc&num=3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'14','order'=>'listorder asc','limit'=>'3',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				
                            <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img width="180" height="180" data-ks-lazyload="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['detail_url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>£¤<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['detail_url'];?>" target="_blank">Á¢¼´ÃëÉ±</a></div></li>
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                            
                            
                            
                            </ul>
                        </div>
                        <div class="sk-item ui-switchable-panel noon" style="opacity: 0; ">
                            <div class="sk-item-bg">
                                <span class="sun"></span>
                            </div>
                            <ul class="clearfix">
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=2b38c84325e03ed3e994931b9f529303&action=position&posid=15&order=listorder+asc&num=3\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=2b38c84325e03ed3e994931b9f529303&action=position&posid=15&order=listorder+asc&num=3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'15','order'=>'listorder asc','limit'=>'3',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
                            <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img width="180" height="180" data-ks-lazyload="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['detail_url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>£¤<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['detail_url'];?>" target="_blank">Á¢¼´ÃëÉ±</a></div></li>
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                            
                            
                            
                            </ul>
                        </div>
                        <div class="sk-item ui-switchable-panel night" style="opacity: 0; ">
                            <div class="sk-item-bg">
                                <span class="sun"></span>
                            </div>
                            <ul class="clearfix">
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=a3c43e88164a75d4d2c59aa689deadbc&action=position&posid=16&order=listorder+asc&num=3\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=a3c43e88164a75d4d2c59aa689deadbc&action=position&posid=16&order=listorder+asc&num=3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'listorder asc','limit'=>'3',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
                            <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img width="180" height="180" data-ks-lazyload="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['detail_url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>£¤<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['detail_url'];?>" target="_blank">Á¢¼´ÃëÉ±</a></div></li>
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                            
                            
                            
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="freshSale"  clstag="firsttype|keycount|chaoshi|02">
                <div class="mt">
                    <h2><?php echo position(17) ?></h2>
                    <div class="ext">
                        <span class="describe"></span>
                    </div>
                </div>
									                      <div class="mc">
                                                          
                       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=7c348b093c472c0b4473574bd5be472f&action=position&posid=17&order=listorder+asc&num=1\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=7c348b093c472c0b4473574bd5be472f&action=position&posid=17&order=listorder+asc&num=1\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'17','order'=>'listorder asc','limit'=>'1',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>                     
                                                          
                        <div class="p-img">
                              <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
    							<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg1050332480" width="240" height="240" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
    						  </a>
                        </div>
                        <div class="p-name">
                             <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a>
                        </div>
                        <div class="p-ext">
                            ÌØ¼ÛÓÅ»Ý£¬ÏÞÊ±ÇÀ¹º£¡
                        </div>
                        <div class="p-price" sku="1050332480">
                            <strong>£¤<?php echo $r['coupon_price'];?></strong>
                            <del>£¤<?php echo $r['price'];?></del>
                        </div>
                        
                        <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
					  </div>
    </div>
    <div class="clr" style="clear:both;"></div>

</div>
<div style="height:20px; clear:both;"></div>

<!--9.9°üÓÊ -->

<div class="wrap root61">
            <!-- ÐÂÏÊËÙµÝ -->
            <div   class=" freshExpress m sm-wrap J_TWidget"   data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
                <div class="mt">
				<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 1,1 '); 
											foreach ($result as $v) {
											?><h2><?php  echo $v['title'];?></h2>
											<?php }
											?>	
                    <div class="ext switchable-nav">
													                            <a href="javascript:void(0)" class="filter-item selected"><b><?php echo position(18) ?></b></a>
    						                            <a href="javascript:void(0)" class="filter-item"><b><?php echo position(20) ?></b></a>
    						                            <a href="javascript:void(0)" class="filter-item"><b><?php echo position(21) ?></b></a>
    						                           
    												                    </div>
                </div>
                <div class="mc switchable-content" style="position: relative; ">
                    <div class="item ui-switchable-panel selected" style="background-color: rgb(254, 195, 191); position: absolute; z-index: 1; opacity: 1;  ">
                        <span class="fe-pic">
		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=24 ORDER BY listorder,id ASC  LIMIT 0,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" alt="" width="350" height="310" class="err-product" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
                        </span>
                        <ul class="fe-list clearfix">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=dd29aabfc85582cc71ad80af9956b07b&action=position&posid=18&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=dd29aabfc85582cc71ad80af9956b07b&action=position&posid=18&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>			
															                                <li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg1053862480" width="150" height="150" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									 <div class="p-price" sku="1053862480"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
										<div class="p-btn"><a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a></div>
                                    </div>
                                </li>
								  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>  
															                        </ul>
                    </div><div class="item ui-switchable-panel selected" style="background-color: rgb(254, 195, 191); position: absolute; z-index: 1; opacity: 1;  ">
                        <span class="fe-pic">
		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=24 ORDER BY listorder,id ASC  LIMIT 1,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" alt="" width="350" height="310" class="err-product" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
                        </span>
                        <ul class="fe-list clearfix">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=366626f77e5750ad5bc359123d14f417&action=position&posid=20&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=366626f77e5750ad5bc359123d14f417&action=position&posid=20&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>			
															                                <li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg1053862480" width="150" height="150" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									 <div class="p-price" sku="1053862480"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
										<div class="p-btn"><a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a></div>
                                    </div>
                                </li>
								  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>    
															                        </ul>
                    </div><div class="item ui-switchable-panel selected" style="background-color: rgb(254, 195, 191); position: absolute; z-index: 1; opacity: 1;  ">
                        <span class="fe-pic">
		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=24 ORDER BY listorder,id ASC  LIMIT 2,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" alt="" width="350" height="310" class="err-product" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
                        </span>
                        <ul class="fe-list clearfix">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=7b82308ea73efd075db8a04fe7adc31d&action=position&posid=21&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=7b82308ea73efd075db8a04fe7adc31d&action=position&posid=21&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>			
															                                <li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg1053862480" width="150" height="150" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									 <div class="p-price" sku="1053862480"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
										<div class="p-btn"><a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a></div>
                                    </div>
                                </li>
								  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>     
															                        </ul>
                    </div>
                    
                </div>
            </div>
            <!-- ÐÂÏÊËÙµÝ end -->
            <div class="clr"></div>
        </div>

        <div style="height:20px; clear:both;"></div>
    <!-- ÌØÉ«Æ·Àà -->     

        <div class="wrap root61">
            <!-- ÐÂÏÊËÙµÝ -->
            <div   class="sort m sm-wrap J_TWidget"   data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
                <div class="mt">
				<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 2,1 '); 
											foreach ($result as $v) {
											?><h2><?php  echo $v['title'];?></h2>
											<?php }
											?>	
                   <div class="ext switchable-nav">
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 3,1 '); 
											foreach ($result as $v) {
											?><a href="javascript:void(0)" class="filter-item selected"><b><?php  echo $v['title'];?></b></a>
											<?php }
											?>				                           
    												                    </div> 
                </div>
                <div class="mc switchable-content" style="position: relative; ">
                    <div class="item ui-switchable-panel selected" style="background-color: rgb(255, 255, 255); position: absolute; z-index: 1; opacity: 1;  ">
                       <div class="left">
    <div class="li3">
      <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 0,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(5);?> </div>
      </div>
    </div>
    <div class="li3">
            <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 1,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(6);?> </div>
      </div>
    </div>
    <div class="li3">
      <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 2,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(7);?> </div>
      </div>
    </div>
    <div class="li3">
      <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 3,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(8);?> </div>
      </div>
    </div>
    <div class="li3">
      <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 4,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(9);?> </div>
      </div>
    </div>
    <div class="li3">
      <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 5,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(10);?> </div>
      </div>
    </div>
    <div class="li3">
      <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 6,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(11);?> </div>
      </div>
    </div>
    <div class="li3">
      <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 7,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(12);?> </div>
      </div>
    </div>
  </div><div class="right">
    <div class="r1">
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 8,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	</div>
        <div class="r1">
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 9,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="220" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	</div>
  </div>
  <div class="clr"></div>
                    </div>
					
                    
                </div>
            </div>
            <!-- ÐÂÏÊËÙµÝ end -->
            
        </div>
		<!--banner----->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 4,1 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){   
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" data-ks-lazyload="<?php echo $v['picture'];?>"></a><div style="height:25px; clear:both;"></div>
		<?php } }
		?>	
</div>

<!--banner end----->
     <!-- ±¾ÖÜ¾«Ñ¡ -->     
        <div class="wrap" style="height:600px;">
        <div  class="m sm-wrap snacks" >
                
                <div class="mc" style="position: relative; ">
                    <div class="item ui-switchable-panel  J_TWidget"   data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
                        <div class="sub-list switchable-nav">
						<a href="javascript:void(0)" class="fore8 sub-tab selected"><strong><em><?php echo position(22) ?></em></strong></a>
						<a href="javascript:void(0)" class="fore1 sub-tab"><strong><em><?php echo position(23) ?></em></strong></a>
						<a href="javascript:void(0)" class="fore2 sub-tab"><strong><em><?php echo position(24) ?></em></strong></a>
						<a href="javascript:void(0)" class="fore3 sub-tab"><strong><em><?php echo position(25) ?></em></strong></a>
						<a href="javascript:void(0)" class="fore4 sub-tab"><strong><em><?php echo position(26) ?></em></strong></a>
						<a href="javascript:void(0)" class="fore5 sub-tab"><strong><em><?php echo position(27) ?></em></strong></a>
						<a href="javascript:void(0)" class="fore6 sub-tab"><strong><em><?php echo position(28) ?></em></strong></a>
						<a href="javascript:void(0)" class="fore7 sub-tab"><strong><em><?php echo position(29) ?></em></strong></a>
																												 
																				                        </div>
                        <div class="sub-con switchable-content">
                        <div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=0a165ba46ac16fc858d58adf76da5219&action=position&posid=22&order=listorder+asc&num=15\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=0a165ba46ac16fc858d58adf76da5219&action=position&posid=22&order=listorder+asc&num=15\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'listorder asc','limit'=>'15',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
										</div>
                                    </div>
									</li>
					<?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=89ccda12493796ef2e85472eef2adefc&action=position&posid=23&order=listorder+asc&num=15\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=89ccda12493796ef2e85472eef2adefc&action=position&posid=23&order=listorder+asc&num=15\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'23','order'=>'listorder asc','limit'=>'15',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
										</div>
                                    </div>
									</li>
					<?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=1b723b2cec0a56cc87fd4a456198d996&action=position&posid=24&order=listorder+asc&num=15\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=1b723b2cec0a56cc87fd4a456198d996&action=position&posid=24&order=listorder+asc&num=15\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','order'=>'listorder asc','limit'=>'15',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
										</div>
                                    </div>
									</li>
					<?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=fe47eed182f445fcff20a9ecf5e57bf7&action=position&posid=25&order=listorder+asc&num=15\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=fe47eed182f445fcff20a9ecf5e57bf7&action=position&posid=25&order=listorder+asc&num=15\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','order'=>'listorder asc','limit'=>'15',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
										</div>
                                    </div>
									</li>
					<?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=13d38c50ee27548d9ec83ae1cdf2461a&action=position&posid=26&order=listorder+asc&num=15\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=13d38c50ee27548d9ec83ae1cdf2461a&action=position&posid=26&order=listorder+asc&num=15\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'26','order'=>'listorder asc','limit'=>'15',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
										</div>
                                    </div>
									</li>
					<?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=d1a75d916830c9dcb07c1c352c6545c4&action=position&posid=27&order=listorder+asc&num=15\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=d1a75d916830c9dcb07c1c352c6545c4&action=position&posid=27&order=listorder+asc&num=15\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'27','order'=>'listorder asc','limit'=>'15',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
										</div>
                                    </div>
									</li>
					<?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=bcf7f5cf1d8b386bc89ffe511730d1c6&action=position&posid=28&order=listorder+asc&num=15\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=bcf7f5cf1d8b386bc89ffe511730d1c6&action=position&posid=28&order=listorder+asc&num=15\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'28','order'=>'listorder asc','limit'=>'15',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
										</div>
                                    </div>
									</li>
					<?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=623bd87327cdfadf729f62f0dcfdc3f3&action=position&posid=29&order=listorder+asc&num=15\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=623bd87327cdfadf729f62f0dcfdc3f3&action=position&posid=29&order=listorder+asc&num=15\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'29','order'=>'listorder asc','limit'=>'15',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" data-ks-lazyload="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>£¤<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
										</div>
                                    </div>
									</li>
					<?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
																	                            </ul></div>
                            
						
                        </div>
                    </div>
                
                </div>
            </div>
        
        </div>

   <!-- ÃÀÊ³µØÀí -->
<div class="wrap root61">
          <!-- ÃÀÊ³µØÀí -->
            <div  class=" cookingGeology m sm-wrap" clstag="firsttype|keycount|chaoshi|08">
                <div class="mt">
				<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 6,1 '); 
											foreach ($result as $v) {
											?><h2><?php  echo $v['title'];?></h2>
											<?php }
											?>
                    <div class="ext">
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 6,1 '); 
											foreach ($result as $v) {
											?><span class="describe"><?php  echo $v['description'];?></span>
											<?php }
											?>
                    </div>
                </div>
                <div class="mc">
					  <!-- ´¥·¢Æ÷ -->
                    <div class="cg-trigger">
                        
                        
                    </div>
                    <!-- ´¥·¢Æ÷ end -->

                    <div class="cg-hide">
					<span class="cg-h-close"></span>
                        <div class="cg-h-title"></div>
						
					</div>
					 <!-- Òþ²ØÓÅ»ÝÈ¯ end -->
                    <!-- ÕÚÕÖ -->
                    <div class="cg-mask left"></div>
                    <div class="cg-mask right"></div>
                    <!-- ÕÚÕÖ end -->

                    <!-- ×ó²à¹úÄÚ -->
                    <div class="cookingGeologyLeft cg-wrap left J_TWidget" data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'curr','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
                        <div class="cg-w-tab">
                            
                            <div class="cg-w-t-item switchable-nav">
														                            <a class="fore1 ui-switchable-item curr" href="javascript:void(0)">
                                   <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div> <b></b>
                                    <span style="width:80px; text-align:left; margin-left:-1px;"><?php echo position(30) ?></span>
                                </a>
    						                            
    						                            <a class="fore3 ui-switchable-item" href="javascript:void(0)">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div>  <b></b>
                                    <span><?php echo position(31) ?></span>
                                </a>
    						                            
    						                            <a class="fore5 ui-switchable-item" href="javascript:void(0)">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div>  <b></b>
                                    <span><?php echo position(32) ?></span>
                                </a>
    						                            <a class="fore6 ui-switchable-item" href="javascript:void(0)">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div>  <b></b>
                                    <span><?php echo position(33) ?></span>
                                </a>
    						                            
    						                            <a class="fore8 ui-switchable-item" href="javascript:void(0)">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div>  <b></b>
                                    <span><?php echo position(34) ?></span>
                                </a>
    						                            
    						                            <a class="fore10 ui-switchable-item" href="javascript:void(0)">
                                   <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div> <b></b>
                                    <span style="width:80px; text-align:left; margin-left:-1px;"><?php echo position(35) ?></span>
                                </a>
    													                            </div>
                        </div>
                        <div class="cg-w-con switchable-content" style="position: relative;  ">
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=4199c485353c0fd7054e30d119458431&action=position&posid=30&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=4199c485353c0fd7054e30d119458431&action=position&posid=30&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'30','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=aca062b790508c9d35f604b53326f39d&action=position&posid=31&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=aca062b790508c9d35f604b53326f39d&action=position&posid=31&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'31','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=308c25c32e624547180eb48b61d96f85&action=position&posid=32&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=308c25c32e624547180eb48b61d96f85&action=position&posid=32&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'32','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c6a802048e3e572187a3a5611625efe5&action=position&posid=33&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c6a802048e3e572187a3a5611625efe5&action=position&posid=33&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'33','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=52a554d2a832293e554d5b2a57231d9d&action=position&posid=34&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=52a554d2a832293e554d5b2a57231d9d&action=position&posid=34&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'34','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=d4b75644b9d649d162961811e671cf18&action=position&posid=35&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=d4b75644b9d649d162961811e671cf18&action=position&posid=35&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'35','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
                            
                        </div>
                    </div>
                    <!-- ×ó²à¹úÄÚ end-->

                    <!-- ÓÒ²à¹ú¼Ê -->
                    <div  class="cookingGeologyRight cg-wrap right  J_TWidget  "   data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'curr','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
                        <div class="cg-w-tab">
                            
                            <div class="cg-w-t-item switchable-nav">
								    							                                <a class="fore1 ui-switchable-item curr" href="javascript:void(0)">
                                      <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>  <b></b>
                                        <span style="width:90px; text-align:left; margin-left:-15px;"><?php echo position(40) ?></span>
                                    </a>
        						                               
        						                                <a class="fore3 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span style="width:80px; text-align:left; margin-left:-10px"><?php echo position(41) ?></span>
                                    </a>
        						                                <a class="fore4 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span style="width:80px; text-align:left; margin-left:-10px"><?php echo position(36) ?></span>
                                    </a>
        						                                <a class="fore5 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span style="width:80px; text-align:left; margin-left:-10px"><?php echo position(37) ?></span>
                                    </a>
        						                                <a class="fore6 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span style="width:80px; text-align:left; margin-left:-10px"><?php echo position(38) ?></span>
                                    </a>
        						                               
        						                                <a class="fore8 ui-switchable-item" href="javascript:void(0)">
                                      <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>  <b></b>
                                        <span style="width:80px; text-align:left; margin-left:-10px"><?php echo position(39) ?></span>
                                    </a>
        						    							                            </div>


                        </div>
                        <div class="cg-w-con switchable-content" style="position: relative;  ">
                        <div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f098a5075be4d0a3fbe45a50cb07c4a1&action=position&posid=40&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f098a5075be4d0a3fbe45a50cb07c4a1&action=position&posid=40&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'40','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=3c948671a8d108e2aaf9d75c647d325d&action=position&posid=41&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=3c948671a8d108e2aaf9d75c647d325d&action=position&posid=41&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'41','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=81119c00cf2e32f1ad1cafd231060d45&action=position&posid=36&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=81119c00cf2e32f1ad1cafd231060d45&action=position&posid=36&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'36','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=de9afa92bfbce97279098b3fb4ac40b8&action=position&posid=37&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=de9afa92bfbce97279098b3fb4ac40b8&action=position&posid=37&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'37','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=6772a2f0e2a7dfd87ec1bbf4688dc43b&action=position&posid=38&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=6772a2f0e2a7dfd87ec1bbf4688dc43b&action=position&posid=38&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'38','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f3f7774c39f2d10f572652e66b439cea&action=position&posid=39&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f3f7774c39f2d10f572652e66b439cea&action=position&posid=39&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'39','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>£¤<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                    </div>
                                </li>
                                
                                 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
                            
                        </div>
                    </div>
                </div>

            </div>
            <!-- ÃÀÊ³µØÀí end -->
           <div class="clr" style="clear:both;"></div>

        </div>
        
        
<div style="height:20px; clear:both;"></div>
	       <!-- ×¨Ìâ -->    
	   <div style="height:20px; clear:both;"></div>
   <div class="wrap">
   <div class="special">
   <ul><li class="s1">
   				<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?><h1><?php  echo $v['title'];?></h1><div class="grace"><?php  echo $v['description'];?></div><a href="<?php  echo $v['link'];?>" target="_blank"><img height="240" width="240" data-ks-lazyload="<?php  echo $v['picture'];?>"></a>
											<?php }
											?>
   </li><li class="s2">
   <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC   LIMIT 1,1 '); 
											foreach ($result as $v) {
											?><h1><?php  echo $v['title'];?></h1><div class="grace"><?php  echo $v['description'];?></div><a href="<?php  echo $v['link'];?>" target="_blank"><img height="240" width="240" data-ks-lazyload="<?php  echo $v['picture'];?>"></a>
											<?php }
											?>
   </li><li class="s3">
   <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC   LIMIT 2,1 '); 
											foreach ($result as $v) {
											?><h1><?php  echo $v['title'];?></h1><div class="grace"><?php  echo $v['description'];?></div><a href="<?php  echo $v['link'];?>" target="_blank"><img height="240" width="240" data-ks-lazyload="<?php  echo $v['picture'];?>"></a>
											<?php }
											?>
   </li><li class="s4">
   <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC   LIMIT 3,1 '); 
											foreach ($result as $v) {
											?><h1><?php  echo $v['title'];?></h1><div class="grace"><?php  echo $v['description'];?></div><a href="<?php  echo $v['link'];?>" target="_blank"><img height="240" width="240" data-ks-lazyload="<?php  echo $v['picture'];?>"></a>
											<?php }
											?>
   </li><li class="s5">
   <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC   LIMIT 4,1 '); 
											foreach ($result as $v) {
											?><h1><?php  echo $v['title'];?></h1><div class="grace"><?php  echo $v['description'];?></div><a href="<?php  echo $v['link'];?>" target="_blank"><img height="240" width="240" data-ks-lazyload="<?php  echo $v['picture'];?>"></a>
											<?php }
											?>
   </li>
</ul>   </div>
   
   </div>     
           <!-- ×¨Ìâ --> 
        <!--banner-->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 5,1 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){   
		?><div style="height:15px; clear:both;"></div><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>	
</div>
<div style="height:15px; clear:both;"></div>
<!--banner end-->
      <div class="wrap root61">
            <!-- µÚ1²ã-->
            <div data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'none',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable','duration':'0' }" class=" smFloor1 sm-floor m   J_TWidget" >

                <!-- tab -->
                <div class="sf-tab">
                    <ul class="clearfix switchable-nav">
                        					    <li class="ui-switchable-item  selected"><a href="javascript:void(0)"><?php echo position(48) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(49) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(50) ?></a></li>
    					    					
    										                    </ul>
                </div>
                <!-- tab end -->

                <!-- left -->
                <div class="sf-l">
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 7,1 '); 
											foreach ($result as $v) {
											?><h2><?php  echo $v['title'];?></h2><div class="sf-l-pic"><a href="<?php  echo $v['link'];?>" target="_blank"><img data-img="2" width="240" height="415" class="err-product" data-ks-lazyload="<?php  echo $v['picture'];?>" data-lazy-img="done"></a></div>
											<?php }
											?>
                </div>
                <!-- left end -->

                <!-- right -->
                <div class="sf-r switchable-content">
                    <div class="item ui-switchable-panel" style="display:block;">
                        <ul class="item-l clearfix">
                           			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=7516a3e5acc201767d6514df91348b45&action=position&posid=48&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=7516a3e5acc201767d6514df91348b45&action=position&posid=48&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'48','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=12 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); 
		foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>

					
                    <div class="item ui-switchable-panel">
                        <ul class="item-l clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=de71265a119882c1e2d262e1d0f5a4ec&action=position&posid=49&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=de71265a119882c1e2d262e1d0f5a4ec&action=position&posid=49&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'49','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>		
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=12 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); 
		foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" ></a> </li>
		<?php }
		?>	
                        </ul>
                        
                    </div>
					<div class="item ui-switchable-panel">
                       <ul class="item-l clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=10cf0921fe072d0bb96d56175e40059f&action=position&posid=50&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=10cf0921fe072d0bb96d56175e40059f&action=position&posid=50&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'50','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>		
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=12 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); 
		foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					
                </div>
                <!-- right end -->
            </div>
            <!-- µÚ1²ã end-->

            <div class="blank"></div>
               <!-- µÚ2²ã-->
            <div data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'none',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable','duration':'0' }" class=" smFloor2 sm-floor m   J_TWidget" >

                <!-- tab -->
                <div class="sf-tab">
                    <ul class="clearfix switchable-nav">
                        					    <li class="ui-switchable-item  selected"><a href="javascript:void(0)"><?php echo position(52) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(53) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(54) ?></a></li>
    					    					
    										                    </ul>
                </div>
                <!-- tab end -->

                <!-- left -->
                <div class="sf-l">
                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 8,1 '); 
											foreach ($result as $v) {
											?><h2><?php  echo $v['title'];?></h2><div class="sf-l-pic"><a href="<?php  echo $v['link'];?>" target="_blank"><img data-img="2" width="240" height="415" class="err-product" data-ks-lazyload="<?php  echo $v['picture'];?>" data-lazy-img="done"></a></div>
											<?php }
											?>
                </div>
                <!-- left end -->

                <!-- right -->
                <div class="sf-r switchable-content">
                    <div class="item ui-switchable-panel" style="display:block;">
                        <ul class="item-l clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=0806114b2d7e29e00292655d9593da01&action=position&posid=52&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=0806114b2d7e29e00292655d9593da01&action=position&posid=52&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'52','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>		
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=13 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					
                    <div class="item ui-switchable-panel">
                        <ul class="item-l clearfix">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=7eac08aa006f42d1a399aee0961a4b67&action=position&posid=53&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=7eac08aa006f42d1a399aee0961a4b67&action=position&posid=53&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'53','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>		
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=13 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                        
                    </div>
					<div class="item ui-switchable-panel">
                       <ul class="item-l clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=a3f0160848efdce1e09db65d6969e76e&action=position&posid=54&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=a3f0160848efdce1e09db65d6969e76e&action=position&posid=54&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'54','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>		
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=13 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					
                </div>
                <!-- right end -->
            </div>
            <!-- µÚ2²ã end-->

            <div class="blank"></div>
               <!-- µÚ3²ã-->
            <div data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'none',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable','duration':'0' }" class=" smFloor3 sm-floor m   J_TWidget" >

                <!-- tab -->
                <div class="sf-tab">
                    <ul class="clearfix switchable-nav">
                        					    <li class="ui-switchable-item  selected"><a href="javascript:void(0)"><?php echo position(56) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(57) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(59) ?></a></li>
    					    					
    										                    </ul>
                </div>
                <!-- tab end -->

                <!-- left -->
                <div class="sf-l">
                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 9,1 '); 
											foreach ($result as $v) {
											?><h2><?php  echo $v['title'];?></h2><div class="sf-l-pic"><a href="<?php  echo $v['link'];?>" target="_blank"><img data-img="2" width="240" height="415" class="err-product" data-ks-lazyload="<?php  echo $v['picture'];?>" data-lazy-img="done"></a></div>
											<?php }
											?>
                </div>
                <!-- left end -->

                <!-- right -->
                <div class="sf-r switchable-content">
                    <div class="item ui-switchable-panel" style="display:block;">
                        <ul class="item-l clearfix">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=603344870232f794a9084e81a9e78222&action=position&posid=56&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=603344870232f794a9084e81a9e78222&action=position&posid=56&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'56','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>		
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=14 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					
                    <div class="item ui-switchable-panel">
                        <ul class="item-l clearfix">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f0dda6caf5ec09acf940b161f0cdc9fe&action=position&posid=57&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f0dda6caf5ec09acf940b161f0cdc9fe&action=position&posid=57&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'57','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>		
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=14 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                        
                    </div>
					<div class="item ui-switchable-panel">
                       <ul class="item-l clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=61ef407b39663a3eaa735c790dc7830f&action=position&posid=59&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=61ef407b39663a3eaa735c790dc7830f&action=position&posid=59&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'59','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=14 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					
                </div>
                <!-- right end -->
            </div>
            <!-- µÚ3²ã end-->

            <div class="blank"></div>
               <!-- µÚ4²ã-->
            <div data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'none',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable','duration':'0' }" class=" smFloor1 sm-floor m   J_TWidget" >

                <!-- tab -->
                <div class="sf-tab">
                    <ul class="clearfix switchable-nav">
                        					    <li class="ui-switchable-item  selected"><a href="javascript:void(0)"><?php echo position(61) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(62) ?></a></li>
    					    					
    										                    </ul>
                </div>
                <!-- tab end -->

                <!-- left -->
                <div class="sf-l">
                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 10,1 '); 
											foreach ($result as $v) {
											?><h2><?php  echo $v['title'];?></h2><div class="sf-l-pic"><a href="<?php  echo $v['link'];?>" target="_blank"><img data-img="2" width="240" height="415" class="err-product" data-ks-lazyload="<?php  echo $v['picture'];?>" data-lazy-img="done"></a></div>
											<?php }
											?>
                </div>
                <!-- left end -->

                <!-- right -->
                <div class="sf-r switchable-content">
                    <div class="item ui-switchable-panel" style="display:block;">
                        <ul class="item-l clearfix">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=b6a7ba2bf1d3d1e1edd9e652e18118bc&action=position&posid=61&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=b6a7ba2bf1d3d1e1edd9e652e18118bc&action=position&posid=61&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'61','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=15 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					
                    <div class="item ui-switchable-panel">
                        <ul class="item-l clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=3dcf9490e2187bf451a712944a236b78&action=position&posid=62&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=3dcf9490e2187bf451a712944a236b78&action=position&posid=62&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'62','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>£¤<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">Á¢¼´¹ºÂò</a>
                                </div>
                            </li>			
                            
                             <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>		
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=15 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                        
                    </div>
					
                </div>
                <!-- right end -->
            </div>
            <!-- µÚ4²ã end-->

            <div class="blank"></div>
              
            
							<!--banner-->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 6,3 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){     
		?><div style="height:5px; clear:both;"></div><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>	
</div>
<!--banner end-->
        </div> 

		<!-- ÓÑÁ´ -->
		<div class="wrap">
			<div class="jh">
						<?php $result=query('SELECT * FROM jae_link WHERE typeid=0 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,50 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img data-ks-lazyload="<?php echo $v['logo'];?>"></a>
		<?php }
		?>	
				 </div>
		</div>
		<!-- ÓÑÁ´ end-->

		
<div style="clear:both;"></div>
<?php include template('content','foot');?>

</div>
