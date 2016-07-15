<?php

/* @var $this yii\web\View */
/* @var $emailSubmission  frontend\models\EmailSubmission */
/* @var $form yii\widgets\ActiveForm */
/* @var $contestSessions frontend\models\ContestSession[] */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\models\ContestItem;
$this->title = 'BIC';
$contestItem = ContestItem::getWeek();
$weekNumber = $contestItem ? $contestItem->id : 1;
?>
<div class="container">

    <div class="home-content">
        <div class="home-intro">
            <h1 class="head-line">
                <span class="font-2 color-2 head-line-1">Take Bic's</span>
                <span class="font-5 color-3 font-size-68 head-line-2">Hand Writing</span>
                <span class="font-2 color-2 head-line-3">Challenge!</span>
            </h1>
            <div class="intro">
                <p>
                    BIC wants you to encourage your kids to write<br/>
                    more, so we’re giving you a chance to
                </p>
                <p>
                    <span class="font-2 color-1 font-size-25">WIN $5,000 towards your child’s education,</span><br/>
                    <span class="font-2 color-3 font-size-25">weekly prizing,</span> and for every submission YOU
                    make
                </p>
                <p>
                    BIC will <span class="font-2 color-1 font-size-25">DONATE $10</span> to the Boys & Girls Clubs of
                    Canada<br/>
                    <small>(Donation up to a max. of $10,000, with a min. of $5,000!)</small>
                </p>
                <div class="subscribe-form">
                    <div class="subscribe-form-inner">
                        <?php $form = ActiveForm::begin() ?>
                        <?= $form->field($emailSubmission, 'email')->textInput(['maxlength' => true]) ?>
                        <?= Html::submitButton('Submit') ?>
                        <div class="clearfix"></div>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="form-arrow"></div>
                </div>
                <div class="intro-link">
                     No Purch Nec., CAD only, Age of Majority in Prov./Territ. Of Res. Ends 09/12/2016. <a target="_blank" href="<?= Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'official-rules'])?>">Click
                        Here for Official Rules.</a>
                </div>
            </div>

            <div class="sun"></div>
            <div class="hand-writing hand-writing-dk"
                 style="background: url('<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/writing-bg.png' ?>') no-repeat; background-size: contain;">
                <div class="hand-writing-content">
                    <div class="left-content">
                        <div class="title">
                            <label for="">This week's</label>
                            <span>handwriting</span>
                            <label>challenge!</label>
                        </div>

                    </div>

                    <div class="right-content">
                        <?php if($weekNumber):?>
                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/week-'.$weekNumber.'/week.png' ?>"
                             alt="Feature" width="364" height="326">
                        <?php endif;?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="main-content">
                        <?= Yii::t('app', 'Ask your child what THEY would do if they were a principal for a day...') ?>
                    </div>
                </div>
            </div>
            <div class="hand-writing hand-writing-mb"
                 style="background: url('<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/writing-bg-mb.png' ?>') no-repeat; background-size: cover;">
                <div class="hand-writing-content">
                    <div class="left-content">
                        <div class="title">
                            <label for="">This week's</label>
                            <span>handwriting</span>
                            <label>challenge!</label>
                        </div>

                    </div>
                    <div class="right-content">
                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/home-image-1.png' ?>"
                             alt="Feature" width="364" height="326">
                    </div>
                    <div class="clearfix"></div>
                    <div class="main-content">
                        <?= Yii::t('app', 'Ask your child what THEY would do if they were a principal for a day...') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-gallery">
            <div class="home-gallery-row">
                <?php if ($contestSessions): ?>
                    <?php foreach ($contestSessions as $key => $contestSession): ?>
                        <?php if ($contestSession->attachment): ?>
                            <div class="home-gallery-item">
                                <div class="home-gallery-item-inner">
                                    <div class="home-gallery-item-image"
                                         style="background: url(<?= $contestSession->attachment->getAttachmentUrl('thumbnail') ?>) center no-repeat; background-size: cover">
                                        <a class="popup-button" data-toggle="modal"
                                           data-target="#popup-<?php echo $key ?>"></a>
                                        <?= $contestSession->attachment->getAttachmentImage('medium') ?>
                                    </div>
                                    <div class="home-gallery-item-title">
                                        <?= $contestSession->first_name . ',' . $contestSession->last_name ?>
                                    </div>
                                </div>
                                <div class="modal fade" id="popup-<?php echo $key ?>" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <div class="my-modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button class="close" data-dismiss="modal">X</button>
                                            <?= $contestSession->attachment->getAttachmentImage('medium') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="home-gallery-item item-see-all">
                    <div class="home-gallery-item-inner">
                        <a target="_blank" class="see-all-btn" href="<?= Yii::$app->urlManager->createUrl(['site/gallery'])?>"></a>
                    </div>
                </div>
                <div class="clearfix"></div>
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
        <div class="home-instruction">
            <div class="home-instruction-row">
                <div class="col-md-4 home-instruction-item item-mission">
                    <a href="#">
                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/mission.jpg' ?>"
                             alt="Mission" width="771" height="390">
                    </a>
                </div>
                <div class="col-md-4 home-instruction-item item-feature">
                    <a href="#">
                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/feature.jpg' ?>"
                             alt="Feature" width="771" height="390">
                    </a>
                </div>
                <div class="col-md-4 home-instruction-item item-action">
                    <a href="">
                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/action.jpg' ?>"
                             alt="Action" width="771" height="390">
                    </a>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>