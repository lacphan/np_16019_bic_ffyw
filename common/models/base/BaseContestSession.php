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
 * @property integer $accepted
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
            [['contest_item_id', 'user_id', 'attachment_id', 'accepted'], 'integer'],
            [['birth_year'], 'safe'],
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
            'accepted' => Yii::t('app', 'Accepted'),
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
