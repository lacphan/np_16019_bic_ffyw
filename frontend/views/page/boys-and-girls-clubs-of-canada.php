<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'Boys and Girls Clubs of Canada';
$description = $model->description;
?>
<div class="site-signup tmpl-official-rules">
    <div class="how_bic_is_helping">
        <div class="container" id="content_wrapper">
            <?php if (!empty($description)): ?>
                <?= $description ?>
            <?php else: ?>
                <?php if ((Yii::$app->language == 'fr_FR')): ?>
                    <div class="contents">
                        <div class="doodle doodle_1"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'doodle_bic_helping_1.png' ?>"
                                alt=""/></div>
                        <div class="doodle doodle_2"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'doodle_bic_helping_2.png' ?>"
                                alt=""/></div>
                        <div class="doodle doodle_3"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'doodle_bic_helping_3.png' ?>"
                                alt=""/></div>

                        <div class="pencil_image pencil_2"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'pencil_2.png' ?>"
                                alt="Pencil"/></div>
                        <div class="pencil_image pencil_3"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'pencil_3.png' ?>"
                                alt="Pencil"/></div>

                        <h3>Comment BIC apporte son soutien</h3>
                        <div class="logos">
                            <img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'BGCC_Logo_French.jpg' ?>"
                                alt="Repaires jeunesse du Canada"/>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                                <p>Join thousands of Canadians and
                                    support BIC's FFYW mission by participating
                                    in our weekly challenges! For every
                                    submission, BIC will donate $10 to the Boys
                                    and Girls Clubs of Canada and enter you into
                                    a grand prize draw to win
                                    $5,000 towards your child's education, in the print, "
                                    <small>(up to a maximum of $10,000)</small>
                                    "
                                </p>
                                <a href="http://www.breakfastclubcanada.org/" target="_blank"
                                   class="button_blue"><?= Yii::t(_NP_TEXT_DOMAIN, 'LEARN MORE ABOUT BOYS AND GIRLS CLUBS OF CANADA') ?></a>

                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="contents">
                        <div class="doodle doodle_1"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'doodle_bic_helping_1.png' ?>"
                                alt=""/></div>
                        <div class="doodle doodle_2"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'doodle_bic_helping_2.png' ?>"
                                alt=""/></div>
                        <div class="doodle doodle_3"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'doodle_bic_helping_3.png' ?>"
                                alt=""/></div>

                        <div class="pencil_image pencil_2"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'pencil_2.png' ?>"
                                alt="Pencil"/></div>
                        <div class="pencil_image pencil_3"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'pencil_3.png' ?>"
                                alt="Pencil"/></div>

                        <h3>How BIC is Helping</h3>
                        <div class="logos">
                            <img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'BGCC_Logo_French.png' ?>"
                                alt="Boys and Girls Club of Canada"/>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                                <p>Join thousands of Canadians and
                                    support BIC's FFYW mission by participating
                                    in our weekly challenges! For every
                                    submission, BIC will donate $10 to the Boys
                                    and Girls Clubs of Canada and enter you into
                                    a grand prize draw to win
                                    $5,000 towards your child's education, in the print, "
                                    <small>(up to a maximum of $10,000)</small>
                                    "
                                </p>
                                <a href="http://www.breakfastclubcanada.org/" target="_blank"
                                   class="button_blue"><?= Yii::t(_NP_TEXT_DOMAIN, 'LEARN MORE ABOUT BOYS AND GIRLS CLUBS OF CANADA') ?></a>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

        </div>
        <!-- end content-wrapper -->
    </div>

</div>
