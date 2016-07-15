<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets-enpii/global/plugins/select2/css/select2.min.css',
        '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic',
        'themes/default/css/bootstrap_base.css',
        'themes/default/css/fonts.css',
        'themes/default/libs/jquery-ui/jquery-ui.min.css',
        'themes/default/libs/timepicker/jquery.timepicker.css',
        'themes/default/css/main.css',
    ];
    public $js = [
        'assets-enpii/global/plugins/select2/js/select2.min.js',
        'themes/default/libs/jquery-ui/jquery-ui.min.js',
        'themes/default/libs/timepicker/jquery.timepicker.min.js',
        'themes/default/js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
