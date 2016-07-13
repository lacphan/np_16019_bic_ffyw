<?php
namespace frontend\models;


use common\models\CommonContestItem;
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
 */
class RegisterForm extends Model
{
    public $email;
    public $dateOfBirth;
    public $birthDate;
    public $birthMonth;
    public $birthYear;
    public $province;
    public $phoneNumber;
    public $parentFirstName;
    public $parentLastName;
    public $childFirstName;
    public $childLastInitial;
    public $age;
    public $uploadFile;
    public $verificationCode;
    public $agreeTerm;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['email', 'province', 'parentFirstName', 'parentLastName', 'phoneNumber', 'childFirstName', 'childLastInitial', 'age'], 'required'],
            [['email'], 'validateUsername'],
            [['age'],'integer', 'min' => 4,'max' => 16 ],
            [['birthDate'],'integer', 'min' => 1,'max' => 31,'message' => Yii::t('app','Require')],
            [['birthMonth'],'integer', 'min' => 1,'max' => 12 ,'message' => Yii::t('app','Require')],
            [['birthYear'],'integer', 'min' => 1970,'message' => Yii::t('app','Require')],
            ['verificationCode', ReCaptchaValidator::className(), 'secret' => '6LddpCQTAAAAAPU27Z1X3nwsVnNed-9aDrk5moSA'],
            [['birthDate', 'birthMonth', 'birthYear', 'agreeTerm'], 'required', 'message' => 'Require'],
            [['uploadFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxSize' => 5242880, 'tooBig' => 'Limit is 5MB'],
            [['email'], 'required'],
            [['email'], 'email'],

        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function register()
    {
        $this->uploadFile = UploadedFile::getInstance($this, 'uploadFile');
        if ($this->validate()) {

            $user = new User();
            $profile = new UserProfile();
            $contestSession = new ContestSession();
            $attachment = new Attachment();


            $user->username = $this->email;
            $user->email = $this->email;
            $user->first_name = $this->parentFirstName;
            $user->last_name = $this->parentLastName;
            $user->setCreatedDate();
            $user->setUpdatedDate();
            $user->setPublishedDate();
            $user->creator_id = 1;

            $user->generateAuthKey();
          
            $flag = $user->save();

            if ($flag) {
                $auth = Yii::$app->authManager;
                $standard = $auth->getRole('standard-member');
                $auth->assign($standard, $user->id);
            }

            if ($flag) {
                $profile->date_of_birth = $this->birthYear . '-' . $this->birthMonth . '-' . $this->birthDate;
                $profile->phone_number = $this->phoneNumber;
                $profile->province = $this->province;
                $profile->parent_first_name = $this->parentFirstName;
                $profile->parent_last_name = $this->parentLastName;
                $profile->id = $user->id;
                $flag = $profile->save();
            }


          
            if ($this->uploadFile) {
                $attachment = Attachment::uploadFile($this->uploadFile,'image');
            }

            if ($flag) {
                $contestSession->user_id = $user->id;
                $contestSession->contest_item_id = ContestItem::getWeek()->id;
                $contestSession->user_email = $this->email;
                $contestSession->first_name = $this->childFirstName;
                $contestSession->last_name = $this->childLastInitial;
                $contestSession->attachment_id = $attachment->id;
                $contestSession->setAge($this->age);
                $contestSession->save();
            }

            if ($flag) {
                return $user;
            }

        }

        return null;
    }


    public function validateUsername()
    {
        $user = User::findByUsername($this->email);
        if($user && $user->is_deleted == 0) {
            $this->addError('email', 'Email already registered.');
        }
    }
}
