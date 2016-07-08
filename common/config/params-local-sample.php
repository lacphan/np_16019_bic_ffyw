<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 6/30/16 6:40 PM
 */

return [
    'adminEmail' => 'contact@enpii',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
    'formatter' =>
        [
            'class' => 'yii\i18n\Formatter',
            'dateFormat' => 'php:d-m-Y',
            'datetimeFormat' => 'php:d-m-Y H:i a',
            'timeFormat' => 'php:H:i A',
            'defaultTimeZone' OR 'timeZone' => 'Asia/Ho_Chi_Minh', //global date formats for display for your locale.
        ],
];