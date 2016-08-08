Yii 2 Advanced Project Template
===============================

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/                     contains shared configurations
        bootstrap.php           set aliases for config files
        main.php                store global settings of application
        main-local.php          store common settings of application only on current machine
                                exclude from the repo
        main-local-sample.php   sample settings for the machine which runs the application
                                this file for generating main-local.php
        params.php              store global params of application
        params-local.php        store global params of application only on current machine
                                exclude from the repo
        params-local-sample.php sample params for the machine which runs the application
                                this file for generating params-local.php

    mail/               contains view files for e-mails (templates for send email to users)
    models/             contains model classes used in both backend and frontend
                            model classes here extended from base model
        base/               contains basic model classes for all ActiveRecords
                            do not manually update these files, generated using Code generator
    widgets/            widgets used for both frontend, backend

console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
        main.php                store global settings of backend
        main-local.php          store common settings of backend only on current machine
                                exclude from the repo
        main-local-sample.php   sample settings for the machine which runs the backend
                                this file for generating main-local.php
        params.php              store global params of backend
        params-local.php        store global params of backend only on current machine
                                exclude from the repo
        params-local-sample.php sample params for the machine which runs the backend
                                this file for generating params-local.php

    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```
DEPLOY INSTRUCTION
-------------------
```

For deploy bic-ffyw, please config setting in these file:

environment.php 
    ===> Change define vendor path to your vendor folder location. EX: defined('VENDOR_PATH') or define('VENDOR_PATH', dirname(__FILE__) . '/vendor');
--------------------    
common/config/main-local.php 
    ===> Setting database connection.
         EX: 'components' => [
                'db' => [
                    'class' => 'yii\db\Connection',
                    'dsn' => 'mysql:host=127.0.0.1;dbname=bic_ffyw',
                    'username' => 'testuser',
                    'password' => '****',
                    'charset' => 'utf8',
                    'tablePrefix' => 'bic_ffyw_'
                ],
    ===> Setting base upload url
         EX: 'components' => [
                'uploadUrl' => [
                         'class' => 'yii\web\UrlManager',
                         'baseUrl' => '/uploads',
                         'enablePrettyUrl' => true,
                         'showScriptName' => false,
                     ],
--------------------         
frontend/config/main-local.php 
    ===> Setting base url
         EX:  'components' => [
                     'request' => [                       
                         'baseUrl' => '',
                     ],
--------------------         
backend/config/main-local.php 
===> Setting base url
    EX:  'components' => [
              'request' => [
                        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
                        'cookieValidationKey' => 'lA_Zj09v7R-189AhjEtSgM1lpom5X1jT',
                        'baseUrl' => '/admin',
            
                    ],

```