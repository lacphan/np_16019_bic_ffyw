<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%user_profile}}".
 *
 * @property integer $id
 * @property string $united
 * @property string $street
 * @property string $province
 * @property string $post_code
 * @property string $age
 * @property string $city
 * @property string $phone_number
 * @property string $receive_information
 *
 * @property User[] $users
 */
class BaseUserProfile extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_profile}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['united', 'street', 'province', 'post_code', 'age', 'city'], 'string', 'max' => 255],
            [['phone_number', 'receive_information'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'united' => Yii::t('app', 'United'),
            'street' => Yii::t('app', 'Street'),
            'province' => Yii::t('app', 'Province'),
            'post_code' => Yii::t('app', 'Post Code'),
            'age' => Yii::t('app', 'Age'),
            'city' => Yii::t('app', 'City'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'receive_information' => Yii::t('app', 'Receive Information'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(BaseUser::className(), ['profile_id' => 'id']);
    }
}
