<?php

namespace common\models;

use Yii;
use DateTime;
/**
 * This is the model class for table "kelle_user_profile".
 */
class CommonUserProfile extends \common\models\base\BaseUserProfile
{

   

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

    public function getAge() {
        return date_diff(date_create($this->date_of_birth), date_create('today'))->y;
    }
    public function setAge($age) {
        $date = new DateTime("today -{$age} years");
        $this->date_of_birth = $date->format('Y-m-d');
    }
}
