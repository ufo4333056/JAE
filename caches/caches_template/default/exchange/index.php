<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>
<link rel="stylesheet" type="text/css" href="/statics/css/exchange.css">
<link href="/statics/css/prize.css" rel="stylesheet" type="text/css" />
<div class="jfhgymbg">
<img src="http://img03.taobaocdn.com/imgextra/i3/1089118323/TB2NkSpXFXXXXaMXpXXXXXXXXXX-1089118323.jpg">
</div>
<div class="wrap">

  <div class="border">
    <div class="pd20">
      <div class="content">
        <div class="exchange-list clearfix" >
          <?php foreach ($data as $v) { ?> 
          <div class="exchange "><div class="ex_img"> <a  href="/index.php?m=exchange&c=index&a=exchange&id=<?php echo $v['id']?>" target="_blank" title="<?php echo $v['title'];?>"  > <img width="260" height="260" alt="<?php echo $v['title'];?>" src="<?php echo $v['pic_url']?>"><br><?php echo str_cut($v['title'],'15','');?></a></div>
            <div class="layer clearfix"> <a class="info clearfix" href="/index.php?m=exchange&c=index&a=exchange&id=<?php echo $v['id']?>" target="_blank" title="<?php echo $v['title'];?>" >
              <div class="point">
                <div class="num"><?php echo $v['point']?>����</div>
              </div>
              <div class="limit"><?php echo $v['num']?>��</div>
              <div class="old-price"> ԭ�� �� <s><?php echo $v['price']?></s> </div>
              <div class="j-sell-status status sold-out" >�����һ�</div>
              </a></div>
          </div>
          <?php }?>


        </div>
      </div>

      <div class="pages"><?php echo $pages;?></div>
    </div>
  </div>
  <div class="clear"></div>
</div>
