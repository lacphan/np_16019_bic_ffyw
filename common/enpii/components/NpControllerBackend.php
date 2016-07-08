<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 3/10/16
 * Time: 2:12 PM
 */

namespace common\enpii\components;

use yii\filters\AccessControl;

class NpControllerBackend extends NpController
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => null,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}