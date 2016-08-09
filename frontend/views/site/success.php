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
$locale = Yii::$app->request->get('locale') ? Yii::$app->request->get('locale') : DEFAULT_LOCALE;
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="success-content">
                <div class="title">
                    <span class="Cufon-KGSecondChancesSketch">Thank you for taking<br>
                    BIC'S</span> <span>Handwriting</span> <span class="Cufon-KGSecondChancesSketch">Challenge!</span>
                </div>
                <div class="content a-center">
                    <?php if ((Yii::$app->language == 'fr_FR')): ?>
                        <p>Merci! Nous avons bien reçu votre contribution. Si elle est approuvée, elle sera placée dans la galerie du défi d'écriture manuelle dans les deux jours ouvrables. Si elle est rejetée, pensez à consulter votre boîte de réception pour voir si vous avez reçu une notification. N'oubliez pas de revenir envoyer une réponse pour le défi d'écriture manuelle de la semaine prochaine!</p>
                    <?php else: ?>
                        <p>Thank you! We have received your entry. If approved, it will be placed into the Handwriting Challenge gallery within 2 business days. If rejected, make sure to check your inbox for an email notification. Don’t forget to come back and submit a response for next week’s handwriting challenge!</p>
                    <?php endif; ?>
                    <p style="display: none;"><?=  Html::a(Yii::t(_NP_TEXT_DOMAIN, 'Click here for Official Rules'), Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'official-rules']),['class' => 'color-1'])?></p>
                    <p><a class="color-1" href="<?= $locale == DEFAULT_LOCALE ? Yii::$app->urlManager->createUrl(['page/official-rules']) :  Yii::$app->urlManager->createUrl(['page/official-rules','locale' => $locale]) ?>"><?= Yii::t(_NP_TEXT_DOMAIN,'Click here for Official Rules')?></a></p>
                </div>
                <div class="global-btn">
                    <a target="_blank" class="global-btn-inner" href="<?= $locale == DEFAULT_LOCALE ? Yii::$app->urlManager->createUrl(['site/gallery']) :  Yii::$app->urlManager->createUrl(['site/gallery','locale' => $locale]) ?>"><?= Yii::t(_NP_TEXT_DOMAIN,'Gallery')?></a>
                </div>
            </div>
        </div>
        <?= $this->render('_mini-rules')?>
    </div>
</div>