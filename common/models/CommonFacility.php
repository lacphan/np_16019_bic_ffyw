<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_facility".
 */
class CommonFacility extends \common\models\base\BaseFacility
{
    public function rules()
    {
        return [
            [['facility_type'], 'required'],
            [['facility_type'], 'string', 'max' => 255]
        ];
    }
    public function getRelationMedia(){
        return $this->hasOne(CommonFacilityRelationMedia::className(), ['object_id' => 'id'])->all();
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
    public function updateRelationMedia($id,$arrayMedia=[]){
        $media = new CommonFacilityRelationMedia();
        if(!empty($arrayMedia)){
            if(is_array($arrayMedia)){
                var_dump($arrayMedia); 
                foreach($arrayMedia as $item){
                    $checkRelation = CommonFacilityRelationMedia::find()->where(['page_id'=>$id])->one();
                    $media->page_id = $id;
                    $media->media_id = $item;
                    echo $item;
                    if($media->validate()){
                        $media->save(true);
                    }

                }
            }
        }
        else{
            return false;

        }

    }
    
}
