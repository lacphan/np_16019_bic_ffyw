<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CommonAuthItem */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Common Auth Item',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Common Auth Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="common-auth-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
