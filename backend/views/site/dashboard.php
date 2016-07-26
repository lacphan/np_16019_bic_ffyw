<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use backend\models\ContestSession;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Dashboard');
$this->params['breadcrumbs'][] = $this->title;

$contestSessions = ContestSession::find()->all();
$winner = ContestSession::find()->where(['is_winner' => 1])->all();

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
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="fa fa-user"></i>
                </div>
                <div class="details">
                    <div class="number"><?= count($contestSessions)?></div>
                    <div class="desc"> Total Submission </div>
                </div>
                <a class="more" href="<?= Yii::$app->urlManager->createUrl(['contest-session'])?>" target="_blank"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="fa fa-user"></i>
                </div>
                <div class="details">
                    <div class="number"><?= count($winner)?></div>
                    <div class="desc"> Winner </div>
                </div>
                <div class="more"> &nbsp;
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- Begin: life time stats -->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-blue"></i>
                        <span class="caption-subject font-blue bold uppercase">Google Analytics</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#overview_1" data-toggle="tab">Status </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="overview_1">
                                <div class="table-responsive">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: life time stats -->
        </div>
    </div>
</div>
