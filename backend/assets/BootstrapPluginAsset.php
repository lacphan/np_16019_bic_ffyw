<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 11/16/15
 * Time: 10:16 AM
 */
namespace backend\assets;
use yii;
use yii\web\AssetBundle;

class BootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';
    public $js = [
        'js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}