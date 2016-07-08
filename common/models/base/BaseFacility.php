<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%facility}}".
 *
 * @property integer $id
 * @property string $facility_type
 *
 * @property Task[] $tasks
 */
class BaseFacility extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%facility}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['facility_type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'facility_type' => Yii::t('app', 'Facility Type'),
        ];
    }

   
}
