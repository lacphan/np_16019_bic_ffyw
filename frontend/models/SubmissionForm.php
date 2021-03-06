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
    public $attachment_id;


    const _SUBMIT = 'submit';
    const _UPLOAD = 'upload';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['childFirstName', 'childLastInitial', 'age', 'email'], 'required'],
            [['attachment_id'], 'required', 'message' => Yii::t('yii', 'Please upload a file.')],
            [['childLastInitial'],'match', 'pattern' => '/[a-zA-Z]/','message' => Yii::t('app','Only from a-z A-Z')],
            [['childLastInitial'],'string', 'max' => 1,'message' => Yii::t('app','Maximum of one alpha character can be entered')],
            [['age'],'integer', 'min' => 6,'max' => 18, 'tooSmall' => Yii::t(_NP_TEXT_DOMAIN,'Must be 6 years or older'),'tooBig' => Yii::t(_NP_TEXT_DOMAIN,'Age must be no greater than 18')],
            [['rotateDegree'], 'integer'],
            [['agreeTerm'], 'required','requiredValue' => 1,
                'message' =>  Yii::t(_NP_TEXT_DOMAIN, 'Please accept the official rules')
            ],
            ['verificationCode', ReCaptchaValidator::className(), 'secret' => Yii::$app->params['googleCaptcha']['secretKey']],
            [['uploadFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpeg, jpg', 'maxSize' => 5*1024*1024, 'tooBig' => 'Limit is 5MB', 'on' => static::_UPLOAD],
            ['isLimitSubmission','string', 'message' => Yii::t('app','Weekly Limit Reached')]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'childFirstName' => Yii::t(_NP_TEXT_DOMAIN, "Your Child's Name"),
            'childLastInitial' => Yii::t(_NP_TEXT_DOMAIN, "Your Child's Last Initial"),
            'age' => Yii::t(_NP_TEXT_DOMAIN, "Age"),
            'verificationCode' => Yii::t(_NP_TEXT_DOMAIN, "Verification Code"),
        ];
    }

    /**
     * Signs user up.
     * @return User|null the saved model or null if saving fails
     */
    public function submission()
    {
        if ($this->validate()) {

            $user = User::findByUsername($this->email);
            $contestSession = new ContestSession();


            $contestSession->user_id = $user->id;
            $contestSession->contest_item_id = ContestItem::getWeek()->week_number;
            $contestSession->user_email = $this->email;
            $contestSession->first_name = $this->childFirstName;
            $contestSession->last_name = $this->childLastInitial;
            $contestSession->attachment_id = $this->attachment_id;
            $contestSession->setCreatedDate();
            $contestSession->setUpdatedDate();
            $contestSession->creator_id = 1;
            $contestSession->is_encrypted = 1;
            $contestSession->setAge($this->age);
            if(Yii::$app->language == 'fr_FR') {
                $contestSession->locale_id = 3;
            }
            $contestSession->save();
            
            return $user;


        }

        return null;
    }

}
