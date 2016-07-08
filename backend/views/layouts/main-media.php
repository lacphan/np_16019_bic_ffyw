<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use backend\assets\FontsAsset;
use backend\assets\BootstrapPluginAsset;
use yii\helpers\Html;
use common\widgets\Alert;

AppAsset::register($this);
FontsAsset::register($this);
BootstrapPluginAsset::register($this);
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
<body class="white-bg page-header-fixed page-sidebar-closed-hide-logo page-content-white custom-modal">
<?php $this->beginBody() ?>
<div class="page-container">
    <div class="page-content-wrapper">
        <?= $content ?>
    </div>

</div>

<?php $this->beginContent('@app/views/layouts/_footer.php'); ?>
<?= $content ?>
<?php $this->endContent(); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
