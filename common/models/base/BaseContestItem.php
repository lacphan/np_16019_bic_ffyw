<?php

namespace common\models\base;

use yii;

/**
 * This is the model class for table "{{%contest_item}}".
 *
 * @property integer $id
 * @property string $start_date
 * @property string $end_date
 * @property string $title
 * @property string $description
 * @property integer $attachment_id
 * @property integer $locale_id
 * @property integer $popup_id
 * @property integer $parent_id
 * @property integer $week_number
 *
 * @property BaseAttachment $attachment
 * @property BaseContestSession[] $contestSessions
 */
class BaseContestItem extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%contest_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date'], 'safe'],
            [['description'], 'string'],
            [['attachment_id', 'locale_id', 'popup_id', 'parent_id', 'week_number'], 'integer'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'attachment_id' => Yii::t('app', 'Attachment ID'),
            'locale_id' => Yii::t('app', 'Locale ID'),
            'popup_id' => Yii::t('app', 'Popup ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'week_number' => Yii::t('app', 'Week Number'),
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
    public function getContestSessions()
    {
        return $this->hasMany(BaseContestSession::className(), ['contest_item_id' => 'id']);
    }
}
