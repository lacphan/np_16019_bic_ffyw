<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%facility_relation_media}}".
 *
 * @property integer $id
 * @property integer $object_id
 * @property integer $media_id
 * @property integer $sort_order
 */
class BaseFacilityRelationMedia extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%facility_relation_media}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object_id', 'media_id', 'sort_order'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'object_id' => Yii::t('app', 'Object ID'),
            'media_id' => Yii::t('app', 'Media ID'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        ];
    }
}
