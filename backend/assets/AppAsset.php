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
    public $js = [
        'assets-enpii/global/plugins/js.cookie.min.js',
        'assets-enpii/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'assets-enpii/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'assets-enpii/global/plugins/jquery.blockui.min.js',
        'assets-enpii/global/plugins/uniform/jquery.uniform.min.js',
        'assets-enpii/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'assets-enpii/global/plugins/moment.min.js',
        'assets-enpii/global/plugins/jquery-ui/jquery-ui.min.js',
        'assets-enpii/global/plugins/morris/morris.min.js',
        'assets-enpii/global/scripts/datatable.js',
        'assets-enpii/global/plugins/datatables/datatables.min.js',
        'assets-enpii/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',

//        'assets-enpii/global/plugins/counterup/jquery.waypoints.min.js',
//        'assets-enpii/global/plugins/counterup/jquery.counterup.min.js',
//        'assets-enpii/global/plugins/amcharts/amcharts/amcharts.js',
//        'assets-enpii/global/plugins/amcharts/amcharts/serial.js',
//        'assets-enpii/global/plugins/amcharts/amcharts/pie.js',
//        'assets-enpii/global/plugins/amcharts/amcharts/radar.js',
//        'assets-enpii/global/plugins/amcharts/amcharts/themes/light.js',
//        'assets-enpii/global/plugins/amcharts/amcharts/themes/patterns.js',
//        'assets-enpii/global/plugins/amcharts/amcharts/themes/chalk.js',
//        'assets-enpii/global/plugins/amcharts/ammap/ammap.js',
//        'assets-enpii/global/plugins/amcharts/ammap/maps/js/worldLow.js',
//        'assets-enpii/global/plugins/amcharts/amstockcharts/amstock.js',
//        'assets-enpii/global/plugins/fullcalendar/fullcalendar.min.js',
//        'assets-enpii/global/plugins/flot/jquery.flot.min.js',
//        'assets-enpii/global/plugins/flot/jquery.flot.resize.min.js',
//        'assets-enpii/global/plugins/flot/jquery.flot.categories.min.js',
//        'assets-enpii/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js',
//        'assets-enpii/global/plugins/jquery.sparkline.min.js',
//        'assets-enpii/global/plugins/jqvmap/jqvmap/jquery.vmap.js',
//        'assets-enpii/global/plugins/jquery-nestable/jquery.nestable.js',
//        'assets-enpii/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
//        'assets-enpii/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js',
//        'assets-enpii/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
//        'assets-enpii/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
//        'assets-enpii/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
//        'assets-enpii/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
        'assets-enpii/global/plugins/jquery.session.js',
        'assets-enpii/global/plugins/jquery-confirm.js',
        'assets-enpii/global/plugins/select2/js/select2.full.min.js',
        'assets-enpii/global/scripts/app.js',
        'assets-enpii/pages/scripts/components-select2.min.js',
        'assets-enpii/pages/scripts/dashboard.js',
        'assets-enpii/layouts/layout/scripts/layout.min.js',
        'assets-enpii/layouts/layout/scripts/demo.min.js',
        'assets-enpii/layouts/global/scripts/quick-sidebar.min.js',
        'themes/default/js/main.js'
    ];
    public $baseUrl = '@web/';
    public $css = [
        'assets-enpii/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'assets-enpii/global/plugins/uniform/css/uniform.default.css',
        'assets-enpii/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'assets-enpii/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css',
        'assets-enpii/global/plugins/jquery-ui/jquery-ui.min.css',
        'assets-enpii/global/plugins/morris/morris.css',
        'assets-enpii/global/plugins/fullcalendar/fullcalendar.min.css',
        'assets-enpii/global/plugins/jqvmap/jqvmap/jqvmap.css',
        'assets-enpii/global/plugins/jquery-nestable/jquery.nestable.css',
        'assets-enpii/global/plugins/select2/css/select2.min.css',
        'assets-enpii/global/plugins/select2/css/select2-bootstrap.min.css',
        'assets-enpii/global/css/components.min.css',
        'assets-enpii/global/css/plugins.min.css',
        'assets-enpii/global/css/plugins-md.min.css',
        'assets-enpii/layouts/layout/css/layout.min.css',
        'assets-enpii/layouts/layout/css/themes/darkblue.min.css',
        'assets-enpii/layouts/layout/css/custom.min.css',
        'themes/default/css/main.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
