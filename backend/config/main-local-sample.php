<?php

$config = [

    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'lA_Zj09v7R-189AhjEtSgM1lpom5X1jT',
            'baseUrl' => '/admin',

        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '/admin',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'urlManagerFrontEnd' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],

    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'model' => [

                'class' => 'common\enpii\components\generator\model\Generator',
                'templates' => ['custom-model' => '@app/common/common/component/generator/model/default']
            ],
            'controller' => [
                'class' => 'common\enpii\components\generator\controller\Generator',
                'templates' => ['custom-controller' => '@app/common/common/component/generator/controller/default']
            ],
            'crud' => [
                'class' => 'common\enpii\components\generator\crud\Generator',

                'templates' => ['custom-crud' => '@app/common/common/component/generator/crud/default']
            ]

        ]
    ];
}

return $config;
