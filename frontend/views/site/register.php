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
$contestItem = ContestItem::getWeek();
$weekNumber = $contestItem ? $contestItem->id : 1;
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="registration-content-row">
                <div class="col-md-3 image-heading">
                    <div class="heading-content">
                        <?php if($weekNumber):?>
                            <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/week-'.$weekNumber.'/week.png' ?>"
                                 alt="Feature" width="266" height="220">
                        <?php endif;?>
                    </div>
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
                                    <span class="font-5 color-1"><?= Yii::t('app','Week') . ' ' . ContestItem::getWeek()->id ?>: <?= ContestItem::getWeek()->title?></span>
                                </h3>
                                <?= ContestItem::getWeek()->description ?>
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
                <h3 class="form-title font-5 font-size-25">Please fill out the form below to submit your entry:</h3>
                <p class="require-hint">* Required Fields</p>
                <?php $form = ActiveForm::begin([
                    'options' => [
                        'enctype' => 'multipart/form-data',
                        'id' => 'register-form'
                    ]
                ]); ?>
                <div class="form-row">
                    <?= $form->field($model, 'parentFirstName')->textInput(['placeholder' => Yii::t('app', '*' . "Parent's First Name")])->label(false) ?>
                    <?= $form->field($model, 'parentLastName')->textInput(['placeholder' => Yii::t('app', '*' . "Parent's Last Name")])->label(false) ?>
                    <?= $form->field($model, 'phoneNumber')->textInput(['placeholder' => Yii::t('app', '*' . 'Phone Number')])->label(false) ?>
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
                            'prompt' => '*' . Yii::t('app', 'Province'),
                            'class' => 'form-control select2 hide-arrow'
                        ]
                    )->label(false) ?>
                    <div class="form-date-time required">
                        <div class="form-date-time-inner">
                            <label class="control-label"><?= Yii::t('app', 'Date of Birth') ?>:</label>
                            <?= $form->field($model, 'birthMonth', ['options' => ['class' => 'date-time-item']])
                                ->dropDownList([
                                    array_combine(range(1,12), range(1,12))
                                ],[
                                    'prompt' => Yii::t('app', 'Month'),
                                    'class' => 'a-center small-input date-picker select2 hide-no-value hide-arrow'
                                ])
                                ->label(false) ?>
                            <?= $form->field($model, 'birthDate', ['options' => ['class' => 'date-time-item']])
                                ->dropDownList([
                                    array_combine(range(1,31), range(1,31))
                                ],[
                                    'prompt' => Yii::t('app', 'Day'),
                                    'class' => 'a-center small-input date-picker select2 hide-no-value hide-arrow'
                                ])
                                ->label(false) ?>
                            <?= $form->field($model, 'birthYear', ['options' => ['class' => 'date-time-item']]) ->dropDownList([
                                array_combine(range(1905,1998), range(1905,1998))
                            ],[
                                'prompt' => Yii::t('app', 'Year'),
                                'class' => 'a-center small-input date-picker select2 hide-no-value hide-arrow'
                            ])
                                ->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <?= $form->field($model, 'email')->textInput(['placeholder' => '*Email Address','value' =>  Yii::$app->session->get('registerEmail')])->label(false) ?>
                    <?= $form->field($model, 'emailConfirm')->textInput(['placeholder' => '*Confirm Email'])->label(false) ?>

                </div>
                <div class="form-row">
                    <?= $form->field($model, 'agreeTerm', ['options' => ['class' => 'form-check-box']])->checkbox(
                        ['template' => '<div class="form-check-box-inner">{input}{label}</div>{error}']
                    )->label(Yii::t('app', 'I have read and agree to the ') . Html::a(Yii::t('app', 'official rules'), Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'official-rules']),['target' => '_blank'])) ?>

                </div>
                <div class="form-row">
                    <?= $form->field($model, 'childFirstName')->textInput(['placeholder' => Yii::t('app', '*' . 'Child’s First Name')])->label(false) ?>
                    <?= $form->field($model, 'childLastInitial')->textInput(['placeholder' => Yii::t('app', '*' . 'Child’s Last Initial')])->label(false) ?>
                    <?= $form->field($model, 'age')->textInput(['class' => 'small-input', 'placeholder' => Yii::t('app', 'Age')])->label(false) ?>
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
                            Yii::t('app', 'Upload photo instructions') . ':<br/>' .
                            Yii::t('app', 'No larger than 5MB and only accept .jpg and .png files') .
                            '</div>' .
                            '<button class="btn btn-default global-btn btn-file"><span>'.Yii::t('app','Upload').'{input}</span></button>' .
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
                            <?= Html::submitButton('SUBMIT', ['class' => 'global-btn-inner', 'name' => 'signup-button']) ?>
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