<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head2');?>
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

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=c48e16dbd8278d8301abbc5c84a59774&action=lists&id=185&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=c48e16dbd8278d8301abbc5c84a59774&action=lists&id=185&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'185','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<div class="body_w" style="background-image:url(<?php echo $r['picture'];?>);background-repeat: repeat;">
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	

<!--首焦-->
<div class="wrap" style="height:420px; position:relative;">
<div class="root61" style="z-index:22">
<div class=" smCategorys">
                    <div class="sm-c-wrap">
                        <div class="menu switchable-nav">
							<div class="item fore1">
                                <i class="i1"></i>
                                <span class="blank"></span>
							
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=fbfd1bf4a40dbeac9ac0541dc24484f6&action=lists&typeid=10&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=fbfd1bf4a40dbeac9ac0541dc24484f6&action=lists&typeid=10&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('typeid'=>'10','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
                                <h3><a href="<?php echo $r['link'];?>" target="_blank"><?php echo $r['title'];?></a></h3>
								 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
								
								<div class="ext">
								   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=659bfc50112d9edffb3f5716f62311d9&action=lists&typeid=10&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=659bfc50112d9edffb3f5716f62311d9&action=lists&typeid=10&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('typeid'=>'10','order'=>'listorder ASC','limit'=>'20',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?><?php if($n>1) { ?>
								<a href="<?php echo $r['link'];?>" target="_blank"><?php echo $r['title'];?></a>
								<?php } ?>			
											<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
								 </div>
                            </div>	
							<div class="item fore2">
                                <i class="i2"></i>
                                <span class="blank"></span>
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=ea0a9866571de93d8ad19c9250246eec&action=lists&typeid=16&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=ea0a9866571de93d8ad19c9250246eec&action=lists&typeid=16&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('typeid'=>'16','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
                                <h3><a href="<?php echo $r['link'];?>" target="_blank"><?php echo $r['title'];?></a></h3>
								 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
								
								<div class="ext">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=10afa1e3dd018f0207be14f349ae285c&action=lists&typeid=16&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=10afa1e3dd018f0207be14f349ae285c&action=lists&typeid=16&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('typeid'=>'16','order'=>'listorder ASC','limit'=>'20',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?><?php if($n>1) { ?>
								<a href="<?php echo $r['link'];?>" target="_blank"><?php echo $r['title'];?></a>
								<?php } ?>			
											<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
								 </div>
                            </div>	
                            <div class="item fore3">
                                <i class="i3"></i>
                                <span class="blank"></span>
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=0d04e7787a9a3af53f5c85854f01db9b&action=lists&typeid=17&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=0d04e7787a9a3af53f5c85854f01db9b&action=lists&typeid=17&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('typeid'=>'17','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
                                <h3><a href="<?php echo $r['link'];?>" target="_blank"><?php echo $r['title'];?></a></h3>
								 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
								
								<div class="ext">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=dc6f3f04b7c0bf5f710b33211db949a2&action=lists&typeid=17&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=dc6f3f04b7c0bf5f710b33211db949a2&action=lists&typeid=17&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('typeid'=>'17','order'=>'listorder ASC','limit'=>'20',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?><?php if($n>1) { ?>
								<a href="<?php echo $r['link'];?>" target="_blank"><?php echo $r['title'];?></a>
								<?php } ?>			
											<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
								 </div>
                            </div>
                            <div class="item fore4">
                                <i class="i4"></i>
                                <span class="blank"></span>
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=1ef57e5654162d5aead24c6937597b6c&action=lists&typeid=18&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=1ef57e5654162d5aead24c6937597b6c&action=lists&typeid=18&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('typeid'=>'18','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
                                <h3><a href="<?php echo $r['link'];?>" target="_blank"><?php echo $r['title'];?></a></h3>
								 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
								
								<div class="ext">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=86b75660d3e42ee4e29123012301db19&action=lists&typeid=18&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=86b75660d3e42ee4e29123012301db19&action=lists&typeid=18&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('typeid'=>'18','order'=>'listorder ASC','limit'=>'20',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?><?php if($n>1) { ?>
								<a href="<?php echo $r['link'];?>" target="_blank"><?php echo $r['title'];?></a>
								<?php } ?>		
											<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
								 </div>
                            </div>
                            <div class="item fore5">
                                <i class="i5"></i>
                                <span class="blank"></span>
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=dd282ce42fde959e6a44cda1e470685e&action=lists&typeid=19&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=dd282ce42fde959e6a44cda1e470685e&action=lists&typeid=19&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('typeid'=>'19','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
                                <h3><a href="<?php echo $r['link'];?>" target="_blank"><?php echo $r['title'];?></a></h3>
								 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
								
								<div class="ext">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=158246be5f5778db2fd5132944aca82a&action=lists&typeid=19&order=listorder+ASC+&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=158246be5f5778db2fd5132944aca82a&action=lists&typeid=19&order=listorder+ASC+&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('typeid'=>'19','order'=>'listorder ASC ','limit'=>'20',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?><?php if($n>1) { ?>
								<a href="<?php echo $r['link'];?>" target="_blank"><?php echo $r['title'];?></a>
								<?php } ?>			
											<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
								 </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
</div>



</div>
<!--shoujiao-->
<div class="sjjz">
<div class="qpsj ">
 <div class="focus J_TWidget" data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
 	<div class="prev"></div><div class="next"></div>
	<div class="tab-content">
 		<?php   $sql="SELECT * FROM jae_focus WHERE  status=1 ORDER BY listorder ASC  ";
		
		$r_focus=query($sql); foreach ($r_focus as $r) {?>
       <div><a href="<?php echo $r["link"]?>" target="_blank"> <img src="http://img02.taobaocdn.com/imgextra/i2/1863579612/TB22rNyapXXXXbpXXXXXXXXXXXX_!!1863579612.jpg" height="400"/></a></div>
        <?php }?>
 	</div>
 	<div class="tab-nav">
 		 <?php $r_focuss=query($sql); foreach ($r_focuss as $k=>$rs) {?>
          <div class="v<?php echo $k?>"></div>
        <?php }?>
 	</div>
</div>
</div>
</div>
<!--shoujia end-->
<div class="wrap">				 
<div class="fl" style="margin-right:5px;">
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=c6fd7403822181b7450aa0463594257b&action=lists&id=170&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=c6fd7403822181b7450aa0463594257b&action=lists&id=170&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'170','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" /></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
</div>
<div class="fl">
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=a5257e2deba1329b6d9f53dabda02949&action=lists&id=171&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=a5257e2deba1329b6d9f53dabda02949&action=lists&id=171&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'171','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" /></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
</div>

<div class="fr">
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=b6b19278882c73e9be2ab6d026b3a3b8&action=lists&id=172&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=b6b19278882c73e9be2ab6d026b3a3b8&action=lists&id=172&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'172','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a href="<?php echo $r['link'];?>" target="_blank"><img src="<?php echo $r['picture'];?>" /></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
</div>
<div class="clear"></div>
</div>
<div class="blank"></div>
<!--秒杀-->
<div class="wrap">
<div class="sec">
<a href="http://neimenggu.china.taobao.com/index.php?spm=a216r.7173997.1.15.cSK9Dn&m=seckill&c=index&a=init"  target="_blank">
<?php $hour=Date('Hs',SYS_TIME);  ?>
<div class="time <?php if (800<$hour && $hour<=1000 ){ echo "current";}?> ">
<span><?php if (800<$hour && $hour<=1000 ){ echo "秒杀开始";}else { echo "秒杀结束"} ?></span>
<i>10:00</i>
</div>
<div class="time <?php if (1000<$hour && $hour<=1200 ){ echo "current";}?> ">
<span><?php if (1000<$hour && $hour<=1200 ){ echo "秒杀开始";}else { echo "秒杀结束"} ?></span>
<i>12:00</i>
</div>
<div class="time <?php if (1200<$hour && $hour<=1500 ){ echo "current";}?> ">
<span><?php if (1200<$hour && $hour<=1500 ){ echo "秒杀开始";}else { echo "秒杀结束"} ?></span>
<i>15:00</i>
</div>
<div class="time <?php if ( 1500 <$hour && $hour <= 1700 ) echo 'current';?>">
<span><?php if (1500<$hour && $hour<=1700 ){ echo "秒杀开始";}else { echo "秒杀结束"} ?></span>
<i>17:00</i>
</div>
<div class="time <?php if (1700<$hour && $hour<=2000 ){ echo "current";}?> ">
<span><?php if (1700<$hour && $hour<=2000 ){ echo "秒杀开始";}else { echo "秒杀结束"} ?></span>
<i>20:00</i>
</div>
<div class="time <?php if (2000<$hour && $hour<=2200 ){ echo "current";}?> ">
<span><?php if (2000<$hour && $hour<=2200 ){ echo "秒杀开始";}else { echo "秒杀结束"} ?></span>
<i>22:00</i>
</div>

</a>

</div>

</div>

<!--秒杀-->



<!--优质推荐-->
<div style="height:10px;"></div>
<div class="wrap">
<div class="youzhi J_TWidget"   data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<div class="title">
<div class="swap tab-nav"><span>鲜米杂粮</span><span>佐餐调味</span></div>
</div>
<div class="con tab-content">
<div class="list ">
            <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=2b02159bb28edd0104d260bb3efca791&action=position&posid=7&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=2b02159bb28edd0104d260bb3efca791&action=position&posid=7&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'7','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
		<li> <a href="<?php echo $r['url'];?>" target="_blank"><img height="280" src="<?php echo $r['thumb'];?>" width="280" /><br />
                <div class="txt"><?php echo $r['title'];?></div>
                <div class="sj"><span class="jg">￥<?php echo round($r['coupon_price']);?></span><span class="yj">原价：￥<?php echo $r['price'];?></span></div><span class="gm"></span></a></li>
                        <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>  
            </ul>
          </div><div class="list ">
            <ul>
            
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e5e2af994e7cae08630ea50d678a4f10&action=position&posid=8&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e5e2af994e7cae08630ea50d678a4f10&action=position&posid=8&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'8','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
		<li> <a href="<?php echo $r['url'];?>" target="_blank"><img height="280" src="<?php echo $r['thumb'];?>" width="280" /><br />
                <div class="txt"><?php echo $r['title'];?></div>
                <div class="sj"><span class="jg">￥<?php echo round($r['coupon_price']);?></span><span class="yj">原价：￥<?php echo $r['price'];?></span></div><span class="gm"></span></a></li>
                        <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
                        
            </ul>
          </div>
</div>
<div class="bt"></div>
</div>

</div>
<div class="blank"></div>
        <!--banner-->
		<div class="wrap">
<div class="banad">
  		 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=93d7d188e57673d4e25f6c7510b0cc1e&action=lists&id=77&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=93d7d188e57673d4e25f6c7510b0cc1e&action=lists&id=77&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'77','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
 <a target="_blank" href="<?php echo $r['link'];?>"><img width="1210" data-ks-lazyload="<?php echo $r['picture'];?>"></a>
		<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>
</div>
<div style="height:15px; clear:both;"></div>
<!--banner end-->
<!--九九-->

<div class="wrap">
<div class="jiujiu">
<div class="title">

</div>
<div class="con">
<div class="list">
            <ul>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=91f7849d9e8646e70cf35d663f338492&action=position&posid=9&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=91f7849d9e8646e70cf35d663f338492&action=position&posid=9&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
		<li> <a href="<?php echo $r['url'];?>" target="_blank"><img height="280" src="<?php echo $r['thumb'];?>" width="280" /><br />
                <div class="txt"><?php echo $r['title'];?></div>
                <div class="sj"><span class="jg">￥<?php echo round($r['coupon_price'],1);?></span><span class="yj">原价：￥<?php echo $r['price'];?></span></div><span class="gm"></span></a></li>
                        <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
            </ul>
            <div class="clear"></div>
          </div>
</div>
</div>
</div>
<div class="blank"></div>
<!--探寻内蒙古-->
<div class="wrap">
<div class="tanxun J_TWidget"  data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">


<div class=" tab-content">
             
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=6431b1a4a2166b549c439013781b6af6&action=position&posid=36&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=6431b1a4a2166b549c439013781b6af6&action=position&posid=36&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'36','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=094e03babad955c1ef915ca0e9f485d0&action=position&posid=39&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=094e03babad955c1ef915ca0e9f485d0&action=position&posid=39&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'39','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=d483e9ea7232e29bae8cc203d5bff399&action=position&posid=34&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=d483e9ea7232e29bae8cc203d5bff399&action=position&posid=34&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'34','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=073531f232d4422c9c98ac3d40ad74b1&action=position&posid=33&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=073531f232d4422c9c98ac3d40ad74b1&action=position&posid=33&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'33','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=2ae1328f25d47e6b1750f107e99166c7&action=position&posid=40&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=2ae1328f25d47e6b1750f107e99166c7&action=position&posid=40&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'40','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=949410eafa76184755a73bfab8dfafaa&action=position&posid=38&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=949410eafa76184755a73bfab8dfafaa&action=position&posid=38&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'38','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=d02a77157cfc744e5375bf71a04b9e26&action=position&posid=31&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=d02a77157cfc744e5375bf71a04b9e26&action=position&posid=31&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'31','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=5b66ab823663ecf901e4a14dce2093b0&action=position&posid=30&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=5b66ab823663ecf901e4a14dce2093b0&action=position&posid=30&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'30','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=873041e2efd3092ec97e9cc627217d99&action=position&posid=37&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=873041e2efd3092ec97e9cc627217d99&action=position&posid=37&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'37','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=cad2ac420fb795128582ffabfcf035d2&action=position&posid=35&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=cad2ac420fb795128582ffabfcf035d2&action=position&posid=35&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'35','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=e615377c9e7687c449134b7fe8a3d22b&action=position&posid=32&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=e615377c9e7687c449134b7fe8a3d22b&action=position&posid=32&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'32','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=a4c1d4dde0d937de6da3f85d7ef643ab&action=position&posid=41&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=a4c1d4dde0d937de6da3f85d7ef643ab&action=position&posid=41&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'41','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
             

</div>



<div class="ditu tab-nav">
<div class="qu1">
<span></span>
呼伦贝尔市
</div>
<div class="qu2">
<span></span>
兴安盟
</div>
<div class="qu3"><span></span>
通辽市
</div>
<div class="qu4"><span></span>
赤峰市
</div>
<div class="qu5"><span></span>
锡林郭勒盟
</div>
<div class="qu6"><span></span>
乌兰察布市
</div>
<div class="qu7"><span></span>
包头市
</div>
<div class="qu8"><span></span>
呼和浩特市
</div>
<div class="qu9"><span></span>
巴颜淖尔市
</div>
<div class="qu10"><span></span>
鄂尔多斯市
</div>
<div class="qu11"><span></span>
乌海市
</div>
<div class="qu12"><span></span>
阿拉善盟
</div>

</div>
</div>

</div>


<!--9.9包邮 -->

       <div class="blank"></div>
    <!-- 特色品类 -->     

      <div class="wrap">
      <div class="pinlei">
     
    <div class="li3">
      <div class="li3_img"> 
  		 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=02d755253663379ad470bf8c8f731227&action=lists&id=106&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=02d755253663379ad470bf8c8f731227&action=lists&id=106&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'106','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
 <a target="_blank" href="<?php echo $r['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $r['picture'];?>"></a>
		<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
	  </div>
      <div class="li3_t">
      <div class="tit"><span class="t">天山百果</span><span class="des">新鲜上市 产地直供</span></div>
        <div><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=f74965672ad7f6e613f42e1e62ccc2e2&pos=shuiguo-1\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=f74965672ad7f6e613f42e1e62ccc2e2&pos=shuiguo-1\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'shuiguo-1',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> </div>
      </div>
    </div>
    <div class="li3">
            <div class="li3_img"> 
  		 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=4fff7339c868e3d264aaf57bcfc407c4&action=lists&id=107&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=4fff7339c868e3d264aaf57bcfc407c4&action=lists&id=107&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'107','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
 <a target="_blank" href="<?php echo $r['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $r['picture'];?>"></a>
		<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
	  </div>
      <div class="li3_t"><div class="tit"><span class="t">丝路养生</span><span class="des">滋补养生 颐养生命</span></div>
        <div><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=a09d1893058b68f1b2bc46d6e023f139&pos=shuiguo-2\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=a09d1893058b68f1b2bc46d6e023f139&pos=shuiguo-2\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'shuiguo-2',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> </div>
      </div>
    </div>
    <div class="li3">
      <div class="li3_img"> 
  		 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=dd0430593b77d68bdcd48675f650c485&action=lists&id=108&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=dd0430593b77d68bdcd48675f650c485&action=lists&id=108&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'108','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
 <a target="_blank" href="<?php echo $r['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $r['picture'];?>"></a>
		<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
	  </div>
      <div class="li3_t"><div class="tit"><span class="t">特色小吃</span><span class="des">前年的发展 亮丽的风景线</span></div>
        <div><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=0a17d08d4d5bdbac77bdbdf6dea66dff&pos=shuiguo-3\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=0a17d08d4d5bdbac77bdbdf6dea66dff&pos=shuiguo-3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'shuiguo-3',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> </div>
      </div>
    </div>
    <div class="li3">
      <div class="li3_img"> 
  		 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=8f758e9d453fd239fc3e1f9c6b6f8570&action=lists&id=109&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=8f758e9d453fd239fc3e1f9c6b6f8570&action=lists&id=109&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'109','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
 <a target="_blank" href="<?php echo $r['link'];?>"><img data-img="2" style="float:none;margin:0px;" width="100" height="80" data-ks-lazyload="<?php echo $r['picture'];?>"></a>
		<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
	  </div>
      <div class="li3_t"><div class="tit"><span class="t">特色工艺</span><span class="des">人们世代智慧的传承</span></div>
        <div><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=6126a69ec49be8ff20ecd3943e0494dd&pos=shuiguo-4\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=6126a69ec49be8ff20ecd3943e0494dd&pos=shuiguo-4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'shuiguo-4',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> </div>
      </div>
    </div>

      <div class="clear"></div>
      </div>  
      </div>
      <div class="blank"></div>

<!--1楼-->
<div class="wrap">
<div  class="louceng J_TWidget"   data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav2','contentCls':'tab-content2','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<div class="title" style="background:url(http://img02.taobaocdn.com/imgextra/i2/1863579612/TB2_Dg9aXXXXXamXXXXXXXXXXXX_!!1863579612.png) no-repeat"> <div class="swap tab-nav2"><span class="on">美味零食</span><span>传统奶茶</span><span>牧场鲜奶</span></div>  </div>
<div class="tab-content2">
<div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=0dfa6ba0b36e35c180b125ff568b4be7&action=lists&id=173&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=0dfa6ba0b36e35c180b125ff568b4be7&action=lists&id=173&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'173','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=8e3b64c070c9dd850bdcd286a79eb8ca&action=position&posid=10&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=8e3b64c070c9dd850bdcd286a79eb8ca&action=position&posid=10&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>     
</div>
<div class="clear"></div>
</div>
<div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=b7248d155311004362a0b3262c6fa108&action=lists&id=174&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=b7248d155311004362a0b3262c6fa108&action=lists&id=174&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'174','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
 </div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=37ce7cd0a40b0e3d392bda8c876e6587&action=position&posid=14&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=37ce7cd0a40b0e3d392bda8c876e6587&action=position&posid=14&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'14','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div>
<div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=a5232a251d157ee55fc9b4aff3603316&action=lists&id=175&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=a5232a251d157ee55fc9b4aff3603316&action=lists&id=175&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'175','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=0f176ee658b82a579fea4bac2ffc5f07&action=position&posid=15&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=0f176ee658b82a579fea4bac2ffc5f07&action=position&posid=15&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'15','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div>
</div>

</div>
</div>
<div class="blank"></div>
<!--2楼-->
<div class="wrap">
<div  class="louceng J_TWidget"   data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav2','contentCls':'tab-content2','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<div class="title" style="background:url(http://img04.taobaocdn.com/imgextra/i4/1863579612/TB2I_s5aXXXXXX4XpXXXXXXXXXX_!!1863579612.png) no-repeat"> <div class="swap tab-nav2"><span class="on">风干牛肉</span><span>草原全羊</span><span>经典小食</span></div>  </div>
<div class="tab-content2">
<div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=a2d78784c7a4e2df9a6f26bb41ef870c&action=lists&id=176&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=a2d78784c7a4e2df9a6f26bb41ef870c&action=lists&id=176&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'176','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=068d2c82aecdf8fe1c946c7455357593&action=position&posid=16&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=068d2c82aecdf8fe1c946c7455357593&action=position&posid=16&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div><div class="cons ">
<div class="l_img"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=80ecb6c19e3ea8cbd912056a91a02c08&action=lists&id=177&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=80ecb6c19e3ea8cbd912056a91a02c08&action=lists&id=177&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'177','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
 </div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=547b5561f7a200b33b6bce83b6603842&action=position&posid=17&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=547b5561f7a200b33b6bce83b6603842&action=position&posid=17&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'17','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div><div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=674bffd22e123c3a7d966da23bd127df&action=lists&id=178&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=674bffd22e123c3a7d966da23bd127df&action=lists&id=178&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'178','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=dd29aabfc85582cc71ad80af9956b07b&action=position&posid=18&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=dd29aabfc85582cc71ad80af9956b07b&action=position&posid=18&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div>
</div>

</div>
</div>
<div class="blank"></div>
<!--3楼-->
<div class="wrap">
<div  class="louceng J_TWidget"   data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav2','contentCls':'tab-content2','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<div class="title" style="background:url(http://img01.taobaocdn.com/imgextra/i1/1863579612/TB2QH78aXXXXXbJXXXXXXXXXXXX_!!1863579612.png) no-repeat"> <div class="swap tab-nav2"><span class="on">草原鲜米</span><span>精选杂粮</span><span>佐餐调味</span></div>  </div>
<div class="tab-content2">
<div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=d4bbc702264b80783ddface97f287db0&action=lists&id=179&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=d4bbc702264b80783ddface97f287db0&action=lists&id=179&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'179','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=366626f77e5750ad5bc359123d14f417&action=position&posid=20&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=366626f77e5750ad5bc359123d14f417&action=position&posid=20&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div><div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=86cbb36c63bcd4454d7d764c13a51c80&action=lists&id=180&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=86cbb36c63bcd4454d7d764c13a51c80&action=lists&id=180&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'180','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=7b82308ea73efd075db8a04fe7adc31d&action=position&posid=21&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=7b82308ea73efd075db8a04fe7adc31d&action=position&posid=21&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div><div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=4677c98674c86e3fab25ebe379ad5062&action=lists&id=181&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=4677c98674c86e3fab25ebe379ad5062&action=lists&id=181&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'181','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=2c5b96184d361dd0ecf8d74f7e304d40&action=position&posid=22&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=2c5b96184d361dd0ecf8d74f7e304d40&action=position&posid=22&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div>
</div>

</div>
</div>
      <div class="blank"></div>
<!--4楼-->
<div class="wrap">
<div  class="louceng J_TWidget"   data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav2','contentCls':'tab-content2','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<div class="title" style="background:url(http://img04.taobaocdn.com/imgextra/i4/1863579612/TB2tr.9aXXXXXaEXXXXXXXXXXXX_!!1863579612.png) no-repeat"> <div class="swap tab-nav2"><span class="on">蒙古特色</span><span>手工制品</span><span>精品羊绒</span></div>  </div>
<div class="tab-content2">
<div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=7c9c0a6f07792ee4bad2f9e81fe22ab7&action=lists&id=182&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=7c9c0a6f07792ee4bad2f9e81fe22ab7&action=lists&id=182&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'182','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=276e731df5ace4902c10ece4d57fda6e&action=position&posid=23&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=276e731df5ace4902c10ece4d57fda6e&action=position&posid=23&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'23','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div><div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=7f0aa5922e4d3e4dc48d4380776d6954&action=lists&id=183&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=7f0aa5922e4d3e4dc48d4380776d6954&action=lists&id=183&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'183','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=ffdf7c2f9735697086b1395e993e2af1&action=position&posid=24&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=ffdf7c2f9735697086b1395e993e2af1&action=position&posid=24&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div><div class="cons ">
<div class="l_img">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=f99436bc9fb5ca07075c2911bd0cf4c7&action=lists&id=184&num=1&order=listorder+ASC&return=asd\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=f99436bc9fb5ca07075c2911bd0cf4c7&action=lists&id=184&num=1&order=listorder+ASC&return=asd\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$asd = $weblink_tag->lists(array('id'=>'184','order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($asd)) foreach($asd AS $r) { ?>
<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['picture'];?>" width="260" height="470"></a>
<?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>	
</div>

<div class="r_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=0503b8c54e3f8ad87d527f8e749cbfeb&action=position&posid=25&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=0503b8c54e3f8ad87d527f8e749cbfeb&action=position&posid=25&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">促销价￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

</a>
</div>
 <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</div>
<div class="clear"></div>
</div>
</div>

</div>
</div>
       
<div class="blank"></div>
     

		<!-- 友链 -->
		<div class="wrap">
			<div class="jh">
						<?php $result=query('SELECT * FROM jae_link WHERE typeid=0 AND listorder!=0 AND passed=1 ORDER BY listorder ASC   LIMIT 0,50 '); 
		foreach ($result as $v) {
		?><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><img data-ks-lazyload="<?php echo $v['logo'];?>"></a>
		<?php }
		?>	
				 </div>
		</div>
		<!-- 友链 end-->

<div class="blank"></div>
<?php include template('content','foot');?>

</div>
