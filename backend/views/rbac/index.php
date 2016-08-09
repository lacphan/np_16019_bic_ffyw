<?php
use yii\helpers\Html;
use common\enpii\components\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Common Auth Items');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="common-auth-item-index">
    <div class="page-bar">
        <?= Breadcrumbs::widget([
            'options' => [
                'class' => 'page-breadcrumb'
            ],
            'itemTemplate' => "<li>{link}<i class='fa fa-circle'></i></li>\n",
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject font-green-sharp bold uppercase">
                            <?= Yii::t("app", "common-auth-item Listing") ?>
                        </span>
                        <span class="caption-helper">
                            <?= Yii::t("app", "manage common-auth-item") . "..." ?>
                        </span>
                    </div>
                    <div class="actions">
                        <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-480">' .
                            Yii::t('app', 'Create Common Auth Item'),
                            ['create'],
                            ['class' => 'btn btn-default btn-circle']) ?>
                    </div>
                </div>

                <div class="portlet-body">

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'common\enpii\components\grid\CheckboxColumn'],
                            ['class' => 'common\enpii\components\grid\SerialColumn'],
                            'name',
                            'type',
                            'description:ntext',
                            'rule_name',
                            'data:ntext',
                            // 'created_at',
                            // 'updated_at',

                            ['class' => 'common\enpii\components\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
