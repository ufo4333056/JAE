<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');  ?>
<link href="/statics/css/apply.css" rel="stylesheet" type="text/css" />
<div class="blank"></div>
<div class="wrap"> 
  <dl class="ui-tab clearfix" >
    <dt>��Ʒ����</dt>
    <dd data-type="all" class="j_nativeHistory all <?php   if(ROUTE_A=='goods_apply') echo "select"?> " data-template=""><a href="/index.php?m=member&c=index&a=goods_apply&manage=all">�����</a></dd>
    <dd data-type="all" class="j_nativeHistory all <?php if($manage=='pass') echo "select"?> " data-template=""><a href="/index.php?m=member&c=index&a=goods_manage&manage=pass">��ͨ��</a></dd>
    <dd data-type="income" class="j_nativeHistory income  <?php if($manage=='check') echo "select"?>" data-template="/point/detail/income"><a href="/index.php?m=member&c=index&a=goods_manage&manage=check ">�����</a></dd>
    <dd data-type="used" class="j_nativeHistory used  <?php if($manage=='refuse') echo "select"?>" data-template="/point/detail/used"><a href="/index.php?m=member&c=index&a=goods_manage&manage=refuse">���ܾ�</a></dd>
<!--  <dd data-type="expired" class="j_nativeHistory expired  <?php    if(ROUTE_A=='apply_task') echo "select"?>" ><a href="/index.php?m=member&c=index&a=apply_task">��������</a></dd> -->
     <!-- <dd data-type="freezed" class="j_nativeHistory freezed" data-template="/point/detail/freezed">�������</dd>-->
  </dl>
  
  <div class="clear"></div>
</div>
<div class="xf-layout xf-mb">



	<!-- �������� -->
	<div class="xf-m622s288">
		<div class="xf-main">
			<div class="xf-wrap">

				<!-- ������ -->
				<div class="xf-form">
                    <div style="color: orange; text-align: center; padding-bottom: 10px;font-size: 20px;">
                        <?php echo $createMessage; ?>
                    </div>
                    
                    <form name="form1" method="post">
                        <div class="f-itm">
                            <label class="f-label" for="">��ƷID :</label>
                            <input class="f-text" name="num_iid" type="text" style="width:140px;" />
                            <input name="dopost" type="hidden" value="caiji"/>
                            <button class="f-btn" type="submit">��ȡ��Ʒ��Ϣ</button>
                        </div>
                    </form>
                    <form name="form2" method="post">
						<!-- ��ȡ����������f-show -->
						<div class="f-show">
						<div style=" float:left">
									
                                    <img src="<?php echo $pic_url; ?>" width="200" height="200" />
                                    
                          </div>          
                                    
                                    <table cellspacing="0" cellpadding="0" border="0" width="430">
								
								<tr>
									<th width="90">��Ʒ���ӣ�</th>
                                    <td><?php echo $detail_url; ?></td>
								</tr>
								<tr>
									<th>�Ƿ���ʣ�</th>
                                    <td><em><?php if($freight_payer=='seller') echo '��';elseif($freight_payer=='buyer') echo '��'; ?></em></td>
								</tr>
								<tr>
									<th>����ǳƣ�</th>
									<td><?php echo $nick;?></td>
								</tr>
								<tr>
									<th>��Ʒԭ�ۣ�</th>
									<td>��<?php echo $price;?></td>
								</tr>
								<tr>
									<th>���������</th>
                                    <td><?php echo $num; ?>��</td>
								</tr>
								
							</table>
						</div>
                        
						<div class="f-itm">
							<label class="f-label" for="">��Ʒ���� :</label>
							<select name="category_id">
								<option value="0">�޷���</option>
                                <?php foreach($categoryArr as $catId=>$catName){; ?>
                                <option value="<?php echo $catId; ?>"><?php echo $catName; ?></option>
                                    <?php }; ?>
							</select>
							<em>�ɸ�</em>
						</div>
                      
                        <div class="f-itm">
							<label class="f-label" for="">��Ʒ��ͼ :</label>
                            <input class="f-text" name="pic_url" type="text" style="width:350px;" value="  <?php echo $pic_url; ?>" />
							<em>�ظ�*</em>
							<div style="color:#999999">��Ҫ��ͼƬ���塢�����ֺ�ˮӡ������230*230�������Σ�����ǰ׵�ͼ��</div>
						</div>
						<div class="f-itm">
							<label class="f-label" for="">*��Ʒ���� :</label>
                            <input class="f-text" name="title" type="text" style="width:350px;" value="<?php echo $title; ?>" />
							<em>�ظ�*</em>
						</div>
                        <div class="f-itm">
							<label class="f-label" for="">*��Ʒ�ؼ� :</label>
                            <input class="f-text" name="coupon_price" type="text" style="width:350px;" value="<?php echo $coupon_price; ?>" />
							<em>�ظ�*</em>
							<div style="color:#999999">�����ʱ���ֱ���ҳ���ۿۼ�����Ʒ�ؼ۲���ʱ����ͨ�����뱨�������̵����ۿۼۣ�</div>
						</div>
						<div class="f-itm">
							<label class="f-label" for="">�������� :</label>
							<textarea name="description" class="f-text" style="width:366px;height:80px;"></textarea><em>����*</em>
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
							<button class="f-submit" name="dosubmit" type="submit">�ύ���</button>                    <div style="color: orange; margin-top:20px;font-size: 20px;">
                        <?php echo $createMessage; ?>
                    </div>
						</div>
					</form>
				</div>
				<!-- /������ -->

			</div>
		</div>
		<div class="xf-sub">

			<!-- ���� -->
			<div class="xf-box">
				<div class="notice">
					<h2>��������</h2>
					<div class="cnt">
						<?php echo block(35);?>
					</div>
				</div>
			</div>


			<!-- �ؼ��Ƽ� -->
			
		</div>
	</div>
	<!-- /�������� -->
</div>

