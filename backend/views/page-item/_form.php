<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Locale;
use common\enpii\components\NpTinyMCE;
/* @var $this yii\web\View */
/* @var $model backend\models\PageItem */
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
                <div class="page-item-form">

                    <?php $form = ActiveForm::begin(['options' => ['class' => 'form-body']]); ?>
                    <div class="page-item-form">
                        <div class="row">

                            <div class="col-md-8">
                                
                                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'locale_id')->dropDownList(
                                    ArrayHelper::map(Locale::find()->all(), 'id', 'locale'),
                                    [
                                        'class' => 'bs-select form-control',
                                    ]
                                )->label(Yii::t('app', 'Locale')); ?>


                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

                            </div>
                            <div class="col-md-12">
                                <?= $form->field($model, 'description')->widget(NpTinyMCE::className(), [
                                    'options' => ['rows' => 20],
                                    'language' => 'en_CA',
                                ]);

                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                        </div>

                    </div>
                    <?php ActiveForm::end(); ?>
                    <!-- END FORM-->

                </div>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
