<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\RegisterForm */
/* @var $contestSessions frontend\models\ContestSession[] */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha;
use frontend\models\ContestItem;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="success-content">
                <div class="title">
                    BIC'S <span>Handwriting</span> Challenge!<br>
                    Gallery
                </div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a
                    vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in
                    ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam
                    molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem.
                    Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia
                    at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a
                    orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.
                </div>
                <div class="home-gallery">
                    <div class="home-gallery-row">
                        <?php if ($contestSessions): ?>
                            <?php foreach ($contestSessions as $key => $contestSession): ?>
                                <?php if ($contestSession->attachment): ?>
                                    <div class="home-gallery-item">
                                        <div class="home-gallery-item-inner">
                                            <div class="home-gallery-item-image"
                                                 style="background: url(<?= $contestSession->attachment->getAttachmentUrl('thumbnail') ?>) center no-repeat; background-size: cover">
                                                <a class="popup-button" data-toggle="modal"
                                                   data-target="#popup-<?php echo $key ?>"></a>
                                                <?= $contestSession->attachment->getAttachmentImage('medium') ?>
                                            </div>
                                            <div class="home-gallery-item-title">
                                                <?= $contestSession->first_name . ',' . $contestSession->last_name ?>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="popup-<?php echo $key ?>" tabindex="-1" role="dialog"
                                             aria-labelledby="myModalLabel">
                                            <div class="my-modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <button class="close" data-dismiss="modal">X</button>
                                                    <?= $contestSession->attachment->getAttachmentImage('large') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-text-block">
            <div class="show-on-desktop">
                <b>NO PURCHASE NECESSARY TO ENTER OR WIN.</b> Void where prohibited. The
                Contest is strictly open to individuals who are legal residents of Canada, who are over the age of
                majority in their province or territory of residence and a parent and/or legal guardian of a child
                between the age of 6 and 18 at the time of entry (“Eligible Child”). The Eligible Child cannot by any
                means enter The Contest. The Contest will begin 8/02/16 at 12:00:01 PM Eastern Time (“ET”) and ends
                9/12/16 at 11:59:59 PM ET ("Contest Submission Period").  Winners must correctly answer a mathematical
                skill testing question to win a prize. Contest Winners will be determined solely by random draw. Odds of
                winning a random drawing depends upon the number of eligible entries received. One (1) Contest
                Submission per person, per week for each Eligible Child (up to a maximum of four (4) Eligible Children
                per person) during the entire Contest Submission Period. Weekly winners are selected at end of
                respective weekly period. Grand prize winner to be selected upon full completion of the Contest. You may
                only use one (1) email address to participate in this Contest. See Official Rules for details. Sponsor:
                BIC Inc.
            </div>
            <div class="show-on-mobile">
                 No Purch Nec., CAD only, Age of Majority in Prov./Territ. Of Res. Ends 09/12/2016. <a href="#">Click
                    Here for Official Rules.</a>
            </div>

        </div>
    </div>
</div>