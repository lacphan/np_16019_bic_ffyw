<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_auth_assignment".
 */
class CommonAuthAssignment extends \common\models\base\BaseAuthAssignment
{
    public static function getUserRole()
    {
        $id= Yii::$app->user->id;
        if(static::findOne(['item_name'=>'admin','user_id'=>$id])){
            return true;
        }
        return false;
    }
}
