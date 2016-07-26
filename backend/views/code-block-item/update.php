<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CodeBlockItem */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Code Block Item',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Code Block Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="code-block-item-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
