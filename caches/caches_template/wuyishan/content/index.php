<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>
<script src="/statics/js/jquery.sgallery.js"></script>
<div class="body_w">
<!--banner-->

		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC   LIMIT 1,1 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){     
		?><a target="_blank" href="<?php echo $v['link'];?>" ><div style="background-image:url(<?php echo $v['picture'];?>); display:block; height:<?php echo $v['description'];?>px;background-repeat: no-repeat;background-position: center top;"></a></div>
		<?php } }
		?>	

<!--banner end-->


<!--首焦-->
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
                
  			<div class="gundsz" style="background:url(<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=30 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?><?php  echo $v['picture'];?>
											<?php }
											?>	)">
<ul>
<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=30 ORDER BY listorder,id ASC   LIMIT 1,4 '); 
											foreach ($result as $v) {
											?><li><a style=" color:#<?php echo $v['description'];?>;" href="<?php echo $v['link'];?>" target="_blank" title="<?php  echo $v['title'];?>"><?php  echo $v['title'];?></a></li>
											<?php }
											?>	
</ul>
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
											
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=fc6ddff54b3206fe0d020c8d0b432362&action=position&posid=7&order=id+desc&num=9\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=fc6ddff54b3206fe0d020c8d0b432362&action=position&posid=7&order=id+desc&num=9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'7','order'=>'id desc','limit'=>'9',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>						  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?> " src="<?php echo $r['thumb']?>">
                                </a>
                            </div>
                            <div class="p-ext">
                                <div class="p-name"><a href="<?php echo $r['url']?>" target="_blank"><?php echo $r['title']?> </a></div>
                                <div class="p-price" sku="1029168"><strong>￥<?php echo $r['coupon_price']?></strong></div>
                            </div>
                          </li>
                          
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
												                       </ul>
                    </div>
                    <div class="item ui-switchable-panel" style="position: absolute;  ">
                      <ul class="clearfix">
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=d2acb12892797a2498e1355619663fac&action=position&posid=8&order=id+desc&num=9\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=d2acb12892797a2498e1355619663fac&action=position&posid=8&order=id+desc&num=9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'8','order'=>'id desc','limit'=>'9',));}?>                                                          
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>										  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?> " src="<?php echo $r['thumb']?>">
                                </a>
                            </div>
                            <div class="p-ext">
                                <div class="p-name"><a href="<?php echo $r['url']?>" target="_blank"><?php echo $r['title']?> </a></div>
                                <div class="p-price" sku="1029168"><strong>￥<?php echo $r['coupon_price']?></strong></div>
                            </div>
                          </li>
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
												                       </ul>
                    </div>
                    
					<div class="item ui-switchable-panel selected" style="position: absolute;  ">
                       <ul class="clearfix">
												<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=0990dda7c7c2bb5e56c2d8d0b07b40ed&action=position&posid=9&order=id+desc&num=9\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=0990dda7c7c2bb5e56c2d8d0b07b40ed&action=position&posid=9&order=id+desc&num=9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'id desc','limit'=>'9',));}?>                                                          
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>							  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?> " src="<?php echo $r['thumb']?>">
                                </a>
                            </div>
                            <div class="p-ext">
                                <div class="p-name"><a href="<?php echo $r['url']?>" target="_blank"><?php echo $r['title']?> </a></div>
                                <div class="p-price" sku="1029168"><strong>￥<?php echo $r['coupon_price']?></strong></div>
                            </div>
                          </li>
                          <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
												                       </ul>
                    </div>
                    <div class="item ui-switchable-panel" style="position: absolute;  ">
                      <ul class="clearfix">
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=1731625891efd50a89cd5d6132adec66&action=position&posid=10&order=id+desc&num=9\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=1731625891efd50a89cd5d6132adec66&action=position&posid=10&order=id+desc&num=9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'id desc','limit'=>'9',));}?>                                                          
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>										  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?> " src="<?php echo $r['thumb']?>">
                                </a>
                            </div>
                            <div class="p-ext">
                                <div class="p-name"><a href="<?php echo $r['url']?>" target="_blank"><?php echo $r['title']?> </a></div>
                                <div class="p-price" sku="1029168"><strong>￥<?php echo $r['coupon_price']?></strong></div>
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
<!--首焦-->
<!--banner-->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 3,2 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){  
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" src="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>	
</div>
<!--banner end-->	
<!--秒杀-->
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

                    <!-- 时间tab -->
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
                    <!-- 时间tab end -->
                    <div class="sk-con switchable-content" >

                        <div class="sk-item ui-switchable-panel morning selected" style="z-index: 1; opacity: 1; ">
                            <div class="sk-item-bg">
                                <span class="sun"></span>
                            </div>
                            <ul class="clearfix">
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=549c3a607d15de87b1462db0b95a9fac&action=position&posid=14&order=id+desc&num=3\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=549c3a607d15de87b1462db0b95a9fac&action=position&posid=14&order=id+desc&num=3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'14','order'=>'id desc','limit'=>'3',));}?>                                                          
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>					 
                            <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img width="180" height="180" src="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>￥<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['url'];?>" target="_blank">立即秒杀</a></div></li>
                           <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                            
                            
                            
                            </ul>
                        </div>
                        <div class="sk-item ui-switchable-panel noon" style="opacity: 0; ">
                            <div class="sk-item-bg">
                                <span class="sun"></span>
                            </div>
                            <ul class="clearfix">
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=ed7ab83528c53bdce896c8a0c5dc46dc&action=position&posid=15&order=id+desc&num=3\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=ed7ab83528c53bdce896c8a0c5dc46dc&action=position&posid=15&order=id+desc&num=3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'15','order'=>'id desc','limit'=>'3',));}?>                                                          
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                           <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img width="180" height="180" src="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>￥<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['url'];?>" target="_blank">立即秒杀</a></div></li>
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                            
                            
                            
                            </ul>
                        </div>
                        <div class="sk-item ui-switchable-panel night" style="opacity: 0; ">
                            <div class="sk-item-bg">
                                <span class="sun"></span>
                            </div>
                            <ul class="clearfix">
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=24c1486bd2c70cd9a2d3a436fb0e83b9&action=position&posid=16&order=id+desc&num=3\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=24c1486bd2c70cd9a2d3a436fb0e83b9&action=position&posid=16&order=id+desc&num=3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'id desc','limit'=>'3',));}?>                                                          
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                           <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img width="180" height="180" src="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>￥<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['url'];?>" target="_blank">立即秒杀</a></div></li>
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
                                                          
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=fae403e01a445a7acdae4b856f92541c&action=position&posid=17&order=id+desc&num=1\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=fae403e01a445a7acdae4b856f92541c&action=position&posid=17&order=id+desc&num=1\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'17','order'=>'id desc','limit'=>'1',));}?>                                                          
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>                         
                                                          
                        <div class="p-img">
                              <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
    							<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg1050332480" width="240" height="240" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['thumb'];?>">
    						  </a>
                        </div>
                        <div class="p-name">
                             <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a>
                        </div>
                        <div class="p-ext">
                            特价优惠，限时抢购！
                        </div>
                        <div class="p-price" sku="1050332480">
                            <strong>￥<?php echo $r['coupon_price'];?></strong>
                            <del>￥<?php echo $r['price'];?></del>
                        </div>
                        
                         <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
					  </div>
    </div>
    <div class="clr" style="clear:both;"></div>

</div>
<div style="height:40px; clear:both;"></div>
<!--秒杀end-->
       <!-- 专题 -->    
      <div class="wrap root61">
            <!-- 新鲜速递 -->
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
    						                            
    						                           
    												                    </div>
                </div>
                <div class="mc switchable-content" style="position: relative; ">
                    <div class="item ui-switchable-panel selected" style="background-color: rgb(254, 195, 191); position: absolute; z-index: 1; opacity: 1;  ">
                        <span class="fe-pic">
		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=24 ORDER BY listorder,id ASC  LIMIT 0,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" alt="" width="350" height="310" class="err-product" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
                        </span>
                        <ul class="fe-list clearfix">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=0096e8e01f029da2c2dafef587586f9b&action=position&posid=18&order=id+desc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=0096e8e01f029da2c2dafef587586f9b&action=position&posid=18&order=id+desc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'id desc','limit'=>'10',));}?>                                                          
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  
															                                <li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg1053862480" width="150" height="150" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									 <div class="p-price" sku="1053862480"><strong>￥<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
										<div class="p-btn"><a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a></div>
                                    </div>
                                </li>
								  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>   
															                        </ul>
                    </div>
					
                    
                </div>
            </div>
            <!-- 新鲜速递 end -->
            <div class="clr"></div>
        </div>  
           <div style="height:25px; clear:both;"></div>
		    <!-- 专题end -->    
<!--抽奖 -->
<div class="wrap root61">
           
		   		<h2>会员抽奖</h2>
				<div class="abenti">
				<div class="chojdkm">

				<div class="bejsl">
		<?php $result=query('SELECT * FROM jae_prize_set WHERE status=1 ORDER BY listorder,id ASC  LIMIT 0,6 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['url'];?>"><img src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
				</div>
				<div class="zjsl">
				<a target="_blank" href="/index.php?m=prize&c=index&a=init"><img src="http://img01.taobaocdn.com/imgextra/i1/1089118323/T2N5bYXy4XXXXXXXXX-1089118323.jpg"></a>
				</div>
				<div class="bejsl">
		<?php $result=query('SELECT * FROM jae_prize_set WHERE status=1 ORDER BY listorder,id ASC  LIMIT 6,6 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['url'];?>"><img src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
				</div>
				<div class="clr"></div>
				</div>
				</div>

		   </div>
<div style="height:20px; clear:both;"></div>
		<!--抽奖end -->

		<!--9.9包邮 ----->
<div class="wrap">
   <div class="special">
   <ul><li class="s1">
   				<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?><h1><?php  echo $v['title'];?></h1><div class="grace"><?php  echo $v['description'];?></div><a href="<?php  echo $v['link'];?>" target="_blank"><img height="240" width="240" src="<?php  echo $v['picture'];?>"></a>
											<?php }
											?>
   </li><li class="s2">
   <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC   LIMIT 1,1 '); 
											foreach ($result as $v) {
											?><h1><?php  echo $v['title'];?></h1><div class="grace"><?php  echo $v['description'];?></div><a href="<?php  echo $v['link'];?>" target="_blank"><img height="240" width="240" src="<?php  echo $v['picture'];?>"></a>
											<?php }
											?>
   </li><li class="s3">
   <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC   LIMIT 2,1 '); 
											foreach ($result as $v) {
											?><h1><?php  echo $v['title'];?></h1><div class="grace"><?php  echo $v['description'];?></div><a href="<?php  echo $v['link'];?>" target="_blank"><img height="240" width="240" src="<?php  echo $v['picture'];?>"></a>
											<?php }
											?>
   </li><li class="s4">
   <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC   LIMIT 3,1 '); 
											foreach ($result as $v) {
											?><h1><?php  echo $v['title'];?></h1><div class="grace"><?php  echo $v['description'];?></div><a href="<?php  echo $v['link'];?>" target="_blank"><img height="240" width="240" src="<?php  echo $v['picture'];?>"></a>
											<?php }
											?>
   </li><li class="s5">
   <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC   LIMIT 4,1 '); 
											foreach ($result as $v) {
											?><h1><?php  echo $v['title'];?></h1><div class="grace"><?php  echo $v['description'];?></div><a href="<?php  echo $v['link'];?>" target="_blank"><img height="240" width="240" src="<?php  echo $v['picture'];?>"></a>
											<?php }
											?>
   </li>
</ul>   </div>
   
   </div>
		<div style="height:20px; clear:both;"></div>
		<!--9.9包邮end ----->
           <!-- 美食地理 -->
<div class="wrap root61">
          <!-- 美食地理 -->
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
					  <!-- 触发器 -->
                    <div class="cg-trigger">
                        
                        
                    </div>
                    <!-- 触发器 end -->

                    <div class="cg-hide">
					<span class="cg-h-close"></span>
                        <div class="cg-h-title"></div>
						
					</div>
					 <!-- 隐藏优惠券 end -->
                    <!-- 遮罩 -->
                    <div class="cg-mask left"></div>
                    <div class="cg-mask right"></div>
                    <!-- 遮罩 end -->

                    <!-- 左侧国内 -->
                    <div class="cookingGeologyLeft cg-wrap left J_TWidget" data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'curr','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
                        <div class="cg-w-tab">
                            
                            <div class="cg-w-t-item switchable-nav">
														                            <a class="fore1 ui-switchable-item curr" href="javascript:void(0)">
                                   <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div> <b></b>
                                    <span"><?php echo position(30) ?></span>
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
                                    <span><?php echo position(35) ?></span>
                                </a>
    													                            </div>
                        </div>
                        <div class="cg-w-con switchable-content" style="position: relative;  ">
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f9920f4550630ee01a1cb673ad80d2a4&action=position&posid=30&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f9920f4550630ee01a1cb673ad80d2a4&action=position&posid=30&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'30','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>￥<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                    </div>
                                </li>
                                
                                <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=b1403b0ee810ff9be1f4ab1d81888e9a&action=position&posid=32&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=b1403b0ee810ff9be1f4ab1d81888e9a&action=position&posid=32&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'32','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>￥<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                    </div>
                                </li>
                                
                                <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=8f2d4240bc8bb12df3afb4ef1ce92e68&action=position&posid=33&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=8f2d4240bc8bb12df3afb4ef1ce92e68&action=position&posid=33&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'33','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>￥<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                    </div>
                                </li>
                                
                                <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=a7c8f84531e7603ae77c70347938704d&action=position&posid=34&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=a7c8f84531e7603ae77c70347938704d&action=position&posid=34&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'34','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>￥<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                    </div>
                                </li>
                                
                                <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=fb9696f4ee4bafc55cf59ba283efee74&action=position&posid=35&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=fb9696f4ee4bafc55cf59ba283efee74&action=position&posid=35&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'35','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>￥<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                    </div>
                                </li>
                                
                                <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
                            
                        </div>
                    </div>
                    <!-- 左侧国内 end-->

                    <!-- 右侧国际 -->
                    <div  class="cookingGeologyRight cg-wrap right  J_TWidget  "   data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'curr','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
                        <div class="cg-w-tab">
                            
                            <div class="cg-w-t-item switchable-nav">
								    							                                <a class="fore1 ui-switchable-item curr" href="javascript:void(0)">
                                      <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>  <b></b>
                                        <span style="width:80px; text-align:left; margin-left:2px;"><?php echo position(40) ?></span>
                                    </a>
        						                             
        						                                <a class="fore3 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span style="width:80px; text-align:left; margin-left:2px;"><?php echo position(41) ?></span>
                                    </a>
        						                                <a class="fore4 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span style="width:80px; text-align:left; margin-left:2px;"><?php echo position(36) ?></span>
                                    </a>
        						                              
        						                                <a class="fore6 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span style="width:80px; text-align:left; margin-left:2px;"><?php echo position(38) ?></span>
                                    </a>
        						                               
        						                                <a class="fore8 ui-switchable-item" href="javascript:void(0)">
                                      <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>  <b></b>
                                        <span style="width:80px; text-align:left; margin-left:2px;"><?php echo position(39) ?></span>
                                    </a>
        						    							                            </div>


                        </div>
                        <div class="cg-w-con switchable-content" style="position: relative;  ">
                        <div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=3fea40c58079c0654e094839e896c54a&action=position&posid=40&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=3fea40c58079c0654e094839e896c54a&action=position&posid=40&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'40','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>￥<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                    </div>
                                </li>
                                
                                <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e4746bfb14b03e8e3eb01af66c6d1660&action=position&posid=41&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e4746bfb14b03e8e3eb01af66c6d1660&action=position&posid=41&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'41','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>￥<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                    </div>
                                </li>
                                
                                <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=d4ce5607a4b02a6f3b415178f82a596e&action=position&posid=36&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=d4ce5607a4b02a6f3b415178f82a596e&action=position&posid=36&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'36','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>￥<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                    </div>
                                </li>
                                
                                <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=34ef9c26ce90e32925a5d75dad5eb17c&action=position&posid=38&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=34ef9c26ce90e32925a5d75dad5eb17c&action=position&posid=38&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'38','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>￥<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                    </div>
                                </li>
                                
                                <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
						
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=2cf366bdfb88100c973907a180978483&action=position&posid=39&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=2cf366bdfb88100c973907a180978483&action=position&posid=39&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'39','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>￥<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                    </div>
                                </li>
                                
                                <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
    							    						                            </ul></div>
                            
                        </div>
                    </div>
                </div>

            </div>
            <!-- 美食地理 end -->
           <div class="clr" style="clear:both;"></div>

        </div>
       
<!-- 美食地理 end-->

		<!--banner----->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 5,1 '); 
		foreach ($result as $v) {    if(!empty($v['picture'])){  
		?><div style="height:10px; clear:both;"></div><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" src="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>	
</div>

<!--banner end----->
     <!-- 本周精选 -->     
        <div class="wrap" style="height:600px;">
        <div  class="m sm-wrap snacks" >
                
                <div class="mc" style="position: relative; ">
                  
 <div class="item ui-switchable-panel  J_TWidget">
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
                            
                           	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e5b520c770b1dea52d11a6087616c630&action=position&posid=22&order=id+desc&num=15\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e5b520c770b1dea52d11a6087616c630&action=position&posid=22&order=id+desc&num=15\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'id desc','limit'=>'15',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['thumb'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>￥<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
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
        <div style="height:30px; clear:both;"></div>
        <!--banner----->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 6,1 '); 
		foreach ($result as $v) {    if(!empty($v['picture'])){  
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" src="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>	
</div>

<!--banner end----->
      <div class="wrap root61">
            <!-- 第1层-->
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
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=235a3eca24ce61da21aa01a0187cc4a5&action=position&posid=48&order=id+desc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=235a3eca24ce61da21aa01a0187cc4a5&action=position&posid=48&order=id+desc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'48','order'=>'id desc','limit'=>'8',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">							
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="160" height="160" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price">
                                    <strong>￥<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                </div>
                            </li>			
                            
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=12 ORDER BY listorder ASC   LIMIT 0,5 '); 
		foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					
					
		
					
					
                    <div class="item ui-switchable-panel">
                        <ul class="item-l clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=50e79f4662f2d18a21c34332a31d5cb2&action=position&posid=49&order=id+desc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=50e79f4662f2d18a21c34332a31d5cb2&action=position&posid=49&order=id+desc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'49','order'=>'id desc','limit'=>'8',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">							
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="160" height="160" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price">
                                    <strong>￥<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                </div>
                            </li>			
                            
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=12 ORDER BY listorder ASC   LIMIT 5,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                        
                    </div>
					<div class="item ui-switchable-panel">
                       <ul class="item-l clearfix">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=d5ef690d1a7c17fe011fb4fb4c9aa376&action=position&posid=50&order=id+desc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=d5ef690d1a7c17fe011fb4fb4c9aa376&action=position&posid=50&order=id+desc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'50','order'=>'id desc','limit'=>'8',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">							
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="160" height="160" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price">
                                    <strong>￥<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                </div>
                            </li>			
                            
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=12 ORDER BY listorder ASC   LIMIT 10,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					
                </div>
                <!-- right end -->
            </div>
            <!-- 第1层 end-->

            <div class="blank"></div>
               <!-- 第2层-->
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
											?><h2><?php  echo $v['title'];?></h2><div class="sf-l-pic"><a href="<?php  echo $v['link'];?>" target="_blank"><img data-img="2" width="240" height="415" class="err-product" src="<?php  echo $v['picture'];?>" data-lazy-img="done"></a></div>
											<?php }
											?>
                </div>
                <!-- left end -->

                <!-- right -->
                <div class="sf-r switchable-content">
                    <div class="item ui-switchable-panel" style="display:block;">
                        <ul class="item-l clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=0fc369738f1f6bf3ba1a65779ec2cf72&action=position&posid=52&order=id+desc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=0fc369738f1f6bf3ba1a65779ec2cf72&action=position&posid=52&order=id+desc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'52','order'=>'id desc','limit'=>'8',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">							
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="160" height="160" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price">
                                    <strong>￥<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                </div>
                            </li>			
                            
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=13 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
                    <div class="item ui-switchable-panel">
                        <ul class="item-l clearfix">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c02c95738ffe2f951c559b6f49532667&action=position&posid=53&order=id+desc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c02c95738ffe2f951c559b6f49532667&action=position&posid=53&order=id+desc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'53','order'=>'id desc','limit'=>'8',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">							
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="160" height="160" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price">
                                    <strong>￥<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                </div>
                            </li>			
                            
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=13 ORDER BY listorder ASC   LIMIT 5,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                        
                    </div>
					<div class="item ui-switchable-panel">
                       <ul class="item-l clearfix">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=eaacf3e3ac692e6d26cf723998847974&action=position&posid=54&order=id+desc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=eaacf3e3ac692e6d26cf723998847974&action=position&posid=54&order=id+desc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'54','order'=>'id desc','limit'=>'8',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">							
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="160" height="160" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price">
                                    <strong>￥<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                </div>
                            </li>			
                            
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=13 ORDER BY listorder ASC   LIMIT 10,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					
                </div>
                <!-- right end -->
            </div>
            <!-- 第2层 end-->

            <div class="blank"></div>
               <!-- 第3层-->
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
											?><h2><?php  echo $v['title'];?></h2><div class="sf-l-pic"><a href="<?php  echo $v['link'];?>" target="_blank"><img data-img="2" width="240" height="415" class="err-product" src="<?php  echo $v['picture'];?>" data-lazy-img="done"></a></div>
											<?php }
											?>
                </div>
                <!-- left end -->

                <!-- right -->
                <div class="sf-r switchable-content">
                    <div class="item ui-switchable-panel" style="display:block;">
                        <ul class="item-l clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c29b9643f5d3ca6ff591bc04fa510579&action=position&posid=56&order=id+desc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c29b9643f5d3ca6ff591bc04fa510579&action=position&posid=56&order=id+desc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'56','order'=>'id desc','limit'=>'8',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">							
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="160" height="160" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price">
                                    <strong>￥<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                </div>
                            </li>			
                            
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=14 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
                    <div class="item ui-switchable-panel">
                        <ul class="item-l clearfix">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e62bb158afbc1a6cf957d129a52ff247&action=position&posid=57&order=id+desc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e62bb158afbc1a6cf957d129a52ff247&action=position&posid=57&order=id+desc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'57','order'=>'id desc','limit'=>'8',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">							
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="160" height="160" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price">
                                    <strong>￥<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                </div>
                            </li>			
                            
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=14 ORDER BY listorder ASC   LIMIT 5,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                        
                    </div>
					<div class="item ui-switchable-panel">
                       <ul class="item-l clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=acef32b2d9f6fe5d493859d9c20d46dd&action=position&posid=59&order=id+desc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=acef32b2d9f6fe5d493859d9c20d46dd&action=position&posid=59&order=id+desc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'59','order'=>'id desc','limit'=>'8',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank">							
										<img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product  pimg499985" width="160" height="160" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" data-ks-lazyload="<?php echo $r['thumb']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price">
                                    <strong>￥<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">立即购买</a>
                                </div>
                            </li>			
                            
                            <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=14 ORDER BY listorder ASC   LIMIT 10,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					
                  
                </div>
                <!-- right end -->
            </div>
            <!-- 第3层 end-->

            
                 <!-- 特色品类 -->     
        <div class="wrap root61">
            <!-- 特色品类 -->
            <div   class="sort m sm-wrap J_TWidget" style="height:425px;"   data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
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
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 4,2 '); 
											foreach ($result as $v) {
											?><a href="javascript:void(0)" class="filter-item"><b><?php  echo $v['title'];?></b></a>
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
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
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
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
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
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
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
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
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
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
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
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(10);?> </div>
      </div>
    </div>
	
  </div><div class="right">
    <div class="r1">
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 8,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="310" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	</div>

  </div>
  <div class="clr"></div>
                    </div><div class="item ui-switchable-panel selected" style="background-color: rgb(255, 255, 255); position: absolute; z-index: 1; opacity: 1;  ">
                       <div class="left">
    <div class="li3">
      <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 0,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(13);?> </div>
      </div>
    </div>
    <div class="li3">
            <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 1,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(14);?> </div>
      </div>
    </div>
    <div class="li3">
            <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 2,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(15);?> </div>
      </div>
    </div>
    <div class="li3">
            <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 3,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(16);?> </div>
      </div>
    </div>
    <div class="li3">
            <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 4,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(17);?> </div>
      </div>
    </div>
    <div class="li3">
            <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 5,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(18);?> </div>
      </div>
    </div>

  </div><div class="right">
            <div class="r1">
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 8,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="310" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	</div>
	
  </div>
  <div class="clr"></div>
                    </div><div class="item ui-switchable-panel selected" style="background-color: rgb(255, 255, 255); position: absolute; z-index: 1; opacity: 1;  ">
                       <div class="left">
    <div class="li3">
            <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 0,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(21);?> </div>
      </div>
    </div>
    <div class="li3">
                  <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 1,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(22);?> </div>
      </div>
    </div>
    <div class="li3">
                  <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 2,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(23);?> </div>
      </div>
    </div>
    <div class="li3">
                  <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 3,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(24);?> </div>
      </div>
    </div>
    <div class="li3">
                  <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 4,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(25);?> </div>
      </div>
    </div>
    <div class="li3">
                  <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 5,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(26);?> </div>
      </div>
    </div>
	
  </div><div class="right">
            <div class="r1">
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 8,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="310" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	</div>

  </div>
  <div class="clr"></div>

                    </div>
                    
                </div>
            </div>
            <!-- 特色品类 end -->
            
        </div>
		
		<!-- 特色品类 -->  
							<!--banner----->
<div class="banad2">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 7,3 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){     
		?><div class="blank10"></div><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" height="100" src="<?php echo $v['picture'];?>"></a><div style="height:5px; clear:both;"></div>
		<?php  } }
		?>	
</div>
<!--banner end----->
        </div> 

		<!-- 友链 -->
		<div class="wrap">
			<div class="jh">
						<?php $result=query('SELECT * FROM jae_link WHERE typeid=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,50 ');
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img src="<?php echo $v['logo'];?>"></a>
		<?php }
		?>	
				 </div>
		</div>
		<!-- 友链 end-->

		
<div style="clear:both;"></div>
<?php include template('content','foot');?>

</div>
