<?php include $this->admin_tpl('head');?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=shop&a=edit" method="post">

                <table class="admin-form-table" cellpadding="0" cellspacing="0" border="0">
                   
                    
                    <tr>
                        <th width="145">店家昵称:</th>
                        <td width="380">
                            <input class="f-text" type="text" name="info[nick]" size="50" value="<?php echo $nick; ?>">
                        </td>
                        <td  rowspan="5">
                            <a target="_blank" href="<?php echo $detail_url; ?>">
                                <img border="0" src="<?php echo $pic_url; ?>" width="200" height="200" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>店铺连接:</th>
                        <td>
                            <input class="f-text" type="text" name="info[detail_url]" size="50" value="<?php echo $detail_url; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>店家店标:</th>
                        <td>
                            <input class="f-text" type="text" name="info[pic_url]" size="50" value="<?php echo $pic_url; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>店铺标题:</th>
                        <td>
                            <input class="f-text" type="text" name="info[shop_title]" size="50" value="<?php echo $shop_title; ?>">
                        </td>
                    </tr>
                   
                    <tr>
                        <th>店铺描述:</th>
                        <td>
                            <textarea style="width:370px;height:200px" name="info[description]"><?php echo $description; ?></textarea>
                        </td>
                    </tr>
                   
                    
                 
                </table>
        
<!--table_form_off-->
<div class="btns"><input name="id" type="hidden" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot');?>