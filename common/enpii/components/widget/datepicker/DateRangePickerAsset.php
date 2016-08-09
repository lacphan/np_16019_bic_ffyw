<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 12/4/15
 * Time: 10:39 AM
 */

namespace common\enpii\components\widget\datepicker;

use common\enpii\components\NpAssetBundle;

class DateRangePickerAsset extends NpAssetBundle
{
    public $baseUrl = '@web';
    public $css = [
        'libs/bootstrap-daterangepicker/daterangepicker-bs2.css'
    ];
    public $depends = [
        'common\enpii\components\widget\DatePicker\DatePickerAsset'
    ];
}