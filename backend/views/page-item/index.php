<?php
use yii\helpers\Html;
use common\enpii\components\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\helpers\ArrayHelper;
use backend\models\Locale;
use common\enpii\components\NpItemDataSub;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchPageItem */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Page Items');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-item-index">
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
                                    <?= Yii::t("app", "page-item Listing") ?>
                                </span>
                                <span class="caption-helper">
                                    <?= Yii::t("app", "manage page-item") . "..." ?>
                                </span>
                        </div>
                        <div class="actions">
                            <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-480">' .
                                Yii::t('app', 'Create Page Item'),
                                ['create'],
                                ['class' => 'btn btn-default btn-circle']) ?>
                        </div>
                    </div>

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
                                    'filter'=> ArrayHelper::map(Locale::find()->asArray()->all(),'id','locale')
                                ],
                                'name',
                                'slug',
                                'code',

                                [
                                    'attribute' => 'published_date',
                                    'headerOptions' =>  [
                                        'rowspan'   => '1',
                                        'width'     => "20%"
                                    ],

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
