<?php
use yii\helpers\Html;
use common\enpii\components\grid\GridView;
use yii\widgets\Breadcrumbs;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchUser */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
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
    <div class="portlet light bordered">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                                <span class="caption-subject font-green-sharp bold uppercase">
                                    <?= Yii::t("app", "user Listing") ?>
                                </span>
                                <span class="caption-helper">
                                    <?= Yii::t("app", "manage user") . "..." ?>
                                </span>
                        </div>
                        <div class="actions">
                            <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-480">' .
                                Yii::t('app', 'Create User'),
                                ['create'],
                                ['class' => 'btn btn-default btn-circle']) ?>
                        </div>
                    </div>
                    <div class="form-group export-menu">
                        <?php
                        $gridColumn = [
                            ['class' => 'common\enpii\components\grid\SerialColumn'],
                            [
                                'attribute' => 'first_name',
                                'label' => "Parent's First Name"
                            ],
                            [
                                'attribute' => 'last_name',
                                'label' => "Parent's Last Name"
                            ],
                            [
                                'attribute' => 'email',
                                'label' => 'Parent\'s Email'
                            ],
                            [
                                'attribute' => 'profile.phone_number',
                                'value' => function($model) {
                                    if ($model->profile) {
                                        return $model->profile->phone_number;
                                    }
                                    return '';
                                },
                                'label' => "Parent's Phone"
                            ],
                            [
                                'attribute' => 'profile.date_of_birth',
                                'value' => function($model) {
                                    if ($model->profile) {
                                        return Yii::$app->formatter->asDate($model->profile->date_of_birth,'Y-M-d');
                                    }
                                    return '';
                                },
                                'label' => "Parent's Birthday"
                            ],
                            [
                                'attribute' => 'contestSessions',
                                'value' => function($model) {
                                    $childFirstName = \yii\helpers\ArrayHelper::map($model->contestSessions,'first_name','first_name');
                                    var_dump($childFirstName);
                                    return implode(", ", $childFirstName);
                                },
                                'label' => "Child's First Name"
                            ],
                            [
                                'attribute' => 'contestSessions',
                                'value' => function($model) {
                                    return count($model->contestSessions);
                                },
                                'label' => 'Total number of submissions'
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

                    <div class="portlet-body">

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'common\enpii\components\grid\CheckboxColumn'], ['class' => 'common\enpii\components\grid\SerialColumn'], 'id',
                                'username',
                                'email:email',
                                'first_name',
                                'last_name',
                                // 'profile_id',
                                // 'parent_id',
                                // 'level',
                                // 'password_hash',
                                // 'password_reset_token',
                                // 'auth_key',
                                // 'status',
                                // 'building_id',
                                // 'created_at',
                                // 'updated_at',
                                // 'published_at',
                                // 'creator_id',
                                //'is_deleted',
                                // 'is_enabled',
                                // 'ordering_weight',
                                // 'params:ntext',

                                ['class' => 'common\enpii\components\grid\ActionColumn'],

                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
