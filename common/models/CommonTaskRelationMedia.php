<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelle_task_relation_media".
 */
class CommonTaskRelationMedia extends \common\models\base\BaseTaskRelationMedia
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
