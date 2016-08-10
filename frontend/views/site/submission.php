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
                                <?php if ($contestItem->children->attachment): ?>
                                    <?= $contestItem->children->attachment->getAttachmentImage() ?>
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

                            <div class="form-upload">
                                <div class="form-upload-inner">
                                    <div class="input-instruction">
                                        <?= Yii::t(_NP_TEXT_DOMAIN, 'Upload photo instructions') ?> <br/>
                                        <?= Yii::t(_NP_TEXT_DOMAIN, 'No larger than 5MB and only accept .jpg and .png files') ?>
                                    </div>

                                    <?= $form->field($model, 'attachment_id')->hiddenInput()->label(false) ?>
                                    <div id="ajax-pick-image" tabindex="500" class="btn btn-default global-btn btn-file"><span
                                            class="hidden-xs">Upload</span>
                                    </div>
                                    <div class="file-input file-input-ajax-new">

                                        <div class="file-preview hidden">
                                            <div id="input-waiting"></div>
                                            <div id="image-preview"></div>


                                        </div>
                                        <div class="has-error">
                                            <p id="error-message" class="help-block help-block-error"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    'siteKey' => Yii::$app->params['googleCaptcha']['siteKey'],
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
<?php
$PUploadAction = Yii::$app->urlManager->createUrl(['site/p-upload']);
$uploadUrl = Yii::$app->uploadUrl->baseUrl;
$fileSizeLimit = Yii::t(_NP_TEXT_DOMAIN,'Limit 5MB');
$js = <<<JS
 var uploader = new plupload.Uploader({
        // General settings
        runtimes: "html5",
        browse_button : 'ajax-pick-image', // you can pass in id...
        url : "{$PUploadAction}",
        chunk_size: "2mb",
        unique_names : true,
       
         headers: {"Accept": "application\/json", "X-CSRF-TOKEN": $('input[name="_token"]').val()},
     
        filters : {
            mime_types: [
                {title: "Image files", extensions: "jpg,jpeg,png"}
            ],
            max_file_size: "5mb",
            prevent_duplicates: true
        },

        // Post init events, bound after the internal events
        init : {
        
            FilesAdded: function(up, files) {
                $('.file-preview').removeClass('hidden');
                $('#error-message').html('');
                $('#input-waiting').html("<i class='fa fa-spinner fa-pulse' aria-hidden='true'></i> Uploading...");
                up.start();
            },

            FileUploaded: function(up, file, info) {
             
               data = jQuery.parseJSON(info.response);
               console.log(jQuery.parseJSON(data.attachment_id));
               jQuery("#submissionform-attachment_id").val(data.attachment_id);
              
            },

            UploadComplete: function(up, files) {
                 $('#input-waiting').html("");
                 $('#image-preview').html('<img src="{$uploadUrl}/' + files[0].target_name +'">')
            },

            Error: function(up, args) {
               
                if(args.code == -600) {
                    $('#error-message').html("{$fileSizeLimit}").show();
                }
            }
        }
    });

    uploader.init();
JS;
$this->registerJs($js);