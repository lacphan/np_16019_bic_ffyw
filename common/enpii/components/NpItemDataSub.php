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
trait NpItemDataSub {

    /**
     * Function for get current GMT time
     * @return string
     */
    public static function getGMTTime() {
        $dateGMT = new \DateTime(null, new \DateTimeZone("GMT"));
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

    /**
     * @param $modalClass() common\enpii\components\NpActiveRecord
     * @param $id
     */
    public function getPermalink($args = [], $id) {
        if(!empty($args)) {

        }
        $args = [
            'page/show-single',
            'slug' => $this->slug,
        ];
        $args[] = ['id' => $id];
        if(!empty($modalClass) && !empty($id)) {
            Yii::$app->urlManager->createUrl($args);
        }
    }

}