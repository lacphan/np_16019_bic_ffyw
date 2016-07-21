<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ContestItem */

$this->title = Yii::t('app', 'Create ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contest Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contest-item-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
