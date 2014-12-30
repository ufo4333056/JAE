<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>
<!-- ÉÌÆ·ÁÐ±í¿ªÊ¼ -->

<div class="wrap">

	<div class="special_list">
		<div  class="special_left">

 <ul>

 <?php 
            $db= jae_base::load_model('special_model'); 
            $where="status=1";
            $data=$db->listinfo($where,$order = 'listorder,id DESC',$page, $pages = '30');   
			$pages=$goods_db->pages;
      		foreach ($data as $k=>$v) {?>
 	<li class="zt<?php echo $k%5+1?>">
   		<a href="<?php echo "/index.php?m=content&c=special&a=show_special&id=".$v["id"];  ?>" target="_blank">
   			<h1><?php  echo str_cut($v['title'],16,'');?></h1><div class="grace"><?php  echo $v['description'];?></div><img height="240" width="240" src="<?php  echo $v['thumb'];?>"></a>
   		
   </li>
   <?php }?>
   
</ul>


		</div>

		
		<div style="clear:both"></div>

	</div>

</div>

<!-- ÁÐ±í·ÖÒ³ -->

<?php include template('content','foot');?>