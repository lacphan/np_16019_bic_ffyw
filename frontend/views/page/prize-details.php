<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */
use yii\helpers\Html;
use frontend\models\PageItem;
$this->title = 'Contest Prizes';
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="success-content">
                <div class="title">
                    <span><?= Yii::t('app', 'Contest Prizes') ?></span>
                </div>
                <div class="content">
                    <p>One (1) Grand Prize Contest winner will receive $5,000; prize will be awarded as a cheque.</p>

                    <p>Six (6) Weekly Prize Contest Winners will receive a $150 gift card (from a National Retailer) and a BIC Product Prize pack valued at $50.00 each.</p>

                    <p>
                        <?=  Html::a(Yii::t('app', '*' . 'Click here for Official Rules'), PageItem::getPermalink(['official-rules']),['target' => '_blank','class' => 'color-1'])?>
                    </p> 
                </div>


            </div>
        </div>
      
    </div>
</div>