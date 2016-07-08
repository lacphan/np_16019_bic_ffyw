<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FontsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        'libs/font-awesome/css/font-awesome.min.css',
    ];
    public $cssOptions = [
        'type' => 'text/css',
    ];
}