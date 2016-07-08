<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%building_facility}}".
 *
 * @property integer $id
 * @property string $block
 * @property integer $facility_id
 * @property integer $building_id
 * @property integer $inspection_id
 * @property string $floor
 * @property string $facility_name
 * @property integer $time_per_day
 * @property string $created_at
 * @property string $updated_at
 * @property string $published_at
 * @property integer $creator_id
 * @property integer $is_deleted
 * @property integer $is_enabled
 * @property integer $ordering_weight
 * @property string $params
 *
 * @property BaseBuilding $building
 * @property BaseFacility $facility
 * @property BaseInspectionFrequency $inspection
 * @property BaseTask[] $tasks
 */
class BaseBuildingFacility extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%building_facility}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['block', 'facility_id', 'building_id', 'inspection_id', 'floor', 'facility_name', 'time_per_day', 'created_at', 'updated_at', 'creator_id'], 'required'],
            [['facility_id', 'building_id', 'inspection_id', 'time_per_day', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['created_at', 'updated_at', 'published_at'], 'safe'],
            [['params'], 'string'],
            [['block', 'floor', 'facility_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'block' => Yii::t('app', 'Block'),
            'facility_id' => Yii::t('app', 'Facility ID'),
            'building_id' => Yii::t('app', 'Building ID'),
            'inspection_id' => Yii::t('app', 'Inspection ID'),
            'floor' => Yii::t('app', 'Floor'),
            'facility_name' => Yii::t('app', 'Facility Name'),
            'time_per_day' => Yii::t('app', 'Time Per Day'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuilding()
    {
        return $this->hasOne(BaseBuilding::className(), ['id' => 'building_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacility()
    {
        return $this->hasOne(BaseFacility::className(), ['id' => 'facility_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInspection()
    {
        return $this->hasOne(BaseInspectionFrequency::className(), ['id' => 'inspection_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(BaseTask::className(), ['building_facility_id' => 'id']);
    }
}
