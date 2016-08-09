<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 * @var $model PageItem;
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
                    <span>
                        <?php if($model): ?>
                        <?= $model->name ?>
                        <?php endif;?>
                    </span>
                </div>
                <div class="content">
                    <?php if($model): ?>
                        <?= $model->description ?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>