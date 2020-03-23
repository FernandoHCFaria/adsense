<?php

use yii\helpers\Url;
use humhub\models\Setting;
use humhub\modules\adsense\Assets;

Assets::register($this);
?>

<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('AdsenseModule.base', '<strong>Community</strong> Ad'); ?>
  </div>
  <div class="panel-body">
  <?php
  	if (!Setting::Get('client', 'adsense')) {
 ?>
 	<p>Please set your ad client and ad slot ids in administration</p>
 <?php
	} else {
?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- In Post Correct -->
	<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="<?php print Setting::Get('client', 'adsense');?>"
     data-ad-slot="<?php print Setting::Get('slot', 'adsense');?>"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php
	}
?>

  </div>
</div>
