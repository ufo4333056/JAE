<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php  
include template('content','head');
?>
<link href="/statics/css/prize.css" rel="stylesheet" type="text/css" />
<div class="page-rules page-content">
    <div class="head" style="background:<?php echo  $data['bg_color']?>">
        <div class="head-logo"><img src="<?php echo $data['bg_img'] ?>">
        </div>
    </div>
    <div class="bcontent-wrap">
        <div class="rules-content">
            <h1>�齱����</h1>
            <div class="rules-list">
                <?php echo htmlspecialchars_decode($data['rules']);?>
            </div>
        </div>
    </div>
</div>
