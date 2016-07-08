<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- BEGIN LOGIN -->
<div class="content">
    <table class="table-login">
        <tr>
            <td>
                
           
    <!-- BEGIN LOGIN FORM -->
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => [
            'class' => 'login-form'
        ],
    ]); ?>
    <div class="form-logo">
        <img src="<?= Yii::$app->urlManager->baseUrl . '/img/kelle/login-logo.png'?>">
    </div>
    <h4 class="form-title"><?= Yii::t('app','Enter your details below:') ?></h4>

    <div class="form-group">
        <?= $form->field($model,
            'username',
            [
                'options'=>
                    [
                        'tag'=>'div',
                        'class'=>'input-icon'
                    ]
            ]

        )->textInput(
            [
                'class' => 'form-control placeholder-no-fix',
                'placeholder' => 'Username'
            ]
        )->label(false);
        ?>
    </div>
    <div class="form-group">
        <?= $form->field($model,
            'password',
            [

                'options'=>
                    [
                        'tag'=>'div',
                        'class'=>'input-icon'
                    ]
            ]
        )->passwordInput(
            [
                'class' => 'form-control placeholder-no-fix',
                'placeholder' => 'Password'
            ]
        )->label(false);
        ?>
    </div>
    <div class="form-actions">

        <?= Html::submitButton('Login <i class="m-icon-swapright m-icon-white"></i>', ['class' => 'btn blue', 'name' => 'login-button']) ?>

    </div>

    <div class="forgot-password">
       <a href="javascript:void()" id="forget-password">
                Forgot password ?
       </a>
    </div>

    <?php ActiveForm::end(); ?>
         
    <!-- END LOGIN FORM -->

            </td>
        </tr>
    </table>
</div>
<!-- END LOGIN -->
