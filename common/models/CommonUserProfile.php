<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_user_profile".
 */
class CommonUserProfile extends \common\models\base\BaseUserProfile
{
    /**
     * @return \yii\db\ActiveQuery
     */
    public static function findByProfileId($id)
    {
        $profile = static::findOne(['id' => $id]);
        if($profile) {
            return $profile;
        }
        return new CommonUserProfile();
    }
}
