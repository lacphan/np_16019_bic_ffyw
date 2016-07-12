<?php
namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {

        if ($this->validate()) {
            $uploads = Yii::$app->params['uploadPath'];
            $fileName = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            if($this->imageFile->saveAs($uploads.'/'.$fileName))
            {
                return $fileName;
            }
            return false;
        } else {
            return false;
        }
    }
}

?>