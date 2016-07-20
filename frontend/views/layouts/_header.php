<?php


/* @var $this \yii\web\View
 * @var $pageFaqs common\models\CommonPageItem
 * @var $pagePrizeDetails common\models\CommonPageItem
 * @var $content string
 */

use yii\bootstrap\Nav;

?>
<header id="main-header" class="site-header" role="banner">

    <div class="header-inner">
        <div class="container">
            <div class="header-main-content">
                <div class="main-logo">
                    <a href="<?= Yii::$app->homeUrl ?>">
                        <img src="<?= Yii::$app->urlManager->getBaseUrl() . '/themes/default/images/main-logo.png' ?>"
                             alt="">
                    </a>
                </div>
                <div class="main-navigation">
                    <div class="">
                        <div class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#site-navigation" aria-expanded="false"
                                        aria-controls="site-navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <nav id="site-navigation" class="navbar-collapse collapse" role="navigation">
                                <div class="menu-primary-menu-container">
                                    <?php

                                    $menuItems = [
                                        [
                                            'label' => 'Handwriting Challenge',
                                            'url' => Yii::$app->homeUrl,
                                            'items' => [
                                                ['label' => 'Enter Now', 'url' => Yii::$app->homeUrl],
                                                ['label' => 'Gallery', 'url' => Yii::$app->urlManager->createUrl(['site/gallery'])],
                                                ['label' => 'Contest Prizes', 'url' => Yii::$app->urlManager->createUrl(['page/show-single','slug'=> 'prize-details'])],
                                                ['label' => 'Official Rules', 'url' => Yii::$app->urlManager->createUrl(['page/show-single','slug'=> 'official-rules'])],
                                                ['label' => 'Official Rules', 'url' => Yii::$app->urlManager->createUrl(['page/show-single','slug'=> 'official-rules'])],

                                            ],
                                        ],
                                        ['label' => 'The Mission', 'url' => Yii::$app->urlManager->createUrl([''])],
                                        ['label' => 'Take Action', 'url' => Yii::$app->urlManager->createUrl([''])],
                                        ['label' => 'Products', 'url' => Yii::$app->urlManager->createUrl([''])],
                                        [
                                            'label' => false,
                                            'options' => [
                                                'class' => 'facebook-btn',
                                            ],
                                            'url' => Yii::$app->urlManager->createUrl([''])
                                        ],
                                        [
                                            'label' => Yii::t('app', 'Français') ,
                                            'options' => [
                                                'class' => 'language-switch',
                                            ],
                                            'url' =>  Yii::$app->urlManager->createUrl(['', 'locale' => 'fr'])
                                        ],
                                    ];


                                    echo Nav::widget([
                                        'options' => [
                                            'class' => 'menu nav navbar-nav',
                                            'id' => 'menu-primary-menu'
                                        ],
                                        'items' => $menuItems,
                                    ]);
                                    ?>

                                </div>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
