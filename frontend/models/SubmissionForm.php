<?php
namespace frontend\models;

use backend\models\User;
use yii\base\Model;
use yii;
use himiklab\yii2\recaptcha\ReCaptchaValidator;
use yii\web\UploadedFile;
/**
 * Signup form
 * @property $email;
 * @property $password;
 * @property $dateOfBirth;
 * @property $birthDate;
 * @property $birthMonth;
 * @property $birthYear;
 * @property $province;
 * @property $phoneNumber;
 * @property $parentFirstName;
 * @property $parentLastName;
 * @property $childFirstName;
 * @property $childLastInitial;
 * @property $age;
 * @property $uploadFile;
 * @property $verificationCode;
 *  @property $rotateDegree;
 */
class SubmissionForm extends Model
{
    public $email;
    public $childFirstName;
    public $childLastInitial;
    public $age;
    public $uploadFile;
    public $verificationCode;
    public $agreeTerm;
    public $rotateDegree;
    public $isLimitSubmission;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['childFirstName', 'childLastInitial', 'age', 'email','agreeTerm'], 'required'],
            [['childLastInitial'],'match', 'pattern' => '/[a-zA-Z]/','message' => Yii::t('app','Only from a-z A-Z')],
            [['childLastInitial'],'string', 'max' => 1,'message' => Yii::t('app','Maximum of one alpha character can be entered')],
            [['age'],'integer', 'min' => 6,'max' => 18 ],
            [['rotateDegree'], 'integer'],
            ['verificationCode', ReCaptchaValidator::className(), 'secret' => '6LddpCQTAAAAAPU27Z1X3nwsVnNed-9aDrk5moSA'],
            [['uploadFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxSize' => 5242880, 'tooBig' => 'Limit is 5MB'],
            ['isLimitSubmission','string', 'message' => Yii::t('app','Weekly Limit Reached')]
        ];
    }

    /**
     * Signs user up.
     * @return User|null the saved model or null if saving fails
     */
    public function submission()
    {
        $this->uploadFile = UploadedFile::getInstance($this, 'uploadFile');

        if ($this->validate()) {

            $user = User::findByUsername($this->email);
            $contestSession = new ContestSession();
            $attachment = new Attachment();

            if ($this->uploadFile) {

                $attachment = Attachment::uploadFile($this->uploadFile,'image');

            }

            $contestSession->user_id = $user->id;
            $contestSession->contest_item_id = ContestItem::getWeek()->id;
            $contestSession->user_email = $this->email;
            $contestSession->first_name = $this->childFirstName;
            $contestSession->last_name = $this->childLastInitial;
            $contestSession->attachment_id = $attachment->id;
            $contestSession->setCreatedDate();
            $contestSession->setUpdatedDate();
            $contestSession->creator_id = 1;
            $contestSession->setAge($this->age);
            $contestSession->save();

            if($this->rotateDegree != 0) {
                $attachment->rotateImage($this->rotateDegree);
            }
            return $user;


        }

        return null;
    }
  
}
