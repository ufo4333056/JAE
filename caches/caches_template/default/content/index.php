<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>
<div class="fromuser_tips" style="width:1210px; margin:0 auto"></div>
<div class="body_w">1212
 <?php echo $site_setting['head_logo'];?>
    
     
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=6127b1a8cefa78966b2d2113fc1116f7&pos=shuichan-8\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=6127b1a8cefa78966b2d2113fc1116f7&pos=shuichan-8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'shuichan-8',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=a57326cd9b0765ae7cd93b1709dfe5dd&action=lists&id=67&num=4&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=a57326cd9b0765ae7cd93b1709dfe5dd&action=lists&id=67&num=4&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('id'=>'67','order'=>'listorder ASC','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <?php echo $r['id'];?><?php echo $r['title'];?><?php echo $r['picture'];?><?php echo $r['link'];?>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=3357de80c19d29def524accf798f4f5d&action=lists&where=+id%3D68++&order=listorder+ASC&limit=2%2C5\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=3357de80c19d29def524accf798f4f5d&action=lists&where=+id%3D68++&order=listorder+ASC&limit=2%2C5\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('where'=>' id=68  ','order'=>'listorder ASC','limit'=>'20',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <?php echo $r['id'];?><?php echo $r['title'];?><?php echo $r['picture'];?><?php echo $r['link'];?>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
 
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=8c163e5b37b5cce6c3583dee31bc64a9&action=position&posid=8&order=listorder+asc&num=3\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=8c163e5b37b5cce6c3583dee31bc64a9&action=position&posid=8&order=listorder+asc&num=3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'8','order'=>'listorder asc','limit'=>'3',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
 <div>
<font color="#f00"> <?php echo $r['catid'];?> | <?php echo $r['listorder'];?>|<?php echo $r['price'];?>|<?php echo $r['coupon_price'];?>|<?php echo $r['inputtime'];?>|<?php echo $r['id'];?></font><?php echo $r['title'];?><?php echo $r['thumb'];?><?php echo $r['url'];?><?php echo $r['description'];?></div>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
 
 

<!--banner1-->

		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC   LIMIT 1,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><div style="background-image:url(<?php echo $v['picture'];?>); display:block; height:<?php echo $v['description'];?>px;background-repeat: no-repeat;background-position: center top;"></a></div>
		<?php }
		?>	

<!--banner end-->
<!--�׽�-->
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
											<?php $result=get_goods(7,9);foreach( $result as $r){ ?>							  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['detail_url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?> " src="<?php echo $r['pic_url']?>">
                                </a>
                            </div>
                            <div class="p-ext">
                                <div class="p-name"><a href="<?php echo $r['detail_url']?>" target="_blank"><?php echo $r['title']?> </a></div>
                                <div class="p-price" sku="1029168"><strong>��<?php echo $r['coupon_price']?></strong></div>
                            </div>
                          </li>
                          
                          <?php }?>
												                       </ul>
                    </div>
                    <div class="item ui-switchable-panel" style="position: absolute;  ">
                      <ul class="clearfix">
											<?php $result=get_goods(8,9);foreach( $result as $r){ ?>							  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['detail_url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?> " src="<?php echo $r['pic_url']?>">
                                </a>
                            </div>
                            <div class="p-ext">
                                <div class="p-name"><a href="<?php echo $r['detail_url']?>" target="_blank"><?php echo $r['title']?> </a></div>
                                <div class="p-price" sku="1029168"><strong>��<?php echo $r['coupon_price']?></strong></div>
                            </div>
                          </li>
                          
                          <?php }?>
												                       </ul>
                    </div>
                    
					<div class="item ui-switchable-panel selected" style="position: absolute;  ">
                       <ul class="clearfix">
											<?php $result=get_goods(9,9);foreach( $result as $r){ ?>						  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['detail_url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?> " src="<?php echo $r['pic_url']?>">
                                </a>
                            </div>
                            <div class="p-ext">
                                <div class="p-name"><a href="<?php echo $r['detail_url']?>" target="_blank"><?php echo $r['title']?> </a></div>
                                <div class="p-price" sku="1029168"><strong>��<?php echo $r['coupon_price']?></strong></div>
                            </div>
                          </li>
                          
                          <?php }?>
												                       </ul>
                    </div>
                    <div class="item ui-switchable-panel" style="position: absolute;  ">
                      <ul class="clearfix">
											<?php $result=get_goods(10,9);foreach( $result as $r){ ?>							  
												<li>
                            <div class="p-img">
                                <a href="<?php echo $r['detail_url']?>" target="_blank">
                                    <img class="err-product pimg1029168" width="80" height="80" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?> " src="<?php echo $r['pic_url']?>">
                                </a>
                            </div>
                            <div class="p-ext">
                                <div class="p-name"><a href="<?php echo $r['detail_url']?>" target="_blank"><?php echo $r['title']?> </a></div>
                                <div class="p-price" sku="1029168"><strong>��<?php echo $r['coupon_price']?></strong></div>
                            </div>
                          </li>
                          
                          <?php }?>
												                       </ul>
                    </div>
					
                </div>
            </div>




<div style="height:400px;position:absolute;left:-365px; width:710px; left:210px; overflow:hidden" id="J_MallSlide" class="scrollable mall-slide J_TWidget dd" data-widget-type="Carousel" data-widget-config="{'navCls':'ks-switchable-nav','contentCls':'ks-switchable-content','effect': 'fade',

'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true, 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">

		<ul class="ks-switchable-content" >
        <?php   $sql="SELECT * FROM jae_focus WHERE  status=1 ORDER BY listorder ASC  ";
		
		$r_focus=query($sql);
	
		
		 foreach ($r_focus as $r) {?>
        <li class="big-piclist ks-switchable-panel-internal22" style="position:absolute; display: block; opacity: 1; z-index: 9; "> <a href="<?php echo $r["link"]?>" target="_blank"> <img src="<?php echo $r["picture"]?>" width="710" height="400"/></a> </li>
        <?php }?>
      </ul>
			  
	  
      <ul class="ks-switchable-nav">
                        <?php $r_focuss=query($sql); foreach ($r_focuss as $k=>$rs) {?>
        <li  <?php if($k==0) echo "class=ks-active" ?>>
          <div class="cover"></div>
          </li>
        <?php }?>
        </li>

               
                
              </ul>
   
  </div>

</div>
<!--banner-->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 3,1 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){  
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" src="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>	
</div>
<!--banner end-->	
<!--�齱 -->
<!--<div style="height:20px; clear:both;"></div>
<div class="wrap root61">
           
		   		<h2>��Ա�齱</h2>
				<div class="abenti">
				
				<div class="bejsl">
		<?php $result=query('SELECT * FROM jae_prize_set WHERE status=1 ORDER BY listorder,id ASC  LIMIT 0,6 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['url'];?>"><img src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
				</div>
				<div class="zjsl">
				<a target="_blank" href="/index.php?m=prize&c=index&a=init"><img src="/statics/images/cjaniu.jpg"></a>
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

		   </div>-->
            
            
            
        
		<!--�齱end -->
<!--��ɱ-->
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
                        <!-- <div class="sk-t-text">��ɱ����ʱ</div> -->
                         <!--<div class="sk-t-clock"><span>01</span><i>:</i><span>17</span><i>:</i><span>12</span></div> -->
                    </div>

                    <!-- ʱ��tab -->
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
                    <!-- ʱ��tab end -->
                    <div class="sk-con switchable-content" >

                        <div class="sk-item ui-switchable-panel morning selected" style="z-index: 1; opacity: 1; ">
                            <div class="sk-item-bg">
                                <span class="sun"></span>
                            </div>
                            <ul class="clearfix">
                             <?php $result=get_goods(14,3);foreach( $result as $r){ ?>  
                            <li><div class="p-img"><a href="<?php echo $r['detail_url'];?>" target="_blank"><img width="180" height="180" src="<?php echo $r['pic_url'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['detail_url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>��<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['detail_url'];?>" target="_blank">������ɱ</a></div></li>
                            <?php } ?>
                            
                            
                            
                            </ul>
                        </div>
                        <div class="sk-item ui-switchable-panel noon" style="opacity: 0; ">
                            <div class="sk-item-bg">
                                <span class="sun"></span>
                            </div>
                            <ul class="clearfix">
                             <?php $result=get_goods(15,3);foreach( $result as $r){ ?>  
                            <li><div class="p-img"><a href="<?php echo $r['detail_url'];?>" target="_blank"><img width="180" height="180" src="<?php echo $r['pic_url'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['detail_url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>��<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['detail_url'];?>" target="_blank">������ɱ</a></div></li>
                            <?php } ?>
                            
                            
                            
                            </ul>
                        </div>
                        <div class="sk-item ui-switchable-panel night" style="opacity: 0; ">
                            <div class="sk-item-bg">
                                <span class="sun"></span>
                            </div>
                            <ul class="clearfix">
                             <?php $result=get_goods(16,3);foreach( $result as $r){ ?>  
                            <li><div class="p-img"><a href="<?php echo $r['detail_url'];?>" target="_blank"><img width="180" height="180" src="<?php echo $r['pic_url'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['detail_url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>��<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['detail_url'];?>" target="_blank">������ɱ</a></div></li>
                            <?php } ?>
                            
                            
                            
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
                                                          
                        <?php $result=get_goods(17,1);foreach( $result as $r){ ?>                           
                                                          
                        <div class="p-img">
                              <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
    							<img class="err-product pimg1050332480" width="240" height="240" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
    						  </a>
                        </div>
                        <div class="p-name">
                             <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a>
                        </div>
                        <div class="p-ext">
                            �ؼ��Żݣ���ʱ������
                        </div>
                        <div class="p-price" sku="1050332480">
                            <strong>��<?php echo $r['coupon_price'];?></strong>
                            <del>��<?php echo $r['price'];?></del>
                        </div>
                        
                        <?php }?>
					  </div>
    </div>
    <div class="clr" style="clear:both;"></div>

</div>
<div style="height:20px; clear:both;"></div>

		<!--9.9���� ----->
<div class="wrap root61">
            <!-- �����ٵ� -->
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
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" alt="" width="350" height="310" class="err-product" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
                        </span>
                        <ul class="fe-list clearfix">
<?php $result=get_goods(18,10);foreach( $result as $r){ ?>
															                                <li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product  pimg1053862480" width="150" height="150" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									 <div class="p-price" sku="1053862480"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
										<div class="p-btn"><a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a></div>
                                    </div>
                                </li>
								  <?php }?>    
															                        </ul>
                    </div><div class="item ui-switchable-panel selected" style="background-color: rgb(254, 195, 191); position: absolute; z-index: 1; opacity: 1;  ">
                        <span class="fe-pic">
		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=24 ORDER BY listorder,id ASC  LIMIT 1,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" alt="" width="350" height="310" class="err-product" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
                        </span>
                        <ul class="fe-list clearfix">
<?php $result=get_goods(20,10);foreach( $result as $r){ ?>
															                                <li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product  pimg1053862480" width="150" height="150" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									 <div class="p-price" sku="1053862480"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['ddetail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
										<div class="p-btn"><a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a></div>
                                    </div>
                                </li>
								  <?php }?>    
															                        </ul>
                    </div><div class="item ui-switchable-panel selected" style="background-color: rgb(254, 195, 191); position: absolute; z-index: 1; opacity: 1;  ">
                        <span class="fe-pic">
		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=24 ORDER BY listorder,id ASC  LIMIT 2,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" alt="" width="350" height="310" class="err-product" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
                        </span>
                        <ul class="fe-list clearfix">
<?php $result=get_goods(21,10);foreach( $result as $r){ ?>
															                                <li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product  pimg1053862480" width="150" height="150" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									 <div class="p-price" sku="1053862480"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['ddetail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
										<div class="p-btn"><a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a></div>
                                    </div>
                                </li>
								  <?php }?>    
															                        </ul>
                    </div>
                    
                </div>
            </div>
            <!-- �����ٵ� end -->
            <div class="clr"></div>
        </div>
		<!--9.9����end ----->
        <div style="height:20px; clear:both;"></div>
    <!-- ��ɫƷ�� -->     
        <div class="wrap root61">
            <!-- ��ɫƷ�� -->
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
    <div class="li3">
      <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 6,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
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
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
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
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="220" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	</div>
        <div class="r1">
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=25 ORDER BY listorder,id ASC  LIMIT 9,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="220" src="<?php echo $v['picture'];?>"></a>
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
    <div class="li3">
            <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 6,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(19);?> </div>
      </div>
    </div>
    <div class="li3">
            <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 7,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(20);?> </div>
      </div>
    </div>
  </div><div class="right">
            <div class="r1">
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 8,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="220" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	</div>
            <div class="r1">
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=26 ORDER BY listorder,id ASC  LIMIT 9,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="220" src="<?php echo $v['picture'];?>"></a>
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
    <div class="li3">
                  <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 6,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(27);?> </div>
      </div>
    </div>
    <div class="li3">
                  <div class="li3_img"> 
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 7,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	  </div>
      <div class="li3_t">
        <div> <?php echo block(28);?> </div>
      </div>
    </div>
  </div><div class="right">
            <div class="r1">
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 8,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="220" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	</div>
            <div class="r1">
	  	<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=27 ORDER BY listorder,id ASC  LIMIT 9,1 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="220" height="220" src="<?php echo $v['picture'];?>"></a>
		<?php }
		?>	
	</div>
  </div>
  <div class="clr"></div>
                    </div>
                    
                </div>
            </div>
            <!-- ��ɫƷ�� end -->
            
        </div>
		<!--banner----->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 4,1 '); 
		foreach ($result as $v) {    if(!empty($v['picture'])){  
		?><div style="height:25px; clear:both;"></div><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" src="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>	
</div>

<!--banner end----->
     <!-- ���ܾ�ѡ -->     
        <div class="wrap" style="height:600px;">
        <div  class="m sm-wrap snacks" >
                
                <div class="mc" style="position: relative; ">
                    <div class="item ui-switchable-panel  J_TWidget"   data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'selected','autoplay':'false','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
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
                            
                           	<?php $result=get_goods(22,15);foreach( $result as $r){ ?>
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
										</div>
                                    </div>
									</li>
					<?php }?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php $result=get_goods(23,15);foreach( $result as $r){ ?>
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
										</div>
                                    </div>
									</li>
					<?php }?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php $result=get_goods(24,15);foreach( $result as $r){ ?>
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
										</div>
                                    </div>
									</li>
					<?php }?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php $result=get_goods(25,15);foreach( $result as $r){ ?>
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
										</div>
                                    </div>
									</li>
					<?php }?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php $result=get_goods(26,15);foreach( $result as $r){ ?>
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
										</div>
                                    </div>
									</li>
					<?php }?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php $result=get_goods(27,15);foreach( $result as $r){ ?>
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
										</div>
                                    </div>
									</li>
					<?php }?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           <?php $result=get_goods(28,15);foreach( $result as $r){ ?>
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
										</div>
                                    </div>
									</li>
					<?php }?>
																	                            </ul></div><div >
                            <ul class="clearfix sub-item" >
                            
                           	<?php $result=get_goods(29,15);foreach( $result as $r){ ?>
																										<li class="">
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                                            <img class="err-product pimg787703" width="170" height="170" data-img="1" data-lazy-img="done" alt="<?php echo $r['title'];?>" src="<?php echo $r['pic_url'];?>">
                                        </a>
                                    </div>
									<div class="p-price" sku="787703"><strong>��<?php echo $r['coupon_price'];?></strong></div>
                                    <div class="p-ext">
                                        <div class="p-name"><a href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <div class="p-btn">
										<a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
										</div>
                                    </div>
									</li>
					<?php }?>
																	                            </ul></div>
                            
						
                        </div>
                    </div>
                
                </div>
            </div>
        
        </div>

   <!-- ��ʳ���� -->
<div class="wrap root61">
          <!-- ��ʳ���� -->
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
					  <!-- ������ -->
                    <div class="cg-trigger">
                        
                        
                    </div>
                    <!-- ������ end -->

                    <div class="cg-hide">
					<span class="cg-h-close"></span>
                        <div class="cg-h-title"></div>
						
					</div>
					 <!-- �����Ż�ȯ end -->
                    <!-- ���� -->
                    <div class="cg-mask left"></div>
                    <div class="cg-mask right"></div>
                    <!-- ���� end -->

                    <!-- ������ -->
                    <div class="cookingGeologyLeft cg-wrap left J_TWidget" data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'curr','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
                        <div class="cg-w-tab">
                            
                            <div class="cg-w-t-item switchable-nav">
														                            <a class="fore1 ui-switchable-item curr" href="javascript:void(0)">
                                   <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div> <b></b>
                                    <span><?php echo position(30) ?></span>
                                </a>
    						                            <a class="fore2 ui-switchable-item" href="javascript:void(0)">
                                   <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div> <b></b>
                                    <span><?php echo position(31) ?></span>
                                </a>
    						                            <a class="fore3 ui-switchable-item" href="javascript:void(0)">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div>  <b></b>
                                    <span><?php echo position(32) ?></span>
                                </a>
    						                            <a class="fore4 ui-switchable-item" href="javascript:void(0)">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div>  <b></b>
                                    <span><?php echo position(33) ?></span>
                                </a>
    						                            <a class="fore5 ui-switchable-item" href="javascript:void(0)">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div>  <b></b>
                                    <span><?php echo position(34) ?></span>
                                </a>
    						                            <a class="fore6 ui-switchable-item" href="javascript:void(0)">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div>  <b></b>
                                    <span><?php echo position(35) ?></span>
                                </a>
    						                            <a class="fore7 ui-switchable-item" href="javascript:void(0)">
                                 <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div>   <b></b>
                                    <span><?php echo position(36) ?></span>
                                </a>
    						                            <a class="fore8 ui-switchable-item" href="javascript:void(0)">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div>  <b></b>
                                    <span><?php echo position(37) ?></span>
                                </a>
    						                            <a class="fore9 ui-switchable-item" href="javascript:void(0)">
                                   <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div> <b></b>
                                    <span><?php echo position(38) ?></span>
                                </a>
    						                            <a class="fore10 ui-switchable-item" href="javascript:void(0)">
                                   <div class="cg-w-t-label" style="left:-6px; top: -50px; display:none "></div> <b></b>
                                    <span><?php echo position(39) ?></span>
                                </a>
    													                            </div>
                        </div>
                        <div class="cg-w-con switchable-content" style="position: relative;  ">
                         <div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(30,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(31,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(32,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(33,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(34,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(35,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(36,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(37,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(38,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(39,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(40,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div>
                            
                        </div>
                    </div>
                    <!-- ������ end-->

                    <!-- �Ҳ���� -->
                    <div  class="cookingGeologyRight cg-wrap right  J_TWidget  "   data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1210], 'circular': true, 'activeTriggerCls':'curr','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
                        <div class="cg-w-tab">
                            
                            <div class="cg-w-t-item switchable-nav">
								    							                                <a class="fore1 ui-switchable-item curr" href="javascript:void(0)">
                                      <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>  <b></b>
                                        <span><?php echo position(40) ?></span>
                                    </a>
        						                                <a class="fore2 ui-switchable-item" href="javascript:void(0)">
                                      <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>  <b></b>
                                        <span><?php echo position(41) ?></span>
                                    </a>
        						                                <a class="fore3 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span><?php echo position(42) ?></span>
                                    </a>
        						                                <a class="fore4 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span><?php echo position(43) ?></span>
                                    </a>
        						                                <a class="fore5 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span><?php echo position(44) ?></span>
                                    </a>
        						                                <a class="fore6 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span><?php echo position(45) ?></span>
                                    </a>
        						                                <a class="fore7 ui-switchable-item" href="javascript:void(0)">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>   <b></b>
                                        <span><?php echo position(46) ?></span>
                                    </a>
        						                                <a class="fore8 ui-switchable-item" href="javascript:void(0)">
                                      <div class="cg-w-t-label" style="left: -13px; top: -50px; display:none; "></div>  <b></b>
                                        <span><?php echo position(47) ?></span>
                                    </a>
        						    							                            </div>
                        </div>
                        <div class="cg-w-con switchable-content" style="position: relative;  ">
                         <div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(40,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(41,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(42,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(43,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(44,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(45,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(46,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div><div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php $result=get_goods(47,4);foreach( $result as $r){ ?>	<li>
                                    <div class="p-img">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
    										<img class="err-product  pimg816303" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
    									</a>
                                    </div>
                                    <div class="p-name">
                                        <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                    </div>
                                    <div class="p-price" sku="816303">
                                        <strong>��<?php echo $r['coupon_price']?></strong>
                                    </div>
    								<div class="p-ext">
                                            <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                    </div>
                                </li>
                                
                                <?php }?>
 
    							    						                            </ul></div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ��ʳ���� end -->
           <div class="clr" style="clear:both;"></div>

        </div>
        
        <div class="blank"></div>

       <!-- ר�� -->    
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
           <div style="height:15px; clear:both;"></div>
        <!--banner----->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 5,1 '); 
		foreach ($result as $v) {    if(!empty($v['picture'])){  
		?><div style="height:20px; clear:both;"></div><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" src="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>	
</div>

<!--banner end----->
      <div class="wrap root61">
            <!-- ��1��-->
            <div data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'none',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable','duration':'0' }" class=" smFloor1 sm-floor m   J_TWidget" >

                <!-- tab -->
                <div class="sf-tab">
                    <ul class="clearfix switchable-nav">
                        					    <li class="ui-switchable-item  selected"><a href="javascript:void(0)"><?php echo position(48) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(49) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(50) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(51) ?></a></li>
    										                    </ul>
                </div>
                <!-- tab end -->

                <!-- left -->
                <div class="sf-l">
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 7,1 '); 
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
                            <?php $result=get_goods(48,10);foreach( $result as $r){ ?>
                         														
									<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
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
                            <?php $result=get_goods(49,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
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
                            <?php $result=get_goods(50,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=12 ORDER BY listorder ASC   LIMIT 10,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					<div class="item ui-switchable-panel selected">
                        <ul class="item-l clearfix">
                            <?php $result=get_goods(51,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=12 ORDER BY listorder ASC   LIMIT 15,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
                </div>
                <!-- right end -->
            </div>
            <!-- ��1�� end-->

            <div class="blank"></div>
               <!-- ��2��-->
            <div data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'none',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable','duration':'0' }" class=" smFloor2 sm-floor m   J_TWidget" >

                <!-- tab -->
                <div class="sf-tab">
                    <ul class="clearfix switchable-nav">
                        					    <li class="ui-switchable-item  selected"><a href="javascript:void(0)"><?php echo position(52) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(53) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(54) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(55) ?></a></li>
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
                            <?php $result=get_goods(52,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
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
                           <?php $result=get_goods(53,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
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
                            <?php $result=get_goods(54,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=13 ORDER BY listorder ASC   LIMIT 10,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					<div class="item ui-switchable-panel selected">
                        <ul class="item-l clearfix">
                            <?php $result=get_goods(55,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=13 ORDER BY listorder ASC   LIMIT 15,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
                </div>
                <!-- right end -->
            </div>
            <!-- ��2�� end-->

            <div class="blank"></div>
               <!-- ��3��-->
            <div data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'none',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable','duration':'0' }" class=" smFloor3 sm-floor m   J_TWidget" >

                <!-- tab -->
                <div class="sf-tab">
                    <ul class="clearfix switchable-nav">
                        					    <li class="ui-switchable-item  selected"><a href="javascript:void(0)"><?php echo position(56) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(57) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(59) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(60) ?></a></li>
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
                            <?php $result=get_goods(56,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
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
                           <?php $result=get_goods(57,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
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
                            <?php $result=get_goods(59,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=14 ORDER BY listorder ASC   LIMIT 10,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					<div class="item ui-switchable-panel selected">
                        <ul class="item-l clearfix">
                            <?php $result=get_goods(60,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=14 ORDER BY listorder ASC   LIMIT 15,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
                </div>
                <!-- right end -->
            </div>
            <!-- ��3�� end-->

            <div class="blank"></div>
               <!-- ��4��-->
            <div data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'none',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable','duration':'0' }" class=" smFloor4 sm-floor m   J_TWidget" >

                <!-- tab -->
                <div class="sf-tab">
                    <ul class="clearfix switchable-nav">
                        					    <li class="ui-switchable-item  selected"><a href="javascript:void(0)"><?php echo position(61) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(62) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(63) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(64) ?></a></li>
    										                    </ul>
                </div>
                <!-- tab end -->

                <!-- left -->
                <div class="sf-l">
                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 10,1 '); 
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
                            <?php $result=get_goods(61,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=15 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
                    <div class="item ui-switchable-panel">
                        <ul class="item-l clearfix">
                            <?php $result=get_goods(62,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=15 ORDER BY listorder ASC   LIMIT 5,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                        
                    </div>
					<div class="item ui-switchable-panel">
                       <ul class="item-l clearfix">
                            <?php $result=get_goods(63,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=15 ORDER BY listorder ASC   LIMIT 10,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					<div class="item ui-switchable-panel selected">
                        <ul class="item-l clearfix">
                            <?php $result=get_goods(64,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=15 ORDER BY listorder ASC   LIMIT 15,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
                </div>
                <!-- right end -->
            </div>
            <!-- ��4�� end-->

            <div class="blank"></div>
               <!-- ��5��-->
            <div data-widget-type="Carousel" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'none',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [290], 'circular': true, 'activeTriggerCls':'selected','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable','duration':'0' }" class=" smFloor2 sm-floor m   J_TWidget" >

                <!-- tab -->
                <div class="sf-tab">
                    <ul class="clearfix switchable-nav">
                        					    <li class="ui-switchable-item  selected"><a href="javascript:void(0)"><?php echo position(65) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(66) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(67) ?></a></li>
    					    					<li class="ui-switchable-item"><a href="javascript:void(0)"><?php echo position(68) ?></a></li>
    										                    </ul>
                </div>
                <!-- tab end -->

                <!-- left -->
                <div class="sf-l">
                    <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC   LIMIT 11,1 '); 
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
                            <?php $result=get_goods(65,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=16 ORDER BY listorder ASC   LIMIT 0,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
                    <div class="item ui-switchable-panel">
                        <ul class="item-l clearfix">
                            <?php $result=get_goods(66,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=16 ORDER BY listorder ASC   LIMIT 5,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                        
                    </div>
					<div class="item ui-switchable-panel">
                       <ul class="item-l clearfix">
                           <?php $result=get_goods(67,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=16 ORDER BY listorder ASC   LIMIT 10,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
					<div class="item ui-switchable-panel selected">
                        <ul class="item-l clearfix">
                            <?php $result=get_goods(68,10);foreach( $result as $r){ ?>	<li>
                                <div class="p-img">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank">
										<img class="err-product  pimg499985" width="100" height="100" data-img="1" data-lazy-img="done" alt="<?php echo $r['title']?>" src="<?php echo $r['pic_url']?>">
									</a>
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $r['detail_url']?>" title="<?php echo $r['title']?>" target="_blank"><?php echo $r['title']?></a>
                                </div>
                                <div class="p-price" sku="499985">
                                    <strong>��<?php echo $r['coupon_price']?></strong>
                                </div>
								<div class="p-ext">
                                    <a class="btn-s addCart" href="<?php echo $r['detail_url'];?>" title="<?php echo $r['title'];?>" target="_blank">��������</a>
                                </div>
                            </li>			
                            
                            <?php }?>	
													                        </ul>
                        <ul class="item-r">
        <?php $result=query('SELECT * FROM jae_brand WHERE typeid=16 ORDER BY listorder ASC   LIMIT 15,5 '); foreach ($result as $v) {
		?><li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img class="err-product" width="130" height="70" data-img="2" alt="" src="<?php echo $v['logo'];?>" data-lazy-img="done"></a> </li>
		<?php }
		?>	
                        </ul>
                    </div>
                </div>
                <!-- right end -->
            </div>
            <!-- ��5�� end-->
            <div class="blank"></div>
							<!--banner----->
<div class="banad">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 6,3 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){     
		?><div class="blank10"></div><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" src="<?php echo $v['picture'];?>"></a><div style="height:5px; clear:both;"></div>
		<?php  } }
		?>	
</div>
<!--banner end----->
        </div> 

		<!-- ���� -->
		<div class="wrap">
			<div class="jh">
						<?php $result=query('SELECT * FROM jae_link WHERE typeid=0 ORDER BY listorder ASC   LIMIT 0,50 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img src="<?php echo $v['logo'];?>"></a>
		<?php }
		?>	
				 </div>
		</div>
		<!-- ���� end-->

		
<div style="clear:both;"></div>
<?php include template('content','foot');?>

</div>