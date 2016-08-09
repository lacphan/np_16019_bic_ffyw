<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */
$description = $model->description;
if ((Yii::$app->language == 'fr_FR')):
    $this->title = 'Transcription des textes vidéo';
else:
$this->title = 'Video Text Transcript';
endif;

?>
<div class="privacy_policy">
    <div class="container" id="content_wrapper">
        <?php if (!empty($description)): ?>
            <?= $description ?>
        <?php else: ?>
            <?php if ((Yii::$app->language == 'fr_FR')): ?>
                <div class="contents">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                            <h1>Transcription des textes vidéo</h1>
                            <div class="video_container">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/GWpMlfGbj-c?rel=0&amp;controls=0&amp;showinfo=0;autoplay=0" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                            <p>Bic est en mission pour sauver l’écriture. </p>
                            <p>Pourquoi? </p>
                            <p>Écrire favorise la créativité. Pour Félix, une bonne note l’a transformé en musicien.</p>
                            <p>Écrire améliore ta capacité de réflexion – comme Kellie, qui domine ses examens.</p>
                            <p>Écrire augmente la confiance en soi. Lucie est passé de clown de classe à présidente de classe. </p>
                            <p>Découvre à quel point l’écriture peut être géniale; à quel point tu peux être génial.</p>
                            <p>Accepte ta mission Bic, et exerce ton pouvoir d’écrire ! </p>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="contents">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                            <h1>Video Text Transcript</h1>
                            <div class="video_container">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/yx6tellQ5dk?rel=0&amp;controls=0&amp;showinfo=0;autoplay=0" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                            <p>Hey, did you know that writing can make you awesome?  The act of handwriting is an essential tool for learning and growth.  That’s why BiC started a mission to save handwriting.  Let’s checkout the facts.
                            </p>
                            <p>Interesting fact number one.  Writing helps foster creativity.  Look at Brian, writing took him from a pop quick to a pop star.</p>
                            <p>Interesting fact number two.  Writing can help improve critical thinking skills.  Helping Meghan fly through finals.          </p>
                            <p>Interesting fact number three.  Writing boosts self-confidence.  For Lucy here, it took her from class clown to class president.</p>
                            <p>Interesting fact number four.  Better writers make better readers.  Writing sent Alex from easy readers to epic novels.          </p>
                            <p>With all of these facts, the importance of handwriting is clear.
                                Together let’s see how great writing can be.
                                How great you can be.</p>
                            <p> Join BiC’s mission and Fight For Your Write. </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<!-- end content-wrapper -->