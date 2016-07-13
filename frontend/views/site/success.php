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
                                    <span class="font-5 color-1"><?= ContestItem::getWeek()->title?></span>
                                </h3>
                                <?= ContestItem::getWeek()->description?>
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
                <h3 class="form-title font-5 font-size-25">Thanks you for your submission !!</h3>
            </div>
        </div>
        <div class="home-text-block">
            <div class="show-on-desktop">
                <b>NO PURCHASE NECESSARY TO ENTER OR WIN.</b> Void where prohibited. The
                Contest is strictly open to individuals who are legal residents of Canada, who are over the age of
                majority in their province or territory of residence and a parent and/or legal guardian of a child
                between the age of 6 and 18 at the time of entry (“Eligible Child”). The Eligible Child cannot by any
                means enter The Contest. The Contest will begin 8/02/16 at 12:00:01 PM Eastern Time (“ET”) and ends
                9/12/16 at 11:59:59 PM ET ("Contest Submission Period").  Winners must correctly answer a mathematical
                skill testing question to win a prize. Contest Winners will be determined solely by random draw. Odds of
                winning a random drawing depends upon the number of eligible entries received. One (1) Contest
                Submission per person, per week for each Eligible Child (up to a maximum of four (4) Eligible Children
                per person) during the entire Contest Submission Period. Weekly winners are selected at end of
                respective weekly period. Grand prize winner to be selected upon full completion of the Contest. You may
                only use one (1) email address to participate in this Contest. See Official Rules for details. Sponsor:
                BIC Inc.
            </div>
            <div class="show-on-mobile">
                 No Purch Nec., CAD only, Age of Majority in Prov./Territ. Of Res. Ends 09/12/2016. <a href="#">Click
                    Here for Official Rules.</a>
            </div>

        </div>
    </div>
</div>