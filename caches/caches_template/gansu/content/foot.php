<?php defined('IN_JAE') or exit('No permission resources.'); ?><!-- 底部 -->
		

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
					<a>JAE特色中国系统支持</a>
				</div>
				<ul>		
					<li><a>湖北馆提供JAE特色中国系统</a></li>
					<li><a>提供免费使用体验</a></li>				    
					<li><a>旺旺：熊怀竹</a><a target="_blank" href="http://www.taobao.com/webww/ww.php?ver=3&touid=%E7%86%8A%E6%80%80%E7%AB%B9&siteid=cntaobao&status=1&charset=utf-8"><img border="0" src="http://amos.alicdn.com/realonline.aw?v=2&uid=%E7%86%8A%E6%80%80%E7%AB%B9&site=cntaobao&s=1&charset=utf-8" alt="和我联系" /></a></li>


				</ul>
			</div>
		</div>
	</div>

		<!-- 底部 end -->


    <!-- 右侧悬浮 -->

    <!-- 右侧悬浮结束 -->
