<?php

namespace common\models;
use backend\models\Attachment;
use common\enpii\components\NpItemDataSub;
use yii;
use yii\helpers\Json;
use yii\web\UploadedFile;
/**
 * @property $arrSize
 * @property $fileUpload
 * This is the model class for table "np_attachment".
 */
class CommonAttachment extends \common\models\base\BaseAttachment
{
    use NpItemDataSub;

    public $arrSize;

    /**
     * @var UploadedFile
     */
    public $fileUpload;

    public function __construct()
    {
        parent::__construct();
        $this->arrSize = [
            'large' => ['width' => 1024, 'height' => 1024, 'crop' => false],
            'medium' => ['width' => 300,'height' => 300, 'crop' => false],
            'thumbnail' => [ 'width' => 150,'height' => 150,'crop' => true]
        ];
    }

    public function prepareFile($file) {
        $fileLocation = Yii::$app->uploadDir . DIRECTORY_SEPARATOR . $file;
        $pathParts = pathinfo($fileLocation);
        $sizeDetect = [];
        $imageSize = getimagesize($fileLocation);
        $sizeDetect[] = [
            'full' => [
                'width' => $imageSize[0],
                'height' => $imageSize[1]
            ]
        ];
        foreach ($this->arrSize as $key => $size) {
            $newFileName = $pathParts['filename'] . "-" . $size['width'] . "x" . $size['height'] . "." . $pathParts['extension'];
            $newFile =  Yii::$app->uploadDir . DIRECTORY_SEPARATOR . $newFileName;


            if($imageSize[0] > $size['width'] && $imageSize[1] > $size['height']) {
                if (!copy($fileLocation, $newFile)) {
                    echo "failed to copy";
                } else {
                    chmod($newFile, 0777);
                }
                $image=Yii::$app->image->load($newFile);
                if($size['crop']) {
                    if($imageSize[0] > $imageSize[1]) {
                        $image->crop($imageSize[1], $imageSize[1]);
                        $image->resize($size['width'], $size['height']);
                    } else if($imageSize[0] < $imageSize[1]) {
                        $image->crop($imageSize[0], $imageSize[0]);
                        $image->crop($size['width'], $size['height']);
                    } else {
                        $image->resize($size['width'], $size['height']);
                    }
                } else {
                    $image->resize($size['width'], $size['height']);
                }
                $image->save();
                $imageSize = getimagesize($image->file);
                $sizeDetect[] = [
                    $key => [
                        'width' => $imageSize[0],
                        'height' => $imageSize[1]
                    ]
                ];
            }
        }

        $this->image = $file;
        $this->setSize($sizeDetect);
    }

    public function deleteImages()
    {
        $fileLocation = Yii::$app->uploadDir . DIRECTORY_SEPARATOR . $this->image;
        $pathParts = pathinfo($fileLocation);
        foreach ($this->arrSize as $key => $size) {
            $item = $pathParts['filename'] . "-" . $size['width'] . "x" . $size['height'] . "." . $pathParts['extension'];
            $itemLocation =  Yii::$app->uploadDir . DIRECTORY_SEPARATOR . $item;
            if(file_exists($itemLocation)) {
                unlink($itemLocation);
            }
        }
        if(file_exists($fileLocation)) {
            unlink($fileLocation);
        }
        ;    }

    public function getSize() {
        $originSizes =  Json::decode($this->size);
        $prepareSize = [];
        foreach ($originSizes as $key => $sizes) {

            $prepareSize[array_keys($sizes)[0]] = array_values($sizes)[0];

        }
        return $prepareSize;
    }

    public function setSize($arrSize) {
        $this->size = Json::encode($arrSize);
    }

    public static function findMediaByID($id){
        return static::find()->where(['id'=>$id])->all();
    }

    public function getAttachmentImage($size = null) {
        $imageSizes = $this->getSize();


        if(array_key_exists($size,$imageSizes)) {
            $imageSize = $imageSizes[$size];
            $image = '<img src="'. $this->getAttachmentUrl($size).'" width="'.$imageSize['width'].'" height="'.$imageSize['height'].'">';
            return $image;
        }
        $imageSize = $imageSizes['full'];
        $image = '<img src="'. $this->getAttachmentUrl().'" width="'.$imageSize['width'].'" height="'.$imageSize['height'].'">';
        return $image;

    }

    public function getAttachmentUrl($size = null) {
        $imageSizes = $this->getSize();
        if(array_key_exists($size,$imageSizes)) {
            $imageSize = $imageSizes[$size];
            $imageParts = explode(".",$this->image);

            return Yii::$app->uploadUrl->baseUrl . '/' . $imageParts[0] . '-' . $imageSize['width'] . 'x' . $imageSize['height'] . '.' . $imageParts[1];
        }


        return Yii::$app->uploadUrl->baseUrl . '/' . $this->image;
    }

    public static function uploadFile($attribute,$type = 'image') {
        $attachment = new Attachment();
        $attachment->fileUpload = $attribute;
        if ($attachment->fileUpload && $type == 'image') {
            $fileName = $attachment->upload();
            if($fileName){
                $attachment->prepareFile($fileName);
                $attachment->setCreatedDate();
                $attachment->setUpdatedDate();
                $attachment->save();
            }
        }
        if($attachment->save()) {
            return $attachment;
        }
     
        return false;
    }
    public function upload()
    {

        $uploads = Yii::$app->uploadDir;

        $fileName = $this->fileUpload->baseName . '.' . $this->fileUpload->extension;
        $cnt = 1;
        while ( file_exists ( Yii::$app->uploadDir . DIRECTORY_SEPARATOR . $fileName ) ){
            $fileName =  $this->fileUpload->baseName . $cnt . '.' . $this->fileUpload->extension;
            $cnt++;
        }
        if($this->fileUpload->saveAs($uploads.'/'.$fileName))
        {
            chmod(Yii::$app->uploadDir . DIRECTORY_SEPARATOR .$fileName, 0777);
            return $fileName;
        }

        return false;

    }
}
