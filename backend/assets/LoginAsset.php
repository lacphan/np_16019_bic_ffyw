<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use common\enpii\components\NpAssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends NpAssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets-enpii/fonts/fonts.css',
        'assets-enpii/global/plugins/font-awesome/css/font-awesome.min.css',
        'assets-enpii/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'assets-enpii/global/plugins/uniform/css/uniform.default.css',
        'assets-enpii/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'assets-enpii/global/plugins/select2/css/select2.min.css',
        'assets-enpii/global/plugins/select2/css/select2-bootstrap.min.css',
        'assets-enpii/global/css/components-md.min.css',
        'assets-enpii/global/css/plugins-md.min.css',
        'assets-enpii/pages/css/login-4.min.css',
        'css/login.css',
    ];
    public $js = [
        'assets-enpii/global/plugins/respond.min.js',
        'assets-enpii/global/plugins/excanvas.min.js',
        'assets-enpii/global/plugins/js.cookie.min.js',
        'assets-enpii/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'assets-enpii/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'assets-enpii/global/plugins/jquery.blockui.min.js',
        'assets-enpii/global/plugins/uniform/jquery.uniform.min.js',
        'assets-enpii/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'assets-enpii/global/plugins/jquery-validation/js/jquery.validate.min.js',
        'assets-enpii/global/plugins/jquery-validation/js/additional-methods.min.js',
        'assets-enpii/global/plugins/select2/js/select2.full.min.js',
        'assets-enpii/global/plugins/backstretch/jquery.backstretch.min.js',
        'assets-enpii/global/scripts/app.min.js',
        'assets-enpii/pages/scripts/login-4.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
