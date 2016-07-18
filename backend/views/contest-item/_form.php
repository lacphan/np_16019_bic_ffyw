<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\ContestItem */
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
                <div class="contest-item-form">

                    <?php $form = ActiveForm::begin(['options' => ['class' => 'form-body', 'enctype' => 'multipart/form-data']]); ?>

                    <?= $form->field($model, 'start_date')->textInput() ?>

                    <?= $form->field($model, 'end_date')->textInput() ?>

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->textarea(['maxlength' => true,'rows' => 10]) ?>
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
                                'class' => 'optionvalue-img'
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
                                'layoutTemplates' => ['footer' => '']
                            ]
                        ]); ?>
                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
