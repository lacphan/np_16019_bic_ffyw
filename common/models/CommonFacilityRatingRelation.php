<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_facility_rating_relation".
 */
class CommonFacilityRatingRelation extends \common\models\base\BaseFacilityRatingRelation
{
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuildings()
    {
        return $this->hasOne(CommonFacility::className(), ['id' => 'facility_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRating()
    {
        return $this->hasOne(CommonRating::className(), ['id' => 'rating_id']);
    }
}
