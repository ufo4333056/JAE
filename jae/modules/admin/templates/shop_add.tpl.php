<?php include $this->admin_tpl('head');

			
?>
 <?php
                 echo $createMessage;
                ?>
  <form name="form1"  method="post">
                <table class="admin-form-table" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <th width="145">卖家昵称:</th>
                        <td>
                            <input class="f-text" type="text" name="nick" value="<?php echo $nick; ?>" size="80">
                            <input type="hidden" name="dopost" value="caiji">
                            <input class="f-btn" type="submit" value="获取">
                        </td>
                    </tr>
                </table>
            </form>

            <form name="form2"  method="post">
                <table class="admin-form-table" cellpadding="0" cellspacing="0" border="0">
                  
                    
                    <tr>
                        <th width="145">店家昵称:</th>
                        <td width="380">
                            <input class="f-text" type="text" name="nick" size="50" value="<?php echo $nick; ?>">
                        </td>
                        <td rowspan="5">
                            <a target="_blank" href="<?php echo $detail_url; ?>">
                                <img border="0" src="<?php echo $pic_url; ?>" width="200" height="200" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>店铺连接:</th>
                        <td>
                            <input class="f-text" type="text" name="detail_url" size="50" value="<?php echo $detail_url; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>店家店标:</th>
                        <td>
                            <input class="f-text" type="text" name="pic_url" size="50" value="<?php echo $pic_url; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>店铺标题:</th>
                        <td>
                            <input class="f-text" type="text" name="shop_title" size="50" value="<?php echo $shop_title; ?>">
                        </td>
                    </tr>
                   
                    <tr>
                        <th>店铺描述:</th>
                        <td>
                            <textarea style="width:370px;height:200px" name="description"><?php echo $description; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <input type="hidden" name="sid" size="50" value="<?php echo $sid; ?>"></td>
                    </tr>
                    
                    <tr>
                        <th colspan="3" style="text-align:center;">
                            <input type="hidden" name="dopost" value="create">
                            <input class="f-submit" type="submit" value="提交">
                        </th>
                    </tr>
                </table>
            </form>
<?php include $this->admin_tpl('foot');?>