<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/25/16
 * Time: 12:15 PM
 */

namespace frontend\controllers;


class ProductController extends FrontendController
{
        public function actionIndex() {
            $this->render('index');
        }
}
