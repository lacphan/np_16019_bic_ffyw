<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "yii2demo_user".
 * @property string $userType
 * @property string $password
 * @property string $assignedBuilding
 * @property string $isUpdatePassword
 * @property string $passwordUpdate
 */
class User extends \common\models\CommonUser
{
    
    public $userType;
    public $password;
    public $isUpdatePassword = 0;
    public $passwordUpdate;

    public function rules()
    {
        return [
            [['email', 'first_name', 'auth_key', 'created_at', 'updated_at', 'creator_id','userType'], 'required', 'message' => Yii::t('app', '{attribute} must has a value!')],
            ['password', 'required', 'on' => 'create'],
            [['profile_id', 'parent_id', 'level', 'status', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight','building_id'], 'integer'],
            [['created_at', 'updated_at', 'published_at','userType','isUpdatePassword','passwordUpdate'], 'safe'],
            [['params'], 'string'],
            [['username', 'email', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            ['email', 'email'],
            [['password_reset_token'], 'unique'],
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }
}
