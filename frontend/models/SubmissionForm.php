<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;
use himiklab\yii2\recaptcha\ReCaptchaValidator;
/**
 * Signup form
 */
class SubmissionForm extends Model
{
    public $email;
    public $password;
    public $dateOfBirth;
    public $province;
    public $phoneNumber;
    public $parentFirstName;
    public $parentLastName;
    public $childFirstName;
    public $childLastInitial;
    public $age;
    public $uploadFile;
    public $verificationCode;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['childFirstName','childLastInitial','age','uploadFile'],'required'],
            ['verificationCode', ReCaptchaValidator::className(), 'secret' => '6LddpCQTAAAAAPU27Z1X3nwsVnNed-9aDrk5moSA'],
        ];
    }

    /**
     * Signs user up.
     * @return User|null the saved model or null if saving fails
     */
    public function submission()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
