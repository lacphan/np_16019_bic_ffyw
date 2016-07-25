<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:34 AM
 */
namespace frontend\controllers;

use yii\web\NotFoundHttpException;
class ProductController extends FrontendController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionShowSingle($slug,$id = null) {
        return $this->render($slug);
    }

}