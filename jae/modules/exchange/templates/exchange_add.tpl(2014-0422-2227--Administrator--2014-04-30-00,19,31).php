<?php include $this->admin_tpl('head','admin'); ?>
<font color="red"><?php echo $message;?></font>
  <form name="form1" method="post" action="/admin.php?m=exchange&c=exchange&a=add&menuid=<?php $menuid?>" >
                <table class="table_form contentWrap"  cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <th width="145" align="right">
                            ��ƷID:
                        </td>
                        <td align="left">
                            <input class="input-text" type="text" name="numIid"  value="<?php echo $numIid; ?>" size="80">
                            <input type="hidden" name="dopost" value="caiji">
                            <input  type="submit" class="button" value="��ȡ">
                        </td>
                    </tr>
                </table>
            </form>


            <form name="form2"  method="post"   action="/admin.php?m=exchange&c=exchange&a=add">
                <table class="table_form" cellpadding="0" cellspacing="0" border="0">
                   
                    <tr>
                        <th width="145">
                            *��ƷID(����ǲɼ����벻Ҫ����):
                        </th>
                        <td>
                            <input class="input-text" type="text" name="info[num_iid]" value="<?php echo $num_iid; ?>">
                        </td>
                        <td rowspan="13" style="vertical-align:top;align:center;">
                            <a target="_blank" href="<?php echo $detail_url; ?>"><img border="0" src="<?php echo $pic_url; ?>" width="200" height="200" /></a>
                        </td>
                    </tr>

                    <tr>
                        <th width="145">*����ʱ���:</th>
                        <td>
                            <ul>
                                <li>
                                    <label class="tit" for="J_DepDate">��ʼʱ�䣺</label>
                                    <input name="info[begin_time]" class="kg_datePicker  input-text"  type="text" value="<?php echo date('Y-m-d H:i:s', time()); ?>"/>
                                </li>
                                <li>
                                    <label class="tit" for="J_RetDate">����ʱ�䣺</label>
                                    <input name="info[end_time]" class="kg_datePicker  input-text" type="text"  value="<?php echo date('Y-m-d H:i:s', time()+604800); ?>"/>
                                </li>
                            </ul>
                            
                        </td>
                    </tr>
                    <tr>
                        <th width="145">*��Ʒ����:</th>
                        <td><input class="input-text" type="text" name="info[detail_url]" size="50" value="<?php echo $detail_url; ?>"></td>
                    </tr>
                    <tr>
                        <th width="145">*��Ʒ����:</th>
                        <td><input class="input-text" type="text" name="info[title]" size="50" value="<?php echo $title; ?>"></td>
                    </tr>
                    <tr>
                        <th width="145">*��ƷͼƬ:</th>
                        <td><input class="input-text" type="text" name="info[pic_url]" size="50" value="<?php echo $pic_url; ?>"></td>
                    </tr>
                    <tr>
                        <th width="145">*����:</th>
                        <td>
                            <select name="info[freight_payer]">
                                <option<?php if($freight_payer=='seller'){?> selected="selected"<?php }; ?> value="seller">��</option>
                                <option<?php if($freight_payer=='buyer'){?> selected="selected"<?php }; ?> value="buyer">��</option>
                            </select>
                    </tr>
                    <tr>
                        <th width="145">*�̼��ǳ�:</th>
                        <td><input class="input-text" type="text" name="info[nick]" size="50" value="<?php echo $nick; ?>"></td>
                    </tr>
                    <tr>
                        <th width="145">*��Ʒԭ��:</th>
                        <td><input class="input-text" type="text" name="info[price]" size="50" value="<?php echo $price; ?>"></td>
                    </tr>
                    <tr>
                        <th width="145">*��Ʒ�ּ�:</th>
                        <td><input class="input-text" type="text" name="info[coupon_price]" value=""></td>
                    </tr>
                      <tr>
                        <th width="145">*�һ�����:</th>
                        <td><input class="input-text" type="text" name="info[point]" value=""></td>
                    </tr>
                    <tr>
                        <th width="145">*��Ʒ����:</th>
                        <td><input class="input-text" type="text" name="info[num]" size="50" value="<?php echo $num; ?>"></td>
                    </tr>
                    
                 
                 
                    <tr>
                        <th width="145">��������:</th>
                        <td>
                            <textarea style="width:350px;height:80px" name="description"></textarea>
                        </td>
                    </tr>
                    
                   
                </table>
                <div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="�ύ"></div>
            </form>
<?php include $this->admin_tpl('foot','admin');?>