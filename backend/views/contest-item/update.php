<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ContestItem */

$this->title = Yii::t('app', 'Update : ', [
    'modelClass' => 'Contest Item',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contest Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="contest-item-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
