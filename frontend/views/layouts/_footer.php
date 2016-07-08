<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 11/16/15
 * Time: 10:40 AM
 */
use yii\bootstrap\Nav;
use frontend\models\PageItem;

/**
 * @var $privacy common\models\CommonPageItem
 * @var $termsConditions common\models\CommonPageItem
 */
?>
<footer class="site-footer">
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-logo">
                    <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/footer-logo.png'?>" alt="footer-logo">
                </div>
                <div class="col-md-5 footer-menu">

                    <?php

                    $menuItems = [
                        ['label' => 'Press', 'url' => Yii::$app->homeUrl],
                        ['label' => 'Term and Conditions', 'url' => Yii::$app->urlManager->createUrl([''])],
                        ['label' => 'Privacy Policy', 'url' => Yii::$app->urlManager->createUrl([''])],
                        ['label' => 'Contact Us', 'url' => Yii::$app->urlManager->createUrl([''])],
                    ];


                    echo Nav::widget([
                        'options' => [
                            'class' => 'menu nav navbar-nav',
                            'id' => 'footer-menu'
                        ],
                        'items' => $menuItems,
                    ]);
                    ?>

                </div>

                <div class="col-md-4 footer-text">
                    © 2016 BIC Inc. Toronto, Ontario, Canada M3N 1W2
                </div>
            </div>

        </div>

    </div>
</footer>