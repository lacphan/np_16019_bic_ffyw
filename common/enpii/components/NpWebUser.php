<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\enpii\components;

use Yii;
use yii\web\User;


class NpWebUser extends User
{

    public function init()
    {
        parent::init();
        if(Yii::$app->session->has('loginFE')){
            $this->setIdentity(null);
        }

    }
}
