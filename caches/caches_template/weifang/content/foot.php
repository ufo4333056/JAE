<?php defined('IN_JAE') or exit('No permission resources.'); ?><!-- �ײ� -->
		

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
			
						<div class="wx" style="display:none;">
					<?php $result=query('SELECT * FROM jae_weblink WHERE typeid=23 ORDER BY listorder,id ASC   LIMIT 16,1 '); 
					foreach ($result as $v) {
					?><img src="<?php  echo $v['picture'];?>" />
					<?php }
					?>	
					</div>
					
					<div class="shux"></div>
					
					<div class="tle jaelx">
				<div class="ti">
					<a>JAE��ɫ�й�ϵͳ֧��</a>
				</div>
				<ul>		
					<li><a>�������ṩJAE��ɫ�й�ϵͳ</a></li>
					<li><a>�ṩ���ʹ������</a></li>				    
					<li><a>�������ܻ���</a><a target="_blank" href="http://www.taobao.com/webww/ww.php?ver=3&touid=%E7%86%8A%E6%80%80%E7%AB%B9&siteid=cntaobao&status=1&charset=utf-8"><img border="0" src="http://amos.alicdn.com/realonline.aw?v=2&uid=%E7%86%8A%E6%80%80%E7%AB%B9&site=cntaobao&s=1&charset=utf-8" alt="������ϵ" /></a></li>


				</ul>
			</div>
		</div>
	</div>

		<!-- �ײ� end -->


    <!-- �Ҳ����� -->

    <!-- �Ҳ��������� -->
