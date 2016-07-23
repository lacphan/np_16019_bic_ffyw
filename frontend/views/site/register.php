<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\RegisterForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha;
use frontend\models\ContestItem;
use yii\bootstrap\Modal;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
$contestItem = ContestItem::getWeek();
$weekNumber = $contestItem ? $contestItem->week_number : 1;
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="registration-content-row">
                <div class="col-md-3 image-heading">
                    <div class="heading-content">
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
                    </div>
                </div>
                <div class="col-md-9 intro-heading">
                    <div class="intro-heading-inner">
                        <h1 class="head-line">
                            <?php if ((Yii::$app->language == 'fr_FR')): ?>
                                <span class="font-2 color-2 head-line-1">Défid'écriture</span>
                                <span class="font-5 color-3 head-line-2">de la</span>
                                <span class="font-2 color-2 head-line-3">semaine!</span>
                            <?php else:?>
                                <span class="font-2 color-2 head-line-1">This Week's</span>
                                <span class="font-5 color-3 head-line-2">Handwriting</span>
                                <span class="font-2 color-2 head-line-3">Challenge!</span>
                            <?php endif;?>

                        </h1>
                        <div class="intro">
                            <div class="intro-inner">
                                <h3>
                                    <span class="font-5 color-1">
                                        <?= Yii::t(_NP_TEXT_DOMAIN,'Week') . ' ' . ContestItem::getWeek()->id ?>:
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
                                    <a target="_blank" class="global-btn-inner" href="<?= Yii::$app->urlManager->createUrl(['site/gallery'])?>"><?= Yii::t('app','GALLERY')?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="register-form">
                <h3 class="form-title font-5 font-size-25">
                    <?= Yii::t(_NP_TEXT_DOMAIN, "Please fill out the form below to submit your entry:")?>
                </h3>
                <p class="require-hint">* <?=Yii::t(_NP_TEXT_DOMAIN, 'Required Fields')?></p>
                <?php $form = ActiveForm::begin([
                    'options' => [
                        'enctype' => 'multipart/form-data',
                        'id' => 'register-form'
                    ]
                ]); ?>
                <div class="form-row">
                    <?= $form->field($model, 'parentFirstName')->textInput(
                        ['placeholder' =>'*'. Yii::t(_NP_TEXT_DOMAIN, "Parent's First Name")])->label(false) ?>
                    <?= $form->field($model, 'parentLastName')->textInput(
                        ['placeholder' =>'*'.Yii::t(_NP_TEXT_DOMAIN, "Parents Last Name")])->label(false) ?>
                    <?= $form->field($model, 'phoneNumber')->textInput(
                        ['placeholder' => '*'.Yii::t(_NP_TEXT_DOMAIN, "Phone Number")])->label(false) ?>
                </div>

                <div class="form-row">
                    <?= $form->field($model, 'province')->dropDownList(
                        [
                            'Alberta' => 'Alberta',
                            'British Columbia' => 'British Columbia',
                            'Manitoba' => 'Manitoba',
                            'New Brunswick' => 'New Brunswick',
                            'Newfoundland and Labrador' => 'Newfoundland and Labrador',
                            'Northwest Territories' => 'Northwest Territories',
                            'Nova Scotia' => 'Nova Scotia',
                            'Nunavut' => 'Nunavut',
                            'Ontario' => 'Ontario',
                            'Prince Edward Island' => 'Prince Edward Island',
                            'Quebec' => 'Quebec',
                            'Saskatchewan' => 'Saskatchewan',
                            'Yukon Territory' => 'Yukon Territory',
                        ],
                        [
                            'prompt' => '*' . Yii::t(_NP_TEXT_DOMAIN, 'Province'),
                            'class' => 'form-control select2 hide-arrow'
                        ]
                    )->label(false) ?>
                    <div class="form-date-time required">
                        <div class="form-date-time-inner">
                            <label class="control-label"><?= Yii::t(_NP_TEXT_DOMAIN, 'Date of Birth') ?>:</label>
                            <?= $form->field($model, 'birthMonth', ['options' => ['class' => 'date-time-item']])
                                ->dropDownList([
                                    array_combine(range(1,12), range(1,12))
                                ],[
                                    'prompt' => Yii::t(_NP_TEXT_DOMAIN, 'Month'),
                                    'class' => 'a-center small-input date-picker select2 hide-no-value hide-arrow'
                                ])
                                ->label(false) ?>
                            <?= $form->field($model, 'birthDate', ['options' => ['class' => 'date-time-item']])
                                ->dropDownList([
                                    array_combine(range(1,31), range(1,31))
                                ],[
                                    'prompt' => Yii::t(_NP_TEXT_DOMAIN, 'Day'),
                                    'class' => 'a-center small-input date-picker select2 hide-no-value hide-arrow'
                                ])
                                ->label(false) ?>
                            <?= $form->field($model, 'birthYear', ['options' => ['class' => 'date-time-item']]) ->dropDownList([
                                array_combine(range(1905,1998), range(1905,1998))
                            ],[
                                'prompt' => Yii::t(_NP_TEXT_DOMAIN, 'Year'),
                                'class' => 'a-center small-input date-picker select2 hide-no-value hide-arrow'
                            ])
                                ->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <?= $form->field($model, 'email')->textInput(
                        ['placeholder' =>'*'. Yii::t(_NP_TEXT_DOMAIN, 'Email Address'),
                            'value' =>  Yii::$app->session->get('registerEmail')])->label(false) ?>
                    <?= $form->field($model, 'emailConfirm')->textInput(
                        [
                            'placeholder' => '*'.Yii::t(_NP_TEXT_DOMAIN, 'Confirm Email')])->label(false) ?>

                </div>
                <div class="form-row">
                    <?php if ((Yii::$app->language == 'fr_FR')): ?>
                        <?= $form->field($model, 'agreeTerm', ['options' => ['class' => 'form-check-box']])->checkbox(
                            ['template' => '<div class="form-check-box-inner">{input}{label}</div>{error}']
                        )->label(Yii::t(_NP_TEXT_DOMAIN, 'J\'ai lu et j\'accepte ') . Html::a(Yii::t(_NP_TEXT_DOMAIN, 'les règlements officiels'), Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'official-rules']),['target' => '_blank'])) ?>
                    <?php else:?>
                        <?= $form->field($model, 'agreeTerm', ['options' => ['class' => 'form-check-box']])->checkbox(
                            ['template' => '<div class="form-check-box-inner">{input}{label}</div>{error}']
                        )->label(Yii::t(_NP_TEXT_DOMAIN, 'I have read and agree to the ') . Html::a(Yii::t(_NP_TEXT_DOMAIN, 'official rules'), Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'official-rules']),['target' => '_blank'])) ?>
                    <?php endif;?>


                </div>
                <div class="form-row">
                    <?= $form->field($model, 'childFirstName')->textInput([
                        'placeholder' =>'*'. Yii::t(_NP_TEXT_DOMAIN, 'Your Child\'s Name')])->label(false) ?>
                    <?= $form->field($model, 'childLastInitial')->textInput([
                        'placeholder' => '*'.Yii::t(_NP_TEXT_DOMAIN, 'Your Child\'s Last Initial')])->label(false) ?>
                    <?= $form->field($model, 'age')->textInput(['class' => 'small-input', 'placeholder' => Yii::t(_NP_TEXT_DOMAIN, 'Age')])->label(false) ?>
                </div>
                <div class="form-row">
                    <?php
                    $layoutTemplate = [
                        'main2' => '<div class="kv-upload-progress hide"></div>{browse}{preview}{remove}',
                        'footer' => Html::button('<i class="fa fa-undo"></i>',['class' => 'img-rotate-left']).
                                    Html::button('<i class="fa fa-repeat"></i>',['class' => 'img-rotate-right'])
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
                            '<button class="btn btn-default global-btn btn-file"><span>'.Yii::t(_NP_TEXT_DOMAIN,'Upload').'{input}</span></button>' .
                            '{label}{error}'.
                            '<div class="preview-wrapper">'.
                            '<div class="file-preview"><div class="file-preview-frame"><canvas id="canvas"></canvas></div></div>'.
                            '<button class="img-rotate-left" ><i class="fa fa-undo" aria-hidden="true"></i></button>'.
                            '<button class="img-rotate-right"><i class="fa fa-repeat"></i></button>'.
                            '</div></div>'
                    ])->fileInput(['id' => 'imageLoader'])->label(false); ?>

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
                            <?= Html::submitButton(
                                Yii::t(_NP_TEXT_DOMAIN, "SUBMIT"),
                                ['class' => 'global-btn-inner', 'name' => 'signup-button']) ?>
                        </div>

                    </div>
                </div>


                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <?= $this->render('_mini-rules')?>
    </div>
</div>
<?php
$js = <<<JS

JS;
$this->registerJs($js);