<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelle_facility".
 */
class Facility extends \common\models\CommonFacility
{
    public function getTasks()
    {
        return $this->hasMany(Task::className(), ['facility_id' => 'id']);
    }
    public function getRelationMedia(){
        return $this->hasOne(FacilityRelationMedia::className(), ['object_id' => 'id'])->all();
    }
}
