<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>
<link rel="stylesheet" href="/statics/css/exchange.css" />
<div class="jfhgymbg">
<img src="http://img03.taobaocdn.com/imgextra/i3/1089118323/TB2NkSpXFXXXXaMXpXXXXXXXXXX-1089118323.jpg">
</div>
<div class="wrap">
 <div class="ex_detail"> 
<div class="ex_gallery">
  <div class="tm-brand"><em><a href="<?php $shop_url?>" target="_blank"> <?php echo $nick;?> </a> </em></div>
  <div class="ex_pic"><a href="<?php echo $detail_url ?>" target="_blank"><img width="360" height="360" src="<?php echo $pic_url?>"></a> </div>


</div>

<div class="ex_property">
  <div class="tb-detail-hd">
      <h3><?php echo $title;?>   </h3>
  <p>  <?php echo $description;?>     </p>
</div>
<ul class="tm-fcs-panel">
        
     <li class="tm-promo-panel" id="J_PromoPrice" data-label="促销" style=""><div class="tm-promo-price tm-promo-cur"><em class="tm-yen"></em> <span class="tm-price"><?php echo $point;?></span><em class="tm-promo-type">积分</em>&nbsp;&nbsp;</div></li><li class="tm-price-panel" id="J_StrPriceModBox">原价 <em class="tm-yen"></em> <span class="tm-price"><?php echo $price;?>  </span><span>开始时间： <?php echo date("Y-m-d H:i",$begin_time)?></span>&nbsp;&nbsp;<span>结束时间： <?php echo date("Y-m-d H:i",$end_time)?></span></li>
          <li class="tm-delivery-panel tm-clear" id="J_RSPostageCont">
            
        </li>
  <li class="tm-fcs-corner"></li><li class="tm-fcs-bottom"></li><li class="tm-fcs-label">兑换</li></ul>


    <div class="tb-key">
    <div class="tb-skin">
        <div class="tb-sku"><dl class="tb-amount tm-clear">
  <dt class="tb-metatit">数量</dt>
  <dd id="J_Amount"><span class="tb-amount-widget mui-amount-wrap">
     
     <?php echo $num?> <span class="mui-amount-unit">件</span>
    </span>
    
         
        <span id="J_StockTips">
                      </span>
  </dd>
</dl>
                                <div class="tb-action " style="">
                                        <div class="tb-btn-buy tb-btn-sku">


          <a  href="/index.php?m=order&c=index&a=convert&id=<?php echo $id;?>&module=exchange" data-addfastbuy="true" title="点击此按钮，到下一步确认购买信息。">立刻兑换<b></b></a>

        </div>
                            
        <div class="tb-btn-basket tb-btn-sku"><a href="<?php echo $detail_url ?>" id="J_LinkBasket" target="_blank">前往原价购买<b></b></a></div>
          </div>
                    </div>
        </div>
  </div>
  
<div style=" height:40px; clear:both;"></div>

<div class="hgxqyxux"></div>
<div class="invite_copy">
快来邀请您的朋友成为本馆会员，通过下面的专属链接邀请朋友成为会员，每成功邀请1位可以获得<span><?php $data=getcache_sql('point_invite','commons');  echo $data['point']?></span>积分哟!
<div class="fxcp"><textarea><?php echo $data['content_url']."\r\n".$siteinfo['domain']."index.php?fromuserid=".$memberinfo['userid']  ; ?></textarea></div>
</div>

</div>





 </div>

  <div class="clear"></div>
  
  <div style=" height:10px; clear:both;"></div>
  
  <div class="jfxqy">
  <div class="jfxqyxbt">
  宝贝详情 | 换购需知
  </div>
  <?php $setting=getcache_sql('exchange', 'commons');	echo htmlspecialchars_decode($setting['content']);	?>
  
  </div>
  
  
  
  
  
  
  
</div>
