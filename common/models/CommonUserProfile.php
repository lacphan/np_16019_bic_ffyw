<?php

namespace common\models;

use Yii;
use DateTime;
use common\helpers\HashHelper;

/**
 * This is the model class for table "kelle_user_profile".
 * @property CommonUser $user
 */
class CommonUserProfile extends \common\models\base\BaseUserProfile
{


    public function rules()
    {
        return [
            [['date_of_birth'], 'safe'],
            [['age'], 'integer'],
            [['phone_number', 'united'], 'string', 'max' => 32],
            [['address', 'city', 'street', 'province', 'post_code', 'parent_first_name', 'parent_last_name'], 'string', 'max' => 255],
            [['phone_number', 'united'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->parent_first_name = HashHelper::encrypt($this->parent_first_name);
            $this->parent_last_name = HashHelper::encrypt($this->parent_last_name);
            $this->phone_number = HashHelper::encrypt($this->phone_number);

            return true;
        } else {
            return false;
        }


    }

    /**
     * Decrypt data to view on backend
     */
    public function afterFind()
    {
        parent::afterFind();
        if ($this->user->is_encrypted) {
            $this->parent_first_name = HashHelper::decrypt($this->parent_first_name);
            $this->parent_last_name = HashHelper::decrypt($this->parent_last_name);
            $this->phone_number = HashHelper::decrypt($this->phone_number);
        }

    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public static function findByProfileId($id)
    {
        $profile = static::findOne(['id' => $id]);
        if ($profile) {
            return $profile;
        }
        return new CommonUserProfile();
    }

    public function getAge()
    {
        return date_diff(date_create($this->date_of_birth), date_create('today'))->y;
    }

    public function setAge($age)
    {
        $date = new DateTime("today -{$age} years");
        $this->date_of_birth = $date->format('Y-m-d');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(CommonUser::className(), ['profile_id' => 'id']);
    }
}
