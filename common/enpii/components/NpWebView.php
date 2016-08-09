<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 3/10/16
 * Time: 2:23 PM
 */

namespace common\enpii\components;

use Yii;

class NpWebView extends \yii\web\View
{
    /**
     * set title for browser with provided string combined with application name
     * @param $browserTitle string title to be set
     * @return void
     */
    public function setBrowserTitle($browserTitle)
    {
        if (!empty(Yii::$app->name)) {
            $this->title = Yii::$app->name . ' - ' . $browserTitle;
        } else {
            $this->title = $browserTitle;
        }

    }
}