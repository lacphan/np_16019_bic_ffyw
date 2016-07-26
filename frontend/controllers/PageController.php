<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:34 AM
 */
namespace frontend\controllers;

use frontend\models\PageItem;
use yii\web\NotFoundHttpException;
class PageController extends FrontendController
{
    public function actionShowSingle($slug,$id = null) {
        if (is_readable($this->getViewPath() . '/' . $slug . '.php')) {
            if($id) {
                $model = $this->findModel($id);
                if($model) {
                    return $this->render($slug,[
                        'model'=> $model
                    ]);
                }
            }
            return $this->render($slug);
        } else {
            return $this->render('default');
        }
    }
    /**
     * @param $id
     * @return PageItem
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        /* @var $model PageItem */

        if (($model = PageItem::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}