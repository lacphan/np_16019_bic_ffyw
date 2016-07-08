<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "np_attachment".
 */
class Attachment extends \common\models\CommonAttachment
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['title', 'size', 'created_at'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title','image', 'caption', 'description'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }
    public static function findMediaByID($id){
        return static::find()->where(['id'=>$id])->all();
    }
}
