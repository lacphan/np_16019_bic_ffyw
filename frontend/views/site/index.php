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
                <span class="font-2 color-2 head-line-1">Take BIC's</span>
                <span class="font-5 color-3 font-size-68 head-line-2">Handwriting</span>
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
                    BIC will <span class="font-2 color-1 font-size-25">DONATE $10</span> to the <a target="_blank" href="https://www.bgccan.com/EN/Pages/default.aspx">Boys & Girls Clubs of
                        Canada</a><br/>
                    <small>(Donation up to a max. of $10,000, with a min. of $5,000!)</small>
                </p>
                <div class="subscribe-form">
                    <div class="subscribe-form-inner">
                        <?php $form = ActiveForm::begin() ?>
                        <?= $form->field($emailSubmission, 'email')->textInput(['maxlength' => true,'placeholder' => Yii::t('app','Email Address')]) ?>
                        <?= Html::submitButton('Submit') ?>
                        <div class="clearfix"></div>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="form-arrow"></div>
                </div>
                <div class="intro-link">
                     No Purch Nec., CAD only, Age of Majority in Prov./Territ. of Res. Ends 09/19/2016. <a target="_blank" href="<?= Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'official-rules'])?>">Click
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
                                        <a class="thumbnail-img" href="#" data-image-id="" data-toggle="modal"
                                           data-title="<?= $contestSession->first_name . ' ' . $contestSession->last_name . ', ' . $contestSession->user->profile->province ?>"
                                           data-caption="<?= $contestSession->user->email ?>"
                                           data-image="<?= $contestSession->attachment->getAttachmentUrl('large') ?>"
                                           data-target="#image-gallery">
                                            <?= $contestSession->attachment->getAttachmentImage('large') ?>
                                        </a>
                                    </div>
                                    <div class="home-gallery-item-title">
                                        <?= $contestSession->first_name . ' ' . $contestSession->last_name . ', ' . $contestSession->user->profile->province ?>
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
            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="image-gallery-title"></h4>
                        </div>
                        <div class="modal-body">
                            <img id="image-gallery-image" class="img-responsive" src="">
                        </div>
                        <div class="modal-footer">
                            <div class="modal-control">
                                <button type="button" class="modal-prev" id="show-previous-image">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </button>
                                <button type="button" id="show-next-image" class="modal-next">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>

                                </button>
                            </div>
                            <div class="col-md-12 a-center" id="image-gallery-caption">
                                This text will be overwritten by jQuery
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->render('_mini-rules')?>
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