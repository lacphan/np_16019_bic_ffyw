<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchContestSession */
/* @var $form yii\widgets\ActiveForm */
$locale = Yii::$app->request->get('locale') ? Yii::$app->request->get('locale') : DEFAULT_LOCALE;
?>

<div class="contest-session-search">

    <?php $form = ActiveForm::begin([
        'action' => $locale == DEFAULT_LOCALE ?  ['gallery'] : ['gallery','locale' => $locale],
        'method' => 'get',
    ]); ?>
    <?= $form->field($model, 'first_name')->textInput(['placeholder' => Yii::t(_NP_TEXT_DOMAIN, 'Your Child\'s Name'), 'class' => 'form-control'])->label(false); ?>
    <?= $form->field($model, 'last_name')->textInput(['placeholder' => Yii::t(_NP_TEXT_DOMAIN, 'Your Child\'s Last Initial'), 'class' => 'form-control'])->label(false); ?>
    <?= $form->field($model, 'user_email')->textInput(['placeholder' => Yii::t(_NP_TEXT_DOMAIN, "Parent’s email address"), 'class' => 'form-control'])->label(false); ?>
    <div class="global-btn">
        <?= Html::submitButton(Yii::t(_NP_TEXT_DOMAIN, 'Search') . ' <i class="m-icon-swapright m-icon-white"></i>', ['class' => 'global-btn-inner']) ?>

    </div>
   <?php ActiveForm::end(); ?>

</div>
