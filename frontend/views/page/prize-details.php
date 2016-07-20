<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */
/* @var $model \frontend\models\PageItem  */
use yii\helpers\Html;

$this->title = 'Contest Prizes';

?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="success-content">
                <div class="title">
                    <span><?= $model->name ?></span>
                </div>
                <div class="content">
                    <?= $model->description ?>
                    <p>
                        <?=  Html::a(Yii::t('app', '*' . 'Click here for Official Rules'), Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'official-rules']),['target' => '_blank','class' => 'color-1'])?>
                    </p> 
                </div>


            </div>
        </div>
      
    </div>
</div>