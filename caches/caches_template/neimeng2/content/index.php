<?php defined('IN_JAE') or exit('No permission resources.'); ?><a name="f1"></a><?php include template('content','head');?>
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
<div class="xuanfu">
  <div class="md"><a href="#f1"></a><a href="#f2"></a><a href="#f3"></a><a href="#f4"></a><a href="#f5"></a><a href="#f6"></a><a href="#f7"></a><a href="#f8"></a><a href="#f9"></a><a href="#f1"></a></div>

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
<div class="sjjz" style="position:relative; width:1210px; margin:0 auto;">
<div class="qpsj " style="position:absolute; width:1920px; left:-355px;">
 <div class="focus J_TWidget" data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [1920], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
 	<div class="prev"></div><div class="next"></div>
	<div class="tab-content">
 		<?php   $sql="SELECT * FROM jae_focus WHERE  status=1 ORDER BY listorder ASC  ";
		
		$r_focus=query($sql); foreach ($r_focus as $r) {?>
       <div><a href="<?php echo $r["link"]?>" target="_blank"> <img src="<?php echo $r['picture'];?>" height="400"/></a></div>
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

<!--积分兑换-->
<a  name="f2"></a>
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
<!--秒杀102 -->
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=1bafcd828e2a1d01961bdc1cc337a338&action=position&posid=102&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=1bafcd828e2a1d01961bdc1cc337a338&action=position&posid=102&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'102','order'=>'listorder asc','limit'=>'4',));}?>
 <?php if($data) { ?>
<div class="wrap">
  <div class="ms J_TWidget" data-widget-type="Slide" data-widget-config="{'navCls':'ms-nav','contentCls':'ms-content','effect': 'fade',

'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'circular': true,'activeTriggerCls':'on','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
  <div class="tim"><?php echo date("Y年m月d日",SYS_TIME);?></div>
  
  <div class="ms-nav">
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <div class="<?php if ($n==1) echo "on" ?>"><?php echo date("H:i",$r[begin_time]);?></div>
  <?php $n++;}unset($n); ?>
 
  </div>
  
  <div class="ms-content" > <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
  	<div class="cnt ">
    <div class="cc"><?php echo date("H:i",$v[begin_time]);?>场</div>
    <table><tr><td>
    
   <a href="<?php echo $v['url'];?>" target="_blank"> <img src="<?php echo $v['thumb'];?>" width="430" height="330"></a></td>
    <td>
    
    <div class="details">
    <div class="tt"><?php $title=explode("#",$v[title]) ; echo $title[0]; ?></div>
    <div class="des"><?php echo $title[1]?></div>
    <div class="pr"><span class="jia1">￥1.00</span><span class="jia2">￥<?php echo $v['price'];?></span><span class="zb">准备开抢</span></div>
    
    <div class="kq">开抢时间：<?php echo date("m月d日 H时i分",$v[begin_time]);?></div>
    <?php if($v[begin_time]>SYS_TIME) {?>
    <div class="qg">抢购即将开始</div><?php }?>
     <?php if($v[begin_time]<SYS_TIME) {?><div class="ljqg"><a href="<?php echo $v['url'];?>" target="_blank">立即抢购</a></div><?php }?>
    
    
    
    
    </div>
    </td>
    <tr>
    </table>
    
    
 	</div><?php $n++;}unset($n); ?>
  </div>
  
  
  
  </div>
</div>
<?php } ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
<!--秒杀-->


<a  name="f3"></a>
<!--优质推荐-->
<div style="height:10px;"></div>
<div class="wrap">
<div class="youzhi J_TWidget"   data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<div class="title">
<div class="swap tab-nav"><span>居家美食</span><span>休闲时光</span></div>
</div>
<div class="con tab-content">
<div class="list ">
            <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=5bfa118c5016d7da71b62173639c88b9&action=position&posid=74&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=5bfa118c5016d7da71b62173639c88b9&action=position&posid=74&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'74','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
		<li> <a href="<?php echo $r['url'];?>" target="_blank"><img height="280" src="<?php echo $r['thumb'];?>" width="280" /><br />
                <div class="txt"><?php echo $r['title'];?></div>
                <div class="sj"><span class="jg">￥<?php echo round($r['coupon_price'],1);?></span><span class="yj">原价：￥<?php echo $r['price'];?></span></div><span class="gm"></span></a></li>
                        <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>  
            </ul>
          </div><div class="list ">
            <ul>
            
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c8d6e59d4cbda79230ea74157bcaaa9d&action=position&posid=75&order=listorder+asc&num=4\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c8d6e59d4cbda79230ea74157bcaaa9d&action=position&posid=75&order=listorder+asc&num=4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'75','order'=>'listorder asc','limit'=>'4',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
		<li> <a href="<?php echo $r['url'];?>" target="_blank"><img height="280" src="<?php echo $r['thumb'];?>" width="280" /><br />
                <div class="txt"><?php echo $r['title'];?></div>
                <div class="sj"><span class="jg">￥<?php echo round($r['coupon_price'],1);?></span><span class="yj">原价：￥<?php echo $r['price'];?></span></div><span class="gm"></span></a></li>
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
<a  name="f4"></a>
<div class="wrap">
<div class="jiujiu">
<div class="title">

</div>
<div class="con">
<div class="list">
            <ul>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=201fac90b05981a5ece67b4edfd41895&action=position&posid=76&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=201fac90b05981a5ece67b4edfd41895&action=position&posid=76&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'76','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
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
<a  name="f5"></a>
<div class="wrap">
<div class="tanxun J_TWidget"  data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">


<div class=" tab-content">
             
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=15512654e1b265bc29eef32f6fb41a14&action=position&posid=77&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=15512654e1b265bc29eef32f6fb41a14&action=position&posid=77&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'77','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c64ae45c3d13ff8bc2c5aeee918ec2b6&action=position&posid=78&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c64ae45c3d13ff8bc2c5aeee918ec2b6&action=position&posid=78&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'78','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=677e09f450afcd4a953391dcecf1c587&action=position&posid=79&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=677e09f450afcd4a953391dcecf1c587&action=position&posid=79&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'79','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=91837f7b39cf20523ddfe79d8f1576e9&action=position&posid=80&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=91837f7b39cf20523ddfe79d8f1576e9&action=position&posid=80&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'80','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=3432261a70d3edfa08bd4a41ae9acbaa&action=position&posid=81&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=3432261a70d3edfa08bd4a41ae9acbaa&action=position&posid=81&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'81','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f8a7f70e0fccd07c0b1aef0f0b6e6e95&action=position&posid=82&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f8a7f70e0fccd07c0b1aef0f0b6e6e95&action=position&posid=82&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'82','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f1694237a4cfb684682445c42d4bd622&action=position&posid=83&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f1694237a4cfb684682445c42d4bd622&action=position&posid=83&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'83','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=ef9ee639df8afbbf3f4391d3e4fe5766&action=position&posid=84&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=ef9ee639df8afbbf3f4391d3e4fe5766&action=position&posid=84&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'84','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=369f8dd7edb483fa5a3eb3063e668fbc&action=position&posid=85&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=369f8dd7edb483fa5a3eb3063e668fbc&action=position&posid=85&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'85','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=39baebc060823d8cbce3ffe37b4d857a&action=position&posid=86&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=39baebc060823d8cbce3ffe37b4d857a&action=position&posid=86&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'86','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=609fe764fe828a46f6fac5a312241d55&action=position&posid=87&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=609fe764fe828a46f6fac5a312241d55&action=position&posid=87&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'87','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="280" height="280" border="0" /></a><br>
    <?php echo $r['title'];?></li>
  <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> 
</ul>
<ul class="list" >
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=7d40b147cc9d1736334c93c31fc71de1&action=position&posid=88&order=listorder+asc&num=6\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=7d40b147cc9d1736334c93c31fc71de1&action=position&posid=88&order=listorder+asc&num=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'88','order'=>'listorder asc','limit'=>'6',));}?>
                                                                                                        
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
巴彦淖尔市
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
      <div class="tit"><span class="t">行军粮草</span><span class="des">草原特产 正宗蒙古味道</span></div>
        <div><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=e6cadf69a85365878836be62b0fe3fa2&pos=shucai-1\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=e6cadf69a85365878836be62b0fe3fa2&pos=shucai-1\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'shucai-1',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> </div>
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
      <div class="li3_t"><div class="tit"><span class="t">蒙古奶酪</span><span class="des">传统奶食 古法新传</span></div>
        <div><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=5c706cc24b16f920897f08c966e739de&pos=shucai-2\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=5c706cc24b16f920897f08c966e739de&pos=shucai-2\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'shucai-2',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> </div>
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
      <div class="li3_t"><div class="tit"><span class="t">草原生鲜</span><span class="des">鲜牛羊肉 从草原直达餐桌</span></div>
        <div><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=24bc53b8c348617f4b7dd233df74b6ad&pos=shucai-3\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=24bc53b8c348617f4b7dd233df74b6ad&pos=shucai-3\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'shucai-3',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> </div>
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
      <div class="li3_t"><div class="tit"><span class="t">米面粮油</span><span class="des">草原生态粮油 原产地直供</span></div>
        <div><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=dacd98095de743f15040735d10487597&pos=shucai-4\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=dacd98095de743f15040735d10487597&pos=shucai-4\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('pos'=>'shucai-4',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?> </div>
      </div>
    </div>

      <div class="clear"></div>
      </div>  
      </div>
      <div class="blank"></div>

<!--1楼-->
<a  name="f6"></a>
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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=71f645d55d154cb2c1e9207bad15e357&action=position&posid=89&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=71f645d55d154cb2c1e9207bad15e357&action=position&posid=89&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'89','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=90eec7f36cc280329a2f6573617cfa2e&action=position&posid=90&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=90eec7f36cc280329a2f6573617cfa2e&action=position&posid=90&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'90','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=a94c73cbc69e771f941fde786575bed2&action=position&posid=91&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=a94c73cbc69e771f941fde786575bed2&action=position&posid=91&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'91','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<a  name="f7"></a>
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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=2c06a3c16422b2064043cec1a3305b80&action=position&posid=92&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=2c06a3c16422b2064043cec1a3305b80&action=position&posid=92&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'92','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=35bfcd79bb98971b5bac433ca7a0d38e&action=position&posid=93&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=35bfcd79bb98971b5bac433ca7a0d38e&action=position&posid=93&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'93','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=1ade0a6a58af71bb0ee66e9db628a1c8&action=position&posid=94&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=1ade0a6a58af71bb0ee66e9db628a1c8&action=position&posid=94&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'94','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<a  name="f8"></a>
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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=cab9615547e18df2e7bacc3b169e7b01&action=position&posid=95&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=cab9615547e18df2e7bacc3b169e7b01&action=position&posid=95&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'95','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=a1a5366cfe6f677a6dfb2e3438d06cc2&action=position&posid=96&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=a1a5366cfe6f677a6dfb2e3438d06cc2&action=position&posid=96&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'96','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=5481aafb901907f23ddd98ce78d297bd&action=position&posid=97&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=5481aafb901907f23ddd98ce78d297bd&action=position&posid=97&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'97','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<a  name="f9"></a>
<div class="wrap">
<div  class="louceng J_TWidget"   data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav2','contentCls':'tab-content2','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [620], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
<div class="title" style="background:url(http://img04.taobaocdn.com/imgextra/i4/1863579612/TB2tr.9aXXXXXaEXXXXXXXXXXXX_!!1863579612.png) no-repeat"> <div class="swap tab-nav2"><span class="on">珍味特产</span><span>草原情怀</span><span>特色风味</span></div>  </div>
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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f73dee1133a3e6f452701eb2b7e79b61&action=position&posid=98&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f73dee1133a3e6f452701eb2b7e79b61&action=position&posid=98&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'98','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=f344b7e9408e28bd96a9a4f7673f381f&action=position&posid=99&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=f344b7e9408e28bd96a9a4f7673f381f&action=position&posid=99&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'99','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=26dc2cd74f5643ed1598e833caeb414f&action=position&posid=100&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=26dc2cd74f5643ed1598e833caeb414f&action=position&posid=100&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'100','order'=>'listorder asc','limit'=>'10',));}?>
                                                                                                        
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
<div class="item"><a href="<?php echo $r['url'];?>"  target="_blank">
<div class="img">
<img src="<?php echo $r['thumb'];?>" height="160" width="160"></div>
<div class="tit"><?php echo $r['title'];?></div>
<div class="cxj">热销￥<span><?php echo round($r['coupon_price'],1);?></span></div> <div class="gm">立即抢购</div>

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
