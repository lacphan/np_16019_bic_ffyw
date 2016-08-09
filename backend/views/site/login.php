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
    <!-- BEGIN LOGIN FORM -->
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => [
            'class' => 'login-form'
        ],
    ]); ?>
    <h3 class="form-title"><?= Html::encode($this->title) ?></h3>
    <div class="form-group">
        <?= $form->field($model,
            'username',
            [
                'template' => "{label}\n<i class='fa fa-user'></i>\n{input}\n{hint}\n{error}",
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
                'template' => "{label}\n<i class='fa fa-lock'></i>\n{input}\n{hint}\n{error}",
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
        <?= $form->field($model, 'rememberMe',
            [
                'template' => '',
                'options'=>
                    [
                        'tag'=>'label',
                        'class'=>'checkbox'
                    ]
            ])->checkbox(['template' => '{input}{label}{error}']) ?>

        <?= Html::submitButton('Login <i class="m-icon-swapright m-icon-white"></i>', ['class' => 'btn blue pull-right', 'name' => 'login-button']) ?>

    </div>


    <?php ActiveForm::end(); ?>

</div>
<!-- END LOGIN -->
