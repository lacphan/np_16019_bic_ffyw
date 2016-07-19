<?php

namespace common\models;

use common\enpii\components\NpItemDataSub;
use yii;

/**
 * This is the model class for table "bic_ffyw_page_item".
 */
class CommonPageItem extends \common\models\base\BasePageItem
{
    use NpItemDataSub;
    public static function getSlugPage($id)
    {
        return static::findOne(['id' => $id])->slug;

    }
    public static function getPageContent($id)
    {
        return static::findOne(['id' => $id])->description;

    }

    /**
     * @return string
     * @param array $argArgs=[]
     */
    public function getPermalink($argArgs=[]){
        /**
         *  set $argArgs['locale'] default "en"
         */
        if (isset($argArgs['locale'])) {
            return Yii::$app->urlManager->createUrl(['page/show-single','locale' =>  $argArgs['locale'], 'slug' => $this->slug,'id'=>$this->id]);
        }
        return Yii::$app->urlManager->createUrl(['page/show-single','locale' => Yii::$app->params['pageLocale'], 'slug' => $this->slug,'id'=>$this->id]);

    }

    /**
     * Function for get locale from locale table
     * @return \yii\db\ActiveQuery
     */
    public function getLocale(){
        return $this->hasOne(CommonLocale::className(), ['id' => 'locale_id']);
    }

    /**
     * Function get PageItem with code and locale
     * @param $code
     * @param $locale
     * @return array|null|\yii\db\ActiveRecord
     * @var $localeItem CommonLocale
     */
    public static function findPageLocale($code,$locale) {
        $localeItem = CommonLocale::find()->where(['locale' => $locale])->one();
        return CommonPageItem::find()->where(['code' => $code, 'locale_id' => $localeItem->id])->one();

    }
}
