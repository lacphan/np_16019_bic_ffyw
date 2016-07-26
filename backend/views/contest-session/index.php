<?php
use yii\helpers\Html;
use common\enpii\components\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use backend\models\ContestItem;
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
    <?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-block alert-danger fade in">
            <?= Yii::$app->session->getFlash('error') ?>
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

                    <div class="form-group export-menu">
                        <?php
                        $gridColumn = [
                            ['class' => 'common\enpii\components\grid\SerialColumn'],
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
                                'attribute' => 'user_id',
                                'value' => 'user.email',
                                'label' => 'Parent\'s Email'
                            ],
                            [
                                'attribute' => 'parent_phone',
                                'value' => 'user.profile.phone_number',
                                'label' => "Parent's Phone"
                            ],
                            [
                                'attribute' => 'parent_birthday',
                                'value' => function ($model) {
                                    return Yii::$app->formatter->asDate($model->user->profile->date_of_birth, 'Y-M-d');
                                },
                                'label' => "Parent's Birthday"
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
                                'attribute' => 'created_at',
                                'label' => 'Submission date'
                            ],
                            [
                                'attribute' => 'contest_item_id',
                                'label' => 'Weekly Challenge ID'
                            ],
                            [
                                'attribute' => 'birth_year',
                                'value' => 'age',
                                'label' => 'Age'
                            ],
                        ];
                        echo ExportMenu::widget([
                            'dataProvider' => $dataProvider,
                            'columns' => $gridColumn,
                            'exportConfig' => [
                                ExportMenu::FORMAT_TEXT => false,
                                ExportMenu::FORMAT_PDF => false,
                                ExportMenu::FORMAT_HTML => false,
                                ExportMenu::FORMAT_EXCEL => false,
                                ExportMenu::FORMAT_EXCEL_X => false,
                            ]

                        ])
                        ?>
                    </div>

                    <?= $this->render('_search', ['model' => $searchModel]) ?>

                    <div class="filter-option">
                        <div class="week-filter-option">
                            <?php $form = ActiveForm::begin(['method' => 'GET']) ?>

                                <?= $form->field($searchModel,'contest_item_id',['options' => ['tag' => false]])->dropDownList(
                                    ArrayHelper::map(ContestItem::find()->where(['locale_id' => 1])->all(),'week_number',function($model){ return 'Week ' . $model->week_number ; })
                                , [
                                    'prompt' => 'Select Week',
                                    'class' => 'select2 select-week-item select-box form-control select2-selection select2-selection--single',
                                    'onchange'=>'this.form.submit()',
                                ])->label(false) ?>
                            <?php ActiveForm::end() ?>
                        </div>
                        <div class="prize">

                            <?php $form = ActiveForm::begin([]) ?>
                            <?= Html::input('hidden','show-winner',1)?>
                            <?= Html::input('hidden','week',$searchModel->contest_item_id)?>
                            <?= Html::submitButton('Show Winner',['class' => 'btn green-haze'])?>
                            <?php ActiveForm::end() ?>

                            <?php $form = ActiveForm::begin([]) ?>
                            <?= Html::input('hidden','pick-winner',1)?>
                            <?= Html::input('hidden','week',$searchModel->contest_item_id)?>
                            <?= Html::submitButton('Pick Winner',['class' => 'prize-btn btn green-haze'])?>
                            <?php ActiveForm::end() ?>

                            <?php $form = ActiveForm::begin([]) ?>
                            <?= Html::input('hidden','pick-grand-prize',1)?>
                            <?= Html::input('hidden','week',$searchModel->contest_item_id)?>
                            <?= Html::submitButton('Pick Grand Prize',['class' => 'btn green-haze'])?>
                            <?php ActiveForm::end() ?>
                        </div>
                        <div class="bulk-option">
                            <?php ActiveForm::begin([
                                'action' => 'bulk'
                            ]) ?>
                            <div class="input-group select-wrapper">
                                <div class="form-group">
                                    <?= Html::dropDownList('bulk-option', 'accept', [
                                        'accept' => 'Accept',
                                        'reject' => 'Reject'
                                    ], [
                                        'class' => 'select-box form-control select2-selection select2-selection--single',
                                        'onchange' => '$("select[name=\'bulk-option\']").not(this).val($(this).val())'
                                    ]) ?>
                                </div>
                                <span class="input-group-btn"><button type="submit" class="table-group-action-submit btn green-haze btn-bulk-option">Change <i
                                    class="m-icon-swapright m-icon-white"></i></button></span>
                            </div>
                            <?php ActiveForm::end() ?>
                        </div>
                        <div class="clearfix"></div>
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
                                    'label' => 'Parent\'s Email'
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
                                    'label' => "Child's First Name",

                                ],
                                [
                                    'attribute' => 'last_name',
                                    'label' => "Child's Initial",
                                    'headerOptions' => ['width' => '5%']
                                ],
                                [
                                    'attribute' => 'birth_year',
                                    'value' => 'age',
                                    'label' => 'Age',
                                    'headerOptions' => ['width' => '5%']
                                ],
                                [
                                    'attribute' => 'contest_item_id',
                                    'label' => 'Week',
                                    'headerOptions' => ['width' => '10%'],
                                    'filter' => array_combine(range(1, 6), range(1, 6))
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
