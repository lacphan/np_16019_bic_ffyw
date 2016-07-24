<?php


/* @var $this \yii\web\View
 * @var $pageFaqs common\models\CommonPageItem
 * @var $pagePrizeDetails common\models\CommonPageItem
 * @var $content string
 */

use yii\bootstrap\Nav;
use frontend\models\PageItem;
use yii\widgets\Menu;
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
                                    $locale = Yii::$app->request->get('locale') ? Yii::$app->request->get('locale') : 'en';
                                    $pageMenu = new PageItem();

                                    $menuItems = [
                                        [
                                            'label' => Yii::t(_NP_TEXT_DOMAIN, 'Handwriting Challenge'),
                                            'url' => Yii::$app->homeUrl,
                                            'options' => ['class' => 'dropdown'],
                                            'template' => '<a class="dropdown-toggle" href="{url}" data-toggle="dropdown">{label}<b class="caret"></b></a>',
                                            'submenuTemplate' => '<ul class="dropdown-menu">{items}</ul>',
                                            'items' => [
                                                [
                                                    'label' => Yii::t(_NP_TEXT_DOMAIN, 'Enter Now'),
                                                    'url' => Yii::$app->homeUrl
                                                ],
                                                [
                                                    'label' => Yii::t(_NP_TEXT_DOMAIN, 'Gallery'),
                                                    'url' => Yii::$app->urlManager->createUrl(['site/gallery'])],
                                                [
                                                    'label' => Yii::t(_NP_TEXT_DOMAIN, 'Contest Prizes'),
                                                    'url' => $pageMenu->getPermalink(['prize-details','locale'=> $locale])
                                                ],
                                                [
                                                    'label' => Yii::t(_NP_TEXT_DOMAIN, 'Official Rules'),
                                                    'url' => Yii::$app->urlManager->createUrl(['page/show-single','slug'=> 'official-rules'])
                                                ],

                                            ],
                                        ],
                                        [
                                            'label' => Yii::t(_NP_TEXT_DOMAIN, 'The Mission'),
                                            'url' => Yii::$app->urlManager->createUrl(['page/show-single','slug'=> 'mission']),
                                            'template' => '<a href="{url}" >{label}<b class="caret"></b></a>',
                                            'submenuTemplate' => '<ul class="dropdown-menu">{items}</ul>',
                                            'items' => [
                                                [
                                                    'label' => Yii::t(_NP_TEXT_DOMAIN, 'Boys and Girls Club of Canada'),
                                                    'url' => Yii::$app->urlManager->createUrl(['page/show-single','slug'=>'boy-and-girl-of-canada']),

                                                ],

                                            ],
                                        ],
                                        [
                                            'label' => Yii::t(_NP_TEXT_DOMAIN, 'Write Now'),
                                            'url' => Yii::$app->urlManager->createUrl(['page/show-single','slug'=>'write-now'])
                                        ],
                                        [
                                            'label' => Yii::t(_NP_TEXT_DOMAIN, 'Products'),
                                            'url' => Yii::$app->urlManager->createUrl([''])
                                        ],
                                        [
                                            'label' => false,
                                            'options' => [
                                                'class' => 'facebook-btn',
                                                'target'
                                            ],
                                            'url' => 'https://www.facebook.com/BICWritingCanada',
                                            'template' => '<a href="{url}" target="_blank">{label}</a>'
                                        ],
                                        [
                                            'label' => Yii::t(_NP_TEXT_DOMAIN, 'Français') ,
                                            'options' => [
                                                'class' => 'language-switch',
                                            ],
                                            'url' => Yii::$app->language == 'fr_FR' ? Yii::$app->urlManager->createUrl(['']) :  Yii::$app->urlManager->createUrl(['', 'locale' => 'fr'])
                                        ],
                                    ];
                                    echo Menu::widget([
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
