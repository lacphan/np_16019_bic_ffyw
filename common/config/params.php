<?php
return [
    'defaultLocale' => 'en_US',
    'uploadPath' => __DIR__.'/../../uploads',
    'formatter' =>
        [
            'class' => 'yii\i18n\Formatter',
            'dateFormat' => 'php:d-m-Y',
            'datetimeFormat' => 'php:d-m-Y H:i a',
            'timeFormat' => 'php:H:i A',
            'defaultTimeZone' OR 'timeZone' => 'America/Toronto', //global date formats for display for your locale.
        ],
    'viewDateFormat' => 'Y-m-d'
];
