<?php

namespace common\models\base;

use yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property integer $profile_id
 * @property integer $parent_id
 * @property integer $level
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $auth_key
 * @property integer $status
 * @property integer $building_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $published_at
 * @property integer $creator_id
 * @property integer $is_deleted
 * @property integer $is_enabled
 * @property integer $ordering_weight
 * @property string $params
 * @property integer $locale_id
 *
 * @property BaseContestSession[] $contestSessions
 * @property BaseUserProfile $profile
 */
class BaseUser extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password_hash', 'auth_key', 'created_at', 'updated_at', 'creator_id'], 'required'],
            [['profile_id', 'parent_id', 'level', 'status', 'building_id', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight', 'locale_id'], 'integer'],
            [['created_at', 'updated_at', 'published_at'], 'safe'],
            [['params'], 'string'],
            [['username', 'email', 'first_name', 'last_name', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['password_reset_token'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'profile_id' => Yii::t('app', 'Profile ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'level' => Yii::t('app', 'Level'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'status' => Yii::t('app', 'Status'),
            'building_id' => Yii::t('app', 'Building ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'published_at' => Yii::t('app', 'Published At'),
            'creator_id' => Yii::t('app', 'Creator ID'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'is_enabled' => Yii::t('app', 'Is Enabled'),
            'ordering_weight' => Yii::t('app', 'Ordering Weight'),
            'params' => Yii::t('app', 'Params'),
            'locale_id' => Yii::t('app', 'Locale ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContestSessions()
    {
        return $this->hasMany(BaseContestSession::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(BaseUserProfile::className(), ['id' => 'profile_id']);
    }
}
