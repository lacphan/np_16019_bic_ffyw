<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_building_relation".
 */
class CommonBuildingRelation extends \common\models\base\BaseBuildingRelation
{
    public function getBuilding() {
        return $this->hasOne(CommonBuilding::className(), ['id' => 'building_id']);
    }
    public function getUser() {
        return $this->hasOne(CommonUser::className(), ['id' => 'user_id']);
    }
    
    public static function getRelationById($userID,$buildingID) {
        $result = CommonBuildingRelation::findOne([
            'building_id' => $buildingID,
            'user_id' => $userID
        ]);
        if($result) {
            return $result;
        }
        return new CommonBuildingRelation();
    }
}
