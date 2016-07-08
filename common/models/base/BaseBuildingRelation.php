<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%building_relation}}".
 *
 * @property integer $building_id
 * @property integer $user_id
 */
class BaseBuildingRelation extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%building_relation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['building_id', 'user_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'building_id' => Yii::t('app', 'Building ID'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }
}
