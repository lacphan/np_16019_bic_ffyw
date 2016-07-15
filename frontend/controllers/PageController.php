<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:34 AM
 */
namespace frontend\controllers;

use common\enpii\components\NpController;

class PageController extends NpController
{
    public function actionShowSingle($slug) {
        return $this->render($slug);
    }
}