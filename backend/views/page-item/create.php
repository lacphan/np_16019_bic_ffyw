<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PageItem */

$this->title = Yii::t('app', 'Create Page Item');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Page Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-item-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
