<?php include $this->admin_tpl('head','admin'); ?>
<font color="red"><?php echo $message;?></font>
  
            <form name="form2"  method="post"   action="/admin.php?m=seckill&c=seckill&a=edit">
                <table class="table_form" cellpadding="0" cellspacing="0" border="0">
                 
                    <tr>
                        <th width="140">*��Ʒ����:</th>
                        <td><input class="input-text" type="text" name="info[detail_url]" size="50" value="<?php echo $detail_url; ?>"></td>
                    </tr>
                      <tr>
                        <th width="140">*��������:</th>
                        <td><input class="input-text" type="text" name="info[shop_url]" size="50" value="<?php echo $shop_url; ?>"></td>
                    </tr>
                    <tr>
                        <th>*��Ʒ����:</th>
                        <td><input class="input-text" type="text" name="info[title]" size="50" value="<?php echo $title; ?>"></td> <td rowspan="12" valign="top">  <a target="_blank" href="<?php echo $detail_url; ?>"><img border="0" src="<?php echo $pic_url; ?>" width="200" height="200" /><br>��ƷͼƬԤ��(�����������ҳ��)</a> </td>
                    </tr>
                    <tr>
                        <th>*��ƷͼƬ:</th>
                        <td><input class="input-text" type="text" name="info[pic_url]" size="50" value="<?php echo $pic_url; ?>"></td>
                    </tr>
                       <tr>
                       
                        <td>
                           
                        </td>
                    </tr>
                  
                    <tr>
                        <th>*����ʱ���:</th>
                        <td>
                            <ul>
                                <li>
                                    <label class="tit" for="J_DepDate">��ʼʱ�䣺</label>
                                    <input name="info[begin_time]" class="kg_datePicker  input-text" type="text"  value="<?php echo date('Y-m-d  H:i:s', $begin_time); ?>"/>
                                </li>
                                <li>
                                    <label class="tit" for="J_RetDate">����ʱ�䣺</label>
                                    <input name="info[end_time]" class="kg_datePicker  input-text" type="text" 
                                           value="<?php echo date('Y-m-d  H:i:s', $end_time); ?>"/>
                                </li>
                            </ul>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>*����:</th>
                        <td>
                            <select name="info[freight_payer]">
                                <option<?php if($freight_payer=='seller'){?> selected="selected"<?php }; ?> value="seller">��</option>
                                <option<?php if($freight_payer=='buyer'){?> selected="selected"<?php }; ?> value="buyer">��</option>
                            </select>
                    </tr>
                    <tr>
                        <th>*�̼��ǳ�:</th>
                        <td><input class="input-text" type="text" name="info[nick]" size="50" value="<?php echo $nick; ?>"></td>
                    </tr>
                    
                    
                      <tr>
                        <th width="145">*ϵͳ�Ƿ���������ɱ:</th>
                        <td><label> �� <input class="input-text" type="radio" name="info[iskill]" size="50" value="1" <?php if($iskill==1) echo "checked" ?>  ></label><label> ��<input class="input-text" type="radio" name="info[iskill]" size="50" value="0"  <?php if($iskill==0) echo "checked" ?>> </label></td>
                    </tr>
                     <tr>
                        <th width="145">*��ɱ�������:</th>
                        <td><input class="input-text" type="text" name="info[point]" size="20" value="<?php echo $point; ?>"></td>
                    </tr>
                     <tr>
                        <th width="145">*��ɱ����:</th>
                        <td><input class="input-text" type="text" name="info[question]" size="40" value="<?php echo $question; ?>"></td>
                    </tr>
                     <tr>
                        <th width="145">*��ɱ��:</th>
                        <td><input class="input-text" type="text" name="info[answer]" size="40" value="<?php echo $answer; ?>"></td>
                    </tr>
                    <tr>
                        <th>*��Ʒԭ��:</th>
                        <td><input class="input-text" type="text" name="info[price]" size="50" value="<?php echo $price; ?>"></td>
                    </tr>
                    <tr>
                        <th>*��Ʒ�ּ�:</th>
                        <td><input class="input-text" type="text" name="info[coupon_price]" value="<?php echo $coupon_price; ?>" /></td>
                    </tr>
                    <tr>
                        <th>*��Ʒ����:</th>
                        <td><input class="input-text" type="text" name="info[num]" size="50" value="<?php echo $num; ?>"></td>
                    </tr>
                    
                 
                  
                    <tr>
                        <th>��������:</th>
                        <td>
                            <textarea style="width:350px;height:100px" name="info[description]"><?php echo $description; ?></textarea>
                        </td>
                    </tr>
                    
                   
                </table>
                <div class="btns"><input name="id" type="hidden" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="�ύ"></div>
            </form>
<?php include $this->admin_tpl('foot','admin');?>