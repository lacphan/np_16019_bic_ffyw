<?php
use yii\helpers\Html;
use common\enpii\components\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchBuilding */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Dashboard');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="building-index">
    <div class="page-head">

        <div class="head-content">
            <div class="page-title dashboard-title">
                <h1><?= sprintf('%s, %s !' , Yii::t('app','Welcome to your dashboard'),Yii::$app->user->identity->first_name)?></h1>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
    <div class="portlet">

        <div class="row">
            <div class="col-md-12">
                <div class="portlet light left-align">

                    <?= $this->render('_search', ['model' => $searchModel]) ?>

                    <div class="portlet-body">


                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                [
                                    'class' => 'common\enpii\components\grid\ActionColumn',
                                    'header' => '',
                                    'template' => '{update}',
                                    'buttons' => [
                                        'update' => function ($url, $model,$key) {

                                            return Html::a('<i class="fa fa-pencil" aria-hidden="true"></i> Edit', Yii::$app->urlManager->createUrl(['building/update','id' => $model->id]) , [
                                                'title' => Yii::t('app', 'Edit'),
                                            ]);
                                        },

                                    ],
                                    'contentOptions' => ['class' => 'action-column'],
                                    'headerOptions' => ['class' => 'action-column']
                                ],
                                [
                                    'label' => 'BUILDING',
                                    'attribute' => 'name',
                                ],
                                [
                                    'label' => 'Supervisor',
                                    'attribute' => 'user_type',
                                    'value' => function($model) {
                                        $arraySupervisor = [];
                                        $supervisors = $model->supervisors;
                                        if(!empty($supervisors) && is_array($supervisors)) {
                                            foreach ($model->supervisors as $supervisor) {
                                                $arraySupervisor[] = $supervisor->first_name;
                                            }
                                        }
                                        return implode(", ",$arraySupervisor);

                                    },
                                    'contentOptions' => ['class' => 'center-content'],
                                    'headerOptions' => ['class' => 'center-content']
                                ],
                                'address',
                                [
                                    'label' => 'TOTAL # facilities ID',
                                    'attribute' => 'number_of_block',
                                    'value' => function($model) {
                                        return count($model->buildingFacilities);
                                    },
                                    'contentOptions' => ['class' => 'center-content'],
                                    'headerOptions' => ['class' => 'center-content']
                                ],
                                [
                                    'header' => "LAST MONTH'S RATING",
                                    'class' => 'common\enpii\components\grid\RatingColumn',
                                    'value' => 2,
                                    'contentOptions' => ['class' => 'checkbox-column'],
                                    'headerOptions' => ['class' => 'checkbox-column']
                                ],
                                [
                                    'header' => 'MTD RATING',
                                    'class' => 'common\enpii\components\grid\RatingColumn',
                                    'value' => 2,
                                    'contentOptions' => ['class' => 'checkbox-column'],
                                    'headerOptions' => ['class' => 'checkbox-column']
                                ],
                            ],
                        ]); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
