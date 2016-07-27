<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'Extra Fun';
$description = $model->description;

?>
<div class="site-signup tmpl-official-rules extra_fun fr">
    <div class="extra-fun-inner">

        <div class="container" id="content_wrapper">
            <?php if (!empty($description)): ?>
                <?= $description ?>
            <?php else: ?>
                <?php if ((Yii::$app->language == 'fr_FR')): ?>
                    <div class="contents">
                        <div class="doodle doodle_1"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/doodle_extra_fun_1.png'?>" alt=""></div>
                        <div class="doodle doodle_2"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/doodle_extra_fun_2.png'?>" alt=""></div>
                        <div class="banner_extra_fun"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/banner_extra_fun.png'?>" alt="Extra-Fun"></div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-lg-offset-1 col-md-offset-1">
                                <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/pencils_extra_fun_new.png'?>" alt="Extra-Fun">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <h3> Voici les NOUVEAUX crayons BIC<sup>®</sup> Extra-Fun<sup>MC</sup></h3>
                                <ul class="highlights">
                                    <li>Crayons à mine HB à barillet deux tons — qui font de l’écriture une activité rigolo !</li>
                                    <li>Mines ultra robustes résistantes aux bris</li>
                                    <li>Gommes sans latex pour un effaçage facile</li>
                                    <li>Faciles à affûter du premier coup, à tout coup</li>
                                    <li>Robustes avec mines et gommes durables</li>
                                    <li>Certifiés non toxiques par la PMA</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row feature_boxes clearfix">
                            <div class="col-lg-4 col-md-4 column">
                                <div class="feature_box box1">
                                    <div class="inner">
                                        <h4>Visionnez notre vidéo</h4>
                                        <div class="">
                                            <a data-toggle="modal" data-target="#myModal" href="javascript:void(0)"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/video_image.jpg" alt="video'?>"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 column">
                                <div class="feature_box box2">
                                    <div class="inner">
                                        <a data-toggle="modal" data-target="#myModal2" href="javascript:void(0)"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/extrafun_block.png'?>" alt="Meet the new"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 column">
                                <div class="feature_box box3">
                                    <div class="inner">
                                        <h4>Joignez-vous à la mission BIC de sauver l’écriture à la main !</h4>
                                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/logo_header.png'?>" class="logo_small">
                                        <div class="text">
                                            Cliquez ici pour voir comment vous impliquer !
                                            <a href="<?=  Yii::$app->urlManager->createUrl(['', 'locale' => 'fr'])?>"><input type="button" class="pledge_button" value="ENGAGEZ-VOUS MAINTENANT !"><span style="display:none">ENGAGEZ-VOUS MAINTENANT !</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/GWpMlfGbj-c?rel=0&amp;controls=0&amp;showinfo=0;autoplay=0" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' .'/extra_fun_popup_fr.png'?>" alt="Exta-Fun HB Pencil" style="width: 100%" />

                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>

                    <div class="contents">
                        <div class="doodle doodle_1"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/doodle_extra_fun_1.png' ?>"
                                alt=""/>
                        </div>
                        <div class="doodle doodle_2"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/doodle_extra_fun_2.png' ?>"
                                alt=""/>
                        </div>
                        <div class="banner_extra_fun"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/banner_extra_fun.png' ?>"
                                alt="Extra-Fun"/></div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-lg-offset-1 col-md-offset-1">
                                <img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/pencils_extra_fun_new.png' ?>"
                                    alt="Extra-Fun"/>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <h3>Introducing NEW BIC<sup>&reg;</sup> Extra-Fun™ Pencils</h3>
                                <ul class="highlights">
                                    <li>HB lead pencils in two-toned colour barrels— makes writing fun!</li>
                                    <li>Ultra-solid, break-resistant leads</li>
                                    <li>Easy to erase with latex-free erasers</li>
                                    <li>Sharpens First Time, Every Time™</li>
                                    <li>Durable – long-lasting leads and erasers</li>
                                    <li>PMA Certified Non-Toxic</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row feature_boxes clearfix">
                            <div class="col-lg-4 col-md-4 column">
                                <div class="feature_box box1">
                                    <div class="inner">
                                        <h4>WATCH OUR VIDEO</h4>
                                        <div class="">
                                            <a data-toggle="modal" data-target="#myModal" href="javascript:void(0)"><img
                                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/video_image.jpg' ?>"
                                                    alt="video"/></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 column">
                                <div class="feature_box box2">
                                    <div class="inner">
                                        <a data-toggle="modal" data-target="#myModal2"
                                           href="javascript:void(0)"><img
                                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/extrafun_block.png' ?>"
                                                alt="Meet the new"/></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 column">
                                <div class="feature_box box3">
                                    <div class="inner">
                                        <h4>JOIN BIC’s MISSION TO SAVE HANDWRITING!</h4>
                                        <img
                                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' . '/logo_header.png' ?>"
                                            class="logo_small"/>
                                        <div class="text">
                                            Click below to see how you can get involved!
                                            <a href="<?= Yii::$app->homeUrl ?>"><input type="button" class="pledge_button"
                                                                       value="PLEDGE NOW!"/><span
                                                    style="display:none">PLEDGE NOW!</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/GWpMlfGbj-c?rel=0&amp;controls=0&amp;showinfo=0;autoplay=0" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images' .'/extra_fun_popup.png'?>" alt="Exta-Fun HB Pencil" style="width: 100%" />

                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

</div>
