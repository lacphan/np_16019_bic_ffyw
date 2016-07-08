<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Building;

/* @var $this yii\web\View */
/* @var $model backend\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="user-search margin-bottom-10">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'post',
    ]); ?>
    <div class="input-group">
        <div class="row">
            <div class="col-md-4 filter-select sort">
                <?=
                $form->field($model, 'sortBy')
                    ->dropDownList(
                        [
                            'client'   => 'All Client',
                            'supervisor'   => 'All Supervisor',
                            SORT_ASC   => 'A - Z',
                            SORT_DESC => 'Z - A',
                        ],
                        [
                            'prompt' => Yii::t('app', 'Most Recent'),
                            'onchange'=>'this.form.submit()',
                        ]

                    );
                ?>
            </div>
            <div class="col-md-3 filter-select post-per-page">
                <?=
                $form->field($model, 'postPerPage')
                    ->dropDownList(
                        [
                            10 => '10',
                            20 => '20',
                            30 => '30',
                        ],
                        [
                            'onchange'=>'this.form.submit()',
                        ]

                    );
                ?>
            </div>
            <div class="col-md-5 filter-select filter-building">
                <?=
                $form->field($model, 'building_id')->dropDownList(
                        ArrayHelper::map(Building::find()->all(), 'id', 'name'),
                        [
                            'prompt' => sprintf('-%s-', Yii::t('app', 'Select a building')),
                            'class' => 'bs-select form-control',
                            'onchange'=>'this.form.submit()',
                        ]
                    )->label(Yii::t('app','Filter by Building'));
                ?>
            </div>
        </div>


    </div>

    <?php ActiveForm::end(); ?>

</div>
