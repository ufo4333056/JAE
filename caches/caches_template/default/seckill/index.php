<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head'); ?>
<link href="/statics/css/seckill.css" rel="stylesheet" type="text/css" />

<div  style=" background:<?php echo $page_setting['bg_color']?>; display:block" >
  <div class="i_step i_step1" style="height: 440px;
background: url(<?php echo $page_setting['bg_img']?>) no-repeat center 0;" >
    <div  style="width: 990px;margin: 0 auto;position: relative;"><a target="_blank" href="/index.php?m=seckill&c=index&a=rules"> <img style="display:block" src="<?php echo $page_setting['img']?>"></a></div>
  </div>
  
  <div class="mslbgz">
  <?php echo htmlspecialchars_decode($page_setting['rules'])?>
 
  </div>
  
  
  <div class="blank"></div>
  
  <?php foreach($data as $v){?>
  <div class="detail-main" >
    <div class="normal-pic-wrapper floatleft" data-spm="ne" data-spm-max-idx="2">
      <div class="normal-pic"> <a href="http://item.taobao.com/item.htm?id=<?php echo $v['num_iid'];?>" target="_blank" data-spm-anchor-id="608.7065813.ne.1"> <img data-ks-lazyload="<?php echo $v['pic_url'];?>"  width="300" height="300"  class="J_zoom "></a> </div>
    </div>
    <div class="detail-status floatleft ">
      <div class="main-box avil">
        <div class="name-box">
          <h2 class="name"> <?php echo $v['title'];?></h2>
		  
        </div>
		
        <div class="description"><h2 class="name" style="color: #CC0000; font-weight:bold;"> ��ʼʱ�䣺<?php echo date("Y-m-d H:i:s",$v['begin_time']);?></h2><?php echo $v['description'];?></div>
        <div class="status-banner J_juBuyBtns  "> <span class="currentPrice floatleft"> <?php echo $v['point'];?> <small>����</small> </span>
          <div class="floatleft">
            <div class="discount"> ��ʡ <small></small> </div>
            <del class="originPrice">�� <?php echo $v['price'];?></del> </div>
          <form class="J_BuySubForm" data-ccb="0" data-ques="0" action="/index.php?m=order&c=index&a=seckill_submit_pre" method="post">
            <input name="_tb_token_" type="hidden" value="UWMl0EA5RGG4">
            <input type="hidden" name="_input_charset" value="utf-8">
            <input type="hidden" name="num_iid" value="<?php echo $v['num_iid'];?>">
            <input type="hidden" name="id" value="<?php echo $v['id'];?>">
            <input type="hidden" name="module" value="seckill">
            <input type="hidden" name="auction_num" value="1">
            <input type="submit" class="buyaction J_BuySubmit" title="������" value="������">
          </form>
        </div>
        <div class="time-banner">
          <p class="tit"></p>
          
          <div class="J_TWidget ju-spltimer" data-widget-type="Countdown"  data-widget-config="{'endTime': '<?php  if($v['num']==0){ echo 0;} else{ if($v['begin_time']<SYS_TIME) { echo ($v['end_time']- SYS_TIME)*1000 ;} else { echo ($v['begin_time']- SYS_TIME)*1000 ; } }   ?>', 'interval': 1000,    'timeRunCls': '.ks-countdown-run','timeUnitCls':{'d': '.ks-d','h': '.ks-h','m': '.ks-m','s': '.ks-s','i': '.ks-i'},'minDigit': 1,'timeEndCls': '.ks-countdown-end'}">
    <!-- ����ʱ����ʱ����-->
    <!--����д��� -->
    <div class="ks-countdown-run">
   �� <span><?php if($v['begin_time']<SYS_TIME) { echo "����" ;} else { echo "��ʼ" ; }?></span>����
    <span class="ks-d"></span>��
    <span class="ks-h"></span>Сʱ
    <span class="ks-m"></span>��
        <!-- �����0.1�뼶��ı仯������gif����ͼƬ����ʽ�仯 -->
    <span class="ks-s"></span>��
        
    <span class="buy"><a target="_blank" href="http://item.taobao.com/item.htm?id=<?php echo $v['num_iid'];?>">ֱ��ȥ����</a></span>
    </div>
 


   
     <!-- ����ʱ����ʱ��ʾ-->
     <!--����д��� -->

     <?php if ($v['num']==0){ ?>
    <div class=" sell_end" style="">
    <img src="/statics/images/sell_end.png">
    </div>

	<?php }?>
  
</div>
          
          
          
        </div>
      
     
      </div>
      
    </div>
	<div class="invite_copy">
���������������ѳ�Ϊ���ݻ�Ա��ͨ�������ר�������������ѳ�Ϊ��Ա��ÿ�ɹ�����1λ���Ի��<span><?php $data=getcache_sql('point_invite','commons');  echo $data['point']?></span>����Ӵ!
<div class="fxcp"><textarea><?php echo $data['content_url']."\r\n".$siteinfo['domain']."index.php?fromuserid=".$memberinfo['userid']  ; ?></textarea></div>
</div>
     
    <div class="clear"></div>
	
		
	
  </div>
  <div class="blank"></div>
  <?php }?>
  <div id="J_pointPager" class="pages">
            <?php echo $pages;?>
          </div>
  <div class="blank"></div>
</div>