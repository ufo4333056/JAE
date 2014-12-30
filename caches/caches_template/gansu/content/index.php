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
        <li class="pic1 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; "><div class="banner-pic" style="background: url(http://img01.taobaocdn.com/imgextra/i1/2063404741/TB2jVoFXVXXXXauXpXXXXXXXXXX-2063404741.png) no-repeat 0 0;"></div></li>
        <li class="pic2 ks-switchable-panel-internal298" style="display: block; opacity: 1; position: absolute; z-index: 9; "><div class="banner-pic" style="background: url(http://img03.taobaocdn.com/imgextra/i3/2063404741/TB2nF.HXVXXXXctXXXXXXXXXXXX-2063404741.png) no-repeat 0 0;"></div></li>
        <li class="pic3 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; "><div class="banner-pic" style="background: url(http://img03.taobaocdn.com/imgextra/i3/2063404741/TB2hu.GXVXXXXcBXXXXXXXXXXXX-2063404741.png) no-repeat 0 0;"></div></li>
    </ul>
</div>
<div class="body_bg">
<!--首屏-->
<div class="wrap" style="height:400px; position:relative; ">
<div class="root61" style="z-index:22">
<div class="smCategorys">
                    <div class="sm-c-wrap J_TWidget"  data-widget-type="Slide" 
data-widget-config="{'navCls':'yslider-stick','contentCls':'yslider-stage','activeTriggerCls':'curr',
'delay':0.2,'effect':'fade','easing':'easeBoth','duration':0.8,'autoplay':false}" >
                        <div class="menu yslider-stick"  >
							<div class="item fore1 ">
                               
                                <span class="blank"></span>
                             <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=10 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=10 ORDER BY listorder,id ASC   LIMIT 1,10 '); 
											foreach ($result as $v) {
											?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
											<?php }
											?>
								 </div>
                            </div>	
							<div class="item fore2">
                               
                                <span class="blank"></span>
                             <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=16 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=16 ORDER BY listorder,id ASC   LIMIT 1,10 '); 
											foreach ($result as $v) {
											?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
											<?php }
											?>	
								 </div>
                            </div>	
                            <div class="item fore3">
                               
                                <span class="blank"></span>
                              <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=17 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=17 ORDER BY listorder,id ASC   LIMIT 1,10 '); 
											foreach ($result as $v) {
											?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
											<?php }
											?>	
								 </div>
                            </div>
                            <div class="item fore4">
                              
                                <span class="blank"></span>
                              <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=18 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=18 ORDER BY listorder,id ASC   LIMIT 1,10 '); 
											foreach ($result as $v) {
											?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
											<?php }
											?>	
								 </div>
                            </div>
                            <div class="item fore5">
                               
                                <span class="blank"></span>
                             <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=19 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=19 ORDER BY listorder,id ASC   LIMIT 1,10 '); 
											foreach ($result as $v) {
											?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
											<?php }
											?>	
								 </div>
                            </div>
                            <div class="item fore6">
                               
                                <span class="blank"></span>
                             <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=32 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?>
                                <h3><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></h3><?php }?>	
								
								<div class="ext">
								<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=32 ORDER BY listorder,id ASC   LIMIT 1,10 '); 
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

<div class="focus J_TWidget" data-widget-type="Slide" data-widget-config="{'navCls':'switchable-nav','contentCls':'switchable-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [710], 'circular': true, 'activeTriggerCls':'on','autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable'}" >
 	<div class="prev"></div><div class="next"></div>
	<div class="tabs-content switchable-content">
 		<?php   $sql="SELECT * FROM jae_focus WHERE  status=1 ORDER BY listorder ASC  ";
		
		$r_focus=query($sql); foreach ($r_focus as $r) {?>
       <div><a href="<?php echo $r["link"]?>" target="_blank"> <img src="<?php echo $r["picture"]?>" width="710" height="400"/></a></div>
        <?php }?>
 	</div> 
 	<div class="tabs-nav switchable-nav">
 		 <?php $r_focuss=query($sql); foreach ($r_focuss as $k=>$rs) {?>
          <div class="v<?php echo $k?>"></div>
        <?php }?>
 	</div>
</div>

<div class="bn">
<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 0,2 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){  
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="290" style="display:block"  src="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>

</div>
<div class="clear"></div>
</div>
<div class="blank"></div>
<!--首屏END-->

<div class="wrap">
<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 2,1 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){     
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>	
</div>

<!--积分换购 -->
<!--
<div style=" height:25px; clear:both;"></div>
<div class="wrap root61">
           
		   		<h2 class="jfhgzt">积分换购</h2>
				<div class="jfhgsm">积分换购为全额换购 无需付邮费</div>
				<div style="clear:both;"></div>
				<div class="jfhg">

				<?php $result=query('SELECT * FROM jae_exchange ORDER BY ID desc  LIMIT 0,4 ');
		foreach ($result as $v) {
		?><div class="jfhgkj"><a target="_blank" href="/index.php?m=exchange&c=index&a=exchange&id=<?php echo $v['id']?>" title="<?php echo $v['title'];?>"><div class="jfhgsp"><img data-ks-lazyload="<?php echo $v['pic_url'];?>"></div>
		<div class="jfhgbt"><?php echo $v['title'];?></div>
		<div class="jfhgjf">换购所需积分：<span><?php echo $v['point'];?></span>甘肃馆积分</div>
		<div class="jfhgyj">原价：￥<?php echo $v['price'];?></div></a>
		<a  target="_blank" href="/index.php?spm=a216r.7118237.1.21.oVIVsm&m=point&c=index&a=point_invite"><div class="jfhghq">点我获取积分</div></a>
		<a  target="_blank" href="<?php echo $v['detail_url'];?>"><div class="jfhghq jfhgck">查看宝贝详情</div></a></div>
		<?php }
		?>	
		   </div>
            </div>
-->			
		<!-- 积分换购end -->



<!-- 火爆热销 -->
<div style=" height:25px; clear:both;"></div>
<div class="wrap root61">
           
		   		<h2 class="jfhgzt">火爆热销</h2>
				<div class="jfhgsm"></div>
				<div style="clear:both;"></div>
				<div class="jdjby">

				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=ce4bb761bc4038a998578bc28f046966&action=position&posid=74&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=ce4bb761bc4038a998578bc28f046966&action=position&posid=74&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'74','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				<div class="jfhgkj"><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><div class="jfhgsp"><img data-ks-lazyload="<?php echo $r['thumb'];?>"></div>
		<div class="jdjgbt"><?php echo $r['title'];?></div>

		<div class="jdjljgm">立即购买</div></a></div>
		 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
		   </div>
            </div>
		<!-- 火爆热销 end-->
						<!--9.9包邮 -->
<div style=" height:25px; clear:both;"></div>
<div class="wrap">
  
 
        <div class="sk-con">
        <div class="sk-item">
        <ul class="clearfix">

                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=3ab29c546ebf3da3e8328275730cf193&action=position&posid=78&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=3ab29c546ebf3da3e8328275730cf193&action=position&posid=78&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'78','order'=>'listorder asc','limit'=>'4',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img width="240" height="240" data-ks-lazyload="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>￥<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['url'];?>" target="_blank">立即购买</a></div></li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                            
                                                     
                                                                                    
                            
                            
                            </ul>
        </div>
        </div>
       
      
        
        <div class="clear"> &nbsp;</div>
     
</div>
<!-- 9.9包邮end -->
		<!--抽奖 -->
<div style="height:30px; clear:both;"></div>
<div class="wrap root61">
           
		   		<h2>会员抽奖</h2>
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
				<a target="_blank" href="/index.php?spm=a216r.7118237.1.17.dF0fJJ&m=prize&c=index&a=init"><img data-ks-lazyload="http://img02.taobaocdn.com/imgextra/i2/2063404741/TB2c7fQXVXXXXbqXXXXXXXXXXXX-2063404741.jpg"></a>
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

		<!-- 抽奖end -->
<!-- 美食地理 -->
<div style="height:10px; clear:both;"></div>
<div class="wrap root61">
          <!-- 美食地理 -->
            <div  class=" cookingGeology m sm-wrap" clstag="firsttype|keycount|chaoshi|08">
                <div class="mt">
                     <h2>美食地图</h2>
                    <div class="ext">
                      <span class="describe">带您吃遍甘肃大地</span>
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
							<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 0,1 '); 
											foreach ($result as $v) {
											?><a class="fore1 ui-switchable-item curr" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                   <div class="cg-w-t-label" style="left:-6px; top: -50px; "></div> <b></b>
                                    <span><?php echo position(30) ?></span>
                                </a>
								<?php }
											?>
    						  <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 1,1 '); 
											foreach ($result as $v) {
											?>
    						                            <a class="fore3 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px;  "></div>  <b></b>
                                    <span><?php echo position(31) ?></span>
                                </a>
							<?php }
											?>
    						  <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 2,1 '); 
											foreach ($result as $v) {
											?>
    						                            <a class="fore5 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px;  "></div>  <b></b>
                                    <span><?php echo position(32) ?></span>
                                </a>
							<?php }
											?>
    						  <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 3,1 '); 
											foreach ($result as $v) {
											?>		
    						                            <a class="fore6 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px;  "></div>  <b></b>
                                    <span><?php echo position(33) ?></span>
                                </a>
								<?php }
											?>
											<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 4,1 '); 
											foreach ($result as $v) {
											?>  
											<a class="fore7 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px;  "></div>  <b></b>
                                    <span><?php echo position(76) ?></span>
                                </a>
								<?php }
											?>
    						  <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 5,1 '); 
											foreach ($result as $v) {
											?>            
    						                            <a class="fore8 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                  <div class="cg-w-t-label" style="left:-6px; top: -50px; "></div>  <b></b>
                                    <span><?php echo position(34) ?></span>
                                </a>
    						     <?php }
											?>
    						  <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 6,1 '); 
											foreach ($result as $v) {
											?>              
    						                            <a class="fore10 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                   <div class="cg-w-t-label" style="left:-6px; top: -50px;  "></div> <b></b>
                                    <span><?php echo position(35) ?></span>
                                </a> <?php }
											?>
    													                            </div>
                        </div>
                        <div class="cg-w-con switchable-content" style="position: relative;  ">
						<div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f9920f4550630ee01a1cb673ad80d2a4&action=position&posid=30&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f9920f4550630ee01a1cb673ad80d2a4&action=position&posid=30&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'30','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
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
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=81cf9e6f450c426012c76d181bf27b10&action=position&posid=31&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=81cf9e6f450c426012c76d181bf27b10&action=position&posid=31&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'31','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
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
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=03c2121a21146189d5899ee31b7bc995&action=position&posid=76&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=03c2121a21146189d5899ee31b7bc995&action=position&posid=76&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'76','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
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
                            
                            <div class="cg-w-t-item switchable-nav"> <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 7,1 '); 
											foreach ($result as $v) {
											?>  
								    							                                <a class="fore1 ui-switchable-item curr" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                      <div class="cg-w-t-label" style="left: -13px; top: -50px; "></div>  <b></b>
                                        <span><?php echo position(29) ?></span>
                                    </a>
        						     <?php }
											?>
											<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 8,1 '); 
											foreach ($result as $v) {
											?> 
											<a class="fore2 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px;  "></div>   <b></b>
                                        <span><?php echo position(77) ?></span>
                                    </a>
									<?php }
											?>
    						  <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 9,1 '); 
											foreach ($result as $v) {
											?>                  
        						                                <a class="fore3 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px;  "></div>   <b></b>
                                        <span><?php echo position(41) ?></span>
                                    </a>
									<?php }
											?>
    						  <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 10,1 '); 
											foreach ($result as $v) {
											?>
        						                                <a class="fore4 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; "></div>   <b></b>
                                        <span ><?php echo position(36) ?></span>
                                    </a>
									<?php }
											?>
    						  <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 11,1 '); 
											foreach ($result as $v) {
											?>
        						                                <a class="fore5 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px;  "></div>   <b></b>
                                        <span><?php echo position(37) ?></span>
                                    </a>
									<?php }
											?>
    						  <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 12,1 '); 
											foreach ($result as $v) {
											?>
        						                                <a class="fore6 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                     <div class="cg-w-t-label" style="left: -13px; top: -50px; "></div>   <b></b>
                                        <span><?php echo position(38) ?></span>
                                    </a>
									<?php }
											?>
    						  <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=31 ORDER BY listorder,id ASC   LIMIT 13,1 '); 
											foreach ($result as $v) {
											?>
        						                            
        						                                <a class="fore8 ui-switchable-item" href="<?php echo $v['link'];?>" target="_blank" style="cursor:pointer;">
                                      <div class="cg-w-t-label" style="left: -13px; top: -50px;  "></div>  <b></b>
                                        <span><?php echo position(39) ?></span>
                                    </a>
        						    	<?php }
											?>						                            </div>


                        </div>
                        <div class="cg-w-con switchable-content" style="position: relative;  ">
                        <div>   <ul class="clearfix item ui-switchable-panel selected" style="position: absolute; z-index: 1; opacity: 1; ">
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e1ef4f3c7963694c6c0a69c1787c8e74&action=position&posid=29&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e1ef4f3c7963694c6c0a69c1787c8e74&action=position&posid=29&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'29','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
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
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=8989e9cba0694c8c849f63d3d2ca1a0b&action=position&posid=77&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=8989e9cba0694c8c849f63d3d2ca1a0b&action=position&posid=77&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'77','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
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
 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=572ca3beee90054255803e3354bb100f&action=position&posid=37&order=id+desc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=572ca3beee90054255803e3354bb100f&action=position&posid=37&order=id+desc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'37','order'=>'id desc','limit'=>'4',));}?>
                                                                                                        
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
<!--美食地理END--> 

<!--特色品类-->
<div class="blank"> &nbsp;</div>
<div class="wrap tese">
  <div class="title"> <img src="http://img01.taobaocdn.com/imgextra/i1/2063404741/TB2EpnRXVXXXXbOXXXXXXXXXXXX-2063404741.png" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
<?php echo block(5);?>
<?php echo block(6);?>
        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--特色品类END--> 



<!--1楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img03.taobaocdn.com/imgextra/i3/2063404741/TB2EufHXVXXXXbxXXXXXXXXXXXX-2063404741.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
        <?php echo block(7);?>
        <div class="right">
          <div class="list">
            <ul>
			
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=1af57eb5914ad61ad4b375ab2b4dc191&action=position&posid=7&order=id+desc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=1af57eb5914ad61ad4b375ab2b4dc191&action=position&posid=7&order=id+desc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'7','order'=>'id desc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>			
		<li> <a href="<?php echo $r['url']?>" target="_blank"><img height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">￥<?php echo round($r['coupon_price'],1);?></span><span class="yj">￥<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">立即购买</span></a></li>  
                         <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

            </ul>
          </div>
        </div>
        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--1楼END--> 

<!--2楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img04.taobaocdn.com/imgextra/i4/2063404741/TB2SdfIXVXXXXbwXXXXXXXXXXXX-2063404741.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
        <?php echo block(8);?>
		<div class="right">
          <div class="list">
            <ul>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=017d8297d818fa426e675258d3f8fdba&action=position&posid=8&order=id+desc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=017d8297d818fa426e675258d3f8fdba&action=position&posid=8&order=id+desc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'8','order'=>'id desc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>			
		<li> <a href="<?php echo $r['url']?>" target="_blank"><img height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">￥<?php echo round($r['coupon_price'],1);?></span><span class="yj">￥<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">立即购买</span></a></li>  
                         <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
            </ul>
          </div>
        </div>
        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--2楼END--> 

<!--3楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img02.taobaocdn.com/imgextra/i2/2063404741/TB2JA.bXVXXXXbvXXXXXXXXXXXX-2063404741.jpg" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
        <?php echo block(34);?>
		<div class="right">
          <div class="list">
            <ul>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=7223efa3848c7d8b42f703e32e94d4e3&action=position&posid=75&order=id+desc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=7223efa3848c7d8b42f703e32e94d4e3&action=position&posid=75&order=id+desc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'75','order'=>'id desc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>			
		<li> <a href="<?php echo $r['url']?>" target="_blank"><img height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">￥<?php echo round($r['coupon_price'],1);?></span><span class="yj">￥<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">立即购买</span></a></li>  
                         <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
            </ul>
          </div>
        </div>
        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--3楼END-->

<!--4楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img04.taobaocdn.com/imgextra/i4/2063404741/TB2AkHJXVXXXXXbXXXXXXXXXXXX-2063404741.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
        <?php echo block(9);?>
		<div class="right">
          <div class="list">
            <ul>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=30b250eed86511d078a3ab7e816d14cd&action=position&posid=9&order=id+desc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=30b250eed86511d078a3ab7e816d14cd&action=position&posid=9&order=id+desc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'id desc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>			
		<li> <a href="<?php echo $r['url']?>" target="_blank"><img height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">￥<?php echo round($r['coupon_price'],1);?></span><span class="yj">￥<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">立即购买</span></a></li>  
                         <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
            </ul>
          </div>
        </div>
        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--4楼END--> 

<!--5楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img04.taobaocdn.com/imgextra/i4/2063404741/TB2zkPHXVXXXXbvXXXXXXXXXXXX-2063404741.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
        <?php echo block(10);?>
        <div class="right">
          <div class="list">
            <ul>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=b11cb678f337c0d2954966dcc86969b5&action=position&posid=10&order=id+desc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=b11cb678f337c0d2954966dcc86969b5&action=position&posid=10&order=id+desc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'id desc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>			
		<li> <a href="<?php echo $r['url']?>" target="_blank"><img height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">￥<?php echo round($r['coupon_price'],1);?></span><span class="yj">￥<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">立即购买</span></a></li>  
                         <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
            </ul>
          </div>
        </div>
        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--5楼END--> 
<!--6楼-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img03.taobaocdn.com/imgextra/i3/2063404741/TB28VjHXVXXXXbDXXXXXXXXXXXX-2063404741.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
        <?php echo block(11);?>
        <div class="right">
          <div class="list">
            <ul>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=5c8ecc8b8f301907759f9d671efb901b&action=position&posid=14&order=id+desc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=5c8ecc8b8f301907759f9d671efb901b&action=position&posid=14&order=id+desc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'14','order'=>'id desc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>			
		<li> <a href="<?php echo $r['url']?>" target="_blank"><img height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">￥<?php echo round($r['coupon_price'],1);?></span><span class="yj">￥<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">立即购买</span></a></li>  
                         <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
            </ul>
          </div>
        </div>
        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--6楼END--> 

<!--特色旅游-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img03.taobaocdn.com/imgextra/i3/2063404741/TB2oorEXVXXXXcUXXXXXXXXXXXX-2063404741.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
      <div class="lvyou">

        <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC  LIMIT 0,2 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){     
		?><div class="ly1 ly2 item"><a target="_blank" href="<?php echo $v['link'];?>"><img data-ks-lazyload="<?php echo $v['picture'];?>"></a></div>
		<?php } }
		?>	
		
		        <?php $result=query('SELECT * FROM jae_weblink WHERE typeid=22 ORDER BY listorder,id ASC  LIMIT 2,3 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){     
		?><div class="ly3 ly4 ly5 item"><a target="_blank" href="<?php echo $v['link'];?>"><img data-ks-lazyload="<?php echo $v['picture'];?>"></a></div>
		<?php } }
		?>	
		
        <div class="clear"></div></div>
      </div>
    </div>
  </div>
</div>
<div class="blank10"></div>
<!--特色旅游END--> 
							<!--banner----->
<div class="wrap">
<div class="banad2">
  		<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 3,3 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){     
		?><div class="blank10"></div><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" src="<?php echo $v['picture'];?>"></a><div style="height:5px; clear:both;"></div>
		<?php  } }
		?>	
</div>
</div>
<!--banner end----->
<!--友情链接-->
<div class="blank"></div>
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
</div>
<!--版权-->


		<?php include template('content','foot');?>
<!--版权END-->