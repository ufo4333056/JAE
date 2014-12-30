<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');  ?>
<link href="/statics/css/apply.css" rel="stylesheet" type="text/css" />
<div class="blank"></div>
<div class="wrap"> 
  <dl class="ui-tab clearfix" >
    <dt>商品管理</dt>
    <dd data-type="all" class="j_nativeHistory all <?php   if(ROUTE_A=='goods_apply') echo "select"?> " data-template=""><a href="/index.php?m=member&c=index&a=goods_apply&manage=all">活动报名</a></dd>
    <dd data-type="all" class="j_nativeHistory all <?php if($manage=='pass') echo "select"?> " data-template=""><a href="/index.php?m=member&c=index&a=goods_manage&manage=pass">已通过</a></dd>
    <dd data-type="income" class="j_nativeHistory income  <?php if($manage=='check') echo "select"?>" data-template="/point/detail/income"><a href="/index.php?m=member&c=index&a=goods_manage&manage=check ">审核中</a></dd>
    <dd data-type="used" class="j_nativeHistory used  <?php if($manage=='refuse') echo "select"?>" data-template="/point/detail/used"><a href="/index.php?m=member&c=index&a=goods_manage&manage=refuse">被拒绝</a></dd>
<!--  <dd data-type="expired" class="j_nativeHistory expired  <?php    if(ROUTE_A=='apply_task') echo "select"?>" ><a href="/index.php?m=member&c=index&a=apply_task">报名条件</a></dd> -->
     <!-- <dd data-type="freezed" class="j_nativeHistory freezed" data-template="/point/detail/freezed">冻结积分</dd>-->
  </dl>
  
  <div class="clear"></div>
</div>
<div class="xf-layout xf-mb">



	<!-- 两栏布局 -->
	<div class="xf-m622s288">
		<div class="xf-main">
			<div class="xf-wrap">

				<!-- 报名表单 -->
				<div class="xf-form">
                    <div style="color: orange; text-align: center; padding-bottom: 10px;font-size: 20px;">
                        <?php echo $createMessage; ?>
                    </div>
                    
                    <form name="form1" method="post">
                        <div class="f-itm">
                            <label class="f-label" for="">商品ID :</label>
                            <input class="f-text" name="num_iid" type="text" style="width:140px;" />
                            <input name="dopost" type="hidden" value="caiji"/>
                            <button class="f-btn" type="submit">获取商品信息</button>
                        </div>
                    </form>
                    <form name="form2" method="post">
						<!-- 获取后出现下面的f-show -->
						<div class="f-show">
						<div style=" float:left">
									
                                    <img src="<?php echo $pic_url; ?>" width="200" height="200" />
                                    
                          </div>          
                                    
                                    <table cellspacing="0" cellpadding="0" border="0" width="430">
								
								<tr>
									<th width="90">商品链接：</th>
                                    <td><?php echo $detail_url; ?></td>
								</tr>
								<tr>
									<th>是否包邮：</th>
                                    <td><em><?php if($freight_payer=='seller') echo '是';elseif($freight_payer=='buyer') echo '否'; ?></em></td>
								</tr>
								<tr>
									<th>店家昵称：</th>
									<td><?php echo $nick;?></td>
								</tr>
								<tr>
									<th>商品原价：</th>
									<td>￥<?php echo $price;?></td>
								</tr>
								<tr>
									<th>库存数量：</th>
                                    <td><?php echo $num; ?>件</td>
								</tr>
								
							</table>
						</div>
                        
						<div class="f-itm">
							<label class="f-label" for="">商品分类 :</label>
							<select name="category_id">
								<option value="0">无分类</option>
                                <?php foreach($categoryArr as $catId=>$catName){; ?>
                                <option value="<?php echo $catId; ?>"><?php echo $catName; ?></option>
                                    <?php }; ?>
							</select>
							<em>可改</em>
						</div>
                      
                        <div class="f-itm">
							<label class="f-label" for="">商品主图 :</label>
                            <input class="f-text" name="pic_url" type="text" style="width:350px;" value="  <?php echo $pic_url; ?>" />
							<em>必改*</em>
							<div style="color:#999999">（要求图片高清、无文字和水印、大于230*230的正方形，最好是白底图）</div>
						</div>
						<div class="f-itm">
							<label class="f-label" for="">*商品标题 :</label>
                            <input class="f-text" name="title" type="text" style="width:350px;" value="<?php echo $title; ?>" />
							<em>必改*</em>
						</div>
                        <div class="f-itm">
							<label class="f-label" for="">*商品特价 :</label>
                            <input class="f-text" name="coupon_price" type="text" style="width:350px;" value="<?php echo $coupon_price; ?>" />
							<em>必改*</em>
							<div style="color:#999999">（审核时发现宝贝页的折扣价与商品特价不符时不予通过，请报名后立刻调整折扣价）</div>
						</div>
						<div class="f-itm">
							<label class="f-label" for="">卖点描述 :</label>
							<textarea name="description" class="f-text" style="width:366px;height:80px;"></textarea><em>必填*</em>
						</div>
						<div class="f-itm">
                            <input name="num_iid" type="hidden" value="<?php echo $num_iid; ?>"/>
                            <input name="detail_url" type="hidden" value="<?php echo $detail_url; ?>"/>
                            <input name="freight_payer" type="hidden" value="<?php echo $freight_payer; ?>"/>
                            <input name="nick" type="hidden" value="<?php echo $nick; ?>"/>
                            <input name="price" type="hidden" value="<?php echo $price; ?>"/>
                            <input name="num" type="hidden" value="<?php echo $num; ?>"/>
                            <input name="pic_url" type="hidden" value="<?php echo $pic_url; ?>"/>
                            <input name="dopost" type="hidden" value="create"/>
							<button class="f-submit" name="dosubmit" type="submit">提交审核</button>                    <div style="color: orange; margin-top:20px;font-size: 20px;">
                        <?php echo $createMessage; ?>
                    </div>
						</div>
					</form>
				</div>
				<!-- /报名表单 -->

			</div>
		</div>
		<div class="xf-sub">

			<!-- 公告 -->
			<div class="xf-box">
				<div class="notice">
					<h2>报名公告</h2>
					<div class="cnt">
						<?php echo block(35);?>
					</div>
				</div>
			</div>


			<!-- 特价推荐 -->
			
		</div>
	</div>
	<!-- /两栏布局 -->
</div>

