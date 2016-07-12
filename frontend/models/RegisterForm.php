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
 */
class RegisterForm extends Model
{
    public $email;
    public $password;
    public $passwordConfirm;
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
            ['verificationCode', ReCaptchaValidator::className(), 'secret' => '6LddpCQTAAAAAPU27Z1X3nwsVnNed-9aDrk5moSA'],
            [['birthDate', 'birthMonth', 'birthYear', 'agreeTerm'], 'required', 'message' => 'Require'],
            [['uploadFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['password', 'email'], 'required'],
            [['email'], 'email'],
            ['password', 'string', 'min' => 6],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function register()
    {

        if ($this->validate()) {

            $user = new User();
            $profile = new UserProfile();
            $contestSession = new ContestSession();
            $attachment = new Attachment();
            $uploadForm = new UploadForm();

            $user->username = $this->email;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->first_name = $this->parentFirstName;
            $user->last_name = $this->parentLastName;
            $user->setCreatedDate();
            $user->setUpdatedDate();
            $user->setPublishedDate();
            $user->creator_id = 1;

            $user->generateAuthKey();
//            $flag = $user->save();
            $flag = 0;

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


            $this->uploadFile = UploadedFile::getInstance($this, 'uploadFile');
          
            if ($this->uploadFile) {
                $fileName = $this->upload();
                if($fileName){
                    $attachment->prepareFile($fileName);
                    $attachment->setCreatedDate();
                    $attachment->setUpdatedDate();
                    $attachment->save();
                }
            }

            $attachment->save();

            if ($flag) {
                $contestSession->user_id = $user->id;
                $contestSession->contest_item_id = 1;
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

    public function upload()
    {

        $uploads = Yii::$app->uploadDir;

        $fileName = $this->uploadFile->baseName . '.' . $this->uploadFile->extension;
        $cnt = 1;
        while ( file_exists ( Yii::$app->uploadDir . DIRECTORY_SEPARATOR . $fileName ) ){
            $fileName =  $this->uploadFile->baseName . $cnt . '.' . $this->uploadFile->extension;
            $cnt++;
        }
        if($this->uploadFile->saveAs($uploads.'/'.$fileName))
        {
            chmod(Yii::$app->uploadDir . DIRECTORY_SEPARATOR .$fileName, 0777);
            return $fileName;
        }

        return false;
      
    }

    public function validateUsername($attribute, $params)
    {
        if (!User::validateUserNameIsDeleted($this->email)) {
            $this->addError('email', 'Email already registered.');
        }
    }
}
