<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac - MWN
 * Date time: 6/27/16 4:11 PM
 */

namespace console\controllers;


use yii;
use common\enpii\components\NpControllerConsole;

class RbacController extends NpControllerConsole
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // add "loginBackend" permission
        $perm_loginBackend = $auth->createPermission('loginBackend');
        $perm_loginBackend->description = 'Login to Backend';
        $auth->add($perm_loginBackend);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $perm_loginBackend);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($admin, 1);
    }
}