<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $profile backend\models\UserProfile */
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
                    <div class="user-form">

                        <?php $form = ActiveForm::begin(['options' => ['class' => 'form-body']]); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($profile, 'age')->textInput(['maxlength' => true]) ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php if ($model->isNewRecord): ?>
                                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
                                <?php else: ?>



                                    <?= $form->field($model, 'passwordUpdate', [
                                        'template' => '{label}<div class="input-group">{input}'.
                                        '<span class="input-group-btn">'. Html::button(Yii::t('app', 'Change'), [
                                                'id' => 'password-update-button',
                                                'class' => 'btn green-haze'
                                            ]) .'</span></div>{error}',
                                        'options' => [
                                            'tag' => 'div',
                                            'class' => 'form-group'
                                        ],
                                    ])->passwordInput(
                                        [
                                            'maxlength' => true,
                                            'disabled' => true,
                                            'placeholder' => '••••••'
                                        ]
                                    ) ?>



                                    <?= $form->field($model, 'isUpdatePassword')->hiddenInput()->label(false) ?>
                                <?php endif; ?>

                            </div>
                            <div class="col-md-6">
                                <?= $form->field($profile, 'phone_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <?= $form->field($model, 'userRoles')->checkboxList(
                                    ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name', 'name'),
                                    [
                                        'item' =>
                                            function ($index, $label, $name, $checked, $value) {
                                                return Html::checkbox($name, $checked, [
                                                    'value' => $value,
                                                    'label' => "<label for='checkbox-item-{$index}'>{$label} </label>",
                                                    'id' => "checkbox-item-{$index}",
                                                    'checked' => true,
                                                    'labelOptions' => [
                                                        'class' => "checkbox-item checkbox-item-{$index}",
                                                    ],
                                                ]);
                                            },
                                    ]
                                ); ?>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>

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
<?php
$script = <<<JS
jQuery('#message').hide();
$('#password-update-button').click(function () {
        $('#user-passwordupdate').prop('disabled', false);
        $('#user-isupdatepassword').val(1);
        $('#user-passwordupdate').focus();
    })
JS;

$this->registerJs($script);

