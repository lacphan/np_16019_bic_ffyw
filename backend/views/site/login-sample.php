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
    <div class="login-options">
        <h4>Or login with</h4>
        <ul class="social-icons">
            <li>
                <a class="facebook" data-original-title="facebook" href="javascript:void()">
                </a>
            </li>
            <li>
                <a class="twitter" data-original-title="Twitter" href="javascript:void()">
                </a>
            </li>
            <li>
                <a class="googleplus" data-original-title="Goole Plus" href="javascript:void()">
                </a>
            </li>
            <li>
                <a class="linkedin" data-original-title="Linkedin" href="javascript:void()">
                </a>
            </li>
        </ul>
    </div>
    <div class="forget-password">
        <h4>Forgot your password ?</h4>
        <p>
            no worries, click <a href="javascript:void()" id="forget-password">
                here </a>
            to reset your password.
        </p>
    </div>
    <div class="create-account">
        <p>
            Don't have an account yet ?&nbsp; <a href="javascript:void()" id="register-btn">
                Create an account </a>
        </p>
    </div>
    <?php ActiveForm::end(); ?>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="#" method="post">
        <h3>Forget Password ?</h3>
        <p>
            Enter your e-mail address below to reset your password.
        </p>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
            </div>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn">
                <i class="m-icon-swapleft"></i> Back </button>
            <button type="submit" class="btn blue pull-right">
                Submit <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" action="#" method="post">
        <h3>Sign Up</h3>
        <p>
            Enter your account details below:
        </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
            <div class="controls">
                <div class="input-icon">
                    <i class="fa fa-check"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>
                <input type="checkbox" name="tnc"/> I agree to the <a href="javascript:void()">
                    Terms of Service </a>
                and <a href="javascript:void()">
                    Privacy Policy </a>
            </label>
            <div id="register_tnc_error">
            </div>
        </div>
        <div class="form-actions">
            <button id="register-back-btn" type="button" class="btn">
                <i class="m-icon-swapleft"></i> Back </button>
            <button type="submit" id="register-submit-btn" class="btn blue pull-right">
                Sign Up <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
