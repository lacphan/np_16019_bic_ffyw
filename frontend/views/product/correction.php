<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'Correction';
?>
<div class="pens correction">
    <div class="container" id="content_wrapper">
        <div class="product_type_page">
            <?php if ((Yii::$app->language == 'fr_FR')): ?>
                <div class="contents">
                    <div class="doodle doodle_product_types_3"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>doodle_products_3.png" alt="" /></div>
                    <div class="doodle doodle_product_types_1"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>doodle_products_1.png" alt="" /></div>
                    <div class="doodle doodle_product_types_2"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>doodle_products_2.png" alt="" /></div>
                    <div class="row">
                        <div class="page_title"> <span class="title_text">BIC Correcteurs</span>
                            <div class="rollover">Faites glisser le curseur sur un produit<br>pour en apprendre davantage!</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tile tile_wide"> <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>correction_witeout.png" alt=" BIC<sup>&reg;</sup> Wite-Out<sup>&reg;</sup> Marque Mini et BIC<sup>&reg;</sup> Wite-Out<sup>&reg;</sup> EZ Correct Ruban correcteur" />
                            <div class="title title_two_lines"> BIC<sup>&reg;</sup> Wite-Out<sup>&reg;</sup> Marque Mini et BIC<sup>&reg;</sup> Wite-Out<sup>&reg;</sup> EZ Correct Ruban correcteur
                                <div class="description">Étui à couleurs super éclatantes<br/>
                                    Ruban robuste résistant aux déchirures<br/>
                                    Le ruban s’applique à sec<br/>
                                    Permet d’écrire sur la correction immédiatement<br/>
                                    Ligne simple de couleur blanche<br/>
                                    Non rechargeable </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="contents">
                    <div class="doodle doodle_product_types_3"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>doodle_products_3.png" alt="" /></div>
                    <div class="doodle doodle_product_types_1"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>doodle_products_1.png" alt="" /></div>
                    <div class="doodle doodle_product_types_2"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>doodle_products_2.png" alt="" /></div>

                    <div class="row">
                        <div class="page_title">
                            <span class="title_text">BIC Correction</span>
                            <div class="rollover">Roll over a product below to learn more!</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tile tile_wide">
                            <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>correction_witeout.png" alt="BIC<sup>&reg;</sup> Wite-Out<sup>&reg;</sup> Brand Mini & BIC<sup>&reg;</sup> Wite-Out<sup>&reg;</sup> EZ Correct Correction Tape " />
                            <div class="title title_two_lines">BIC<sup>&reg;</sup> Wite-Out<sup>&reg;</sup> Brand Mini & BIC<sup>&reg;</sup> Wite-Out<sup>&reg;</sup> EZ Correct Correction Tape
                                <div class="description">Super Bright case colors<br/>
                                    Strong tear-resistant tape<br/>
                                    Tape applies dry<br/>
                                    Write over instantly<br/>
                                    White single line<br/>
                                    Non-refillable</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- end content-wrapper -->