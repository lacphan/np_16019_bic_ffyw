<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ContestSession */

$this->title = Yii::t('app', 'Create Contest Session');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contest Sessions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contest-session-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
