<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CodeBlockItem */
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
                <div class="code-block-item-form">

                    <?php $form = ActiveForm::begin(['options' => ['class' => 'form-body']]); ?>

                    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'content')->textarea(['rows' => 10]) ?>
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
