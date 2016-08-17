<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use common\helpers\HashHelper;
/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = false;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            [['password'], 'validatePassword'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || empty($user->password_hash)  || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }

        }

    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        
        if ($this->validate()) {
            $session = Yii::$app->session;
            if ($session->has('loginFE')) {
                $session->remove('loginFE');
            }
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 7 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $oldUser = User::findOne(1);
//            var_dump(HashHelper::decrypt($oldUser->username));die();
            $user =  User::findByUsername($this->username);
            if($user) {
                $this->_user = $user;
            } else {
                $this->_user = User::findByUsername(HashHelper::encrypt($this->username));
            }


        }

        return $this->_user;
    }
}
