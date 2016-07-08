<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%building_facility_rating_relation}}".
 *
 * @property integer $id
 * @property integer $rating_id
 * @property integer $building_facility_id
 */
class BaseBuildingFacilityRatingRelation extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%building_facility_rating_relation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rating_id', 'building_facility_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'rating_id' => Yii::t('app', 'Rating ID'),
            'building_facility_id' => Yii::t('app', 'Building Facility ID'),
        ];
    }
}
