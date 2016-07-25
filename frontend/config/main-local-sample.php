<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 6/29/16 5:43 PM
 */

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ndoojpBv-kdTZYGWHho51g5K-i-i2IFy',
            'baseUrl' => '',
        ],
        'urlManager' => [
            'class'=> 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'baseUrl' => '',
            'rules'=>[
                '/<locale:\w+>/product' => 'product',
                '/<locale:\w+>/product/<slug:\w[\w\-]+>/' => 'product/show-single',
                '/<locale:\w+>/<alias:index|register|submission|gallery>' => 'site/<alias>',
                '/<locale:\w+>' => '',
                '/<locale:\w+>/<slug:\w[\w\-]+>/<id:\d+>' => 'page/show-single',
                '/<locale:\w+>/<slug:\w[\w\-]+>/' => 'page/show-single',

            ]
        ],
    ],

];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
