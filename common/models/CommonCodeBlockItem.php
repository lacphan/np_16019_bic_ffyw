<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bic_ffyw_code_block_item".
 */
class CommonCodeBlockItem extends \common\models\base\BaseCodeBlockItem
{
    public static function getCode($code) {
        return CommonCodeBlockItem::find()->where(['code' => $code])->one();
    }
}
