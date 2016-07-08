<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
     * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;
use yii;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/';
    public $css = [
        'libs/simple-line-icons/simple-line-icons.min.css',
        'libs/uniform/css/uniform.default.css',
        'libs/bootstrap-switch/css/bootstrap-switch.min.css',
        'libs/bootstrap-daterangepicker/daterangepicker.min.css',
        'libs/jquery-ui/jquery-ui.min.css',
        'libs/morris/morris.css',
        'libs/fullcalendar/fullcalendar.min.css',
        'libs/jqvmap/jqvmap/jqvmap.css',
        'libs/jquery-nestable/jquery.nestable.css',
        'libs/jquery-bar-rating-master/dist/themes/fontawesome-stars.css',
        'css/site.css',
        'css/components.min.css',
        'css/components.css',
        'css/plugins.min.css',
        'css/layout.min.css',
        'css/darkblue.min.css',
        'css/custom.min.css',
        'css/custom-modal.css',
        'css/main.css',
    ];
    public $js = [
        'libs/js.cookie.min.js',
        'libs/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'libs/jquery-slimscroll/jquery.slimscroll.min.js',
        'libs/jquery.blockui.min.js',
        'libs/uniform/jquery.uniform.min.js',
        'libs/bootstrap-switch/js/bootstrap-switch.min.js',
        'libs/moment.min.js',
        'libs/jquery-ui/jquery-ui.min.js',
        'libs/morris/morris.min.js',
        'libs/morris/raphael-min.js',
        'libs/jquery-bar-rating-master/dist/jquery.barrating.min.js',
        'libs/counterup/jquery.waypoints.min.js',
        'libs/counterup/jquery.counterup.min.js',
        'libs/amcharts/amcharts/amcharts.js',
        'libs/amcharts/amcharts/serial.js',
        'libs/amcharts/amcharts/pie.js',
        'libs/amcharts/amcharts/radar.js',
        'libs/amcharts/amcharts/themes/light.js',
        'libs/amcharts/amcharts/themes/patterns.js',
        'libs/amcharts/amcharts/themes/chalk.js',
        'libs/amcharts/ammap/ammap.js',
        'libs/amcharts/ammap/maps/js/worldLow.js',
        'libs/amcharts/amstockcharts/amstock.js',
        'libs/fullcalendar/fullcalendar.min.js',
        'libs/flot/jquery.flot.min.js',
        'libs/flot/jquery.flot.resize.min.js',
        'libs/flot/jquery.flot.categories.min.js',
        'libs/jquery-easypiechart/jquery.easypiechart.min.js',
        'libs/jquery.sparkline.min.js',
        'libs/jqvmap/jqvmap/jquery.vmap.js',
        'libs/jquery-nestable/jquery.nestable.js',
        'libs/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
        'libs/jqvmap/jqvmap/maps/jquery.vmap.world.js',
        'libs/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
        'libs/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        'libs/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
        'libs/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',

        'scripts/app.js',
        'scripts/dashboard.js',
        'scripts/layout.min.js',
        'scripts/demo.min.js',
        'scripts/quick-sidebar.min.js',
        'scripts/ui-nestable.js',
        'scripts/jquery.session.js',
        'scripts/jquery-confirm.js',
        'scripts/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
