<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="registration-content-row">
                <div class="col-md-3 image-heading">

                    <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/weekly-challenge.png' ?>"
                         alt="Weekly Challenge" width="266" height="220">

                </div>
                <div class="col-md-9 intro-heading">
                    <div class="intro-heading-inner">
                        <h1 class="head-line">
                            <span class="font-2 color-2 head-line-1">This week's</span>
                            <span class="font-5 color-3 head-line-2">hand Writing</span>
                            <span class="font-2 color-2 head-line-3">challenge!</span>
                        </h1>
                        <div class="intro">
                            <div class="intro-inner">
                                <h3>
                                    <span class="font-5 color-1">Week 1: Ask your child what they would do if they were principal for a day…</span>

                                </h3>
                                <p>
                                    It’s the future and your child is the head of their school. The possibilities are
                                    endless! <br/>
                                    Ask your child to complete the following sentence and upload a photo of their
                                    handwritten response: “If I were principal for a day…”
                                </p>
                                <div class="global-btn">
                                    <a class="global-btn-inner" href="">GALLERY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="register-form">
                <h3 class="form-title font-5 font-size-25">Please fill out the form below to submit your entry:</h3>
                <p class="require-hint">* Required Fields</p>
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <div class="form-row">
                    <?= $form->field($model, 'username')->textInput(['placeholder' => '*Parents First Name'])->label(false) ?>
                    <?= $form->field($model, 'username')->textInput(['placeholder' => '*Parents Last Name'])->label(false) ?>
                    <?= $form->field($model, 'username')->textInput(['placeholder' => '*Phone Number'])->label(false) ?>
                </div>
                <div class="form-row">
                    <?= $form->field($model, 'username')->textInput(['placeholder' => '*Province'])->label(false) ?>
                    <?= $form->field($model, 'username')->textInput(['placeholder' => '*Parents Last Name'])->label(false) ?>
                    <?= $form->field($model, 'email')->textInput(['placeholder' => '*Email Address'])->label(false) ?>
                </div>
                <div class="form-row">
                    <?= $form->field($model, 'password',['options' => ['class' => 'form-check-box']])->checkbox(
                        ['template' => '<div class="form-check-box">{input}<div class="control-label">{label}</div></div>']
                    )->label('I have read and agree to the official rules') ?>

                </div>
                <div class="form-row">
                    <?= $form->field($model, 'username')->textInput(['placeholder' => '*Child’s First Name'])->label(false) ?>
                    <?= $form->field($model, 'username')->textInput(['placeholder' => '*Child’s Last Initial'])->label(false) ?>
                    <?= $form->field($model, 'email')->textInput(['placeholder' => '*Email Address'])->label(false) ?>
                </div>


                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <div class="global-btn">
                        <?= Html::submitButton('SUBMIT', ['class' => 'global-btn-inner', 'name' => 'signup-button']) ?>
                    </div>

                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    </div>
