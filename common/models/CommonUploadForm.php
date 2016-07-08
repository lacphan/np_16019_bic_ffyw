<?php
namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;

class CommonUploadForm extends Model
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
            $uploads = Yii::$app->uploadDir;
            $fileName = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $cnt = 1;
            while ( file_exists ( Yii::$app->uploadDir . DIRECTORY_SEPARATOR . $fileName ) ){
                $fileName =  $this->imageFile->baseName . $cnt . '.' . $this->imageFile->extension;
                $cnt++;
            }
            if($this->imageFile->saveAs($uploads.'/'.$fileName))
            {
                chmod(Yii::$app->uploadDir . DIRECTORY_SEPARATOR .$fileName, 0777);
                return $fileName;
            }
            return false;
        } else {
            return false;
        }
    }
}

?>