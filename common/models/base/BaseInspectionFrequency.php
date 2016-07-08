<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%inspection_frequency}}".
 *
 * @property integer $id
 * @property string $name
 *
 * @property BaseBuildingFacility[] $buildingFacilities
 */
class BaseInspectionFrequency extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inspection_frequency}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuildingFacilities()
    {
        return $this->hasMany(BaseBuildingFacility::className(), ['inspection_id' => 'id']);
    }
}
