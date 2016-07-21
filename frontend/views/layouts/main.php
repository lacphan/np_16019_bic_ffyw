<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\assets\BootstrapPluginAsset;

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
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64247209-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
<?php $this->endPage() ?>
