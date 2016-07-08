<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%rating}}".
 *
 * @property integer $id
 * @property integer $value
 * @property string $created_at
 * @property string $updated_at
 * @property string $published_at
 * @property integer $creator_id
 * @property integer $is_deleted
 * @property integer $is_enabled
 * @property integer $ordering_weight
 * @property string $params
 *
 * @property BaseBuilding[] $buildings
 */
class BaseRating extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%rating}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['created_at', 'updated_at', 'creator_id'], 'required'],
            [['created_at', 'updated_at', 'published_at'], 'safe'],
            [['params'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'value' => Yii::t('app', 'Value'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'published_at' => Yii::t('app', 'Published At'),
            'creator_id' => Yii::t('app', 'Creator ID'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'is_enabled' => Yii::t('app', 'Is Enabled'),
            'ordering_weight' => Yii::t('app', 'Ordering Weight'),
            'params' => Yii::t('app', 'Params'),
        ];
    }
    
}
