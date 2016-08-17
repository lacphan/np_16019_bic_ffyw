<?php

namespace common\models\base;

use yii;

/**
 * This is the model class for table "{{%contest_session}}".
 *
 * @property integer $id
 * @property integer $contest_item_id
 * @property integer $user_id
 * @property string $user_email
 * @property string $first_name
 * @property string $last_name
 * @property string $birth_year
 * @property integer $attachment_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $published_at
 * @property integer $creator_id
 * @property integer $is_deleted
 * @property integer $is_enabled
 * @property integer $ordering_weight
 * @property string $params
 * @property integer $accepted
 * @property integer $is_winner
 * @property integer $locale_id
 * @property integer $is_grand_prize
 * @property integer $is_encrypted
 *
 * @property BaseAttachment $attachment
 * @property BaseContestItem $contestItem
 * @property BaseUser $user
 */
class BaseContestSession extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%contest_session}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contest_item_id', 'user_id', 'attachment_id', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight', 'accepted', 'is_winner', 'locale_id', 'is_grand_prize', 'is_encrypted'], 'integer'],
            [['birth_year', 'created_at', 'updated_at', 'published_at'], 'safe'],
            [['created_at', 'updated_at', 'creator_id'], 'required'],
            [['params'], 'string'],
            [['user_email', 'first_name', 'last_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'contest_item_id' => Yii::t('app', 'Contest Item ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'user_email' => Yii::t('app', 'User Email'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'birth_year' => Yii::t('app', 'Birth Year'),
            'attachment_id' => Yii::t('app', 'Attachment ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'published_at' => Yii::t('app', 'Published At'),
            'creator_id' => Yii::t('app', 'Creator ID'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'is_enabled' => Yii::t('app', 'Is Enabled'),
            'ordering_weight' => Yii::t('app', 'Ordering Weight'),
            'params' => Yii::t('app', 'Params'),
            'accepted' => Yii::t('app', 'Accepted'),
            'is_winner' => Yii::t('app', 'Is Winner'),
            'locale_id' => Yii::t('app', 'Locale ID'),
            'is_grand_prize' => Yii::t('app', 'Is Grand Prize'),
            'is_encrypted' => Yii::t('app', 'Is Encrypted'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttachment()
    {
        return $this->hasOne(BaseAttachment::className(), ['id' => 'attachment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContestItem()
    {
        return $this->hasOne(BaseContestItem::className(), ['id' => 'contest_item_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(BaseUser::className(), ['id' => 'user_id']);
    }
}
