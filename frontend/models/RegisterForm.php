<?php
namespace frontend\models;


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
 * @property $rotateDegree;
 */
class RegisterForm extends Model
{
    public $email;
    public $emailConfirm;
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
    public $rotateDegree;

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => Yii::t(_NP_TEXT_DOMAIN, "Email"),
            'emailConfirm' => Yii::t(_NP_TEXT_DOMAIN, "Confirm Email"),
            'parentFirstName' => Yii::t(_NP_TEXT_DOMAIN, "Parent's First Name"),
            'parentLastName' => Yii::t(_NP_TEXT_DOMAIN, "Parents Last Name"),
            'childFirstName' => Yii::t(_NP_TEXT_DOMAIN, "Your Child's Name"),
            'childLastInitial' => Yii::t(_NP_TEXT_DOMAIN, "Your Child's Last Initial"),
            'phoneNumber' => Yii::t(_NP_TEXT_DOMAIN, "Phone Number"),
            'birthDate' => Yii::t(_NP_TEXT_DOMAIN, "Date"),
            'birthMonth' => Yii::t(_NP_TEXT_DOMAIN, "Month"),
            'birthYear' => Yii::t(_NP_TEXT_DOMAIN, "Year"),
            'age' => Yii::t(_NP_TEXT_DOMAIN, "Age"),
        ];
    }
    public function rules()
    {
        return [

            [['email','emailConfirm', 'province', 'parentFirstName', 'parentLastName', 'phoneNumber', 'childFirstName', 'childLastInitial'], 'required','message'=>'{attribute} '.Yii::t(_NP_TEXT_DOMAIN, 'is a mandatory field')],
            [['email'], 'validateUsername'],
            [['emailConfirm'], 'email'],
            [['rotateDegree'], 'integer'],
            [['emailConfirm'], 'compare', 'compareAttribute'=>'email', 'message'=> Yii::t(_NP_TEXT_DOMAIN,"Email does not match")],
            [['phoneNumber'],'integer'],
            [['phoneNumber'],'string','min'=>10,'max' => 10,'tooShort' => Yii::t(_NP_TEXT_DOMAIN,'Phone must contain 10 digits'),'tooLong' => Yii::t(_NP_TEXT_DOMAIN,'Phone must contain 10 digits')],
            [['childLastInitial'],'match', 'pattern' => '/[a-zA-Z]/','message' => Yii::t(_NP_TEXT_DOMAIN,'Only from a-z A-Z')],
            [['childLastInitial'],'string', 'max' => 1,'message' => Yii::t(_NP_TEXT_DOMAIN,'Maximum of one alpha character can be entered')],
            [['age'],'integer', 'min' => 6,'max' => 18, 'tooSmall' => Yii::t(_NP_TEXT_DOMAIN,'Must be 6 years or older'),'tooBig' => Yii::t(_NP_TEXT_DOMAIN,'Age must be no greater than 18')],
            [['birthDate'],'integer', 'min' => 1,'max' => 31,'message' => Yii::t(_NP_TEXT_DOMAIN,'Require')],
            [['birthMonth'],'integer', 'min' => 1,'max' => 12 ,'message' => Yii::t(_NP_TEXT_DOMAIN,'Require')],
            [['birthYear'],'integer', 'min' => 1905, 'max' => 1998 ,'message' => Yii::t(_NP_TEXT_DOMAIN,'Please enter a valid').' {attribute}'],
            ['verificationCode', ReCaptchaValidator::className(), 'secret' => '6LddpCQTAAAAAPU27Z1X3nwsVnNed-9aDrk5moSA'],
            [['birthDate', 'birthMonth', 'birthYear', 'agreeTerm'], 'required',
                'message' =>Yii::t(_NP_TEXT_DOMAIN, 'Require')
            ],
            [['uploadFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg',  'maxSize' => 5242880, 'tooBig' => 'Limit is 5MB'],
            [['email'], 'required'],
            [['email'], 'email'],
            [['age'], 'required', 'message'=>'{attribute} '.Yii::t(_NP_TEXT_DOMAIN, 'is a mandatory field')],

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

            $flag = 1;

            if ($flag) {
                $profile->date_of_birth = $this->birthYear . '-' . $this->birthMonth . '-' . $this->birthDate;
                $profile->phone_number = $this->phoneNumber;
                $profile->province = $this->province;
                $profile->parent_first_name = $this->parentFirstName;
                $profile->parent_last_name = $this->parentLastName;
                $flag = $profile->save();
            }

            if($flag) {
                $user->username = $this->email;
                $user->email = $this->email;
                $user->first_name = $this->parentFirstName;
                $user->last_name = $this->parentLastName;
                $user->profile_id = $profile->id;
                $user->setCreatedDate();
                $user->setUpdatedDate();
                $user->setPublishedDate();
                $user->creator_id = 1;

                $user->generateAuthKey();

                $flag = $user->save();
            }
            if ($flag) {
                $auth = Yii::$app->authManager;
                $standard = $auth->getRole('standard-member');
                $auth->assign($standard, $user->id);
            }


            if ($this->uploadFile) {

                $attachment = Attachment::uploadFile($this->uploadFile,'image');

            }

            if ($flag) {
                $contestSession->user_id = $user->id;
                $contestSession->contest_item_id = ContestItem::getWeek()->week_number;
                $contestSession->user_email = $this->email;
                $contestSession->first_name = $this->childFirstName;
                $contestSession->last_name = $this->childLastInitial;
                $contestSession->attachment_id = $attachment->id;
                $contestSession->setCreatedDate();
                $contestSession->setUpdatedDate();
                $contestSession->creator_id = 1;
                $contestSession->setAge($this->age);
                $contestSession->save();
            }

            if($this->rotateDegree != 0) {
                $attachment->rotateImage($this->rotateDegree);
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
