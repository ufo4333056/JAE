<?php include $this->admin_tpl('head','admin');?>

<form name="searchform" action="" method="get" accept-charset="UTF-8">
    <input type="hidden" value="mysql" name="m">
    <input type="hidden" value="mysql" name="c">
    <input type="hidden" value="init" name="a">
    <input type="hidden" value="<?php echo $this->menuid;?>" name="menuid">
    <table width="100%" cellspacing="0" class="search-form">
      <tbody>
        <tr>
          <td><div class="explain-col">数据库表名
              <select name="table">
              <?php foreach ($tables as $key => $val) {?>
         			<option <?php if ($table==$key) echo "selected"?>  value="<?php echo  $key?>"><?php echo $val.'  ==='.$key?> </option>
              <?php }?>
                 
       		 </select>
            
            
              <input type="submit" name="search"  class="button" value="<?php echo L('submit')?>">
            </div></td>
        </tr>
      </tbody>
    </table>
  </form>


<form name="myform" action="/admin.php?m=goods&c=goods_type&a=listorder" method="post" charset="GBK">
<div class="pad-lr-10">
<div class="table-list">
    
    <textarea style="width:100%;height: 300px;" name="info[description]"><?php echo $dump?></textarea>
  
    <div class="btns"><input type="submit" class="button" name="dosubmit" value="<?php echo L('listorder')?>" /></div>  </div>
</div>
</div>
</form>
<div class="pages"><?php echo $pages;?></div>
<?php include $this->admin_tpl('foot','admin');?>