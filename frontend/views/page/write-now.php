<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'Write Now';
$description = $model->description;

?>
<div class="site-signup tmpl-official-rules">
    <div class="write_now">
        <div class="container" id="content_wrapper">
            <?php if (!empty($description)): ?>
                <?= $description ?>
            <?php else: ?>
                <?php if ((Yii::$app->language == 'fr_FR')): ?>
                    <div class="contents">
                        <div class="doodle doodle_1"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_write_now_1.png"
                                alt=""></div>
                        <div class="doodle doodle_2"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_write_now_2.png"
                                alt=""></div>
                        <div class="doodle doodle_3"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_write_now_3.png"
                                alt=""></div>

                        <h3>Écrivez dès maintenant!</h3>
                        <h4 class="subtitle">Célébrez l’écriture avec des activités rigolos et créatives!</h4>
                        <div class="row no_gutter">
                            <div class="col-lg-4 col-md-4 col-lg-offset-1 col-md-offset-1">
                                <h5>CINQ TRUCS</h5>
                                <h6>conçus pour inspirer les enfants à écrire</h6>
                                <p>1. Réservez des temps spécifiques durant la semaine pour écrire des histoires, des
                                    chansons ou des farces. Encouragez vos enfants à donner libre cours à leur
                                    imagination!</p>
                                <p>2. Assurez-vous de disposer d’une variété de stylos, de crayons et de marqueurs
                                    colorés pour inspirer les jeunes à consacrer plus de temps à l'écriture.</p>
                                <p>3. Faites de l’écriture une activité spéciale pour les enfants en donnant à chacun sa
                                    propre table, son propre pupitre ou son endroit désigné. Suscitez leur enthousiasme
                                    d’avoir un espace d’écriture personnel!</p>
                                <p>4. Donnez aux enfants un travail d’écriture amusant à exécuter, comme, par exemple,
                                    la rédaction d’une liste de souhaits pour leur fête ou d’une lettre à une
                                    personnalité célèbre.</p>
                                <p>5. Inventez des jeux d’écriture. Les jeunes peuvent se pratiquer à signer leur
                                    autographe pour la donner à Maman ou à Papa.</p>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>divider_2.png"
                                    alt="" class="vertical_divider">
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="downloadable">
                                    <div class="get_list">Obtenez ici votre Liste de magasinage <em>téléchargeable</em>
                                        pour la rentrée des classes!
                                    </div>
                                    <div>
                                        <a href="<?= Yii::$app->uploadUrl->baseUrl ?>/BIC_BackToSchool_Checklist-fr.pdf"
                                           target="_blank" class="button_blue">TÉLÉCHARGER</a></div>

                                    <div class="pencil_purple"><img
                                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_purple.png"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="contents">
                        <div class="doodle doodle_1"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'doodle_write_now_1.png' ?>"
                                alt=""/></div>
                        <div class="doodle doodle_2"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'doodle_write_now_2.png' ?>"
                                alt=""/></div>
                        <div class="doodle doodle_3"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'doodle_write_now_3.png' ?>"
                                alt=""/></div>

                        <h3>Write Now!</h3>
                        <h4 class="subtitle">Celebrate Writing with Fun and Creative Activities!</h4>
                        <div class="row no_gutter">
                            <div class="col-lg-4 col-md-4 col-lg-offset-1 col-md-offset-1">
                                <h5>FIVE TIPS</h5>
                                <h6>That Will Inspire Kids to Write</h6>
                                <p>1. Set aside specific times during the week for writing stories, songs or even jokes.
                                    Let your kids use their imaginations!</p>
                                <p>2. Have an assortment of colourful pens, pencils and markers on hand that will make
                                    kids want to spend more time writing.</p>
                                <p>3. Make writing special for kids with their own personal table, desk, or designated
                                    area. Get them excited about their own writing space!</p>
                                <p>4. Give kids a fun assignment that requires them to write. Make a birthday wish list
                                    or write a letter to someone famous.</p>
                                <p>5. Make up games around writing. Practice signing their autograph to give to mom or
                                    dad.</p>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'divider_2.png' ?>"
                                    alt="" class="vertical_divider"/>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="downloadable">
                                    <div class="get_list">Get Your <em>Downloadable</em> Back to School Shopping List
                                        Here!
                                    </div>
                                    <div>
                                        <a href="<?= Yii::$app->uploadUrl->baseUrl . '/BIC_BackToSchool_Checklist-en.pdf' ?>"
                                           target="_blank" class="button_blue">DOWNLOAD</a></div>

                                    <div class="pencil_purple"><img
                                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'pencil_purple.png' ?>"
                                            alt=""/></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
