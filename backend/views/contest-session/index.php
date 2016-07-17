<?php
use yii\helpers\Html;
use common\enpii\components\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchContestSession */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Submissions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contest-session-index">
    <div class="page-bar">
        <?= Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}<i class='fa fa-circle'></i></li>\n",
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'options' => [
                'class' => 'page-breadcrumb'
            ]
        ]) ?>
    </div>
    <h3 class="page-title">
        <?= Html::encode($this->title) ?>
    </h3>
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-block alert-success fade in">
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>
    <div class="portlet light bordered">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                                <span class="caption-subject font-green-sharp bold uppercase">
                                    <?= Yii::t("app", "Submissions Listing") ?>
                                </span>
                                <span class="caption-helper">
                                    <?= Yii::t("app", "manage submissions") . "..." ?>
                                </span>
                        </div>

                    </div>

                    <?= $this->render('_search', ['model' => $searchModel]) ?>
                    <?php ActiveForm::begin([
                        'action' => 'bulk'
                    ]) ?>
                    <div class="input-group select-wrapper">
                        <div class="form-group">
                            <?= Html::dropDownList('bulk-option', 'accept', [
                                'accept' => 'Accept',
                                'reject' => 'Reject'
                            ], [
                                'class' => 'select-box form-control select2-selection select2-selection--single'
                            ]) ?>
                        </div>
                        <span class="input-group-btn">
                            <button type="submit" class="table-group-action-submit btn green-haze">Change <i class="m-icon-swapright m-icon-white"></i></button>
                        </span>
                    </div>


                    <div class="portlet-body">

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'common\enpii\components\grid\CheckboxColumn'],
                                ['class' => 'common\enpii\components\grid\SerialColumn'],
                                [
                                    'class' => 'backend\models\ImageThumbnailColumn'
                                ],
                                [
                                    'attribute' => 'user_id',
                                    'value' => 'user.email',
                                    'label' => 'User'
                                ],
                                [
                                    'attribute' => 'parent_first_name',
                                    'value' => 'user.first_name',
                                    'label' => "Parent's First Name"
                                ],
                                [
                                    'attribute' => 'parent_last_name',
                                    'value' => 'user.last_name',
                                    'label' => "Parent's Last Name"
                                ],
                                [
                                    'attribute' => 'first_name',
                                    'label' => "Child's First Name"
                                ],
                                [
                                    'attribute' => 'last_name',
                                    'label' => "Child's Initial"
                                ],
                                [
                                    'attribute' => 'birth_year',
                                    'value' => 'age',
                                    'label' => 'Age'
                                ],

                                [
                                    'class' => 'common\enpii\components\grid\ActionColumn',
                                    'template' => '{update}{delete}{accept}{reject}',
                                    'buttons' => [
                                        'accept' => function ($url, $model, $key) {
                                            if ($model->accepted == 0 || $model->accepted == -1) {
                                                return Html::a('Accept', $url, [
                                                    'title' => Yii::t('app', 'Accept'),
                                                    'class' => 'btn-model-update',
                                                ]);
                                            }
                                            return '';

                                        },
                                        'reject' => function ($url, $model, $key) {
                                            if ($model->accepted == 0 || $model->accepted == 1) {
                                                return Html::a('Reject', $url, [
                                                    'title' => Yii::t('app', 'Reject'),
                                                    'class' => 'btn-model-update',
                                                ]);
                                            }
                                            return '';

                                        },

                                    ],
                                    'contentOptions' => ['class' => 'action-column'],
                                    'headerOptions' => ['class' => 'action-column']
                                ],
                            ],
                        ]); ?>
                        <div class="input-group select-wrapper">
                            <div class="form-group">
                                <?= Html::dropDownList('bulk-option', 'accept', [
                                    'accept' => 'Accept'
                                ], [
                                    'class' => 'select-box form-control select2-selection select2-selection--single'
                                ]) ?>
                            </div>
                        <span class="input-group-btn">
                            <button type="submit" class="table-group-action-submit btn green-haze">Change <i class="m-icon-swapright m-icon-white"></i></button>
                        </span>
                        </div>
                        <?php ActiveForm::end() ?>
                    </div>
                    <?php
                    Modal::begin([
                        'closeButton' => [
                            'label' => '&times;',
                            'class' => 'btn btn-danger btn-sm close-btn',
                        ],
                        'size' => 'modal-lg',
                        'id' => 'modal',
                        'options' => [
                            'class' => 'fade modal modal-facility'
                        ]
                    ]);
                    echo '<img id="image-viewer" src="">';
                    Modal::end();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
