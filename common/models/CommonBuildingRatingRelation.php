<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_building_rating_relation".
 */
class CommonBuildingRatingRelation extends \common\models\base\BaseBuildingRatingRelation
{

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuildings()
    {
        return $this->hasOne(CommonBuilding::className(), ['id' => 'building_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRating()
    {
        return $this->hasOne(CommonRating::className(), ['id' => 'rating_id']);
    }
}
