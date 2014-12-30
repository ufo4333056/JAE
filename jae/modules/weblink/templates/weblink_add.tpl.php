<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=weblink&c=weblink&a=add" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody>
      
      
      <tr>
        <th>所属站点:<?php echo $r['siteid'];?></th>
        <td><select name="info[siteid]">
        <?php foreach ($sitelist as $c) : ?>
        
        <option value="<?php echo  $c['siteid']?>" <?php if ($c['siteid']==$info['siteid']) echo "selected";?> ><?php echo $c['name']?></option>
        <?php endforeach?>
        
        </select></td>
      </tr>
      <tr> <th width="100">分类：</th>
      
        <td>  <select name="info[typeid]">
                                <option value="0">无分类</option>
                                <?php 
                                foreach($type as $r){; ?>
                                <option value="<?php echo $r['typeid']; ?>" <?php if ($r['typeid']==$typeid) echo "selected";?>><?php echo $r['name']; ?></option>
                                    <?php }; ?>
                            </select></td>
      </tr>
        <th width="100">标题：</th>
        <td><input style="width:300px;" type="text" name="info[title]"  value="<?php echo $title?>" id="language" class="input-text"><div id="languageTip" class="onShow">中文</div></td>
      </tr>
      <tr>
        <th> 图片：</th>
        <td><input style="width:300px;" type="text" name="info[picture]"  value="<?php echo $picture?>" id="language" class="input-text"><div id="languageTip" class="onShow">英文</div></td>
      </tr>
      <tr>
        <th>链接：</th>
        <td><input style="width:300px;" type="text" name="info[link]"  value="<?php echo $link?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
            <tr>
        <th>描述：</th>
        <td><input style="width:300px;" type="text" name="info[description]"  value="<?php echo $description?>" id="language" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>