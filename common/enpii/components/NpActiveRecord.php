<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 12/28/15
 * Time: 12:04 PM
 */
namespace common\enpii\components;
use yii\db\ActiveRecord;

class NpActiveRecord extends ActiveRecord {
    const IS_DELETED = 0;
    const IS_ENABLED = 1;
}