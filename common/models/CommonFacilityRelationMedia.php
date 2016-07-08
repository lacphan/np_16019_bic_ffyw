<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_facility_relation_media".
 * @property $attachment CommonAttachment
 */
class CommonFacilityRelationMedia extends \common\models\base\BaseFacilityRelationMedia
{
    public $deleteImg;
    public function getAttachment() {
        return $this->hasOne(CommonAttachment::className(), ['id' => 'media_id']);
    }
    public static function deleteByIDs($deleteByIDs) {
        foreach ($deleteByIDs as $ID) {
            $relation =  static::findOne(['id' => $ID]);
            $attachment = CommonAttachment::findOne(['id' => $relation->media_id]);
            $attachment->deleteImages();
            $attachment->delete();
            $relation->delete();
        }
        return true;
    }
}
