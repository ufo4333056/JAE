<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php include template('content','head');?>

<!-- ��Ʒ�б�ʼ -->

<div class="wrap">

	<div class="shop_list">
		<ul>
        
      <?php 
      $db= jae_base::load_model('shop_model');
      $where=" status=1 ";
      $data=$db->listinfo($where,$order = 'listorder,id DESC',$page, $pages = '10');   
      $pages=$goods_db->pages;

      foreach($data as $shop){  ?>
      <li> <a class="img" href="<?php echo $shop['detail_url'] ?>" target="_blank"><img src="<?php echo $shop['pic_url']; ?>" width="290" height="290"></a><a class="title" href="<?php echo $shop['detail_url'] ?>" target="_blank"><?php echo $shop['shop_title']; ?></a> </li>
      <?php }; ?>
		
		</ul>
<div class="clear" style="clear:both" ></div>
	</div>

</div>


 
    <!-- �б��ҳ -->
    <div class="pages">       
            <?php echo $pages; ?>     
    </div>
<?php include template('content','foot');?>