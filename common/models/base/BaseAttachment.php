<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%attachment}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $size
 * @property string $image
 * @property string $caption
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 *
 * @property ContestSession[] $contestSessions
 */
class BaseAttachment extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attachment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size', 'created_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'size', 'image', 'caption', 'description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'size' => Yii::t('app', 'Size'),
            'image' => Yii::t('app', 'Image'),
            'caption' => Yii::t('app', 'Caption'),
            'description' => Yii::t('app', 'Description'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContestSessions()
    {
        return $this->hasMany(ContestSession::className(), ['attachment_id' => 'id']);
    }
}
