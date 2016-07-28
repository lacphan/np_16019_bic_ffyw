<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use yii;
use himiklab\yii2\recaptcha\ReCaptchaValidator;
/**
 * Signup form
 */
class EmailSubmission extends Model
{
    public $email;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['email'],'required','message' => Yii::t(_NP_TEXT_DOMAIN,'Enter your email address to participate')],
            [['email'],'email'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function isEmailExists()
    {
        if ($this->validate()) {
            $user = User::findByUsername($this->email);
            return $user;
        }
        return null;
    }
}
