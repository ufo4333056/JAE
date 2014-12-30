<?php
defined('IN_ADMIN') or exit('No permission resources.'); 
include $this->admin_tpl('head', 'admin');
?>
<tr>
<td align="left" colspan="3"><?php echo L("local_dir")?>£º<?php echo $local?></td>
</tr>
<?php if ($dir !='' && $dir != '.'):?>
<tr>
<td align="left" colspan="3"><a href="<?php echo '/admin.php?m=template&c=file&a=init&style='.$this->style.'&dir='.$dir ?>"><img src="/statics/images/folder-closed.gif" /><?php echo L("parent_directory")?></a></td>
</tr>
<?php endif;?>
<div class="pad-10" style="padding-bottom:0px">
<!--<div class="col-right">
<h3 class="f14"><?php echo L('common_variables')?></h3>
<input type="button" class="button pt" onClick="javascript:insertText('{CSS_PATH}')" value="{CSS_PATH}" title="<?php echo L('click_into')?>"/><br />
<input type="button" class="button pt" onClick="javascript:insertText('{JS_PATH}')" value="{JS_PATH}" title="<?php echo L('click_into')?>"/><br />
<input type="button" class="button pt" onClick="javascript:insertText('{IMG_PATH}')" value="{IMG_PATH}" title="<?php echo L('click_into')?>"/><br />
<input type="button" class="button pt" onClick="javascript:insertText('{APP_PATH}')" value="{APP_PATH}" title="<?php echo L('click_into')?>"/><br />
<input type="button" class="button pt" onClick="javascript:insertText('{get_siteid()}')" value="{get_siteid()}" title="»ñÈ¡Õ¾µãID"/><br />
<input type="button" class="button pt" onClick="javascript:insertText('{loop $data $n $r}')" value="{loop $data $n $r}" title="<?php echo L('click_into')?>"/><br />
<input type="button" class="button pt" onClick="javascript:insertText('{$r[\'url\']}')" value="{$r['url']}" title="<?php echo L('click_into')?>"/><br />
<input type="button" class="button pt" onClick="javascript:insertText('{$r[\'title\']}')" value="{$r['title']}" title="<?php echo L('click_into')?>"/><br />
<input type="button" class="button pt" onClick="javascript:insertText('{$r[\'thumb\']}')" value="{$r['thumb']}" title="<?php echo L('click_into')?>"/><br />
<input type="button" class="button pt" onClick="javascript:insertText('{strip_tags($r[description])}')" value="{strip_tags($r[description])}" title="<?php echo L('click_into')?>"/><br />
<?php if (is_array($file_t_v[$file_t])) { foreach($file_t_v[$file_t] as $k => $v) {?>
 <input type="button" class="button pt" onClick="javascript:insertText('<?php echo $k?>')" value="<?php echo $k?>" title="<?php echo $v ? $v :L('click_into')?>"/><br />
 <?php } }?>
</div>-->
<div class="col-auto">
<form action="/admin.php?m=template&c=file&a=edit_file&style=<?php echo $this->style?>&dir=<?php echo $dir?>&file=<?php echo $file?>" method="post" name="myform" id="myform">
<textarea name="code" id="code" style="height: 280px;width:96%; visibility:inherit"><?php echo $data?></textarea>
<div class="bk10"></div>
<input type="submit" id="dosubmit" class="button pt" name="dosubmit" value="<?php echo L('submit')?>" />
</form>
</div>
</div>
 
<?php
include $this->admin_tpl('foot', 'admin');
?>