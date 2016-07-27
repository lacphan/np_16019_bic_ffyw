<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'The Mission';
?>
<?php if ((Yii::$app->language == 'fr_FR')): ?>
    <section id="mission" class="container mission-bk relative">
	<span id="bkWheel" class="absolute">
		<img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'bkWheel_03.png' ?>"/>
	</span>
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <h1 class="uppercase center">LA MISSION</h1>
                <h2 class="center">Pourquoi lutter pour Ton pouvoir d’écrire avec BIC?</h2>
                <p class="col-xs-12 center sans-semi top">Joignez-vous à
                    <span class="sans-bold">BIC</span> pour faire avancer notre mission de sauver l’écriture à la main et promouvoir
                    <span class="sans-bold">Ton pouvoir d’écrire</span>. L’écriture est un important mécanisme de communication qui nous distingue et qui favorise l'individualité. Saviez-vous que l’écriture constitue un outil d’apprentissage crucial pour les enfants? L’écriture aide les jeunes à devenir de meilleurs lecteurs; elle accroît leur confiance en eux-mêmes et elle stimule leur créativité. Ensemble, nous voulons montrer aux enfants la joie d'écrire... et de découvrir leurs propres immenses talents!</p>

                <span class=""></span>

                <div id="mission-vid-wrap" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
                    <img
                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-VidPlaceholder_11.png' ?>"
                        class="vidLink" data-vidname="Bic_PSA_Broadcast_-_FINAL"/>

                    <span class="hidden-xs visible-md-block visible-lg-block flyout"><h3 class="kg-fall-bd yellow-text">Visionnez
                        <span class="blk-text">notre</span> vidéo!
                    </h3><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-arrows_14.png' ?>"/></span>
                </div>

                <div id="mission-accordion-wrap" class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                    <div class="panel-group" id="mission-accordion">
                        <div class="panel panel-default">
                            <a href="#list-itembody-1" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_03.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd"> Améliore le développement cognitif</span></a>
                            <div class="col-xs-12 panel-collapse collapse in" id="list-itembody-1">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">Les experts recommandent au moins 15 minutes d’instruction en écriture à la main par jour pour les étudiants. Les recherches ont démontré que des compétences améliorées en écriture présentent des avantages pour le développement cognitif et les capacités motrices et qu’elles favorisent l'amélioration des compétences en rédaction et de la compréhension.</p>
                                    <!--<a href="https://www.zaner-bloser.com/media/zb/zaner-bloser/pdf/hw_hanover.pdf" target="_blank" class="sans-bold learn-more" style="text-decoration:underline">Learn More</a></div>-->
                                    <small>
                                        <span class="turq-text">Source :</span> Hanover Research (2012). « The Importance of Teaching Handwriting in the 21st Century ». Washington, DC: Hanover Research
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a href="#list-itembody-2" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_06.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Favorise la confiance en soi</span></a>
                            <div class="btm col-xs-12 panel-collapse collapse" id="list-itembody-2">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">"Les études démontrent que les enfants qui font de l'écriture fréquemment, tant à l’école que chez eux, se sentent plus confiants dans leurs aptitudes d'écriture. Cette confiance se traduit par de meilleurs résultats dans toutes les matières scolaires et par le succès dans des activités non scolaires aussi." – Pam Allyn, « Your Child’s Writing Life » et « Prepare My Child for School: Early Childhood Education », ministère de l'Éducation des États-Unis</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a href="#list-itembody-3" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_08.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Améliore les résultats scolaires</span></a>
                            <div class="btm panel-collapse collapse col-xs-12" id="list-itembody-3">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">Les compétences en écriture à la main jettent des bases solides pour le succès scolaire. Les recherches démontrent que l’écriture à la main est une compétence fondamentale pouvant influencer les aptitudes en lecture, en écriture et en langues ainsi que la pensée critique.</p>
                                    <a href="https://www.hw21summit.com/media/zb/hw21/H2948_HW_Summit_White_Paper_eVersion.pdf"
                                       target="_blank" class="sans-bold learn-more" style="text-decoration:underline">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a href="#list-itembody-4" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_10.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Renforce les compétences en lecture</span></a>
                            <div class="btm panel-collapse collapse col-xs-12" id="list-itembody-4">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">Les recherches ont démontré qu’il existe une corrélation positive entre des compétences améliorées en écriture à la main et un rendement scolaire amélioré à l’égard de la lecture et de l’écriture. Lorsque les élèves passent moins de temps à se concentrer pour maîtriser la forme des lettres, ils ont plus de temps pour la planification et l’organisation des idées, évidemment essentielles pour une rédaction efficace."</p>
                                    <a href="https://www.hw21summit.com/media/zb/hw21/H2948_HW_Summit_White_Paper_eVersion.pdf"
                                       target="_blank" class="sans-bold learn-more" style="text-decoration:underline">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a href="#list-itembody-5" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_12.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Stimule la créativité</span></a>
                            <div class="btm panel-collapse collapse col-xs-12" id="list-itembody-5">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">Selon un expert dans la psychologie pédagogique à l’université de Washington, l’instruction en écriture à la main favorise le développement cognitif ainsi que la motricité. À titre d’exemple, voici quelques tâches motrices et cognitives associées à l’écriture à la main : idéation, la production de textes, la ponctuation, la planification, l'orthographe, la grammaire.
                                    </p>
                                    <small>
                                        <span class="turq-text">Source:</span> Hanover Research (2012), « The Importance of Teaching Handwriting in the 21st Century ». Washington, DC: Hanover Research
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a href="#list-itembody-6" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_14.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Affine les aptitudes de pensée critique</span></a>
                            <div class="btm panel-collapse collapse col-xs-12" id="list-itembody-6">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">IEn termes de développement cognitif des élèves, les recherches fondées sur des données probantes ont démontré que les compétences en écriture à la main peuvent influer sur la maîtrise des aptitudes comme la lecture, l’écriture, les langues et la pensée critique.</p>
                                    <a href="https://www.hw21summit.com/media/zb/hw21/H2948_HW_Summit_White_Paper_eVersion.pdf"
                                       target="_blank" class="sans-bold learn-more" style="text-decoration:underline">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="hidden-xs visible-md-block visible-lg-block flyout"><h3 class="center yellow-text">Comment l’écriture <br>à la main peut<br>
                        <span class="blk-text">VOUS</span> rendre GÉNIAL!
                    </h3><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-arrows_23.png' ?>"/></span>

                </div>

                <div id="mission-gauges" class="col-xs-12 show-grid">
                <span class="flyout hidden-xs visible-md-inline visible-lg-inline"><img
                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-arrow-grn_03.png' ?>"/></span>
                    <h2 class="kg-fall-bd center relative turq-text">PRENEZ CONNAISSANCE DES FAITS:
                        <span class="absolute" style="bottom: -14px;width: 100%;left: 0;">
						<img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'experts_06.png' ?>"/>
					</span>
                    </h2>
                    <div id="gauges" class="clearfix">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                            <div class="gauge_box g1">
                                <div class="gauge">
                                    <div class="outer_static"></div>
                                    <div class="fill_cont">
                                        <div class="fill">
                                            <div class="fill_mask"></div>
                                            <div class="fill_sq sq1"></div>
                                            <div class="fill_sq sq2"></div>
                                            <div class="fill_sq sq3"></div>
                                            <div class="fill_sq sq4"></div>
                                        </div>
                                    </div>
                                    <div class="inner_static"></div>
                                </div>
                                <p class="sans-bold">had college-level courses that prepared them to teach handwriting</p>
                            </div>
                        </div>
                        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                            <div class="gauge_box g2">
                                <div class="gauge">
                                    <div class="outer_static"></div>
                                    <div class="fill_cont">
                                        <div class="fill">
                                            <div class="fill_mask"></div>
                                            <div class="fill_sq sq1"></div>
                                            <div class="fill_sq sq2"></div>
                                            <div class="fill_sq sq3"></div>
                                            <div class="fill_sq sq4"></div>
                                        </div>
                                    </div>
                                    <div class="inner_static"></div>
                                </div>
                                <p class="sans-bold">grades 4-12 were writing below grade level on a national writing
                                    exam</p>
                            </div>
                        </div>
                        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                            <div class="gauge_box g3">
                                <div class="gauge">
                                    <div class="outer_static"></div>
                                    <div class="fill_cont">
                                        <div class="fill">
                                            <div class="fill_mask"></div>
                                            <div class="fill_sq sq1"></div>
                                            <div class="fill_sq sq2"></div>
                                            <div class="fill_sq sq3"></div>
                                            <div class="fill_sq sq4"></div>
                                        </div>
                                    </div>
                                    <div class="inner_static"></div>
                                </div>
                                <p class="sans-bold">were unprepared to write at a college level</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <small class="center full-width"><span class="turq-text">Source:</span>
                            <a target="_blank"
                               href="http://lib.dr.iastate.edu/cgi/viewcontent.cgi?article=2432&context=etd">http://lib.dr.iastate.edu/cgi/viewcontent.cgi?article=2432&context=etd</a>
                        </small>
                    </div>
                </div>

                <div id="mission-facts" class="col-xs-12 show-grid relative">
                    <div id="factFrame" class="hidden-xs visible-md-block visible-lg-block full-width">
                        <img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-fact-frame_03.png' ?>"/>
                    </div>
                    <span class="flyout hidden-xs visible-md-inline visible-lg-inline"><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-arrow-grn_03.png' ?>"/></span>

                    <div class="mission-fact show-grid col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 show-grid">
                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-fact_22.png' ?>"
                             class="blockCenter"/>
                        <!--<a href="https://www.zaner-bloser.com/media/zb/zaner-bloser/pdf/hw_hanover.pdf" class="btn btn-primary col-xs-5 col-sm-6" target="_blank">LEARN MORE</a>-->
                    </div>
                    <div class="mission-fact show-grid col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 show-grid">
                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-fact_24.png' ?>"
                             class="blockCenter"/>
                        <!--    <a href="https://www.zaner-bloser.com/media/zb/zaner-bloser/pdf/hw_hanover.pdf" class="btn btn-primary col-xs-5 col-sm-6" target="_blank">LEARN MORE</a>-->
                    </div>
                    <div>
                        <small class="center col-xs-12" style="margin-top: 10px;" ;>
                            <span class="turq-text">Source:</span> Hanover Research (2012). The Importance of Teaching
                            Handwriting in the 21st Century. Washington, DC: Hanover Research
                        </small>
                    </div>
                </div>

                <div id="mission-abilities" class="col-xs-12 show-grid">

                    <div id="ability-list" class="col-xs-12">
                        <div class="show-grid relative">
                            <h3 class="sans-bold">Handwriting engages 14 different abilities<span class="absolute"
                                                                                                  style="bottom: -14px;width: 100%;left: 0;"><img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'experts_06.png' ?>"
                                        class=""/></span>
                            </h3>
                            <span class="flyout hidden-xs visible-md-inline visible-lg-inline"><img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-arrow-grn_03.png' ?>"/></span>
                        </div>

                        <div>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">1)</span> Visual Focusing</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">2)</span> Mental Attention</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">3)</span> Organized Physical Movements</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">4)</span> Receptive Language</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">5)</span> Inner Expressive Language</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">6)</span> Memory Recall</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">7)</span> Concentration with Awareness</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">8)</span> Spatial Perception</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">9)</span> Organization</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">10)</span> Integration</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">11)</span> Eye-Hand Coordination</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">12)</span> Motor Planning</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">13)</span> Tactile Input</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">14)</span> Crossing Midline</p>
                        </div>

                        <span id="rightPen" class="absolute hidden-xs visible-md-block visible-lg-block">
			            <img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-ability-pens_03.png' ?>"/>
		            </span>
                        <span id="leftPen" class="absolute hidden-xs visible-md-block visible-lg-block">
			            <img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-ability-pens_06.png' ?>"/>
		            </span>

                    </div>
                    <div class="col-xs-12">
                        <small class="center full-width"><span class="turq-text">Source:</span>
                            <a target="_blank"
                               href="https://www.brainworks.info/2015/08/adhd-and-handwriting-is-there-a-connection/"
                               target="_blank" onclick="_troq.push(
		            ['_rtgclickaction', 'mission_brainworks'],
		            ['_rtgclickcat', 'external'],
		            ['_rtgconversion', '1'],
		            ['_rtgconversionlevel', '3'],
		            ['_rtgconversiontype', 'link']
		            );">https://www.brainworks.info/2015/08/adhd-and-handwriting-is-there-a-connection/</a></small>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-3">
                <a href="<?= Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'boy-and-girl-of-canada','locale' => Yii::$app->request->get('locale')])?>">
                    <div id="howBic" class="col-xs-6 col-xs-offset-3 col-sm-12 col-sm-offset-0 sidebarBox">
                        <h4 class="center yellow-text kg-fall-bd col-xs-12">How BIC Is Helping</h4>
                        <img class="blockCenter"
                             src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'BGCC_Logo_French.jpg' ?>"/>
                    </div>
                </a>
            </div>

        </div>
    </section>
<?php else: ?>
    <section id="mission" class="container mission-bk relative">
	<span id="bkWheel" class="absolute">
		<img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'bkWheel_03.png' ?>"/>
	</span>
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <h1 class="uppercase center">The Mission</h1>
                <h2 class="center">Why Fight For Your Write with BIC?</h2>
                <p class="col-xs-12 center sans-semi top">Join
                    <span class="sans-bold">BIC</span> on our mission to celebrate handwriting and
                    <span class="sans-bold">Fight For Your Write</span>. Writing is an
                    important vehicle for communication because it distinguishes us and promotes individuality.
                    Did you know that writing is also a critical learning tool for children? Writing helps kids become
                    better readers, boosts their confidence and sparks their creativity. Together we want to
                    show children just how great writing can be... and how great they can be!</p>

                <span class=""></span>

                <div id="mission-vid-wrap" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/yx6tellQ5dk?rel=0&amp;controls=0&amp;showinfo=0;autoplay=0" frameborder="0" allowfullscreen></iframe>

                    <span class="hidden-xs visible-md-block visible-lg-block flyout"><h3 class="kg-fall-bd yellow-text">Watch
                        <span class="blk-text">Our</span> Video!
                    </h3><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-arrows_14.png' ?>"/></span>
                </div>

                <div id="mission-accordion-wrap" class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                    <div class="panel-group" id="mission-accordion">
                        <div class="panel panel-default">
                            <a href="#list-itembody-1" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_03.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Improves Cognitive Development</span></a>
                            <div class="col-xs-12 panel-collapse collapse in" id="list-itembody-1">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">Experts recommend at least 15 minutes of handwriting instruction
                                        each day for students. Research has shown that improved handwriting skills have
                                        benefits for cognitive development, motor skills and can lead to improved writing
                                        skills and comprehension.</p>
                                    <!--<a href="https://www.zaner-bloser.com/media/zb/zaner-bloser/pdf/hw_hanover.pdf" target="_blank" class="sans-bold learn-more" style="text-decoration:underline">Learn More</a></div>-->
                                    <small>
                                        <span class="turq-text">Source:</span> Hanover Research (2012). The Importance of
                                        Teaching Handwriting in the 21st Century. Washington, DC: Hanover Research
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a href="#list-itembody-2" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_06.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Builds Self-Confidence</span></a>
                            <div class="btm col-xs-12 panel-collapse collapse" id="list-itembody-2">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">"Studies show that children who write frequently, both at school
                                        and at home, feel more confident in their writing abilities. This confidence
                                        translates into success in all academic subjects and in nonacademic environments as
                                        well." – Pam Allyn, Your Child’s Writing Life and "Prepare My Child for School:
                                        Early Childhood Education," U.S. Department of Education.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a href="#list-itembody-3" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_08.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Betters School Performance</span></a>
                            <div class="btm panel-collapse collapse col-xs-12" id="list-itembody-3">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">Handwriting builds a solid foundation for school success. Research
                                        shows that handwriting is a foundational skill that can influence student’s reading,
                                        writing, language use, and critical thinking.</p>
                                    <a href="https://www.hw21summit.com/media/zb/hw21/H2948_HW_Summit_White_Paper_eVersion.pdf"
                                       target="_blank" class="sans-bold learn-more" style="text-decoration:underline">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a href="#list-itembody-4" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_10.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Helps Reading Skills</span></a>
                            <div class="btm panel-collapse collapse col-xs-12" id="list-itembody-4">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">Research has proven that there is a positive correlation between
                                        better handwriting skills and increased academic performance in reading and writing.
                                        When students spend less time concentrating on the basics of letter formation,
                                        "students can better focus on the planning and thought organization that is required
                                        for effective composition."</p>
                                    <a href="https://www.hw21summit.com/media/zb/hw21/H2948_HW_Summit_White_Paper_eVersion.pdf"
                                       target="_blank" class="sans-bold learn-more" style="text-decoration:underline">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a href="#list-itembody-5" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_12.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Sparks Creativity</span></a>
                            <div class="btm panel-collapse collapse col-xs-12" id="list-itembody-5">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">According to an expert in educational psychology from the
                                        University of Washington, handwriting instruction benefits students' cognitive
                                        development as well as motor functioning. For example, some of the motor and
                                        cognitive tasks associated with handwriting are the following: ideation, text
                                        production, punctuation, planning, spelling, grammar.</p>
                                    <!--<a href="https://www.zaner-bloser.com/media/zb/zaner-bloser/pdf/hw_hanover.pdf" target="_blank" class="sans-bold learn-more" style="text-decoration:underline">Learn More</a></div>-->
                                    <small>
                                        <span class="turq-text">Source:</span> Hanover Research (2012). The Importance of
                                        Teaching Handwriting in the 21st Century. Washington, DC: Hanover Research
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a href="#list-itembody-6" class="top col-xs-12" data-parent="#mission-accordion"
                               data-toggle="collapse"><i class="fa fa-2x fa-caret-right col-xs-1 center"></i>
                                <div class="col-xs-1">
                                    <img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-icon_14.png' ?>"/>
                                </div>
                                <span class="col-xs-10 kg-fall-bd">Sharpens Critical Thinking Skills</span></a>
                            <div class="btm panel-collapse collapse col-xs-12" id="list-itembody-6">
                                <div class="well-sm panel-body center">
                                    <p class="sans-semi">In terms of students’ cognitive development, evidence-based
                                        research has shown that handwriting skills can influence reading, writing, language
                                        and critical thinking.</p>
                                    <a href="https://www.hw21summit.com/media/zb/hw21/H2948_HW_Summit_White_Paper_eVersion.pdf"
                                       target="_blank" class="sans-bold learn-more" style="text-decoration:underline">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span class="hidden-xs visible-md-block visible-lg-block flyout"><h3 class="center yellow-text">How Handwriting<br> Can Make<br>
                        <span class="blk-text">YOU</span> Awesome!
                    </h3><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-arrows_23.png' ?>"/></span>

                </div>

                <div id="mission-gauges" class="col-xs-12 show-grid">
                <span class="flyout hidden-xs visible-md-inline visible-lg-inline"><img
                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-arrow-grn_03.png' ?>"/></span>
                    <h2 class="kg-fall-bd center relative turq-text">Know The Facts:
                        <span class="absolute" style="bottom: -14px;width: 100%;left: 0;">
						<img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'experts_06.png' ?>"/>
					</span>
                    </h2>
                    <div id="gauges" class="clearfix">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                            <div class="gauge_box g1">
                                <div class="gauge">
                                    <div class="outer_static"></div>
                                    <div class="fill_cont">
                                        <div class="fill">
                                            <div class="fill_mask"></div>
                                            <div class="fill_sq sq1"></div>
                                            <div class="fill_sq sq2"></div>
                                            <div class="fill_sq sq3"></div>
                                            <div class="fill_sq sq4"></div>
                                        </div>
                                    </div>
                                    <div class="inner_static"></div>
                                </div>
                                <p class="sans-bold">had college-level courses that prepared them to teach handwriting</p>
                            </div>
                        </div>
                        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                            <div class="gauge_box g2">
                                <div class="gauge">
                                    <div class="outer_static"></div>
                                    <div class="fill_cont">
                                        <div class="fill">
                                            <div class="fill_mask"></div>
                                            <div class="fill_sq sq1"></div>
                                            <div class="fill_sq sq2"></div>
                                            <div class="fill_sq sq3"></div>
                                            <div class="fill_sq sq4"></div>
                                        </div>
                                    </div>
                                    <div class="inner_static"></div>
                                </div>
                                <p class="sans-bold">grades 4-12 were writing below grade level on a national writing
                                    exam</p>
                            </div>
                        </div>
                        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                            <div class="gauge_box g3">
                                <div class="gauge">
                                    <div class="outer_static"></div>
                                    <div class="fill_cont">
                                        <div class="fill">
                                            <div class="fill_mask"></div>
                                            <div class="fill_sq sq1"></div>
                                            <div class="fill_sq sq2"></div>
                                            <div class="fill_sq sq3"></div>
                                            <div class="fill_sq sq4"></div>
                                        </div>
                                    </div>
                                    <div class="inner_static"></div>
                                </div>
                                <p class="sans-bold">were unprepared to write at a college level</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <small class="center full-width"><span class="turq-text">Source:</span>
                            <a target="_blank"
                               href="http://lib.dr.iastate.edu/cgi/viewcontent.cgi?article=2432&context=etd">http://lib.dr.iastate.edu/cgi/viewcontent.cgi?article=2432&context=etd</a>
                        </small>
                    </div>
                </div>

                <div id="mission-facts" class="col-xs-12 show-grid relative">
                    <div id="factFrame" class="hidden-xs visible-md-block visible-lg-block full-width">
                        <img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-fact-frame_03.png' ?>"/>
                    </div>
                    <span class="flyout hidden-xs visible-md-inline visible-lg-inline"><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-arrow-grn_03.png' ?>"/></span>

                    <div class="mission-fact show-grid col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 show-grid">
                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-fact_22.png' ?>"
                             class="blockCenter"/>
                        <!--<a href="https://www.zaner-bloser.com/media/zb/zaner-bloser/pdf/hw_hanover.pdf" class="btn btn-primary col-xs-5 col-sm-6" target="_blank">LEARN MORE</a>-->
                    </div>
                    <div class="mission-fact show-grid col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 show-grid">
                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-fact_24.png' ?>"
                             class="blockCenter"/>
                        <!--    <a href="https://www.zaner-bloser.com/media/zb/zaner-bloser/pdf/hw_hanover.pdf" class="btn btn-primary col-xs-5 col-sm-6" target="_blank">LEARN MORE</a>-->
                    </div>
                    <div>
                        <small class="center col-xs-12" style="margin-top: 10px;" ;>
                            <span class="turq-text">Source:</span> Hanover Research (2012). The Importance of Teaching
                            Handwriting in the 21st Century. Washington, DC: Hanover Research
                        </small>
                    </div>
                </div>

                <div id="mission-abilities" class="col-xs-12 show-grid">

                    <div id="ability-list" class="col-xs-12">
                        <div class="show-grid relative">
                            <h3 class="sans-bold">Handwriting engages 14 different abilities<span class="absolute"
                                                                                                  style="bottom: -14px;width: 100%;left: 0;"><img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'experts_06.png' ?>"
                                        class=""/></span>
                            </h3>
                            <span class="flyout hidden-xs visible-md-inline visible-lg-inline"><img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-arrow-grn_03.png' ?>"/></span>
                        </div>

                        <div>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">1)</span> Visual Focusing</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">2)</span> Mental Attention</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">3)</span> Organized Physical Movements</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">4)</span> Receptive Language</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">5)</span> Inner Expressive Language</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">6)</span> Memory Recall</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">7)</span> Concentration with Awareness</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">8)</span> Spatial Perception</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">9)</span> Organization</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">10)</span> Integration</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">11)</span> Eye-Hand Coordination</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">12)</span> Motor Planning</p>
                            <p class="center kg-fall-bd">
                                <mark><span class="abilityNum">13)</span> Tactile Input</mark>
                            </p>
                            <p class="center kg-fall-bd"><span class="abilityNum">14)</span> Crossing Midline</p>
                        </div>

                        <span id="rightPen" class="absolute hidden-xs visible-md-block visible-lg-block">
			            <img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-ability-pens_03.png' ?>"/>
		            </span>
                        <span id="leftPen" class="absolute hidden-xs visible-md-block visible-lg-block">
			            <img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'mission-ability-pens_06.png' ?>"/>
		            </span>

                    </div>
                    <div class="col-xs-12">
                        <small class="center full-width"><span class="turq-text">Source:</span>
                            <a target="_blank"
                               href="https://www.brainworks.info/2015/08/adhd-and-handwriting-is-there-a-connection/"
                               target="_blank" onclick="_troq.push(
		            ['_rtgclickaction', 'mission_brainworks'],
		            ['_rtgclickcat', 'external'],
		            ['_rtgconversion', '1'],
		            ['_rtgconversionlevel', '3'],
		            ['_rtgconversiontype', 'link']
		            );">https://www.brainworks.info/2015/08/adhd-and-handwriting-is-there-a-connection/</a></small>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-3">
                <a href="<?= Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'boy-and-girl-of-canada','locale' => Yii::$app->request->get('locale')])?>">
                    <div id="howBic" class="col-xs-6 col-xs-offset-3 col-sm-12 col-sm-offset-0 sidebarBox">
                        <h4 class="center yellow-text kg-fall-bd col-xs-12">How BIC Is Helping</h4>
                        <img class="blockCenter"
                             src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' . 'BGCC_Logo.png' ?>"/>
                    </div>
                </a>
            </div>

        </div>
    </section>
<?php endif; ?>
