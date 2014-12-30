<?php include $this->admin_tpl('head');

            
?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=setting&a=init" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
        <th width="200">站点地址</th>
        <td><input style="width: 300px;" type="text" name="info[siteUrl]" id="language" value="<?PHP echo($siteUrl)?>" class="input-text"><div id="languageTip" class="onShow"></div>    </td>
      </tr>
      <tr>
        <th> 客服旺旺</th>
        <td><input value="<?PHP echo($wangwang)?>"  style="width: 300px;" type="text" name="info[wangwang]" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>帮派地址</th>
        <td><input  value="<?PHP echo($bangpai)?>" style="width: 300px;" type="text" name="info[bangpai]" id="name" class="input-text"><div id="nameTip" class="onShow"></div></td>
      </tr>
    <tr>
        <th>APPKEY</th>
        <td><input value="<?PHP echo($appkey)?>"  style="width: 300px;" type="text" name="info[appkey]" id="m" class="input-text"><div id="mTip" class="onShow"></div></td>
      </tr>
    <tr>
        <th>SECRETKEY</th>
        <td><input value="<?PHP echo($secretKey)?>"  style="width: 300px;" type="text" name="info[secretKey]" id="c" class="input-text"><div id="cTip" class="onShow"></div></td>
      </tr>
    <tr>
        <th>完整pid</th>
        <td><input value="<?PHP echo($pid)?>"  style="width: 300px;" type="text" name="info[pid]" id="a" class="input-text"> </td>
      </tr>
    <tr>
        <th>logo地址</th>
        <td><input value="<?PHP echo($logo)?>"  style="width: 300px;" type="text" name="info[logo]" class="input-text"></td>
      </tr>
       <tr>
        <th>sessionkey</th>
        <td><input value="<?PHP echo($sessionkey)?>"  style="width: 300px;" type="text" name="info[sessionkey]" class="input-text"></td>
      </tr>
    
      
</tbody></table>
<!--table_form_off-->
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<div class="pages"><?php echo $pages;?></div>
<?php include $this->admin_tpl('foot');?>