<?php

/* @var $this yii\web\View */
/* @var $emailSubmission  frontend\models\EmailSubmission */
/* @var $form yii\widgets\ActiveForm */
/* @var $contestSessions frontend\models\ContestSession[] */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\models\ContestItem;
use yii\bootstrap\Modal;
use frontend\models\PageItem;
$this->title = 'BIC FFYW';
$contestItem = ContestItem::getWeek();
$weekNumber = $contestItem ? $contestItem->week_number : 1;
$locale = Yii::$app->request->get('locale') ? Yii::$app->request->get('locale') : DEFAULT_LOCALE;

?>
<div class="container">

    <div class="home-content">
        <div class="home-intro">

            <?php if ((Yii::$app->language == 'fr_FR')): ?>
                <h1 class="head-line">
                    <span class="font-2 color-2 head-line-1">Participez au défi</span><br/>
                    <span class="font-5 color-3 font-size-68 head-line-2">d'écriture</span>
                    <span class="font-2 color-2 head-line-3">de BIC!</span>
                </h1>
            <?php else: ?>
                <h1 class="head-line">
                    <span class="font-2 color-2 head-line-1">Take BIC's</span>
                    <span class="font-5 color-3 font-size-68 head-line-2">Handwriting</span>
                    <span class="font-2 color-2 head-line-3">Challenge!</span>
                </h1>
            <?php endif; ?>


            <div class="intro">

                <?php if ((Yii::$app->language == 'fr_FR')): ?>
                    DON de 10 $ à Repaires jeunesse du Canada.
                    <p>
                        BIC veut que vous encouragiez vos enfants à écrire davantage.
                        Nous vous donnons donc la chance de
                    </p>
                    <p>
                        <span class="font-2 color-1 font-size-25">GAGNER 5 000 $ pour l'éducation de votre enfant ainsi que des </span><br/>
                        <span class="font-2 color-3 font-size-25">prix hebdomadaires.</span> De plus, pour chaque
                        participation,
                    </p>
                    <p>
                        BIC fera un <span class="font-2 color-1 font-size-25">DON de 10 $</span> à <a target="_blank"
                                                                                                      href="https://www.bgccan.com/FR/Pages/default.aspx">Repaires
                            jeunesse du Canada.</a><br/>
                        <small>(Dons jusqu'à un maximum de 10 000 $ avec un minimum de 5 000 $!)</small>
                    </p>
                <?php else: ?>
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
                        BIC will <span class="font-2 color-1 font-size-25">DONATE $10</span> to the <a target="_blank"
                                                                                                       href="https://www.bgccan.com/EN/Pages/default.aspx">Boys
                            & Girls Clubs of
                            Canada</a><br/>
                        <small>(Donation up to a max. of $10,000, with a min. of $5,000!)</small>
                    </p>
                <?php endif; ?>
                <div class="subscribe-form">
                    <div class="subscribe-form-inner">
                        <?php $form = ActiveForm::begin(['id' => 'home-email-checker']) ?>
                        <?= $form->field($emailSubmission, 'email')->textInput(['maxlength' => true, 'placeholder' => Yii::t(_NP_TEXT_DOMAIN, 'Email Address')]) ?>
                        <div class="global-btn item-float-left">

                            <?= Html::submitButton(
                                Yii::t(_NP_TEXT_DOMAIN, 'Enter Now'),
                                ['class' => 'global-btn-inner']) ?>
                        </div>
                        <div class="clearfix"></div>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="form-arrow"></div>
                </div>
                <div class="intro-link">
                     <?= Yii::t(_NP_TEXT_DOMAIN, 'No Purch Nec., CAD only, Age of Majority in Prov./Territ. of Res. Ends 09/19/2016.') ?>
                     
                    <p>
                        <a
                            target="_blank"
                            href="<?= PageItem::getPermalink(['official-rules']) ?>">
                            <?= Yii::t(_NP_TEXT_DOMAIN, 'Click Here for Official Rules.') ?>
                        </a>
                    </p>
                </div>
            </div>

            <div class="sun"></div>
            <div class="hand-writing hand-writing-dk"
                 style="background: url('<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/writing-bg.png' ?>') no-repeat; background-size: cover;">
                <div class="hand-writing-content">
                    <div class="left-content">
                        <a href="#" class="title weekly-text-nav">
                            <?= Yii::t(_NP_TEXT_DOMAIN, "<span class=\"font-1\">This week's</span><span class=\"font-2\">handwriting</span><span class=\"font-1\">challenge!</span>") ?>
                        </a>
                    </div>

                    <div class="right-content">

                        <?php if ($contestItem): ?>
                            <?php if($contestItem->popup): ?>
                                <a class="weekly-image" href="#">
                                <?php if ($contestItem->attachment): ?>
                                    <?= $contestItem->attachment->getAttachmentImage() ?>
                                <?php elseif ($weekNumber): ?>
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/week-' . $weekNumber . '/week.png' ?>"
                                        alt="Feature" width="364" height="326">
                                <?php endif; ?>
                                </a>
                            <?php else: ?>
                                <?php if ($contestItem->attachment): ?>
                                    <?= $contestItem->attachment->getAttachmentImage() ?>
                                <?php elseif ($weekNumber): ?>
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/week-' . $weekNumber . '/week.png' ?>"
                                        alt="Feature" width="364" height="326">
                                <?php endif; ?>
                            <?php endif;?>
                        <?php endif; ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="main-content">
                        <?php if ($contestItem ): ?>
                            <?php if($contestItem->children && Yii::$app->language == 'fr_FR') :?>
                                <?= $contestItem->children->title;?>
                            <?php else:?>
                                <?= $contestItem->title;?>
                            <?php endif;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="hand-writing hand-writing-mb"
                 style="background: url('<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/writing-bg-mb.png' ?>') no-repeat; background-size: cover;">
                <div class="hand-writing-content">
                    <div class="left-content">
                        <div class="title">
                            <label for=""><?= Yii::t(_NP_TEXT_DOMAIN, "This week's") ?></label>
                            <span><?= Yii::t(_NP_TEXT_DOMAIN, "handwriting") ?></span>
                            <label><?= Yii::t(_NP_TEXT_DOMAIN, "challenge!") ?></label>
                        </div>

                    </div>
                    <div class="right-content">
                        <?php if ($contestItem): ?>
                            <?php if($contestItem->popup): ?>
                                <a class="weekly-image" href="#">
                                    <?php if ($contestItem->attachment): ?>
                                        <?= $contestItem->attachment->getAttachmentImage() ?>
                                    <?php elseif ($weekNumber): ?>
                                        <img
                                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/week-' . $weekNumber . '/week.png' ?>"
                                            alt="Feature" width="364" height="326">
                                    <?php endif; ?>
                                </a>
                            <?php else: ?>
                                <?php if ($contestItem->attachment): ?>
                                    <?= $contestItem->attachment->getAttachmentImage() ?>
                                <?php elseif ($weekNumber): ?>
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/week-' . $weekNumber . '/week.png' ?>"
                                        alt="Feature" width="364" height="326">
                                <?php endif; ?>
                            <?php endif;?>
                        <?php endif; ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="main-content">
                        <?php if ($contestItem ): ?>
                            <?php if($contestItem->children && Yii::$app->language == 'fr_FR') :?>
                                <?= $contestItem->children->title;?>
                            <?php else:?>
                                <?= $contestItem->title;?>
                            <?php endif;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if($contestItem->popup) {
            Modal::begin([
                'closeButton' => [
                    'label' => '&times;',
                    'class' => 'close-btn',
                ],
                'size' => 'modal-lg',
                'id' => 'weekly-image-popup',
                'options' => [
                    'class' => 'fade modal'
                ]
            ]);
            echo '<div id="modalContent"> <img src="'.$contestItem->popup->getAttachmentUrl().'"></div>';
            Modal::end();
        }
        ?>
        <div class="home-gallery">
            <div class="home-gallery-row">
                <?php if ($contestSessions): ?>
                    <?php foreach ($contestSessions as $key => $contestSession): ?>
                        <?php if ($contestSession->attachment): ?>
                            <div class="home-gallery-item">
                                <div class="home-gallery-item-inner">
                                    <div class="home-gallery-item-image"
                                         style="background: url(<?= $contestSession->attachment->getAttachmentUrl('medium') ?>) center no-repeat; background-size: cover">
                                        <a class="thumbnail-img" href="#" data-image-id="" data-toggle="modal"
                                           data-title="<?= $contestSession->first_name . ' ' . $contestSession->last_name . ', ' . $contestSession->user->profile->province ?>"
                                           data-caption="<?= $contestSession->user->email ?>"
                                           data-image="<?= $contestSession->attachment->getAttachmentUrl('medium') ?>"
                                           data-target="#image-gallery">
                                            <?= $contestSession->attachment->getAttachmentImage('medium') ?>
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
                        <a target="_blank" class="see-all-btn font-5"
                           href="<?= Yii::$app->urlManager->createUrl(['site/gallery','locale' => $locale]) ?>">
                            <span class="see-all-inner">
                                <?= Yii::t(_NP_TEXT_DOMAIN, 'SEE ALL')?>
                            </span>
                        </a>
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
                            <div class="col-md-12 a-center" id="#image-gallery-caption">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->render('_mini-rules') ?>
        <div class="home-instruction">
            <div class="row feature_boxes clearfix">
                <div class="col-lg-4 col-md-4 column">
                    <div class="feature_box box1">
                        <div class="inner">
                            <h3><?= Yii::t(_NP_TEXT_DOMAIN, "THE MISSION")?></h3>
                            <div class="image-inner">
                                <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/mission.png' ?>"
                                     alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 column">
                    <?php
                    $tipNumber = rand( 1, 14);
                    $tip = PageItem::findPageLocale('tip-'.$tipNumber,Yii::$app->request->get('locale'));
                    ?>
                    <div class="feature_box box2">
                        <div class="inner">
                            <table>
                                <tr>
                                    <td class="v-middle">
                                        <h3><?=  Yii::t(_NP_TEXT_DOMAIN,'FEATURED TIP TO INSPIRE WRITING') ?></h3>
                                        <?php if($tip) :?>
                                            <?= $tip->description ?>
                                        <?php endif;?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 column">
                    <div class="feature_box box3">
                        <div class="inner">
                            <table>
                                <tr>
                                    <td class="v-top join-wrapper">
                                        <h3><?= Yii::t(_NP_TEXT_DOMAIN,'TAKE ACTION')?></h3>
                                        <a target="_blank" href="https://www.facebook.com/BICWritingCanada" class="join_button"><?= Yii::t(_NP_TEXT_DOMAIN,'JOIN NOW')?></a>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>