<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\RegisterForm */
/* @var $contestSessions frontend\models\ContestSession[] */
/* @var $searchModel backend\models\SearchContestSession */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $pages */

use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content gallery-tmpl">
            <div class="success-content">
                <div class="title">
                    BIC'S <span>Handwriting</span> Challenge!<br>
                    Gallery
                </div>
                <div class="gallery-intro">
                    Check out the handwriting submissions from all across Canada!
                    <span class="global-btn">
                        <?= Html::a(Yii::t(_NP_TEXT_DOMAIN,'Enter Now'), Yii::$app->urlManager->createUrl(['site/index']), ['class' => 'global-btn-inner']) ?>
                    </span>
                </div>
                <div class="gallery-wrapper">
                    <?= $this->render('_search', ['model' => $searchModel]) ?>
                    <div class="home-gallery-row">
                        <?php if ($contestSessions): ?>
                            <?php foreach ($contestSessions as $key => $contestSession): ?>
                                <?php if ($contestSession->attachment): ?>
                                    <div class="home-gallery-item">
                                        <div class="home-gallery-item-inner">
                                            <div class="home-gallery-item-image"
                                                 style="background: url(<?= $contestSession->attachment->getAttachmentUrl('medium') ?>) center no-repeat; background-size: cover">
                                                <a class="thumbnail-img" href="#" data-image-id="" data-toggle="modal"
                                                   data-title="<?= $contestSession->first_name . ' ' . $contestSession->last_name . ', ' . $contestSession->user->profile->province ?>"
                                                   data-caption="<?= $contestSession->user->email ?>"
                                                   data-image="<?= $contestSession->attachment->getAttachmentUrl('medium') ?>"
                                                   data-target="#image-gallery">
                                                    <?= $contestSession->attachment->getAttachmentImage('medium') ?>
                                                </a>
                                            </div>
                                            <div class="home-gallery-item-title">
                                                <?= $contestSession->first_name . ' ' . $contestSession->last_name . ', ' . $contestSession->user->profile->province ?>
                                            </div>
                                        </div>

                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <div class="clearfix"></div>

                    </div>
                    <div class="a-center">
                        <?php echo LinkPager::widget([
                            'pagination' => $dataProvider->pagination,
                        ]); ?>

                    </div>
                    <div class="home-galerry"></div>
                    <div class="modal fade site-gallery" id="image-gallery" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="image-gallery-title"></h4>
                                </div>
                                <div class="modal-body">
                                    <img id="image-gallery-image" class="img-responsive" src="">
                                </div>
                                <div class="modal-footer">
                                    <div class="modal-control">
                                        <button type="button" class="modal-prev" id="show-previous-image">
                                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" id="show-next-image" class="modal-next">
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>

                                        </button>
                                    </div>
                                    <div class="col-md-12 a-center" id="#image-gallery-caption">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->render('_mini-rules')?>
    </div>
</div>