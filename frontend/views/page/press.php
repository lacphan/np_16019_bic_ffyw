<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'Press';
$description = $model->description;
?>
<div class="pens press">
    <div class="container" id="content_wrapper">
        <?php if(!empty($description)): ?>
            <?= $description ?>
        <?php else: ?>
            <?php if ((Yii::$app->language == 'fr_FR')): ?>
                <div class="contents">
                    <div class="doodle doodle_1"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_press_1.png" alt="" /></div>
                    <div class="doodle doodle_2"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_press_2.png" alt="" /></div>
                    <div class="doodle doodle_3"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_press_3.png" alt="" /></div>
                    <div class="doodle doodle_4"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_press_4.png" alt="" /></div>
                    <div class="pen pencil_image"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_3.png" alt="" /></div>
                    <div class="pencils pencil_image"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_4.png" alt="" /></div>
                    <h3>La Presse</h3>
                    <h4 class="subtitle">Cliquez ci-dessous pour télécharger le communiqué de presse sur la mission Ton pouvoir d’écrire de BIC afin d’en apprendre davantage sur l’importance de l’écriture à la main!</h4>
                    <div><a href="<?= Yii::$app->uploadUrl->baseUrl?>/BIC_FFYW_News_Release_2015_fr.pdf" target="_blank"  class="button_blue">TÉLÉCHARGER</a></div>

                    <div class="row news_links">
                        <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
                            <h4>Mentions dans les médias : <span>(Cliquez pour en savoir plus)</span></h4>
                            <ul class="news_list">
                                <li><a href="http://bit.ly/1SPEWds" target="_blank"><strong>MOTEUR DE RECHERCHE - ÉDUCATION ET ÉCRITURE</strong> Canal-U TV (Québec) - juin 2015</a></li>
                                <li><a href="http://bit.ly/1HutA6H" target="_blank"><strong>Apprendre à écrire dans un monde de tablettes</strong> Radio-Canada (BC) – avril 2015</a></li>
                                <li><a href="http://bit.ly/1sfg1hx" target="_blank"><strong>À quoi ça sert si les stylos disparaissent à tout jamais?</strong> Le Devoir (Québec) - décembre  2014</a></li>
                            </ul>
                            <ul class="news_list">
                                <li><a href="http://bit.ly/1W1WLFn" target="_blank"><strong>Écriture à la main </strong> L'émission  Metro Morning de la chaîne radio 1 de Radio-Canada – 13 juillet 2015</a> (en anglais)</li>
                                <li><a href="http://bit.ly/1INA6XG" target="_blank"><strong>À la défense de l'écriture cursive</strong> Chathamthisweek.com – 28 mai 2015 </a> (en anglais)</li>
                                <li><a href="http://bit.ly/1P6Os6g" target="_blank"><strong>L’écriture cursive : Oui, elle est toujours importante!</strong> Hermagazine.ca – 26 mars 2015 </a> (en anglais)</li>
                            </ul>
                            <ul class="news_list">
                                <li><a href="http://on.thestar.com/1FMsv8X  " target="_blank"><strong>Comment les parents peuvent-ils empêcher leurs enfants de régresser dans leurs études cet été? </strong> Thestar.com –31 mai 2015</a> (en anglais)</li>
                                <li><a href="http://bit.ly/1vWa3Cz" target="_blank"><strong>L’écriture manuelle ou la dactylographie ? La plume est-elle toujours plus forte que le clavier? </strong> TheGuardian.com – 16 décembre 2014 </a> (en anglais)</li>
                                <li><a href="http://huff.to/1CHka49" target="_blank"><strong>Les avantages d’écrire avec un bon vieux stylo </strong> TheHuffingtonPost.com – 12 septembre 2014</a>  (en anglais)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="contents">
                    <div class="doodle doodle_1"><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_press_1.png"
                            alt=""/></div>
                    <div class="doodle doodle_2"><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_press_2.png"
                            alt=""/></div>
                    <div class="doodle doodle_3"><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_press_3.png"
                            alt=""/></div>
                    <div class="doodle doodle_4"><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_press_4.png"
                            alt=""/></div>
                    <div class="pen pencil_image"><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_3.png" alt=""/></div>
                    <div class="pencils pencil_image"><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_4.png" alt=""/>
                    </div>
                    <h3>Press</h3>
                    <h4 class="subtitle">Click below to download the BIC Fight For Your Write press release and learn more
                        about the importance of handwriting!</h4>
                    <div>
                        <a href="<?= Yii::$app->uploadUrl->baseUrl?>/BIC_FFYW_News_Release_2015.pdf"
                           target="_blank" class="button_blue">DOWNLOAD</a></div>

                    <div class="row news_links">
                        <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
                            <h4>In the News: <span>(Click to learn more)</span></h4>
                            <ul class="news_list">
                                <li><a href="http://bit.ly/1W1WLFn" target="_blank"><strong>Handwriting</strong> CBC Radio
                                        Metro Morning – July 13, 2015 </a></li>
                                <li><a href="http://bit.ly/1INA6XG" target="_blank"><strong>In defense of cursive
                                            handwriting</strong> Chathamthisweek.com – May 28, 2015 </a></li>
                                <li><a href="http://bit.ly/1P6Os6g" target="_blank"><strong>Cursive Writing: Yes It’s Still
                                            Important!</strong> Hermagazine.ca – March 26, 2015 </a></li>
                            </ul>
                            <ul class="news_list">
                                <li><a href="http://on.thestar.com/1FMsv8X" target="_blank"><strong>How parents can prevent
                                            kids from backsliding academically this summer</strong> Thestar.com – May 31,
                                        2015 </a></li>
                                <li><a href="http://bit.ly/1vWa3Cz" target="_blank"><strong>Handwriting vs. typing: is the
                                            pen still mightier than the keyboard?</strong> TheGuardian.com – December 16,
                                        2014 </a></li>
                                <li><a href="http://huff.to/1CHka49" target="_blank"><strong>The benefits of writing with a
                                            good old fashioned pen</strong> TheHuffingtonPost.com – September 12, 2014</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<!-- end content-wrapper -->