<?php include $this->admin_tpl('head','admin');?>

<form name="myform" action="/admin.php?m=prize&c=prize_set&a=listorder" method="post">
  <div class="pad-lr-10">
    <div class="table-list">
      <table width="100%" cellspacing="0" class="table_form">
        <tbody>
          <tr class="thead">
          
            <th width="20"><?php echo  L('id')?></th>
          
            <th width="100"><?php echo  L('user_id')?></th>
            <th width="60"><?php echo  L('buyer_nick')?></th>
            <th width="120"><?php echo  L('auction_id')?></th>
            <th width="60"><?php echo  L('paid_fee')?></th>
              <th width="100"><?php echo  L('auction_count')?></th>
                <th width="80"><?php echo  L('auction_title')?></th>
                 <th width="100"><?php echo  L('pub_time')?></th>
                  <th width="100"><?php echo  L('pub_app_key')?></th>
                    <th width="100"><?php echo  L('topic')?> </th>
               
            
            
            
          
          </tr>
          <?php foreach ($data as $v){?>
          <tr>      
            <td align="center"><?php echo $v['id'];?></td>            
            <td  align="center"><?php echo $v['user_id']?></td>
            <td ><?php echo $v['buyer_nick']?></td>
            <td  ><?php echo $v['auction_id']?></td>
            <td  ><?php echo $v['paid_fee']?></td>
            <td  ><?php echo $v['auction_count']?></td>
            <td  ><a target="_blank" href="http://item.taobao.com/item.htm?id=<?php echo $v['auction_id']?>"><?php echo $v['auction_title']?></a></td>
            <td  ><?php echo date('Y-m-d H:i:s',$v['pub_time'])?></td>
            <td  ><?php echo $v['pub_app_key']?></td>
             <td  ><?php echo $v['topic']?></td>
          </tr>
          <?php }?>
        </tbody>
      </table>
      <div class="btns">
        <input type="submit" class="button" name="dosubmit" value="<?php echo L('submit')?>" />
      </div>
    </div>
  </div>
  </div>
</form>
<div class="pages"><?php echo $pages;?></div>
<?php include $this->admin_tpl('foot','admin');?>
