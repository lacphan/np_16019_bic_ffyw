<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'Products';
$locale = Yii::$app->request->get('locale') ? Yii::$app->request->get('locale') : DEFAULT_LOCALE;
?>
<div class="products">
    <div class="container" id="content_wrapper">
        <div class="contents">
            <div class="doodle doodle_1"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>doodle_products_1.png" alt=""/></div>
            <div class="doodle doodle_2"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>doodle_products_2.png" alt=""/></div>

            <div class="row">
                <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
                    <h2><span><?= Yii::t(_NP_TEXT_DOMAIN, "PRODUCTS") ?></span></h2>
                    <h3><?= Yii::t(_NP_TEXT_DOMAIN, "BIC<sup>&reg;</sup> PRODUCTS MAKE WRITING FUN!") ?></h3>

                    <div>
                        <?php if ((Yii::$app->language == 'fr_FR')): ?>
                            <a href="<?=Yii::$app->urlManager->createUrl(['/fr/page/extra-fun']);?>"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>products_intro_fr.png"
                                             alt="Introducing BIC Extra-fun pencils Click here"/></a>
                        <?php else: ?>
                            <a href="<?=Yii::$app->urlManager->createUrl(['/page/extra-fun']);?>"><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>products_intro.png"
                                             alt="Introducing BIC Extra-fun pencils Click here"/></a>
                        <?php endif; ?>

                    </div>
                    <p>
                        <?= Yii::t(_NP_TEXT_DOMAIN, "The perfect BIC<sup>&reg;</sup> pen, pencil or marker can make a child feel inspired to write. We
                        offer so much variety and style; kids and adults will be amazed by what they find. Our products
                        offer:") ?>
                    </p>
                    <p>
                        <?= Yii::t(_NP_TEXT_DOMAIN, "Smooth writing pens and pencils • Bold, classic and fashionable ink colours •
                        Precise writing instruments • Variety of shapes and point sizes for that perfect fit •
                        Incredibly comfortable grips • Forgiving smudge-free and erasable mechanical pencils") ?>
                    </p>
                    <h6><?= Yii::t(_NP_TEXT_DOMAIN, "Check out some of our products!") ?></h6>
                </div>
                <div class="col-lg-1 col-md-1"></div>
            </div>
            <div class="product_types clearfix">
                <div class="product_type product_pens">
                    <div class="product_type_inner">
                        <div class="title"><?= Yii::t(_NP_TEXT_DOMAIN, "PENS") ?></div>
                        <div><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>products_pens.png" alt="Pens"/></div>
                        <div class="description">
                            <?= Yii::t(_NP_TEXT_DOMAIN, "From ballpoint pen to gel to roller, these awesome varieties of pens provide endless hours of fun writing!") ?>
                        </div>
                    </div>
                    <div><a href="<?=  $locale == DEFAULT_LOCALE ? Yii::$app->urlManager->createUrl(['product/show-single','slug' => 'pens']) :Yii::$app->urlManager->createUrl(['product/show-single','slug' => 'pens','locale' => $locale]) ?>" class="learn_more"><?= Yii::t(_NP_TEXT_DOMAIN, "LEARN MORE") ?></a></div>
                </div>

                <div class="product_type product_pencils">
                    <div class="product_type_inner">
                        <div class="title"><?=Yii::t(_NP_TEXT_DOMAIN, "PENCILS")  ?></div>
                        <div><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>products_pencils.png" alt="Pencils"/></div>
                        <div class="description">
                            <?= Yii::t(_NP_TEXT_DOMAIN, "An amazing mechanical pencil that writes 2 &frac12; times longer than wood case pencils? Now that’s smart!") ?>
                        </div>
                    </div>
                    <div><a href="<?=  $locale == DEFAULT_LOCALE ? Yii::$app->urlManager->createUrl(['product/show-single','slug' => 'pencil']) :Yii::$app->urlManager->createUrl(['product/show-single','slug' => 'pencil','locale' => $locale]) ?>" class="learn_more"><?= Yii::t(_NP_TEXT_DOMAIN, "LEARN MORE") ?></a></div>
                </div>

                <div class="product_type product_marking">
                    <div class="product_type_inner">
                        <div class="title"><?= Yii::t(_NP_TEXT_DOMAIN, "MARKING") ?></div>
                        <div><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>products_marking.png" alt="Marking"/></div>
                        <div class="description">
                            <?= Yii::t(_NP_TEXT_DOMAIN, "Bold and brilliant coloured markers and highlighters for all of your marking needs.") ?>
                        </div>
                    </div>
                    <div><a href="<?=  $locale == DEFAULT_LOCALE ? Yii::$app->urlManager->createUrl(['product/show-single','slug' => 'marking']) :Yii::$app->urlManager->createUrl(['product/show-single','slug' => 'marking','locale' => $locale]) ?>" class="learn_more"><?= Yii::t(_NP_TEXT_DOMAIN, "LEARN MORE") ?></a></div>
                </div>

                <div class="product_type product_correction">
                    <div class="product_type_inner">
                        <div class="title"><?= Yii::t(_NP_TEXT_DOMAIN, "CORRECTION") ?></div>
                        <div><img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/'?>products_correction.png" alt="Correction"/></div>
                        <div class="description"><?= Yii::t(_NP_TEXT_DOMAIN, "Correcting mistakes has never been so cool!") ?></div>
                    </div>
                    <div><a href="<?=  $locale == DEFAULT_LOCALE ? Yii::$app->urlManager->createUrl(['product/show-single','slug' => 'correction']) :Yii::$app->urlManager->createUrl(['product/show-single','slug' => 'correction','locale' => $locale]) ?>" class="learn_more"><?= Yii::t(_NP_TEXT_DOMAIN, "LEARN MORE") ?></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end content-wrapper -->