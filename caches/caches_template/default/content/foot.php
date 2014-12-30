<?php defined('IN_JAE') or exit('No permission resources.'); ?><!-- µ×²¿1 -->

<div class="bder">
	<div class="wrap">
		<div class="dilo">
			<img  height="70" src="<?php echo $site_setting['foot_logo'] ?>">
		</div>
		<div class="tle">
			<div class="ti">
				<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=23 ORDER BY listorder,id ASC   LIMIT 0,1 ');
				foreach ($result as $v) {
				?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
				<?php }
				?>
			</div>
			<ul>
				<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=23 ORDER BY listorder,id ASC   LIMIT 1,3 ');
					foreach ($result as $v) {
				?><li><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></li>
				<?php }
				?>
			</ul>
		</div>
		
		
		<div class="tle">
			<div class="ti">
				<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=23 ORDER BY listorder,id ASC   LIMIT 4,1 ');
				foreach ($result as $v) {
				?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
				<?php }
				?>
			</div>
			<ul>
				<li>
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=23 ORDER BY listorder,id ASC   LIMIT 5,3 ');
						foreach ($result as $v) {
					?><li><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></li>
					<?php }
					?>
				</ul>
			</div>
			
			
			<div class="tle">
				<div class="ti">
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=23 ORDER BY listorder,id ASC   LIMIT 8,1 ');
						foreach ($result as $v) {
					?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
					<?php }
					?>
				</div>
				<ul>
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=23 ORDER BY listorder,id ASC   LIMIT 9,3 ');
						foreach ($result as $v) {
					?><li><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></li>
					<?php }
					?>
				</ul>
			</div>
			<div class="tle" style="margin:0px;">
				<div class="ti">
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=23 ORDER BY listorder,id ASC   LIMIT 12,1 ');
						foreach ($result as $v) {
					?><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a>
					<?php }
					?>
				</div>
				<ul>
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=23 ORDER BY listorder,id ASC   LIMIT 13,3 ');
						foreach ($result as $v) {
					?><li><a href="<?php echo $v['link'];?>" target="_blank"><?php  echo $v['title'];?></a></li>
					<?php }
					?>
				</ul>
			</div>
			
			<div class="wx">
				<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=23 ORDER BY listorder,id ASC   LIMIT 16,1 ');
				foreach ($result as $v) {
				?><img src="<?php  echo $v['picture'];?>" />
				<?php }
				?>
			</div>
			
			<div class="shux"></div>
			
			<div class="tle jaelx">
				<div class="ti">
					
				</div>
				<ul>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- µ×²¿ end -->
