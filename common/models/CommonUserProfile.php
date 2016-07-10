<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_user_profile".
 */
class CommonUserProfile extends \common\models\base\BaseUserProfile
{

    public $age;

    public function rules()
    {
        return [
            [['date_of_birth'], 'safe'],
            [['age'], 'integer'],
            [['address', 'city', 'street', 'province', 'post_code'], 'string', 'max' => 255],
            [['phone_number', 'united'], 'string', 'max' => 32]
        ];
    }
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
