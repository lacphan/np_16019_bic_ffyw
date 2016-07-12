<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ContestSession */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Contest Session',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contest Sessions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="contest-session-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
