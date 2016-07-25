<?php
/**
 * Created by PhpStorm.
 * User: lacphan
<<<<<<< HEAD
 * Date: 7/25/16
 * Time: 12:15 PM
 */

namespace frontend\controllers;

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

