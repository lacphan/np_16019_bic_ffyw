<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'Pens';
?>
<div class="pens">
    <div class="container" id="content_wrapper">
        <div class="product_type_page">
            <?php if ((Yii::$app->language == 'fr_FR')): ?>
                <div class="contents">
                    <div class="doodle doodle_product_types_3"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_products_3.png"
                                                                    alt=""/>
                    </div>
                    <div class="doodle doodle_product_types_1"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_products_1.png"
                                                                    alt=""/>
                    </div>
                    <div class="doodle doodle_product_types_2"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_products_2.png"
                                                                    alt=""/>
                    </div>
                    <div class="row">
                        <div class="page_title"><span class="title_text">Stylos BIC</span>
                            <div class="rollover">Faites glisser le curseur sur un produit<br>pour en apprendre
                                davantage!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="double_tile">
                            <div class="tile tile_narrow tile_narrow_first"><img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_xtra_smooth.png"
                                    alt="BIC<sup>&reg;</sup> Cristal<sup>&reg;</sup> Extra-doux Stylo-billen"/>
                                <div class="title title_two_lines">BIC<sup>&reg;</sup> Cristal<sup>&reg;</sup>
                                    Extra-douce
                                    Stylo-bille <span>(Bleu, rouge et noir)</span>
                                    <div class="description">La technologie exclusive de BIC en matière d’encre
                                        Easy-Glide
                                        System<sup>&reg;</sup>, une encre jusqu’à 35 % plus douce que celle des stylos à
                                        bille BIC<sup>&reg;</sup> traditionnels. Faites l'expérience de la
                                        douceur<sup>MC</sup> !
                                    </div>
                                </div>
                            </div>
                            <div class="tile tile_narrow"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_xtra_life.png"
                                                               alt="Round Stic<sup>&reg;</sup> Extra-valeur Stylo-bille"/>
                                <div class="title title_two_lines">Round Stic<sup>&reg;</sup> Extra-valeur Stylo-bille
                                    <span>(Noir, bleu et rouge)</span>
                                    <div class="description">Écriture douce et stylos à bille BIC<sup>&reg;</sup> au
                                        meilleur prix*<br/>
                                        La technologie exclusive de BIC en matière d’encre Easy-Glide
                                        System<sup>&reg;</sup>,
                                        une encre jusqu’à 35 % plus douce que celle des stylos à bille
                                        BIC<sup>&reg;</sup>
                                        traditionnels. Faites l'expérience de la douceur<sup>MC</sup> !<br/>
                                        *Les stylos BIC<sup>&reg;</sup> Round Stic<sup>&reg;</sup> ont le plus bas prix
                                        moyen au détail par unité par rapport aux autres
                                        stylos à bille BIC<sup>&reg;</sup>. Les prix peuvent varier et dépendent de la
                                        taille du paquet. Les détaillants sont libres de fixer leurs propres prix.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="double_tile">
                            <div class="tile tile_narrow tile_narrow_first"><img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_xtra_bold.png"
                                    alt=" Cristal<sup>&reg;</sup> Extra-large Stylo-bille"/>
                                <div class="title title_two_lines"> Cristal<sup>&reg;</sup> Extra-large Stylo-bille
                                    <span>(Mode)</span>
                                    <div class="description">Écriture vive et colorée<br/>
                                        Assure une charge d'encre de couleur vive<br/>
                                        Pointe large de 1,6 mm
                                    </div>
                                </div>
                            </div>
                            <div class="tile tile_narrow"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_xtra_comfort.png"
                                                               alt="Round Stic Grip<sup>MC</sup> Extra-confort Stylo-bille"/>
                                <div class="title title_two_lines small_font">Round Stic Grip<sup>MC</sup> Extra-confort
                                    Stylo-bille <span>(Noir et bleu)</span>
                                    <div class="description">Prise en main douce et grand confort
                                        La technologie exclusive de BIC en matière d’encre Easy-Glide
                                        System<sup>&reg;</sup>,
                                        une encre jusqu’à 50 % plus douce que celle des stylos à bille
                                        BIC<sup>&reg;</sup>
                                        traditionnels. Faites l'expérience de la douceur<sup>MC</sup> !
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="double_tile">
                            <div class="tile tile_narrow tile_narrow_first"><img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_clic_stic.png"
                                    alt="Clic Stic<sup>&reg;</sup> Stylo-bille"/>
                                <div class="title title_two_lines">Clic Stic<sup>&reg;</sup> Stylo-bille <span>(Bleu, rouge et noir)</span>
                                    <div class="description">Agrafe de poche résistante aux bris<br/>
                                        Barillet rond, confortable
                                    </div>
                                </div>
                            </div>
                            <div class="tile tile_narrow"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_soft_feel.png"
                                                               alt="Soft Feel<sup>&reg;</sup> Stylo-bille"
                                                               class="pen_soft_feel"/>
                                <div class="title title_two_lines">Soft Feel<sup>&reg;</sup> Stylo-bille
                                    <span>(Bleu)</span>
                                    <div class="description">Barillet et prise doux exclusifs
                                        Stylo à bille rétractable
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tile tile_wide"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_atlantis.png"
                                                         alt="Stylos à bille BIC Atlantis<sup>&reg;</sup> Stic, BIC Atlantis<sup>&reg;</sup> Original, BIC Atlantis<sup>&reg;</sup> Comfort et BIC Atlantis<sup>&reg;</sup> Exact"/>
                            <div class="title title_two_lines">Stylos à bille BIC<sup>&reg;</sup>
                                Atlantis<sup>&reg;</sup>
                                Stic, BIC<sup>&reg;</sup> Atlantis<sup>&reg;</sup> Original, BIC<sup>&reg;</sup>
                                Atlantis<sup>&reg;</sup> Confort et BIC<sup>&reg;</sup> Atlantis<sup>&reg;</sup> Exact
                                <div class="description">Douceur, confort et précision offerts dans une diversité de
                                    couleurs fantaististes et de styles de barrilet<br/>
                                    Plus doux que les stylos à bille munis du système d’encre traditionnel
                                    BIC<sup>&reg;</sup><br/>
                                    Stylos à bille avec barillet mince et chic
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tile tile_wide"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_4_color.png"
                                                         alt=" 4™/<sup>MC</sup> Color Stylos à bille Classic, Mode, Classic Mini, Mode Mini et Métallique"/>
                            <div class="title "
                            "> 4<sup>TM/MC</sup> Color Stylos à bille Classic, Mode, Classic Mini, Mode Mini et
                            Métallique
                            <div class="description">4 couleurs d’encre classiques ou fantaisistes en un seul stylo<br/>
                                Expression amusante et colorée
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="double_tile">
                            <div class="tile tile_narrow tile_narrow_first"><img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_gel.png"
                                    alt="Velocity<sup>&reg;</sup> Gel "/>
                                <div class="title title_two_lines">Velocity<sup>&reg;</sup>
                                    Gel<span>(Noir et assorties)</span>
                                    <div class="description">Écriture en douceur<br/>
                                        Stylo gel rétractable
                                    </div>
                                </div>
                            </div>
                            <div class="tile tile_narrow"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_velocity.png"
                                                               alt=" Velocity<sup>&reg;</sup> Bold Stylo-bille"/>
                                <div class="title title_two_lines"> Velocity<sup>&reg;</sup> Bold Stylo-bille <span>(Noir et bleu)</span>
                                    <div class="description">Tracés vifs et forts<br/>
                                        Expérience d’écriture en douceur grâce à une pointe large de 1,6 mm et à la
                                        technologie
                                        d’encre Easy-Glide System<sup>&reg;</sup></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="double_tile">
                            <div class="tile tile_narrow tile_narrow_first"><img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_kids.png"
                                    alt="BIC Kids<sup>MC</sup> Stylo-bille et stylet"
                                    class="pen_kids"/>
                                <div class="title title_two_lines">BIC Kids<sup>MC</sup> Stylo-bille et
                                    stylet<span>(Bleu)</span>
                                    <div class="description">Conception créée en consultation avec les professeurs et
                                        les
                                        enfants<br/>
                                        Ligne directrice jaune exclusive pour orienter la position des doigts
                                    </div>
                                </div>
                            </div>
                            <div class="tile tile_narrow"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_stylus.png"
                                                               alt="BIC<sup>&reg;</sup> TECH<sup>MC</sup> 2'n 1 Stylo-bille et stylet"/>
                                <div class="title title_two_lines ">BIC<sup>&reg;</sup> TECH<sup>MC</sup> 2'n 1 stylo et
                                    stylet
                                    <span>(Noir)</span>
                                    <div class="description">Stylet de poids léger pour appareils à écran tactile
                                        capacitif,
                                        y
                                        compris tablettes et téléphones intelligents<br/>
                                        Stylo à bille rétractable muni du Easy-Glide System<sup>&reg;</sup>, la
                                        technologie
                                        d’encre exclusive de BIC pour une écriture en douceur
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="double_tile">
                            <div class="tile tile_narrow tile_narrow_first"><img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_z4.png"
                                    alt="Z4<sup>&reg;</sup> Roller "/>
                                <div class="title title_two_lines">Z4<sup>&reg;</sup> Roller
                                    <span>(Noir et assorties)</span>
                                    <div class="description">Écriture en douceur<br/>
                                        Prise en caoutchouc
                                    </div>
                                </div>
                            </div>
                            <div class="tile tile_narrow"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_her.png"
                                                               alt="BIC for Her<sup>MC</sup> et BIC for Her<sup>MC</sup> Gel<sup>MC</sup>"
                                                               class="pen_kids"/>
                                <div class="title">BIC for Her<sup>MC</sup> et BIC for Her<sup>MC</sup> Gel<sup>MC</sup>
                                    <div class="description">Douceur superbe<br/>
                                        Un accessoire chic d'expression personnelle
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
            <div class="contents">
                <div class="doodle doodle_product_types_3"><img
                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_products_3.png"
                        alt=""/>
                </div>
                <div class="doodle doodle_product_types_1"><img
                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_products_1.png"
                        alt=""/>
                </div>
                <div class="doodle doodle_product_types_2"><img
                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_products_2.png"
                        alt=""/>
                </div>
                <div class="row">
                    <div class="page_title"><span class="title_text">BIC Pens</span>
                        <div class="rollover">Roll over a product below to learn more!</div>
                    </div>
                </div>
                <div class="row">
                    <div class="double_tile">
                        <div class="tile tile_narrow tile_narrow_first"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_xtra_smooth.png"
                                alt="Cristal<sup>&reg;</sup> Extra-Smooth Ball Pen"/>
                            <div class="title title_two_lines">Cristal<sup>&reg;</sup> Extra-Smooth Ball Pen <span>(Blue, Red &amp; Black)</span>
                                <div class="description">Easy-Glide System<sup>&reg;</sup> BIC’s exclusive ink
                                    technology, up to 35% smoother than traditional BIC<sup>&reg;</sup> ball pens. Feel
                                    the smoothness™!
                                </div>
                            </div>
                        </div>
                        <div class="tile tile_narrow"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_xtra_life.png"
                                alt="Round Stic<sup>&reg;</sup> Extra-Value Ball Pen"/>
                            <div class="title title_two_lines">Round Stic<sup>&reg;</sup> Extra-Value Ball Pen <span>(Black, Blue &amp; Red)</span>
                                <div class="description">Smooth Writing and the Best Priced BIC<sup>&reg;</sup>
                                    Pens*<br/>
                                    Easy-Glide System<sup>&reg;</sup> BIC’s exclusive ink technology, up to 35% smoother
                                    than traditional BIC<sup>&reg;</sup> ball pens. Feel the smoothness™!<br/>
                                    *BIC<sup>&reg;</sup> Round Stic<sup>&reg;</sup> pens have the lowest average retail
                                    price per unit compared to other BIC<sup>&reg;</sup> pens. Prices may fluctuate and
                                    are dependent on pack size. Retailers are free to set their own prices.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="double_tile">
                        <div class="tile tile_narrow tile_narrow_first"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_xtra_bold.png"
                                alt="Cristal<sup>&reg;</sup>  Extra-Bold Ball Pen"/>
                            <div class="title title_two_lines">Cristal<sup>&reg;</sup> Extra-Bold Ball Pen
                                <span>(Fashion)</span>
                                <div class="description">Bold and Colourful Writing<br/>
                                    Provides a vivid ink laydown<br/>
                                    1.6mm bold point
                                </div>
                            </div>
                        </div>
                        <div class="tile tile_narrow"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_xtra_comfort.png"
                                alt="Round Stic Grip™ Extra-Comfort Ball Pen "/>
                            <div class="title title_two_lines small_font">Round Stic Grip™ Extra-Comfort Ball Pen <span>(Black &amp; Blue)</span>
                                <div class="description">Soft grip for a comfortable hold<br/>
                                    Easy-Glide System<sup>&reg;</sup> BIC’s exclusive ink technology, up to 50% smoother
                                    than traditional BIC<sup>&reg;</sup> ball pens. Feel the smoothness™!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="double_tile">
                        <div class="tile tile_narrow tile_narrow_first"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_clic_stic.png"
                                alt="Clic Stic<sup>&reg;</sup> Ball Pen"/>
                            <div class="title title_two_lines">Clic Stic<sup>&reg;</sup> Ball Pen <span>(Blue, Red &amp; Black)</span>
                                <div class="description">Break-resistant pocket clip <br/>
                                    Comfortable, round barrel
                                </div>
                            </div>
                        </div>
                        <div class="tile tile_narrow"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_soft_feel.png"
                                alt="Soft Feel<sup>&reg;</sup> Ball Pen "
                                class="pen_soft_feel"/>
                            <div class="title title_two_lines">Soft Feel<sup>&reg;</sup> Ball Pen <span>(Blue)</span>
                                <div class="description">Unique soft barrel and grip<br/>
                                    Retractable ball pen
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tile tile_wide"><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_atlantis.png"
                            alt="BIC Atlantis<sup>&reg;</sup> Stic, BIC Atlantis<sup>&reg;</sup> Original, BIC Atlantis<sup>&reg;</sup> Comfort & BIC Atlantis<sup>&reg;</sup> Exact Ball Pens "/>
                        <div class="title title_two_lines">BIC<sup>&reg;</sup> Atlantis<sup>&reg;</sup> Stic,
                            BIC<sup>&reg;</sup> Atlantis<sup>&reg;</sup> Original, BIC<sup>&reg;</sup>
                            Atlantis<sup>&reg;</sup> Comfort & BIC<sup>&reg;</sup> Atlantis<sup>&reg;</sup> Exact Ball
                            Pens
                            <div class="description">Offers smoothness, comfort and precision in a variety of fun
                                colours and barrel designs<br/>
                                Smoother than BIC<sup>&reg;</sup> classic ink system <br/>
                                Sleek and stylish ball pens
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tile tile_wide"><img
                            src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_4_color.png"
                            alt="4-Color™  Ball Pen Classic, Fashion, Mini Classic, Mini Fashion & Metallic"/>
                        <div class="title ">4-Color™  Ball Pen Classic, Fashion, Mini Classic, Mini Fashion & Metallic
                            <div class="description">4 classic or fashion ink colours in 1 pen<br/>
                                Fun and colourful expression
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="double_tile">
                        <div class="tile tile_narrow tile_narrow_first"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_gel.png"
                                alt="Velocity<sup>&reg;</sup> Gel "/>
                            <div class="title title_two_lines">Velocity<sup>&reg;</sup>
                                Gel<span>(Black & Assorted)</span>
                                <div class="description">Smooth writing<br/>
                                    Retractable gel
                                </div>
                            </div>
                        </div>
                        <div class="tile tile_narrow"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_velocity.png"
                                alt="Velocity<sup>&reg;</sup> Bold Ball Pen "/>
                            <div class="title title_two_lines">Velocity<sup>&reg;</sup> Bold Ball Pen <span>(Black &amp; Blue)</span>
                                <div class="description">Bold, vivid lines<br/>
                                    1.6mm bold point and Easy-Glide System<sup>&reg;</sup> ink creates a smooth writing
                                    experience
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="double_tile">
                        <div class="tile tile_narrow tile_narrow_first"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_kids.png"
                                alt="BIC Kids™ Ball Pen and Stylus "
                                class="pen_kids"/>
                            <div class="title title_two_lines">BIC Kids™ Ball Pen and Stylus <span>(Blue)</span>
                                <div class="description">Developed with teachers and kids<br/>
                                    Unique yellow guiding line for proper finger position
                                </div>
                            </div>
                        </div>
                        <div class="tile tile_narrow"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_stylus.png"
                                alt="BIC<sup>&reg;</sup> TECH™ Stylus 2'n 1 Ball Pen "/>
                            <div class="title title_two_lines ">BIC<sup>&reg;</sup> TECH™ Stylus 2'n 1 Ball Pen <span>(Black)</span>
                                <div class="description">Lightweight stylus for capacitive touchscreen devices,
                                    including tablets and smartphones<br/>
                                    Retractable Ball pen features Easy-Glide System<sup>&reg;</sup> ink – BIC’s
                                    exclusive ink technology for smooth writing
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="double_tile">
                        <div class="tile tile_narrow tile_narrow_first"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_z4.png"
                                alt="Z4<sup>&reg;</sup> Roller "/>
                            <div class="title title_two_lines">Z4<sup>&reg;</sup> Roller <span>(Black & Assorted)</span>
                                <div class="description">Smooth writing<br/>
                                    Rubber grip
                                </div>
                            </div>
                        </div>
                        <div class="tile tile_narrow"><img
                                src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pen_her.png"
                                alt="BIC for Her™ Ball Pen; BIC for Her™ Gel"
                                class="pen_kids"/>
                            <div class="title">BIC for Her™ Ball Pen; BIC for Her™ Gel
                                <div class="description">Beautifully smooth<br/>
                                    A fashionable accessory for personal expression
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<!-- end content-wrapper -->