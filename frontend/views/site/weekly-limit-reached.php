<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\RegisterForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha;
use frontend\models\ContestItem;
$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="success-content">
                <div class="title">
                    <span><?= Yii::t('app','Weekly limit Reached')?></span>
                </div>
                <div class="content">
                    <p class="a-center">SORRY!</p>
                    <p>
                        You have reached the maximum entries allowed for this week. Don’t forget to come back and submit a response for next week’s handwriting challenge.<br/>

                        *Click here for Official Rules
                        <?=  Html::a(Yii::t('app', 'official rules'), Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'official-rules']),['target' => '_blank','class' => 'color-1'])?>
                    </p>


                </div>
                <div class="global-btn">
                    <a target="_blank" class="global-btn-inner" href="<?= Yii::$app->urlManager->createUrl(['site/gallery'])?>">GALLERY</a>
                </div>
            </div>
        </div>
        <?= $this->render('_mini-rules')?>
    </div>
</div>