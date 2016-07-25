<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 3/14/16
 * Time: 4:16 PM
 * Store function of Item model
 */
namespace common\enpii\components;
use Yii;
use DateTime;
use DateTimeZone;
trait NpItemDataSub {

    /**
     * Function for get current GMT time
     * @return string
     */
    public static function getGMTTime() {
        $dateGMT = new DateTime(null, new DateTimeZone("GMT"));
        return $dateGMT->format('Y-m-d H:i:s');
    }

    /**
     * Function for set created date of Item modal
     */
    public function setCreatedDate() {
        $this->created_at = NpItemDataSub::getGMTTime();
    }

    /**
     * Function for set updated date of Item modal
     */
    public function setUpdatedDate() {
        $this->updated_at =  NpItemDataSub::getGMTTime();
    }

    /**
     * Function for set updated date of Item modal
     */
    public function setPublishedDate() {
        $this->published_at =  NpItemDataSub::getGMTTime();
    }


    public static function convertToLocalTime($gtmTime) {
        return Yii::$app->formatter->asDatetime($gtmTime);
    }

    public static function convertToGMTTime($localTime) {
        date_default_timezone_set(Yii::$app->formatter->timeZone);
        $dateGMT = new DateTime($localTime);
        $dateGMT->setTimezone(new DateTimeZone("GMT"));
        return $dateGMT->format('Y-m-d H:i:s');
    }
}