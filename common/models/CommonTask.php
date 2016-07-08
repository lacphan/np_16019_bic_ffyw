<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_task".
 */
class CommonTask extends \common\models\base\BaseTask
{
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255]
        ];
    }
    
    public static function findByFacility($facilityID) {
        return static::find()->where(['facility_id' => $facilityID])->all();
    }

    public function getRelationMedia(){
        return $this->hasOne(CommonTaskRelationMedia::className(), ['object_id' => 'id'])->all();
    }
    public function getAttachment(){
        $relation= $this->getRelationMedia();
        $modelAttachment[] ='';
        if(is_array($relation)){
            foreach($relation as $key=>$item){
                $modelAttachment[$key] = CommonAttachment::findMediaByID($item->media_id);
            }
        }
        return $modelAttachment;
    }
}
