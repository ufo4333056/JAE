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
        <li class="pic1 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; "><div class="banner-pic" style="background: url(http://img02.taobaocdn.com/imgextra/i2/2063414185/TB2vZdVaXXXXXXpXXXXXXXXXXXX-2063414185.png) no-repeat 0 0;"></div></li>
        <li class="pic2 ks-switchable-panel-internal298" style="display: block; opacity: 1; position: absolute; z-index: 9; "><div class="banner-pic" style="background: url(http://img01.taobaocdn.com/imgextra/i1/2063414185/TB26QXZaXXXXXXuXXXXXXXXXXXX-2063414185.png) no-repeat 0 0;"></div></li>
        <li class="pic3 ks-switchable-panel-internal298" style="display: block; opacity: 0; position: absolute; z-index: 1; "><div class="banner-pic" style="background: url(http://img02.taobaocdn.com/imgextra/i2/2063414185/TB2R10VaXXXXXXNXXXXXXXXXXXX-2063414185.png) no-repeat 0 0;"></div></li>
    </ul>
</div>
<div class="body_bg">

<!--����-->
<div class="wrap" style="height:400px;position:relative ">
<div class="root61" style="z-index:22">
<div class="smCategorys">
                    <div class="sm-c-wrap J_TWidget"  data-widget-type="Slide" 
data-widget-config="{'navCls':'yslider-stick','contentCls':'yslider-stage','activeTriggerCls':'curr',
'delay':0.2,'effect':'fade','easing':'easeBoth','duration':0.8,'autoplay':false}" >
                        <div class="menu yslider-stick"  >
							<div class="item fore1 ">
                                <i class="i1 "></i>
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

<div class="focus J_TWidget" data-widget-type="Carousel" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [770], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'prev', 'nextBtnCls': 'next', 'disableBtnCls': 'disable' }">
 	<div class="prev"></div><div class="next"></div>
	<div class="tab-content">
 		<?php   $sql="SELECT * FROM jae_focus WHERE  status=1 ORDER BY listorder ASC  ";
		
		$r_focus=query($sql); foreach ($r_focus as $r) {?>
       <div><a href="<?php echo $r["link"]?>" target="_blank"> <img src="<?php echo $r["picture"]?>" width="770" height="400"/></a></div>
        <?php }?>
 	</div>
 	<div class="tab-nav">
 		 <?php $r_focuss=query($sql); foreach ($r_focuss as $k=>$rs) {?>
          <div class="v<?php echo $k?>"></div>
        <?php }?>
 	</div>
</div>
 <!--������Ϣ����ʼ-->  
<div class="vPersonal" > 
         <div class="info">
        <div class="photo " data-test="-1">
          <div class="p" id="J_personal_photo" data-garden="-1" data-experience="10007" data-img="http://img.taobaocdn.com/sns_logo/T1xzuvFcRcXXb1upjX.jpg_80x80.jpg"> <?php echo     '<img width=76 height=76 src="/_RS/user/picture?mixUserNick='.urlencode($nick,"UTF-8").'" />  ';?></div>
          <span class="m"></span> <span class="m mb-hide j_changeInfo"> <b>�༭����</b> </span> </div>
        <div class="per">
          <p class="title" >HI!<span class="login_tip"><a href="/member.php" style="color:#fff;">���¼</a></span></p>
          <!--<p class="garden">���Ǻ����ݻ�Ա</p>-->
          <p class="bt"> 
            <!-- <a class="activied j_activied" href="javascript:void(0);">����</a>--> 
            <a class="sign j_sign activied" href="/index.php?m=member&c=index&a=init" target="_blank">ǩ��</a> </p>
        </div>
      </div>
      
      <!--������Ϣ�������--> 
      <!--�����ʲ�����ʼ-->
      <div class="assets unlogin"> <span class="bt1"></span> 
        <!--�ѵ�¼��ʼ-->
        <div class="row point"> <span class="icon"></span>
          <p class="ht"> <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank">�ҵĻ���:</a> <span class="pots "> <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank">0</a> </span> </p>
          <p class="bt"> ������Ѿ���׬���� </p>
        </div>
        <div class="row coupon"> <span class="icon"></span>
          <p class="ht"> <a href="/index.php?m=prize&c=index&a=my_prize" target="_blank">�ҵĽ�Ʒ:</a> <span class="prizes_num" ><a href="/index.php?m=prize&c=index&a=my_prize" target="_blank">0</a></span> �� </p>
          <p class="bt"> <a href="/index.php?m=prize&c=index&a=my_prize" target="_blank"> �����μӻ��ֳ齱�� </a> </p>
        </div>
        <div class="row message"> <span class="icon"></span>
          <p class="ht"> <a href="/index.php?m=order&c=index&a=init" target="_blank">�ҵĶ���:</a> <span class="orders_num"><a href="/index.php?m=order&c=index&a=init" target="_blank">0</a></span> �� </p>
          <p class="bt"> <a class="dr" href="/index.php?m=order&c=index&a=init" target="_blank">Ϋ���ݵĻ��ֻ</a> </p>
        </div>
        <!--�ѵ�¼����--> </div>
      <!--�����ʲ��������--> 
      <!--��Ȩ����ʼ-->
      <div class="privilege">
        <div class="title"></div>
        <div class="list" id="J_privilege_tab">
          <div style="position: relative; overflow: hidden; height: 130px;">
            <ul class="tab-content" style="width: 190px; overflow: hidden; height: 90px; ">
              <div style="position: absolute; overflow: hidden; width: 380px; -webkit-transition: 0s; -webkit-transform: translate3d(0px, 0px, 0px); -webkit-backface-visibility: hidden; ">
                <li class="tab-pannel" style="float: left; overflow: hidden; width: 190px; display: block; ">
                  <ul class="privList">
                    <li> <a href="/index.php?m=point&c=index&a=sign&trad=all" target="_blank"> <span class="icon "></span> �ҵ�ǩ�� </a> </li>
                    <li> <a href="/index.php?m=prize&c=index&a=init" target="_blank"> <span class="icon "></span> ���ֳ齱 </a> </li>
                    <li> <a href="/index.php?m=exchange&c=index&a=init" target="_blank"> <span class="icon "></span> ���ֻ��� </a> </li>
                    <li> <a href="/index.php?m=seckill&c=index&a=init" target="_blank"> <span class="icon "></span> ������ɱ </a> </li>
                    <li> <a href="/index.php?m=content&c=index&a=lists&catid=1" target="_blank"> <span class="icon "></span> ���ﷵ���� </a> </li>
                    <li> <a href="/index.php?m=point&c=index&a=point_invite" target="_blank"> <span class="icon "></span> ������� </a> </li>
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
      <!--��Ȩ�������--> </div>

</div>
<div class="blank"></div>
<div class="wrap">
<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 and id=163 ORDER BY listorder,id ASC  LIMIT 1 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){  
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="1210" style="display:block"  data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>
</div>
<div class="blank"></div>

<!--����END-->
<!--�����Ƽ�-->
<div class="wrap">
  
 
        <div class="sk-con" >
        <div class="sk-item">
        <ul class="clearfix">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=d1873a14efbedecaad41e79e98dffdcb&action=position&posid=7&order=listorder+asc&num=5\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=d1873a14efbedecaad41e79e98dffdcb&action=position&posid=7&order=listorder+asc&num=5\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'7','order'=>'listorder asc','limit'=>'5',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img width="240" height="240" data-ks-lazyload="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>��<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['url'];?>" target="_blank">��������</a></div></li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                            
                            
                            
                            </ul>
        </div>
        </div>
       
      
        
        <div class="clear"> &nbsp;</div>
     
</div>
<!--�����Ƽ�END--> 

<!--9.9���� 74--><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=297cafed24d62adb523e2364dd9e6e6f&action=position&posid=74&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=297cafed24d62adb523e2364dd9e6e6f&action=position&posid=74&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'74','order'=>'listorder asc','limit'=>'10',));}?>
<?php if($data) { ?>
<div class="wrap">
<div class="title" style="height:47px"><img src="http://img04.taobaocdn.com/imgextra/i4/2063414185/T2j3ROXVBXXXXXXXXX_!!2063414185.png"/></div><div  class="jinxuan">
<div class="sk-item">
<ul class="clearfix">
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img width="210" height="210" data-ks-lazyload="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>��<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['url'];?>" target="_blank">��������</a></div></li>
                            <?php $n++;}unset($n); ?>
                          
                            
                            
                            
                            </ul></div>
</div>


</div><?php } ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
<!--9.9����END-->
<!--Ϋ����ѡ-->
<div class="wrap">
<div class="title" style="height:97px"><img src="http://img01.taobaocdn.com/imgextra/i1/1089118323/TB2ILtzaXXXXXbAXXXXXXXXXXXX-1089118323.png"/></div><div  class="jinxuan">
<div class="sk-item">
<ul class="clearfix"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=c3657b6d21024c499b782f6bc465a4ba&action=position&posid=9&order=listorder+asc&num=10\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=c3657b6d21024c499b782f6bc465a4ba&action=position&posid=9&order=listorder+asc&num=10\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'listorder asc','limit'=>'10',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><div class="p-img"><a href="<?php echo $r['url'];?>" target="_blank"><img width="210" height="210" data-ks-lazyload="<?php echo $r['thumb'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>��<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['url'];?>" target="_blank">��������</a></div></li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
                            
                            
                            
                            </ul></div>
</div>


</div>
<!--Ϋ����ѡEND-->
<!--��ɫƷ��-->
<div class="blank"> &nbsp;</div>
<div class="wrap ">
  
  <div class="main tese">
    <div class="main_t">
      <div class="main_b">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=89c9d31e71e94f24982e6a9bf42cc69a&id=5\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=89c9d31e71e94f24982e6a9bf42cc69a&id=5\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('id'=>'5',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--��ɫƷ��END--> 


<!--1¥-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img02.taobaocdn.com/imgextra/i2/2063414185/T28s4IXW0aXXXXXXXX_!!2063414185.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
        <div class="left"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=ea861e211e996c1889cefb88b8e7e0d6&id=6\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=ea861e211e996c1889cefb88b8e7e0d6&id=6\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('id'=>'6',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
        <div class="right">
          <div class="list">
            <ul>
			
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=dcc651fcbfb304c1bf46f43ab2d24e99&action=position&posid=10&order=listorder+asc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=dcc651fcbfb304c1bf46f43ab2d24e99&action=position&posid=10&order=listorder+asc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'listorder asc','limit'=>'8',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<li> <a href="<?php echo $r['url']?>" target="_blank"><img height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">��<?php echo round($r['coupon_price'],1);?></span><span class="yj">��<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">��������</span></a></li>  
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
<!--1¥END--> 

<!--2¥-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img02.taobaocdn.com/imgextra/i2/2063414185/T2hmhJX7FXXXXXXXXX_!!2063414185.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
       <div class="left"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=be946917f27c9b2559fadfe4e593aae0&id=7\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=be946917f27c9b2559fadfe4e593aae0&id=7\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('id'=>'7',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
		<div class="right">
          <div class="list">
            <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=241e8983b17b72d7f52bb29f7f4d2895&action=position&posid=14&order=listorder+asc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=241e8983b17b72d7f52bb29f7f4d2895&action=position&posid=14&order=listorder+asc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'14','order'=>'listorder asc','limit'=>'8',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<li> <a href="<?php echo $r['url']?>" target="_blank"><img data-pinit="registered" height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">��<?php echo round($r['coupon_price'],1);?></span><span class="yj">��<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">��������</span></a></li>  
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
<!--2¥END--> 

<!--3¥-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img01.taobaocdn.com/imgextra/i1/2063414185/T2jgVMX2BXXXXXXXXX_!!2063414185.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
       <div class="left"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=bb946944bce804bb0554168e338c62a5&id=8\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=bb946944bce804bb0554168e338c62a5&id=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('id'=>'8',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
		<div class="right">
          <div class="list">
            <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=7681d386635bebe6c65342d998828a04&action=position&posid=15&order=listorder+asc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=7681d386635bebe6c65342d998828a04&action=position&posid=15&order=listorder+asc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'15','order'=>'listorder asc','limit'=>'8',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<li> <a href="<?php echo $r['url']?>" target="_blank"><img data-pinit="registered" height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">��<?php echo round($r['coupon_price'],1);?></span><span class="yj">��<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">��������</span></a></li>  
                         <?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>
            </ul>
          </div>
        </div>
        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--3¥END--> 

<!--4¥-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img01.taobaocdn.com/imgextra/i1/2063414185/T2kU0GX0daXXXXXXXX_!!2063414185.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
       <div class="left"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"block\" data-datas=\"op=block&tag_md5=b5b856496b9be73481909fb0e63bf7ca&id=9\"><a href=\"/admin.php?m=visualization&c=block&a=init&op=block&tag_md5=b5b856496b9be73481909fb0e63bf7ca&id=9\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$block_tag = jae_base::load_app_class('block_tag', 'block');echo $block_tag->jae_tag(array('id'=>'9',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?></div>
        <div class="right">
          <div class="list">
            <ul>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"content\" data-datas=\"op=content&tag_md5=6afc1a25909457b1178ad82d37b05d9e&action=position&posid=16&order=listorder+asc&num=8\"><a href=\"/admin.php?m=visualization&c=content&a=position&op=content&tag_md5=6afc1a25909457b1178ad82d37b05d9e&action=position&posid=16&order=listorder+asc&num=8\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$content_tag = jae_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'listorder asc','limit'=>'8',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<li> <a href="<?php echo $r['url']?>" target="_blank"><img data-pinit="registered" height="200" src="<?php echo $r['thumb']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">��<?php echo round($r['coupon_price'],1);?></span><span class="yj">��<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">��������</span></a></li>  
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
<!--4¥END--> 
<div class="blank"> &nbsp;</div>

<!--�ز�ר��-->
<div class="wrap">
<div class="title" style="height:127px;"><img src="http://img02.taobaocdn.com/imgextra/i2/1089118323/TB2k4BtaXXXXXaMXpXXXXXXXXXX-1089118323.png"></div>

<div class="zhuanji">

 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=f68aec78e0763457e213df6a3dd50aff&action=lists&typeid=20&num=8&order=listorder+ASC\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=f68aec78e0763457e213df6a3dd50aff&action=lists&typeid=20&num=8&order=listorder+ASC\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'20','order'=>'listorder ASC','limit'=>'8',));}?>
 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
 <div class="li4"><a target="_blank" href="<?php echo $v['link'];?>"><img border="0" height="155" style="float:none;margin:0px;" width="280"  data-ks-lazyload="<?php echo $v['picture'];?>"></a></div>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>


<div class="clear"></div>
</div>
</div>
<!--�ز�ר��END-->
<div class="blank"> &nbsp;</div>
<!--��������-->
<div class="wrap">
<img src="http://img02.taobaocdn.com/imgextra/i2/2063414185/TB2Ney9aXXXXXXHXpXXXXXXXXXX-2063414185.png">
</div>
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

<!--��������END--> 

<!--��Ȩ-->
</div>

		<?php include template('content','foot');?>
<!--��ȨEND-->