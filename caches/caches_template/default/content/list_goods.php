<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>

<!-- 商品列表开始 -->
<div class="wrap">
<div class="good_sort">
<ul><li <?php if($_GET["catId"]==''){?> class="on" <?php }?>>
<a  style="width:150px; font-weight:bold;" href="/index.php?m=content&c=index&a=list_goods"  >全部 </a></li>
<?php foreach ($r_category as $r) {?>

<li <?php if($_GET["catId"]==$r["id"]){?> class="on" <?php }?>> <a   href="/index.php?m=content&c=index&a=list_goods&catId=<?php echo $r["id"];?>"><?php echo $r["name"];?> </a></li>

<?php }?>
</ul>

</div>

  <div class="good_list">
    <ul>
      <?php 
     
      $db= jae_base::load_model('goods_model');
      $data=$db->listinfo($where,$order = 'id DESC',$page, $pages = '30');   
      $pages=$db->pages;


      foreach($data as $goods){; ?>
      <li>
        <div class="goods-block"> <a class="pic" target="_blank" href="<?php echo $goods['detail_url']; ?>"> <img class="height-aware" width="220" height="220" src="<?php echo $goods['pic_url']; ?>">
          <div class="cover" style="bottom: -35px; "><?php echo $goods['title']; ?></div>
          </a>
          <div class="bottom"> <span class="price"><?php echo $goods['coupon_price']; ?></span> <span style="color:#D0D0D0;font-size:15px;">|</span> <span class="strike-price">￥<?php echo $goods['price']; ?></span> <br>
            <span class="cp">  <b></b>  </span>
            <div class="buttons buybtn"> <a href="<?php echo $goods['detail_url']; ?>">去看看</a> </div>
          </div>
        </div>
      </li>
      <?php }?>
    </ul>
  </div>
</div>
 
    <!-- 列表分页 -->
	<div style="clear:both;"></div>
    <div class="wrap pages">
       
            <?php echo $pages; ?>       
    </div>

<?php include template('content','foot');?>