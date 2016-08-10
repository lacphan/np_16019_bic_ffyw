<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\ContestSession */
/* @var $form yii\widgets\ActiveForm */
?>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-block alert-success fade in">
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green-sharp bold uppercase">
                        <?= Html::encode($this->title) ?>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="contest-session-form">

                        <?php $form = ActiveForm::begin(['options' => ['class' => 'form-body', 'enctype' => 'multipart/form-data']]); ?>

                        <?= $form->field($model, 'user_id')->textInput() ?>

                        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'age')->textInput() ?>

                        <?php
                        $initialPreview = [];
                        if ($model->attachment) {
                            $pathImg = $model->attachment->getAttachmentUrl();
                            $initialPreview[] = Html::img($pathImg, ['class' => 'file-preview-image']);
                        }
                        ?>
                        <?= $form->field($model, 'uploadFile')->widget(FileInput::className(),
                            [
                                'options' => [
                                    'multiple' => false,
                                    'accept' => 'image/*',
                                    'class' => 'attachment-img',
                                ],
                                'pluginOptions' => [
                                    'previewFileType' => 'image',
                                    'showCaption' => false,
                                    'showUpload' => false,
                                    'browseClass' => 'btn btn-default btn-sm',
                                    'browseLabel' => ' Pick image',
                                    'browseIcon' => '<i class="glyphicon glyphicon-picture"></i>',
                                    'removeClass' => 'btn btn-danger btn-sm',
                                    'removeLabel' => ' Delete',
                                    'removeIcon' => '<i class="fa fa-trash"></i>',
                                    'previewSettings' => [
                                        'image' => ['width' => '138px', 'height' => 'auto']
                                    ],
                                    'initialPreview' => $initialPreview,

                                ]
                            ]); ?>
                        <?php if ($model->attachment): ?>
                            <div class="form-group " id="rotate-image">
                                <button class="rotate-left" type="button"
                                        data-action="<?= Yii::$app->urlManager->createUrl(['contest-session/rotate-image', 'id' => $model->attachment->id, 'degree' => -90]) ?>">
                                    <i class="fa fa-undo" aria-hidden="true"></i></button>
                                <button class="rotate-right" type="button"
                                        data-action="<?= Yii::$app->urlManager->createUrl(['contest-session/rotate-image', 'id' => $model->attachment->id, 'degree' => 90]) ?>">
                                    <i class="fa fa-repeat" aria-hidden="true"></i></button>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                        </div>
                        <?= $form->field($model, 'attachment_id')->hiddenInput(['id' => 'attachment-id'])->label(false) ?>
                        <?php ActiveForm::end(); ?>

                    </div>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
<?php
$js = <<<JS

$(".attachment-img").on("filecleared", function(event) {
    $('#attachment-id').val('');
});

JS;

$this->registerJs($js);
