<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelle_task".
 */
class Task extends \common\models\CommonTask
{
    public function getFacility()
    {
        return $this->hasOne(Facility::className(), ['id' => 'facility_id']);
    }
    public function getRelationMedia(){
        return $this->hasOne(TaskRelationMedia::className(), ['object_id' => 'id'])->all();
    }
}
