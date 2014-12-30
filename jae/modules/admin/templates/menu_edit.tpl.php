<?php include $this->admin_tpl('head');

			
?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=menu&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
        <th width="200">上级菜单：</th>
        <td><select name="info[parentid]">
        <option value="0">作为一级菜单</option>
        <?php echo $select_categorys;?>
        
</select></td>
      </tr>
      <tr>
        <th> 对应的中文语言名称：</th>
        <td><input type="text" name="info[name]" id="language" class="input-text" value="<?php echo $name;?>"><div id="languageTip" class="onShow">请输入对应的中文语言名称</div></td>
      </tr>
      <tr>
        <th>菜单英文名称：</th>
        <td><input type="text" name="info[language]" id="name" class="input-text" value="<?php echo $language;?>"><div id="nameTip" class="onShow">请输入菜单英文名称</div></td>
      </tr>
	<tr>
        <th>模块名：</th>
        <td><input type="text" name="info[m]" id="m" class="input-text" value="<?php echo $m;?>"><div id="mTip" class="onShow">请输入模块名</div></td>
      </tr>
	<tr>
        <th>文件名：</th>
        <td><input type="text" name="info[c]" id="c" class="input-text" value="<?php echo $c;?>"><div id="cTip" class="onShow">请输入文件名</div></td>
      </tr>
	<tr>
        <th>方法名：</th>
        <td><input type="text" name="info[a]" id="a" class="input-text" value="<?php echo $a;?>"> <span id="a_tip" class="onShow">请输入方法名</span>通过AJAX 传递的方法，请使用 ajax_开头，方法为修改或删除操作时，请对应写成，ajax_edit_myaction/ajax_delete_myaction</td>
      </tr>
	<tr>
        <th>附加参数：</th>
        <td><input type="text" name="info[data]" class="input-text" value="<?php echo $data;?>"></td>
      </tr>
	<tr>
        <th>是否显示菜单：</th>
        <td><input type="radio" name="info[display]" value="1" <?php if($display==1) echo "checked";?>> 是<input type="radio" name="info[display]" value="0" <?php if($display==0) echo "checked";?>> 否</td>
      </tr>
	  <tr>
        <th>在此模式中显示：</th>
        <td><input type="checkbox" name="info[project1]" value="1"> 经典模式</td>
      </tr>
</tbody></table>
<!--table_form_off--><input name="id" type="hidden" value="<?php echo $id?>">
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot');?>