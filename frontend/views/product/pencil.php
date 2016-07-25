<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'Pencil';
?>
<div class="pencil-page">
    <div class="pens pencils">
        <div class="container" id="content_wrapper">
            <div class="product_type_page">
                <?php if ((Yii::$app->language == 'fr_FR')): ?>
                    <div class="contents">
                        <div class="doodle doodle_product_types_3"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_products_3.png" alt="" /></div>
                        <div class="doodle doodle_product_types_1"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_products_1.png" alt="" /></div>
                        <div class="doodle doodle_product_types_2"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>doodle_products_2.png" alt="" /></div>
                        <div class="row">
                            <div class="page_title"> <span class="title_text">BIC Crayons</span>
                                <div class="rollover">Faites glisser le curseur sur un produit<br>pour en apprendre davantage!</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tile tile_wide"> <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_xtra.png" alt="Porte-mines Extra-durable, Extra-précision, Extra-brillant, Extra-Craze<sup>MC</sup>" />
                                <div class="title title_two_lines">Porte-mines Extra-durable, Extra-précision, Extra-brillant, Extra-Craze<sup>MC</sup>
                                    <div class="description"> 1 porte-mine BIC<sup>&reg;</sup> = 2&frac12; crayons de bois<br />
                                        Mine assurant une écriture douce, sans bavures et facile à effacer<br />
                                        Idéal pour les tests standardisés<br />
                                        Aucun aiguisage requis. Les mines avancent vite et sans effort.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="double_tile">
                                <div class="tile tile_narrow tile_narrow_first"> <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_her.png" alt=" BIC Kids<sup>MC</sup> Porte-mine" />
                                    <div class="title">BIC Kids<sup>MC</sup> Porte-mine
                                        <div class="description">Conception créée en consultation avec les professeurs et les enfants<br/>
                                            Ligne directrice jaune exclusive pour orienter la position des doigts</div>
                                    </div>
                                </div>
                                <div class="tile tile_narrow"> <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_kids.png" alt="Velocity<sup>&reg;</sup> Porte-mine" />
                                    <div class="title">Velocity<sup>&reg;</sup> Porte-mine
                                        <div class="description">Prise confortable<br/>
                                            Idéal pour les tests standardisés</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="double_tile">
                                <div class="tile tile_narrow tile_narrow_first"> <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_velocity.png" alt="BIC<sup>&reg;</sup> Extra-Fun<sup>MC</sup> Crayon" />
                                    <div class="title">BIC<sup>&reg;</sup> Extra-Fun<sup>MC</sup> Crayon
                                        <div class="description">Faites de l’écriture une activité rigolo grâce aux barillets colorés à deux tons !<br/>
                                            Robustes avec mines durables<br/>
                                            Gommes à effacer sans latex<br/>
                                            Faciles à affûter du premier coup, à tout coup</div>
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
                            <div class="page_title"><span class="title_text">BIC Pencils</span>
                                <div class="rollover">Roll over a product below to learn more!</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tile tile_wide"><img
                                    src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_xtra.png"
                                    alt="Extra-Life, Extra-Precision, Extra-Shine, Extra-Craze™ Mechanical Pencils"/>
                                <div class="title title_two_lines">Extra-Life, Extra-Precision, Extra-Shine, Extra-Craze™
                                    Mechanical Pencils
                                    <div class="description"> 1 BIC<sup>&reg;</sup> Pencil = 2&frac12; wood case
                                        pencils<br/>
                                        Smooth writing lead does not smudge and erases cleanly<br/>
                                        Perfect for standardized tests<br/>
                                        Leads never need sharpening and advance quickly and easily
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="double_tile">
                                <div class="tile tile_narrow tile_narrow_first"><img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_her.png"
                                        alt="BIC Kids™ Mechanical Pencil "/>
                                    <div class="title">BIC Kids™ Mechanical Pencil
                                        <div class="description">Developed with teachers and kids<br/>
                                            Unique yellow guiding line for proper finger position
                                        </div>
                                    </div>
                                </div>
                                <div class="tile tile_narrow"><img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_kids.png"
                                        alt="Velocity<sup>&reg;</sup> Mechanical Pencil"/>
                                    <div class="title">Velocity<sup>&reg;</sup> Mechanical Pencil
                                        <div class="description">Comfortable grip<br/>
                                            Perfect for standardized tests
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="double_tile">
                                <div class="tile tile_narrow tile_narrow_first"><img
                                        src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/' ?>pencil_velocity.png"
                                        alt="BIC<sup>&reg;</sup> Extra-Fun™ Pencil"/>
                                    <div class="title">BIC<sup>&reg;</sup> Extra-Fun™ Pencil
                                        <div class="description">Make writing fun with two-toned coloured barrels!<br/>
                                            Durable – long-lasting leads<br/>
                                            Latex-free erasers<br/>
                                            Sharpens First Time, Every Time
                                        </div>
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