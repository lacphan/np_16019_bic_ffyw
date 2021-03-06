<?php
use yii\helpers\Html;
use common\enpii\components\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\helpers\ArrayHelper;
use backend\models\Locale;
use common\enpii\components\NpItemDataSub;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchContestItem */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Weekly Challenges');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contest-item-index">
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
        <div class="row">
            <div class="col-md-12">
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                                <span class="caption-subject font-green-sharp bold uppercase">
                                    <?= Yii::t("app", "Weekly Challenges Listing") ?>
                                </span>
                                <span class="caption-helper">
                                    <?= Yii::t("app", "manage Weekly Challenges") . "..." ?>
                                </span>
                        </div>
                        <div class="actions">
                            <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-480">' .
                                Yii::t('app', 'Create Weekly Challenges'),
                                ['create'],
                                ['class' => 'btn btn-default btn-circle']) ?>
                        </div>
                    </div>

                    <?= $this->render('_search', ['model' => $searchModel]) ?>

                    <div class="portlet-body">

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'common\enpii\components\grid\CheckboxColumn'],
                                ['class' => 'common\enpii\components\grid\SerialColumn'],
                                [
                                    'attribute' => 'locale_id',
                                    'label' => 'Language',
                                    'value' => function ($model) {
                                        return $model->locale->locale;
                                    },
                                    'headerOptions' => ['width' => '30px'],
                                    'filter' => ArrayHelper::map(Locale::find()->asArray()->all(), 'id', 'locale')
                                ],
                                [
                                    'attribute' => 'start_date',
                                    'value' => function ($model) {
                                        return NpItemDataSub::convertToLocalTime($model->start_date);
                                    },
                                    'headerOptions' => ['width' => '20%'],
                                ],
                                [
                                    'attribute' => 'end_date',
                                    'value' => function ($model) {
                                        return NpItemDataSub::convertToLocalTime($model->end_date);
                                    },
                                    'headerOptions' => ['width' => '20%'],
                                ],
                                'title',
                                [
                                    'attribute' => 'week_number',
                                    'label' => 'Week',
                                ],
                                ['class' => 'common\enpii\components\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$js = <<<JS
var keys = $('#w1').yiiGridView('getSelectedRows');
JS;
$this->registerJs($js);
?>