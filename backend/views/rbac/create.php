<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CommonAuthItem */

$this->title = Yii::t('app', 'Create Common Auth Item');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Common Auth Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="common-auth-item-create">
    <div class="container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    </div>
</div>
