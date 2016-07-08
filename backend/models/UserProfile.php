<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelle_user_profile".
 */
class UserProfile extends \common\models\CommonUserProfile
{
    public function rules()
    {
        return [
            [['phone_number'], 'required', 'message' => Yii::t('app', '{attribute} must has a value!')],
            [['united', 'street', 'province', 'post_code', 'age', 'city'], 'string', 'max' => 255],
            [['phone_number', 'receive_information'], 'string', 'max' => 32]
        ];
    }
}
