<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_building_facility_rating_relation".
 */
class CommonBuildingFacilityRatingRelation extends \common\models\base\BaseBuildingFacilityRatingRelation
{

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuildings()
    {
        return $this->hasOne(CommonBuildingFacility::className(), ['id' => 'building_facility_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRating()
    {
        return $this->hasOne(CommonRating::className(), ['id' => 'rating_id']);
    }
}
