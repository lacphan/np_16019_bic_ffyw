<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\assets\BootstrapPluginAsset;
use frontend\models\CodeBlockItem;
//User::hasLoginBE();
BootstrapPluginAsset::register($this);
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,800,300,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        var base = "<?= Yii::$app->urlManager->baseUrl?>"
    </script>
<script src="//cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
<script src="/themes/default/fonts/Cufon-KGSecondChancesSketch_400.font.js" type="text/javascript"></script>
<script type="text/javascript">
Cufon.replace('.Cufon-KGSecondChancesSketch:not(.nocufon)');
//Cufon.replace('.Cufon-KGSecondChancesSketch', {
//    ignore: {
//        span: true
//    }
//});
</script>
</head>
<body>
<?php $this->beginBody() ?>

<div id="main-container" class="site-wrapper">
    <div class="site-inner">

        <!-- Begin header -->
        <?php $this->beginContent('@app/views/layouts/_header.php'); ?>
        <?= $content ?>
        <?php $this->endContent(); ?>
        <!-- End header -->

        <?= $content ?>

        <!-- Begin footer -->
        <?php $this->beginContent('@app/views/layouts/_footer.php'); ?>
        <?= $content ?>
        <?php $this->endContent(); ?>
        <!-- End Footer -->
    </div>
</div>

<?php $this->endBody() ?>
<?php
$gaCode = CodeBlockItem::getCode('ga-code');
if($gaCode) {
    echo $gaCode->content;
}
?>
<!--NON-SECURE IMAGE PIXEL CODE START-->
<img alt="" src="http://acuityplatform.com/Adserver/pxl/7370744689334932728" width="1" height="1" />
<!--NON-SECURE IMAGE PIXEL CODE END-->
</body>
</html>
<?php $this->endPage() ?>
