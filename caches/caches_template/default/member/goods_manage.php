<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>
<link href="/statics/css/apply.css" rel="stylesheet" type="text/css" />
<div class="blank"></div>
<div class="wrap">
  <dl class="ui-tab clearfix" id="">
    <dt>��Ʒ����</dt>
    <dd data-type="all" class="j_nativeHistory all <?php    if(ROUTE_A=='goods_apply') echo "select"?> "><a href="/index.php?m=member&c=index&a=goods_apply&manage=all">�����</a></dd>
    <dd data-type="all" class="j_nativeHistory all <?php if($manage=='pass') echo "select"?> " ><a href="/index.php?m=member&c=index&a=goods_manage&manage=pass">��ͨ��</a></dd>
    <dd data-type="income" class="j_nativeHistory income  <?php if($manage=='check') echo "select"?>" ><a href="/index.php?m=member&c=index&a=goods_manage&manage=check ">�����</a></dd>
    <dd data-type="used" class="j_nativeHistory used  <?php if($manage=='refuse') echo "select"?>" ><a href="/index.php?m=member&c=index&a=goods_manage&manage=refuse">���ܾ�</a></dd>
 <!--  <dd data-type="expired" class="j_nativeHistory expired  <?php    if(ROUTE_A=='apply_task') echo "select"?>" ><a href="/index.php?m=member&c=index&a=apply_task">��������</a></dd> -->
     <!-- <dd data-type="freezed" class="j_nativeHistory freezed" data-template="/point/detail/freezed">�������</dd>-->
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
                         <?php if ($v['freight_payer']=='seller') {?><span class="benefit">����</span><?php }?>
                                               <?php echo $v['title']?>
                    </a>
                    <div class="layer clearfix">
                        <a class="info clearfix" href="//detail.tmall.com/item.htm?id=25891328996" target="_blank" title="<?php echo $v['title']?>" data-spm="d1">
                            <div class="point">
                                <div class="num"><?php echo $v['coupon_price']?></div> 
                            </div>
                            <div class="limit"><?php echo $v['num']?>��</div>
                            <div class="old-price">
                                ԭ�� �� <s><?php echo $v['price']?></s>
                            </div>
                            <div class="j-sell-status status sold-out" data-id="25891328996">��������</div>
                        </a>
                        <a class="shop-link" href="<?php echo $v['shop_url']?>" target="_blank" data-spm="d1">�������</a>
                    </div>
                    <div class="edit"><a href="/index.php?m=member&c=index&a=edit&id=<?php echo $v['id']?>">�༭</a><a href="/index.php?m=member&c=index&a=delete&id=<?php echo $v['id']?>">ɾ��</a><br><?php if($manage=='refuse') { ?> <font color="#f00">�ܾ����ɣ�
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


