<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use backend\models\ContestSession;
use backend\models\ContestItem;
use backend\models\User;
use common\helpers\HashHelper;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Dashboard');
$this->params['breadcrumbs'][] = $this->title;
$contestItem = ContestItem::getWeek();
$contestSessions = ContestSession::find()->where(['>=', 'created_at', $contestItem->start_date])->andWhere(['<=', 'created_at', $contestItem->end_date])->all();

$winner = ContestSession::find()->where(['is_winner' => 1])->all();

$totalUserWeeklyEnglish = User::find()->where(['is_deleted' => 0])->andWhere(['locale_id' => 1])->andWhere(['>=', 'created_at', $contestItem->start_date])->andWhere(['<=', 'created_at', $contestItem->end_date])->all();
$totalUserWeeklyFrench = User::find()->where(['is_deleted' => 0])->andWhere(['>=', 'created_at', $contestItem->start_date])->andWhere(['<=', 'created_at', $contestItem->end_date])->andWhere(['locale_id' => 3])->all();
$totalUserWeekly = User::find()->where(['is_deleted' => 0])->andWhere(['>=', 'created_at', $contestItem->start_date])->andWhere(['<=', 'created_at', $contestItem->end_date])->all();

$totalUserEnglish = User::find()->where(['is_deleted' => 0])->andWhere(['locale_id' => 1])->all();
$totalUserFrench = User::find()->where(['is_deleted' => 0])->andWhere(['locale_id' => 3])->all();
$totalUser = User::find()->where(['is_deleted' => 0])->all();

$totalSubmissionWeeklyEnglish = ContestSession::find()->where(['locale_id' => 1])->andWhere(['>=', 'created_at', $contestItem->start_date])->andWhere(['<=', 'created_at', $contestItem->end_date])->all();
$totalSubmissionWeeklyFrench = ContestSession::find()->where(['locale_id' => 3])->andWhere(['>=', 'created_at', $contestItem->start_date])->andWhere(['<=', 'created_at', $contestItem->end_date])->all();
$totalSubmissionWeekly = ContestSession::find()->where(['>=', 'created_at', $contestItem->start_date])->andWhere(['<=', 'created_at', $contestItem->end_date])->all();

$totalSubmissionEnglish = ContestSession::find()->where(['locale_id' => 1])->all();
$totalSubmissionFrench = ContestSession::find()->where(['locale_id' => 3])->all();
$totalSubmission = ContestSession::find()->all();
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
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-user font-green "></i>
                <span class="caption-subject font-green bold uppercase">User</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalUserWeeklyEnglish) ?></div>
                            <div class="desc"> Total User English this week</div>
                        </div>
                        <a class="more" href="<?= Yii::$app->urlManager->createUrl(['contest-session']) ?>"
                           target="_blank"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalUserWeeklyFrench) ?></div>
                            <div class="desc"> Total User French this week</div>
                        </div>
                        <a class="more" href="<?= Yii::$app->urlManager->createUrl(['contest-session']) ?>"
                           target="_blank"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalUserWeekly) ?></div>
                            <div class="desc"> Total Users this week</div>
                        </div>
                        <div class="more"> &nbsp;
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalUserEnglish) ?></div>
                            <div class="desc"> Total User English</div>
                        </div>
                        <a class="more" href="<?= Yii::$app->urlManager->createUrl(['contest-session']) ?>"
                           target="_blank"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalUserFrench) ?></div>
                            <div class="desc"> Total User French</div>
                        </div>
                        <a class="more" href="<?= Yii::$app->urlManager->createUrl(['contest-session']) ?>"
                           target="_blank"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalUser) ?></div>
                            <div class="desc"> Total Users</div>
                        </div>
                        <div class="more"> &nbsp;
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-user font-green "></i>
                <span class="caption-subject font-green bold uppercase">Submission</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalSubmissionWeeklyEnglish) ?></div>
                            <div class="desc"> Total Submission English this week</div>
                        </div>
                        <a class="more" href="<?= Yii::$app->urlManager->createUrl(['contest-session']) ?>"
                           target="_blank"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalSubmissionWeeklyFrench) ?></div>
                            <div class="desc"> Total Submission French this week</div>
                        </div>
                        <a class="more" href="<?= Yii::$app->urlManager->createUrl(['contest-session']) ?>"
                           target="_blank"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalSubmissionWeekly) ?></div>
                            <div class="desc"> Total Submission this week</div>
                        </div>
                        <div class="more"> &nbsp;
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalSubmissionEnglish) ?></div>
                            <div class="desc"> Total Submission English</div>
                        </div>
                        <a class="more" href="<?= Yii::$app->urlManager->createUrl(['contest-session']) ?>"
                           target="_blank"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalSubmissionFrench) ?></div>
                            <div class="desc"> Total Submission French</div>
                        </div>
                        <a class="more" href="<?= Yii::$app->urlManager->createUrl(['contest-session']) ?>"
                           target="_blank"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number"><?= count($totalSubmission) ?></div>
                            <div class="desc"> Total Submission</div>
                        </div>
                        <div class="more"> &nbsp;
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php

    $weeks = ContestItem::find()->where(['locale_id' => 1])->all();
    if ($weeks) {
    foreach ($weeks as $week) : ?>
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-user font-red "></i>
                <span class="caption-subject font-red bold uppercase">Week <?= $week->week_number; ?></span>
            </div>
        </div>
        <div class="portlet-body">

            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-comments"></i>Winner</div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> #</th>
                                <th>Parent's Email</th>
                                <th>Parent's First Name</th>
                                <th>Parent's Last Name</th>
                                <th>Child's First Name</th>
                                <th>Child's Initial</th>
                                <th>Age</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $winners = ContestSession::find()->where(['contest_item_id' => $week->id])->andWhere(['is_winner' => 1])->all();
                            if ($winners) {
                                foreach ($winners as $key => $winner) : ?>

                                    <tr>
                                        <td> <?= $key ?></td>
                                        <th><?= HashHelper::decrypt($winner->user->email) ?></th>
                                        <th><?=  HashHelper::decrypt($winner->user->first_name) ?></th>
                                        <th><?=  HashHelper::decrypt($winner->user->last_name) ?></th>
                                        <th><?= $winner->first_name ?></th>
                                        <th><?= $winner->last_name ?></th>
                                        <th><?=  $winner->age ?></th>
                                    </tr>
                                <?php endforeach;
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-comments"></i>Grand Prize
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> #</th>
                                <th>Parent's Email</th>
                                <th>Parent's First Name</th>
                                <th>Parent's Last Name</th>
                                <th>Child's First Name</th>
                                <th>Child's Initial</th>
                                <th>Age</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $grandPrize = ContestSession::find()->where(['contest_item_id' => $week->id])->andWhere(['is_grand_prize' => 1])->one();
                            if ($grandPrize) : ?>

                                <tr>
                                    <td></td>
                                    <th><?=  HashHelper::decrypt($grandPrize->user->email) ?></th>
                                    <th><?=  HashHelper::decrypt($grandPrize->user->first_name) ?></th>
                                    <th><?=  HashHelper::decrypt($grandPrize->user->last_name) ?></th>
                                    <th><?= $grandPrize->first_name ?></th>
                                    <th><?= $grandPrize->last_name ?></th>
                                    <th><?= $grandPrize->age ?></th>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <?php endforeach;} ?>
</div>

