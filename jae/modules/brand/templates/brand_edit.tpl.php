<?php include $this->admin_tpl('head','admin');?>

<form name="myform" id="myform" action="/admin.php?m=brand&c=brand&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody>
      <tr>
        <th width="100">品牌分类：</th>
      
        <td>   <select name="info[typeid]">
                                <option value="0">无分类</option>
                                <?php 
                                foreach($type as $r){; ?>
                                <option value="<?php echo $r['typeid']; ?>" <?php if ($r['typeid']==$typeid) echo "selected";?>><?php echo $r['name']; ?></option>
                                    <?php }; ?>
                            </select></td>
      </tr>
      <tr>
        <th width="100">链接名称：</th>
        <td><input style="width:300px;" type="text" name="info[name]" value="<?php echo $name?>" id="language" class="input-text"></td>
      </tr>
      <tr>
        <th> 缩略图地址：</th>
        <td><input style="width:300px;" type="text" name="info[logo]" value="<?php echo $logo?>"  id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>链接地址：</th>
        <td><input style="width:300px;" type="text" name="info[url]" value="<?php echo $url?>"  id="name" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
	<tr>
        <th>品牌所属单位：</th>
        <td><input style="width:300px;" type="text" name="info[username]" value="<?php echo $username?>"  id="m" class="input-text"><div id="mTip" class="onShow"></div></td>
      </tr>
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input name="brandid" type="hidden" value="<?php echo $brandid?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>