<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SubmissionForm */
/* @var $contestItem \frontend\models\ContestItem */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha;
use frontend\models\ContestItem;
use kartik\file\FileInput;
use yii\bootstrap\Modal;
use frontend\models\PageItem;
$this->title = 'Submission';
$this->params['breadcrumbs'][] = $this->title;
$contestItem = ContestItem::getWeek();
$weekNumber = $contestItem ? $contestItem->week_number : 1;
$locale = Yii::$app->request->get('locale') ? Yii::$app->request->get('locale') : DEFAULT_LOCALE;
$submissionContent=PageItem::getContentByCode('submission-content', $locale);
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="registration-content-row">
                <div class="col-md-3 image-heading">
                    <div class="heading-content">
                        <?php if (Yii::$app->language == 'fr_FR' && $contestItem->children ): ?>

                            <?php if($contestItem->children->popup): ?>
                                <a class="weekly-image" href="#">
                                    <?php if ($contestItem->children->attachment): ?>
                                        <?= $contestItem->children->attachment->getAttachmentImage() ?>
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
                        <?php elseif ($contestItem): ?>
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
                        <?php
                        if(Yii::$app->language == 'fr_FR' && $contestItem->children && $contestItem->children->popup) {
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
                            echo '<div id="modalContent"> <img src="'.$contestItem->children->popup ->getAttachmentUrl().'"></div>';
                            Modal::end();
                        }
                        else if($contestItem->popup) {
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
                    </div>
                </div>
                <div class="col-md-9 intro-heading">
                    <div class="intro-heading-inner">
                        <h1 class="head-line">
                            <?php if ((Yii::$app->language == 'fr_FR')): ?>
                                <span class="Cufon-KGSecondChancesSketch color-2 head-line-1">Défid'écriture</span>
                                <span class="font-5 color-3 head-line-2">de la</span>
                                <span class="Cufon-KGSecondChancesSketch color-2 head-line-3">semaine!</span>
                            <?php else:?>
                                <span class="Cufon-KGSecondChancesSketch color-2 head-line-1">This Week's</span>
                                <span class="font-5 color-3 head-line-2">Handwriting</span>
                                <span class="Cufon-KGSecondChancesSketch color-2 head-line-3">Challenge!</span>
                            <?php endif;?>

                        </h1>
                        <div class="intro">
                            <div class="intro-inner">
                                <h3>
                                    <span class="font-5 color-1">
                                        <?= Yii::t(_NP_TEXT_DOMAIN,'Week') . ' ' . $weekNumber ?>:
                                        <?php if ($contestItem ): ?>
                                            <?php if($contestItem->children && Yii::$app->language == 'fr_FR') :?>
                                                <?= $contestItem->children->title;?>
                                            <?php else:?>
                                                <?= $contestItem->title;?>
                                            <?php endif;?>
                                        <?php endif;?>
                                    </span>
                                </h3>
                                <p>
                                    <?php if ($contestItem ): ?>
                                        <?php if($contestItem->children && Yii::$app->language == 'fr_FR') :?>
                                            <?= $contestItem->children->description;?>
                                        <?php else:?>
                                            <?= $contestItem->description;?>
                                        <?php endif;?>
                                    <?php endif;?>
                                </p>
                                <div class="global-btn">
                                    <a target="_blank" class="global-btn-inner" href="<?= $locale == DEFAULT_LOCALE ? Yii::$app->urlManager->createUrl(['site/gallery']) :  Yii::$app->urlManager->createUrl(['site/gallery','locale' => $locale]) ?>"><?= Yii::t(_NP_TEXT_DOMAIN,'Gallery')?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="register-form">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="form-title font-5 font-size-25">
                            <?= Yii::t(_NP_TEXT_DOMAIN,'Please fill out the form below to submit your entry:')?></h3>
                        <p class="require-hint">* <?= Yii::t(_NP_TEXT_DOMAIN,'Required Fields')?></p>
                        <?php $form = ActiveForm::begin([
                            'options' => [
                                'enctype' => 'multipart/form-data',
                                'id' => 'register-form']
                        ]); ?>
                        <?= $form->field($model, 'email')->hiddenInput(['value' => Yii::$app->session->get('submissionEmail')])->label(false) ?>
                        <div class="form-row">
                            <?= $form->field($model, 'childFirstName')->textInput(['placeholder' => '*' . Yii::t(_NP_TEXT_DOMAIN, 'Your Child\'s Name')])->label(false) ?>
                            <?= $form->field($model, 'childLastInitial')->textInput(['placeholder' =>'*' . Yii::t(_NP_TEXT_DOMAIN, 'Your Child\'s Last Initial')])->label(false) ?>
                            <?= $form->field($model, 'age')->textInput(['class' => 'small-input', 'placeholder' => Yii::t(_NP_TEXT_DOMAIN, 'Age')])->label(false) ?>
                        </div>
                        <div class="form-row">
                            <div class="submission-guideline">
                                <?php
                                if(!empty($submissionContent[0]->description)):
                                    echo $submissionContent[0]->description;
                                endif;
                                ?>
                            </div>

                            <?php
                            $layoutTemplate = [
                                'main2' => '<div class="kv-upload-progress hide"></div>{browse}{preview}{remove}',
                                'footer' => ''
                            ]
                            ?>

                            <?= $form->field($model,'rotateDegree')->hiddenInput(['id' => 'rotate-degree'])->label(false)?>
                            <?= $form->field($model, 'uploadFile',[
                                'options' => ['class' => 'form-upload'],
                                'template' => '<div class="form-upload-inner">' .
                                    '<div class="input-instruction">' .
                                    Yii::t(_NP_TEXT_DOMAIN, 'Upload photo instructions') . ':<br/>' .
                                    Yii::t(_NP_TEXT_DOMAIN, 'No larger than 5MB and only accept .jpg and .png files') .
                                    '</div>' .
                                    '<div class="btn btn-default global-btn btn-file"><span>'.Yii::t(_NP_TEXT_DOMAIN,'Upload').'{input}</span></div>' .
                                    '{label}{error}'.
                                    '<div class="preview-wrapper">'.
                                    '<div class="file-preview"><div class="file-preview-frame"><canvas id="canvas"></canvas></div></div>'.
                                    '<button type="button" class="img-rotate-left" ><i class="fa fa-undo" aria-hidden="true"></i></button>'.
                                    '<button type="button" class="img-rotate-right"><i class="fa fa-repeat"></i></button>'.
                                    '</div></div>'
                            ])->fileInput(['id' => 'imageLoader'])->label(false); ?>
                        </div>
                        <div class="form-row">
                            <?= $form->field($model, 'agreeTerm', ['options' => ['class' => 'form-check-box']])->checkbox(
                                ['template' => '<div class="form-check-box-inner">{input}{label}{error}</div>']
                            )->label(Yii::t(_NP_TEXT_DOMAIN, 'I have read and agree to the ') . Html::a(Yii::t(_NP_TEXT_DOMAIN, 'official rules'), Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'official-rules']),['target' => '_blank'])) ?>

                        </div>
                        <div class="form-row">
                            <?= $form->field($model, 'verificationCode', [
                                'options' => ['class' => 'form-recaptcha'],
                            ])->widget(
                                ReCaptcha::className(),
                                [
                                    'siteKey' => '6LddpCQTAAAAADkMcb59wigYVIq7n1Y9jKE4HCS3',
                                    'options' => [
                                        'class' => 'global-input'
                                    ],
                                ])->label(false) ?>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="global-btn btn-submit">
                                    <?= Html::submitButton(Yii::t(_NP_TEXT_DOMAIN,'SUBMIT'), ['class' => 'global-btn-inner', 'name' => 'signup-button']) ?>
                                </div>

                            </div>
                        </div>


                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="col-md-5">
                    </div>
                </div>
            </div>
        </div>
        <div class="home-content">
            <?= $this->render('_mini-rules')?>
        </div>
    </div>
