<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 12/4/15
 * Time: 10:32 AM
 */
namespace common\enpii\components\widget\datepicker;
use common\enpii\components\NpAssetBundle;
/**
 * DatePickerLanguageAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\datepicker
 */
class DatePickerLanguageAsset extends NpAssetBundle
{
    public $sourcePath = '@vendor/bower/bootstrap-datepicker/dist/locales';
    public $depends = [
        'dosamigos\datepicker\DateRangePickerAsset'
    ];
}

