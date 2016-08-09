<?php
/**
 * Created by PhpStorm.
 * User: hungtran
 * Date: 3/8/16
 * Time: 11:36 AM
 */

namespace common\enpii\components;

use Yii;
use yii\base\Component;

/**
 * Class NpPreload
 * @package 'dd/mm/yyy'enpii
 * @property string $locale The homepage URL.
 */
class NpPreload extends Component
{
    public $locale;

    /* @var $globalSettings array store global settings of application */
    public $globalSettings;

    // To-do: get personal setting of a user from db
    /* @var $personalSettings array store personal settings a user */
    public $personalSettings;

    /**
     * Init function of EnpiiPreload
     */
    public function init(){
        parent::init();
        if (empty($_GET['locale'])) {
            $this->locale = 'en';
        }
    }
    public function setLocale($locale) {
        $this->locale = $locale;
    }
}