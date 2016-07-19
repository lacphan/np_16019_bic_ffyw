<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchContestSession */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contest-session-search">

    <?php $form = ActiveForm::begin([
        'action' => ['gallery'],
        'method' => 'get',
    ]); ?>
    <?= $form->field($model, 'first_name')->textInput(['placeholder' => Yii::t('app', "Child's first name"), 'class' => 'form-control'])->label(false); ?>
    <?= $form->field($model, 'last_name')->textInput(['placeholder' => Yii::t('app', "Child's last initial"), 'class' => 'form-control'])->label(false); ?>
    <?= $form->field($model, 'user_email')->textInput(['placeholder' => Yii::t('app', "Parent’s email address"), 'class' => 'form-control'])->label(false); ?>
    <div class="global-btn">
        <?= Html::submitButton(Yii::t('app', 'Search') . ' <i class="m-icon-swapright m-icon-white"></i>', ['class' => 'global-btn-inner']) ?>

    </div>
   <?php ActiveForm::end(); ?>

</div>
