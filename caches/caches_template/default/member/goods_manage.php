<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>
<link href="/statics/css/apply.css" rel="stylesheet" type="text/css" />
<div class="blank"></div>
<div class="wrap">
  <dl class="ui-tab clearfix" id="">
    <dt>商品管理</dt>
    <dd data-type="all" class="j_nativeHistory all <?php    if(ROUTE_A=='goods_apply') echo "select"?> "><a href="/index.php?m=member&c=index&a=goods_apply&manage=all">活动报名</a></dd>
    <dd data-type="all" class="j_nativeHistory all <?php if($manage=='pass') echo "select"?> " ><a href="/index.php?m=member&c=index&a=goods_manage&manage=pass">已通过</a></dd>
    <dd data-type="income" class="j_nativeHistory income  <?php if($manage=='check') echo "select"?>" ><a href="/index.php?m=member&c=index&a=goods_manage&manage=check ">审核中</a></dd>
    <dd data-type="used" class="j_nativeHistory used  <?php if($manage=='refuse') echo "select"?>" ><a href="/index.php?m=member&c=index&a=goods_manage&manage=refuse">被拒绝</a></dd>
 <!--  <dd data-type="expired" class="j_nativeHistory expired  <?php    if(ROUTE_A=='apply_task') echo "select"?>" ><a href="/index.php?m=member&c=index&a=apply_task">报名条件</a></dd> -->
     <!-- <dd data-type="freezed" class="j_nativeHistory freezed" data-template="/point/detail/freezed">冻结积分</dd>-->
  </dl>
  
  
    <div class="border">
    <div class="pd20">
      <div class="content">
      <div class="product-list clearfix" data-spm="9">
     
                 <!-- pc begin --> 
                 <?php foreach($data as $v){?>                      
                <div class="product ">
                    <a class="title clearfix" href="<?php echo $v['detail_url']?>" target="_blank" title="<?php echo $v['title']?>" data-spm="d1">
                        <img alt="<?php echo $v['title']?>" src="<?php echo $v['pic_url']?>">
                         <?php if ($v['freight_payer']=='seller') {?><span class="benefit">包邮</span><?php }?>
                                               <?php echo $v['title']?>
                    </a>
                    <div class="layer clearfix">
                        <a class="info clearfix" href="//detail.tmall.com/item.htm?id=25891328996" target="_blank" title="<?php echo $v['title']?>" data-spm="d1">
                            <div class="point">
                                <div class="num"><?php echo $v['coupon_price']?></div> 
                            </div>
                            <div class="limit"><?php echo $v['num']?>件</div>
                            <div class="old-price">
                                原价 ￥ <s><?php echo $v['price']?></s>
                            </div>
                            <div class="j-sell-status status sold-out" data-id="25891328996">立即购买</div>
                        </a>
                        <a class="shop-link" href="<?php echo $v['shop_url']?>" target="_blank" data-spm="d1">进入店铺</a>
                    </div>
                    <div class="edit"><a href="/index.php?m=member&c=index&a=edit&id=<?php echo $v['id']?>">编辑</a><a href="/index.php?m=member&c=index&a=delete&id=<?php echo $v['id']?>">删除</a><br><?php if($manage=='refuse') { ?> <font color="#f00">拒绝理由：
<?php echo $v['refuse']?></font><?php }?>
                    </div>
                </div>
                <?php }?>
                <!-- pc end -->
                                                   
             
                                
            </div>
      
      
      </div>
      </div>
      </div>
  
  <div class="clear"></div>
</div>


