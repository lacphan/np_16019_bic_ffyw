<?php
use yii\helpers\Html;
use common\enpii\components\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchContestItem */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Contest Items');
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
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                                <span class="caption-subject font-green-sharp bold uppercase">
                                    <?= Yii::t("app", "contest-item Listing") ?>
                                </span>
                                <span class="caption-helper">
                                    <?= Yii::t("app", "manage contest-item") . "..." ?>
                                </span>
                        </div>
                        <div class="actions">
                            <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-480">' .
                                Yii::t('app', 'Create Contest Item'),
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
                                ['class' => 'common\enpii\components\grid\CheckboxColumn'], ['class' => 'common\enpii\components\grid\SerialColumn'], 'id',
                                'start_date',
                                'end_date',
                                'title',
//                                'description',

                                ['class' => 'common\enpii\components\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
