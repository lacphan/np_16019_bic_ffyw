<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PageItem */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Page Item',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Page Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="page-item-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
