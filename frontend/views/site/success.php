<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\RegisterForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha;
use frontend\models\ContestItem;
$this->title = 'Thank you for taking BIC’s Handwriting Challenge!';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="success-content">
                <div class="title">
                    Thank you for taking<br>
                    BIC'S <span>Handwriting</span> Challenge!
                </div>
                <div class="content a-center">
                    <p>Thank you! We have received your entry and if approved it will appear in the gallery within 1-2 business days.  Don’t forget to come back and submit a response for next week’s handwriting challenge! If selected as a potential winner, we will contact you via email provided.</p>

                    <p><?=  Html::a(Yii::t('app', '*' . 'Click here for Official Rules'), Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'official-rules']),['target' => '_blank','class' => 'color-1'])?></p>
                </div>
                <div class="global-btn">
                    <a target="_blank" class="global-btn-inner" href="<?= $locale == DEFAULT_LOCALE ? Yii::$app->urlManager->createUrl(['site/gallery']) :  Yii::$app->urlManager->createUrl(['site/gallery','locale' => $locale]) ?>">GALLERY</a>
                </div>
            </div>
        </div>
        <?= $this->render('_mini-rules')?>
    </div>
</div>