<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>
<link rel="stylesheet" href="/statics/css/order.css" />

<div class="blank"></div>
<div class="wrap">

  <div class="flowstep" id="J_Flowstep">
    <ol class="flowstep-4">
      <li class="step-first">
        <div class="step-done">
          <div class="step-name">兑换商品</div>
          <div class="step-no"></div>
        </div>
      </li>
      <li>
        <div class="step-name">提交订单</div>
        <div class="step-no">2</div>
      </li>
      <li>
        <div class="step-name">确认收货</div>
        <div class="step-no">3</div>
      </li>
      <li class="step-last">
        <div class="step-name">晒单</div>
        <div class="step-no">4</div>
      </li>
    </ol>
  </div>




  <div class="order">
    <h2>确认订单</h2>
    <div class="detail">
          <div class="masthead clearfix"><span class="why">消费项目</span><span class="what">消费积分</span><span class="when" style="width:200px;">原价</span><span class="what">数量</span><span class="notes">产品描述</span></div>
          <div id="J_pointDetail">
            <ul class="item-list" id="J_item-list">
            
           
              <li class="item clearfix">
                <div class="why"><a class="img" href="<?php echo $goods['detail_url']?>" target="_blank"><img src="<?php echo $goods['pic_url']?>" width="60" height="60" ></a><a class="title" href="<?php echo $goods['detail_url']?>" target="_blank"><?php echo $goods['title']?></a><span class="order-number">编号：<?php echo $goods['id']?></span></div>
                <div class="what"><span class=" plus"><?php echo $goods['point'] ?></span></div>
                <div class="when" style="width:200px;"><?php echo $goods['price']?></div>
                <div class="when" style="width:200px;">1</div>
                <div class="notes"><?php echo $goods['description'];?> </div>
              </li>
           
              
            </ul>
          </div>
          <div id="J_pointError" class="hidden error"></div>
          <div id="J_pointPager" class="pages">
           
          </div>
        </div>

  </div>
 <form name="myform" action="/index.php?m=order&c=index&a=seckill_submit" method="post" >
  <div  class="checkbar " style="display: block; ">    
      <div class="due">
        <p class="pay-info">
         <span class="question"><b>请回答问题：</b> <?php echo $goods['question']?></span>
         <span class="answer"> <b>请填写答案：</b> <input type="text" name="answer" value="" ></span>
         
          <span class="bd">
                <button id="J_Go" data-mm="tmalljy.2.6?action=submit" class="go-btn" type="submit" data-evt="buy-order/biz/go:submit" title="提交订单">提交订单</button>
          </span>
        </p>
      </div>
   
    <div class="action">
      <span>
       
          <input type="hidden" name="id" value="<?php echo $goods['id']?>">
        
     


      </span>
    </div>
  </div>
  
 </form>

  <div class="clear"></div>
</div>