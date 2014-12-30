<?php include $this->admin_tpl('head','admin');?>

<form name="myform" id="myform" action="/admin.php?m=block&c=block&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody>
      <tr>
        <th>所属站点:<?php echo $r['siteid'];?></th>
        <td><select name="info[siteid]">
        <?php foreach ($sitelist as $c) : ?>
        
        <option value="<?php echo  $c['siteid']?>" <?php if ($c['siteid']==$siteid) echo "selected";?> ><?php echo $c['name']?></option>
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
      <tr>
        <th width="100">名称：</th>
        <td><input style="width:300px;" type="text" name="info[name]"  value="<?php echo $name?>" id="language" class="input-text"><div id="languageTip" class="onShow">中文</div></td>
      </tr>
      <tr>
        <th> 显示的位置：</th>
        <td><input style="width:300px;" type="text" name="info[pos]"  value="<?php echo $pos?>" id="language" class="input-text"><div id="languageTip" class="onShow">英文</div></td>
      </tr>
      <tr>
        <th>描述：</th>
        <td><textarea style="width:300px;height: 60px;" name="info[description]"><?php echo $description?></textarea><div id="nameTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>碎片数据：</th>
        <td><textarea style="width:600px;height: 300px;" name="info[data]"><?php echo $data?></textarea><div id="nameTip" class="onShow"></div></td>
      </tr>
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input name="id" type="hidden" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>