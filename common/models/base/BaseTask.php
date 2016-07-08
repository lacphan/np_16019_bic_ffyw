<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%task}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $facility_id
 * @property integer $building_facility_id
 *
 * @property BuildingFacility $buildingFacility
 * @property Facility $facility
 */
class BaseTask extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%task}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['facility_id', 'building_facility_id'], 'integer'],
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
            'facility_id' => Yii::t('app', 'Facility ID'),
            'building_facility_id' => Yii::t('app', 'Building Facility ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuildingFacility()
    {
        return $this->hasOne(BaseBuildingFacility::className(), ['id' => 'building_facility_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacility()
    {
        return $this->hasOne(BaseFacility::className(), ['id' => 'facility_id']);
    }
}
