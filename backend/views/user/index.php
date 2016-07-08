<?php
use yii\helpers\Html;
use common\enpii\components\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use backend\models\User;
use backend\models\UserProfile;
use yii\widgets\Pjax;
use \yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Manage Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <div class="page-head">

        <div class="head-content">
            <div class="page-title">
                <h1><?= Yii::t('app','Manage') . ' ' . Html::encode($this->title) ?></h1>
            </div>
            <div class="actions">
                <?=
                Html::button(
                    Yii::t('app', 'Add New User'),
                    [
                        'id' => 'modalButton',
                        'value' => Yii::$app->urlManager->createUrl(['user/create','ajax-call' => 1]),
                        'class' => 'btn btn-default btn-circle'
                    ]
                )
                ?>
                <?php
                Modal::begin([
                    'closeButton' => [
                        'label' => '&times;',
                        'class' => 'btn btn-danger btn-sm close-btn',
                    ],
                    'size' => 'modal-lg',
                    'id' => 'modal'
                ]);
                echo '<div id="modalContent"></div>';
                Modal::end();
                ?>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
    <div class="portlet">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light table-wrapper">
                    <?= $this->render('_search', ['model' => $searchModel]) ?>

                    <div class="portlet-body">
                        <?php $form = ActiveForm::begin(
                            [
                                'action' =>['user/delete'],
                                'options' => ['class'=> 'form-body']
                            ]);
                        ?>
                            <?php Pjax::begin(['id' => 'userGrid']); ?>
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'columns' => [
                                    [
                                        'class' => 'common\enpii\components\grid\ActionColumn',
                                        'header' => '',
                                        'template' => '{update}',
                                        'buttons' => [
                                            'update' => function ($url, $model,$key) {

                                                return Html::a('<i class="fa fa-pencil" aria-hidden="true"></i> Edit', $url . '&ajax-call=1', [
                                                    'title' => Yii::t('app', 'Edit'),
                                                    'class' => 'btn-model-update',
                                                ]);
                                            },

                                        ],
                                    ],
                                    [
                                        'label' => 'User Type',
                                        'attribute' => 'userRole',
                                        'value' => function($model) {
                                            $role = Yii::$app->authManager->getRolesByUser($model->id);
                                            return implode(",",array_keys($role));
                                        }
                                    ],
                                    [
                                        'label' => 'User ID',
                                        'attribute' => 'username',
                                    ],
                                    [
                                        'label' => 'Name',
                                        'attribute' => 'fullName',
                                        'value' => function($model) {
                                            return $model->fullname;
                                        }
                                    ],
                                    [
                                        'label' => Yii::t('app', 'CONTACT NO.'),
                                        'attribute' => 'phone_number',
                                        'value' => function($model) {
                                            if($model->profile){
                                                $phone = $model->profile->phone_number ;
                                                return $phone;
                                            }
                                            else{
                                                return null;
                                            }
                                        },
                                    ],
                                    [
                                        'label' => Yii::t('app', 'assigned building'),
                                        'attribute' => 'assigned_building',
                                        'value' => function($model) {
                                            if($model->building){
                                                $building = $model->building->name ;
                                                return $building;
                                            }
                                            else{
                                                return null;
                                            }
                                        },
                                    ],

                                    ['class' => 'common\enpii\components\grid\CheckboxColumn'],

                                ],
                            ]); ?>

                            <div class="bulk-action">
                                <button type="submit" id="delete-item-list-view"><?= Yii::t('app','Delete Selected')?></button>
                            </div>
                            <?php Pjax::end(); ?>
                        <?php ActiveForm::end();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
