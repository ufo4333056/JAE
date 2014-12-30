<?php defined('IN_JAE') or exit('No permission resources.'); ?><!-- 底部 -->
		
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" data-action=\"weblink\" data-datas=\"op=weblink&tag_md5=41fe3d9e50980b4ea70e5954fe6546b3&action=lists&typeid=23&num=100&order=listorder+ASC&return=data\"><a href=\"/admin.php?m=visualization&c=weblink&a=lists&op=weblink&tag_md5=41fe3d9e50980b4ea70e5954fe6546b3&action=lists&typeid=23&num=100&order=listorder+ASC&return=data\" target=\"_blank\" class=\"admin_piao_edit\">EDIT</a>";}$weblink_tag = jae_base::load_app_class("weblink_tag", "weblink");if (method_exists($weblink_tag, 'lists')) {$data = $weblink_tag->lists(array('typeid'=>'23','order'=>'listorder ASC','limit'=>'100',));}?>
	<div class="bder">
		<div class="wrap">
		<div class="dilo">
				<img  height="70" src="<?php echo $site_setting['foot_logo'] ?>">
			</div>
			<div class="tle">
				<div class="ti">
				<a href="<?php echo $data[0]['link'];?>" target="_blank"><?php  echo $data[0]['title'];?></a>
					
				</div>
				<ul>
				  
					<li><a href="<?php echo $data[1]['link'];?>" target="_blank"><?php  echo $data[1]['title'];?></a></li>
					<li><a href="<?php echo $data[2]['link'];?>" target="_blank"><?php  echo $data[2]['title'];?></a></li>
					<li><a href="<?php echo $data[3]['link'];?>" target="_blank"><?php  echo $data[3]['title'];?></a></li>




				
				</ul>
			</div>
			
			
			<div class="tle">
				<div class="ti">
				
					<a href="<?php echo $data[4]['link'];?>" target="_blank"><?php  echo $data[4]['title'];?></a>
					
				</div>
				<ul>		
				   
					<li><a href="<?php echo $data[5]['link'];?>" target="_blank"><?php  echo $data[5]['title'];?></a></li>
					<li><a href="<?php echo $data[6]['link'];?>" target="_blank"><?php  echo $data[6]['title'];?></a></li>
					<li><a href="<?php echo $data[7]['link'];?>" target="_blank"><?php  echo $data[7]['title'];?></a></li>
					
				</ul>
			</div>

				
				
			<div class="tle">
				<div class="ti">
				  
					<a href="<?php echo $data[8]['link'];?>" target="_blank"><?php  echo $data[8]['title'];?></a>
					
				</div>
				<ul>
				 
					<li><a href="<?php echo $data[9]['link'];?>" target="_blank"><?php  echo $data[9]['title'];?></a></li>
					<li><a href="<?php echo $data[10]['link'];?>" target="_blank"><?php  echo $data[10]['title'];?></a></li>
					<li><a href="<?php echo $data[11]['link'];?>" target="_blank"><?php  echo $data[11]['title'];?></a></li>
					
				</ul>
			</div>
			<div class="tle" style="margin:0px;">
				<div class="ti">
				  
					<a href="<?php echo $data[12]['link'];?>" target="_blank"><?php  echo $data[12]['title'];?></a>
					
				</div>
				<ul>
				  
					<li><a href="<?php echo $data[13]['link'];?>" target="_blank"><?php  echo $data[13]['title'];?></a></li>
					<li><a href="<?php echo $data[14]['link'];?>" target="_blank"><?php  echo $data[14]['title'];?></a></li>
					<li><a href="<?php echo $data[15]['link'];?>" target="_blank"><?php  echo $data[15]['title'];?></a></li>

				
				</ul>
			</div>
			
					<div class="wx" style="display:none;">
					
					<img src="<?php  echo $data[16]['picture'];?>" />
					
					</div>
					
					<div class="shux"></div>
					
					<div class="tle jaelx">
				<div class="ti">
					<a>JAE特色中国系统支持</a>
				</div>
				<ul>		
					<li><a>湖北馆提供JAE特色中国系统</a></li>
					<li><a>提供免费使用体验</a></li>				    
					<li><a target="_blank" href="http://www.taobao.com/webww/ww.php?ver=3&touid=%E7%86%8A%E6%80%80%E7%AB%B9&siteid=cntaobao&status=1&charset=utf-8">旺旺：熊怀竹<img border="0" src="http://amos.alicdn.com/realonline.aw?v=2&uid=%E7%86%8A%E6%80%80%E7%AB%B9&site=cntaobao&s=1&charset=utf-8" alt="和我联系" /></a></li>


				</ul>
			</div>
		</div>
	</div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '<div style=clear:both></div></div>';}?>

		<!-- 底部 end -->
