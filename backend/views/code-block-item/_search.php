<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchCodeBlockItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="code-block-item-search margin-bottom-10">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="input-group">

        <?= $form->field($model, 'globalSearch', [
            'options' => [
                'tag' => false,
            ],
        ])->textInput([
            'placeholder' => Yii::t('app', 'Search...'),
            'class' => 'form-control'
        ])->label(false); ?>

        <span class="input-group-btn">
            <?= Html::submitButton(Yii::t('app', 'Search') . ' <i class="m-icon-swapright m-icon-white"></i>', ['class' => 'btn green-haze']) ?>
        </span>
    </div>

    <?php ActiveForm::end(); ?>

</div>
