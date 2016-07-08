<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $profile backend\models\UserProfile*/

$this->title = Yii::t('app', 'Add New User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
    'profile' => $profile
]) ?>
