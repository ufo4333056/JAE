<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>

<!--����-->
<div class="wrap" style="height:400px; position:relative; ">
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

<div class="focus J_TWidget" data-widget-type="Slide" data-widget-config="{'navCls':'tab-nav','contentCls':'tab-content','effect': 'fade',
'easing': 'easeIn','triggerType':'mouse', 'steps':1, 'viewSize': [710], 'circular': true,'activeTriggerCls':'on', 'autoplay':'true','interval':3,'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }">
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

<div class="bn">
<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=21 ORDER BY listorder,id ASC  LIMIT 0,2 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){  
		?><a target="_blank" href="<?php echo $v['link'];?>"><img width="290" style="display:block"  data-ks-lazyload="<?php echo $v['picture'];?>"></a>
		<?php } }
		?>

</div>
<div class="clear"></div>
</div>
<div class="blank"></div>
<!--����END-->
<!--�����Ƽ�-->
<div class="wrap">
  
 
        <div class="sk-con"><div class="title"> <img src="http://img04.taobaocdn.com/imgextra/i4/2063414185/T2ILhJX9lXXXXXXXXX_!!2063414185.png" /></div>
        <div class="sk-item">
        <ul class="clearfix">
                             <?php $result=get_goods(7,3);foreach( $result as $r){ ?>
                            <li><div class="p-img"><a href="<?php echo $r['detail_url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img width="240" height="240" data-ks-lazyload="<?php echo $r['pic_url'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['detail_url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>��<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['detail_url'];?>" target="_blank">��������</a></div></li>
                            <?php } ?>
                            
                            
                            
                            </ul>
        </div>
        </div>
       
        <div class="freshSale">
                
                    <div class="title"><img src="http://img02.taobaocdn.com/imgextra/i2/2063414185/TB2S1rBXVXXXXcIXXXXXXXXXXXX-2063414185.png"></div>
                    
               
									                      <div class="mc">
														  
                                                   <div class="p-img">       
                                              <?php $result=get_goods(8,1);foreach( $result as $r){ ?>
                           <a href="<?php echo $r['detail_url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img class="err-product"  width="260" height="260" data-ks-lazyload="<?php echo $r['pic_url'];?>" ></a>
						   <div class="p-name"><a href="<?php echo $r['detail_url'];?>"  target="_blank"><?php echo $r['title'];?></a></div>
						   <div class="p-ext">
                            �ؼ��Żݣ���ʱ������
                        </div>
                            <?php } ?>     
                                        </div>
										
										                  
                     
                        
                        
                        					  </div>
    </div>
        
        <div class="clear"> &nbsp;</div>
     
</div>
<!--�����Ƽ�END--> 
<!--Ϋ����ѡ-->
<div class="wrap">
<div class="title"><img src="http://img02.taobaocdn.com/imgextra/i2/2063414185/TB2D2HBXVXXXXaoXXXXXXXXXXXX-2063414185.png"></div>
<div  class="jinxuan">
<div class="sk-item">
<ul class="clearfix"> 
                             <?php $result=get_goods(9,4);foreach( $result as $r){ ?>
                            <li><div class="p-img"><a href="<?php echo $r['detail_url'];?>" target="_blank"><img class="isicon" src="<?php if($r['isicon']==1) {echo $r['icon_url']} ?>" ><img width="240" height="240" data-ks-lazyload="<?php echo $r['pic_url'];?>" ></a></div><div class="p-name"><a href="<?php echo $r['detail_url'];?>"  target="_blank"><?php echo $r['title'];?></a></div><div class="p-price"><strong>��<?php echo $r['coupon_price'];?></strong><del><?php echo $r['price'];?></del></div><div class="p-btn"><a class="btn-m seckilling" href="<?php echo $r['detail_url'];?>" target="_blank">��������</a></div></li>
                            <?php } ?>
                            
                            
                            
                            </ul></div>
</div>


</div>
<!--Ϋ����ѡEND-->
<!--��ɫƷ��-->
<div class="blank"> &nbsp;</div>
<div class="wrap tese">
  <div class="title"> <img src="http://img01.taobaocdn.com/imgextra/i1/2063414185/T2wctJX7hXXXXXXXXX_!!2063414185.png" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
<?php echo block(5);?>
        <div class="clear"> &nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--��ɫƷ��END--> 


<!--�ز�ר��-->
<div class="wrap">
<div class="title"><img src="http://img03.taobaocdn.com/imgextra/i3/2063414185/T2CrRIXYtaXXXXXXXX_!!2063414185.png"></div>

<div class="zhuanji">


<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=20 ORDER BY listorder,id ASC  LIMIT 0,4 '); 
		foreach ($result as $v) {   if(!empty($v['picture'])){   
		?><div class="li4"><a target="_blank" href="<?php echo $v['link'];?>"><img border="0" height="155" style="float:none;margin:0px;" width="290"  data-ks-lazyload="<?php echo $v['picture'];?>"></a></div>
		<?php } }
		?>

<div class="clear"></div>
</div>
</div>
<!--�ز�ר��END-->
<!--1¥-->
<div class="blank"> &nbsp;</div>
<div class="louceng wrap">
  <div class="title"> <img src="http://img02.taobaocdn.com/imgextra/i2/2063414185/T28s4IXW0aXXXXXXXX_!!2063414185.png" style="float:none;margin:0px;" /></div>
  <div class="main">
    <div class="main_t">
      <div class="main_b">
        <?php echo block(6);?>
        <div class="right">
          <div class="list">
            <ul>
			
			<?php $result=get_goods(10,10);foreach( $result as $r){ ?>	
		<li> <a href="<?php echo $r['detail_url']?>" target="_blank"><img height="200" src="<?php echo $r['pic_url']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">��<?php echo round($r['coupon_price'],1);?></span><span class="yj">��<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">��������</span></a></li>  
                          <?php }?>

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
        <?php echo block(7);?>
		<div class="right">
          <div class="list">
            <ul>
             <?php $result=get_goods(14,10);foreach( $result as $r){ ?>	
		<li> <a href="<?php echo $r['detail_url']?>" target="_blank"><img data-pinit="registered" height="200" src="<?php echo $r['pic_url']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">��<?php echo round($r['coupon_price'],1);?></span><span class="yj">��<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">��������</span></a></li>  
                          <?php }?>
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
        <?php echo block(8);?>
		<div class="right">
          <div class="list">
            <ul>
             <?php $result=get_goods(15,10);foreach( $result as $r){ ?>	
		<li> <a href="<?php echo $r['detail_url']?>" target="_blank"><img data-pinit="registered" height="200" src="<?php echo $r['pic_url']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">��<?php echo round($r['coupon_price'],1);?></span><span class="yj">��<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">��������</span></a></li>  
                          <?php }?>
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
        <?php echo block(9);?>
        <div class="right">
          <div class="list">
            <ul>
             <?php $result=get_goods(16,10);foreach( $result as $r){ ?>	
		<li> <a href="<?php echo $r['detail_url']?>" target="_blank"><img data-pinit="registered" height="200" src="<?php echo $r['pic_url']?>" style="float:none;margin:0px;" width="200" /><br />
                <span class="txt"><?php echo $r['title']?></span>
                <span class="jg">��<?php echo round($r['coupon_price'],1);?></span><span class="yj">��<?php echo round($r['price'],1);?></span>&nbsp;<span class="gm">��������</span></a></li>  
                          <?php }?>
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
<!--��������-->

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


		<?php include template('content','foot');?>
<!--��ȨEND-->