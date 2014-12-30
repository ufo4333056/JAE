<?php include $this->admin_tpl('head','admin'); ?>
<font color="red"><?php echo $message;?></font>
  
            <form name="form2"  method="post"   action="/admin.php?m=apply&c=goods&a=edit">
                <table class="table_form" cellpadding="0" cellspacing="0" border="0">
                  <tr>
                        <th>拒绝理由:</th>
                        <td>
                            <textarea style="width:350px;height:100px" name="info[refuse]"><?php echo $refuse; ?></textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <th width="140">*商品1链接:</th>
                        <td><input class="input-text" type="text" name="info[detail_url]" size="50" value="<?php echo $detail_url; ?>"></td>
                    </tr>
                    <tr>
                        <th>*商品标题:</th>
                        <td><input class="input-text" type="text" name="info[title]" size="50" value="<?php echo $title; ?>"></td> <td rowspan="12" valign="top">  <a target="_blank" href="<?php echo $detail_url; ?>"><img border="0" src="<?php echo $pic_url; ?>" width="200" height="200" /><br>商品图片预览(点击跳到详情页面)</a> </td>
                    </tr>
                    <tr>
                        <th>*商品图片:</th>
                        <td><input class="input-text" type="text" name="info[pic_url]" size="50" value="<?php echo $pic_url; ?>"></td>
                    </tr>
                       <tr>
                        <th>
                            商品分类:
                        </th>
                        <td width="380">
                            <select name="info[category_id]">
                                <option value="0">无分类</option>
                                <?php 
                                foreach($categoryArr as $catId=>$catName){; ?>
                                <option value="<?php echo $catId; ?>" <?php if($catId==$category_id) echo "selected";?> ><?php echo $catName; ?></option>
                                    <?php }; ?>
                            </select>
                        </td>
                        <td>
                           
                        </td>
                    </tr>
                  
                    <tr>
                        <th>*上线时间段:</th>
                        <td>
                            <ul>
                                <li>
                                    <label class="tit" for="J_DepDate">开始时间：</label>
                                    <input name="info[begin_time]" class="kg_datePicker  input-text"
                                           data-config='{"isHoliday": false,
                                           "minDate" :"<?php echo date('Y-m-d', time()-604800); ?>","finalTriggerNode" : "kg_datePicker  input-text", "finalTriggerMinDate" : "2013-04-22"}'
                                           type="text"
                                           value="<?php echo date('Y-m-d', time()); ?>"/>
                                </li>
                                <li>
                                    <label class="tit" for="J_RetDate">结束时间：</label>
                                    <input name="info[end_time]" class="kg_datePicker  input-text" type="text" 
                                           value="<?php echo date('Y-m-d', time()+604800); ?>"/>
                                </li>
                            </ul>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>*包邮:</th>
                        <td>
                            <select name="info[freight_payer]">
                                <option<?php if($freight_payer=='seller'){?> selected="selected"<?php }; ?> value="seller">是</option>
                                <option<?php if($freight_payer=='buyer'){?> selected="selected"<?php }; ?> value="buyer">否</option>
                            </select>
                    </tr>
                    <tr>
                        <th>*商家昵称:</th>
                        <td><input class="input-text" type="text" name="info[nick]" size="50" value="<?php echo $nick; ?>"></td>
                    </tr>
                    <tr>
                        <th>*商品原价:</th>
                        <td><input class="input-text" type="text" name="inf[price]" size="50" value="<?php echo $price; ?>"></td>
                    </tr>
                    <tr>
                        <th>*商品现价:</th>
                        <td><input class="input-text" type="text" name="info[coupon_price]" value="<?php echo $coupon_price; ?>" /></td>
                    </tr>
                    <tr>
                        <th>*商品数量:</th>
                        <td><input class="input-text" type="text" name="info[num]" size="50" value="<?php echo $num; ?>"></td>
                    </tr>
                    
                    <tr>
                        <th>商品推荐位:</th>
                        <td>
                            <select name="info[promote_id]">
                                <option value="0">无推荐位</option>
                                <?php foreach ($promotePositionArr as $promoteId => $promoteName)
                                {
                                ; ?>
                                    <option value="<?php echo $promoteId; ?>"  <?php if($promoteId==$promote_id) echo "selected";?> ><?php echo $promoteName; ?></option>
                                <?php }; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>频道:</th>
                        <td>
                            <select name="info[pindao_id]">
                                <option value="0">无频道</option>
                                <?php foreach ($pindaoArr as $pindaoId => $pindaoName)
                                {
                                ; ?>
                                    <option value="<?php echo $pindaoId; ?>"   <?php if($pindaoId==$pindao_id) echo "selected";?>><?php echo $pindaoName; ?></option>
                                <?php }; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>卖点描述:</th>
                        <td>
                            <textarea style="width:350px;height:100px" name="info[description]"><?php echo $description; ?></textarea>
                        </td>
                    </tr>
                    
                   
                </table>
                <div class="btns"><input name="id" type="hidden" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>
            </form>
<?php include $this->admin_tpl('foot','admin');?>