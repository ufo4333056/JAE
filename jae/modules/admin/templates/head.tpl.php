<link href="/statics/css/system.css" rel="stylesheet" type="text/css" />
<link href="/statics/css/table_form.css" rel="stylesheet" type="text/css" />

<?php $menuid=$_GET['menuid']; if ($menuid) { $menu=get_menu($menuid); } else {$menu=get_menu(10) ;} $current_version = jae_base::load_config('version'); $siteinfo=siteinfo(get_siteid());

?>

<div class="header" style="width: auto; ">
	<div class="logo lf"><a href="/index.php" target="_blank"><span class="invisible">JAE特色中国管理系统</span></a></div>
    <div class="rt-col">
    	<div class="tab_style white cut_line text-r"><a href="http://hubei.china.taobao.com" target="_blank">技术支持：湖北馆</a><span>|</span><a href="http://www.ehoneycomb.com" target="_blank">已授权</a><span>|</span><br>当前程序版本：<?php echo $current_version['jae_version']?>  更新日期：<?php echo $current_version['jae_release']?><br>
            当前数据库版本：<?php echo $siteinfo['version']?>  更新日期：<?php echo $siteinfo['date']?>
    <ul id="Skin">
		<li class="s1 styleswitch" rel="styles1"></li>
		<li class="s2 styleswitch" rel="styles2"></li>
		<li class="s3 styleswitch" rel="styles3"></li>
        <li class="s4 styleswitch" rel="styles4"></li>
	</ul>
        </div>
    </div>
    <div class="col-auto" style="float:left;">
    	<div class="log white cut_line">您好！<?php echo $siteinfo['name'];?>  [超级管理员]<span>|</span>
    		<a href="/index.php?nocache=true" target="_blank" id="site_homepage">预览首页</a><span>|</span>
    		<a href="/admin.php" target="_blank">后台首页</a><span>|</span>
            <a href="/member.php" target="_blank">会员中心</a><span>|</span>
    		
    	</div>
        <ul class="nav white" >
        <?php 
		$mysql =jae_base::load_sys_class('mysql');//一级菜单 
		$result=$mysql->select('*','jae_menu','parentid=0 AND display=1 ORDER BY listorder,id ASC');
		foreach($result as $r){
		?>
   
        <li id="_M7" class="top_menu  <?php if ($menu[0]['id']==$r['id']) echo "on";?> "><a href="/admin.php?m=admin&c=index&a=init&menuid=<?php echo $r['id']?>" hidefocus="true" style="outline:none;"><?php echo $r['name']?></a></li>
        <?php }?>
      
      </ul>
    </div>
</div>
<div class="contents" style="width: auto; ">
	<div class="col-left left_menu">
    	<div id="Scroll" style="height: 520px; "><div id="leftMain">
        <?php 
		$result=$mysql->select('*','jae_menu','parentid='.$menu[0]['id'].'  AND display=1');//二级菜单
		foreach($result as $r){
		?>
        
        <h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span><?php echo $r['name']?></h3>
        
        
        <ul>
         <?php 
		$result=$mysql->select('*','jae_menu','parentid='.$r['id'].'  AND display=1');//三级菜单 
		foreach($result as $r){
		?>
        <li id="_MP64" class="sub_menu  <?php if ($menu[2]['id']==$r['id']) echo "on";?>"><a href="/admin.php?m=<?php echo $r['m']?>&c=<?php echo $r['c']?>&a=<?php echo $r['a']?>&<?php echo $r['data']?>&menuid=<?php echo $r['id']?>" hidefocus="true" style="outline:none;"><?php echo $r['name']?></a></li>
         <?php }?>
        </ul>
        
        <?php }?>
       <h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>图片空间</h3>
        <ul> <li id="_MP64" class="sub_menu "><a href="http://tu.taobao.com/redaction/manager.htm" target="_blank">标准版</a>
        <li id="_MP64" class="sub_menu "><a href="http://disk.taobao.com" target="_blank">商务版</a></ul>
        
        </div></div>
        <a href="javascript:;" id="openClose" style="outline: invert none medium; height: 431px; " hidefocus="hidefocus" class="open" title="展开与关闭"><span class="hidden">展开</span></a>
    </div>
	<div class="col-1 lf cat-menu" id="display_center_id" style="display: none; " height="100%">
	<div class="content">
        	<iframe name="center_frame" id="center_frame" src="?m=content&amp;c=content&amp;a=public_categorys&amp;type=add&amp;menuid=822&amp;pc_hash=NcwdoP" frameborder="false" scrolling="auto" style="border: none; height: 410px; " width="100%" height="auto" allowtransparency="true"></iframe>
            </div>
        </div>
    <div class="col-auto mr8">
    <div class="crumbs">
    <div class="shortcut cu-span"><a href="/admin.php?m=content&c=create_html&a=public_index" ><span>生成首页</span></a><a href="/admin.php?m=admin&c=cache_all&a=init&dosubmit=1" ><span>更新缓存</span></a><a href="/admin.php?m=admin&c=menu&a=init&menuid=3"><span>后台地图</span></a><a href="http://sitemanager.jae.taobao.com/sitemanager/manage/magix.htm?bizType=15#!/manage/report/reports" target="_blank"><span>数据统计</span></a></div>
    当前位置：<span id="current_pos">设置 &gt; </span></div>
    	<div class="col-1">
        	<div class="content" style="position:relative; ">
                <div name="right"  class="right" id="rightMain" src="?m=content&amp;c=content&amp;a=init&amp;menuid=822&amp;pc_hash=NcwdoP" frameborder="false" scrolling="auto" style="border: none; margin-bottom: 30px; " width="100%" height="auto" allowtransparency="true">
               
                
                
                
                
                
                
                
          <?php if ($menu[2]['id']){?>      
                
                <div class="subnav">
    <div class="content-menu ib-a blue line-x">
   
     <a href="/admin.php?menuid=<?php echo $menu[2]['id']?>&m=<?php echo $menu[2]['m']?>&c=<?php echo $menu[2]['c']?>&a=<?php echo $menu[2]['a']?>&data=<?php echo $menu[2]['data']?>" class=" <?php if ($menu[2]['id']==$_GET['menuid']) echo "on";?>"><em><?php echo $menu[2]['name']?></em></a><span>|</span>
   
         <?php 
		
		$result=$mysql->select('*','jae_menu','parentid='.$menu[2]['id'].'  AND display=1');
		foreach($result as $r){
		?>     
     
        <a href="/admin.php?menuid=<?php echo $r['id']?>&m=<?php echo $r['m']?>&c=<?php echo $r['c']?>&a=<?php echo $r['a']?>&<?php echo $r['data']?>" class=" <?php if ($menu[3]['id']==$r['id']) echo "on";?>"><em><?php echo $r['name']?></em></a><span>|</span>
        
      
        
        <?php }?>
         </div>
</div>
<?php }?>
                 <div style="padding:10px;">