<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Building;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
/* @var $profile backend\models\UserProfile */

?>

    <div class="portlet box red">
        <div class="portlet-title">
            <div class="caption">
                <h3><?= $this->title ?></h3>
            </div>
        </div>
        <div class="portlet-body form">
            <div class="common-user-form">

                <?php $form = ActiveForm::begin([
                    'id' => $model->formName(),
                    'options' => ['class' => 'form-body']]); ?>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'userType')->dropDownList(
                            [
                                'client' => 'Client',
                                'supervisor' => 'Supervisor'
                            ],
                            [
                                'prompt' => sprintf('-%s-', Yii::t('app', 'Select a user type')),
                                'options'=> [
                                    $model->getUserMainRoleName() =>['Selected'=>true]
                                ]
                            ]
                        ); ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($profile, 'phone_number')->textInput(['maxlength' => true])->label(Yii::t('app', 'Contact No.')) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'first_name')->textInput()->label(Yii::t('app', 'Name')) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label((Yii::t('app', 'User ID'))) ?>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?=
                        $form->field($model, 'building_id')->dropDownList(
                            ArrayHelper::map(Building::find()->all(), 'id', 'name'),
                            [
                                'prompt' => sprintf('-%s-', Yii::t('app', 'Select a building')),
                                'class' => 'bs-select form-control',
                            ]
                        );
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php if($model->isNewRecord):?>
                            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
                        <?php else:?>
                            <div class="change-password-wrapper">
                                <?= Html::button(Yii::t('app','Change'),[
                                    'id' => 'password-update-button'
                                ])?>
                                <?= $form->field($model,'passwordUpdate')->passwordInput(
                                    [
                                        'maxlength' => true,
                                        'disabled' => true,
                                        'placeholder' => '••••••'
                                    ]
                                )?>
                                <?= $form->field($model,'isUpdatePassword')->hiddenInput()->label(false)?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Submit New Entry') : Yii::t('app', 'Save Entry'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="message">

                        </div>
                    </div>
                </div>


                <?php ActiveForm::end(); ?>

            </div>
            <!-- END FORM-->
        </div>
    </div>
<?php
$script = <<<JS
jQuery('#message').hide();
$('#password-update-button').click(function () {
        $('#user-passwordupdate').prop('disabled', false);
        $('#user-isupdatepassword').val(1);
        $('#user-passwordupdate').focus();
        $(this).hide();
    })
jQuery('form#{$model->formName()}').on('beforeSubmit', function (e) {
        var form = jQuery(this);
        // return false if form still have some validation errors
        if (form.find('.has-error').length) {
            return false;
        }
        buttonText = form.find('button[type=submit]').html();
        jQuery.ajax({
            url: form.attr('action'),
            type: 'post',
            data: form.serialize(),
             beforeSend: function () {
                form.find('#message').hide();
                form.find('button[type=submit]').attr("disabled", true);
                form.find('button[type=submit]').html('Processing...');
            },
            complete: function () {
                form.find('button[type=submit]').attr("disabled", false);
                form.find('button[type=submit]').html(buttonText);
            },
            
            success: function (response) {
             obj = jQuery.parseJSON(response);
             console.log(obj);
                if(obj.status == 200) {
                    form.trigger("reset");
                    form.find('#message').html(obj.message)
                    form.find('#message').show();
                    $('#modal').modal('hide');
                    $.pjax.reload({container: '#userGrid'})
                } else {
                   
                }
            }
        });
        return false;
    })
JS;
if (Yii::$app->request->get('ajax-call')) {
    $this->registerJs($script);
}
