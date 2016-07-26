<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 11/16/15
 * Time: 10:40 AM
 */
use yii\bootstrap\Nav;
use frontend\models\PageItem;
use yii\bootstrap\Modal;

/**
 * @var $privacy common\models\CommonPageItem
 * @var $termsConditions common\models\CommonPageItem
 */
?>
<?php
$outDateBrowser =  PageItem::findPageLocale('out-date-browser',Yii::$app->request->get('locale'));
$currentLocale = (Yii::$app->language=='fr_FR') ?'fr':'en';
if($outDateBrowser) {
    Modal::begin([
        'closeButton' => [
            'label' => '&times;',
            'class' => 'close-btn',
        ],
        'header' =>  '<h3>' . $outDateBrowser->name . '</h3>',
        'size' => 'modal-lg',
        'id' => 'out-date-browser',
        'options' => [
            'class' => 'fade modal'
        ]
    ]);
    echo '<div id="modalContent">'. $outDateBrowser->description .'</div>';
    Modal::end();
}
?>
<footer class="site-footer">
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-logo">
                    <?php if(Yii::$app->language == 'fr_FR'):?>
                    <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/logo_footer_fr.png' ?>"
                         alt="footer-logo">
                    <?php else: ?>
                        <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/logo_footer.png' ?>"
                             alt="More for your money...Always!">
                    <?php endif;?>
                </div>
                <div class="col-md-5 footer-menu">

                    <?php

                    $menuItems = [
                        [
                            'label' => Yii::t(_NP_TEXT_DOMAIN, 'Press'),
                            'url' => PageItem::getPermalink(['press']),
                        ],
                        [
                            'label' => Yii::t(_NP_TEXT_DOMAIN, 'Terms and Conditions'),
                            'url' => PageItem::getPermalink(['terms-and-conditions']),
                        ],
                        [
                            'label' => Yii::t(_NP_TEXT_DOMAIN, 'Privacy Policy'),
                            'url' => PageItem::getPermalink(['privacy-policy']),
                        ],
                        [
                            'label' => Yii::t(_NP_TEXT_DOMAIN, 'Contact Us'),
                            'url' => 'http://www.bicworld.com/'.$currentLocale.'/pages/contact/'
                        ],
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