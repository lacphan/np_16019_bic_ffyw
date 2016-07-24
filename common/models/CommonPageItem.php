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

    public $pageOption = ['locale' => 'en'];

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
     *  ['code', 'locale' => 'fr_FR', 'param2' => 'value2']
     * @param string|array $params
     */
    public function getPermalink($params){

        $params = (array) $params;

        $arg = array_merge($this->pageOption,$params);


        $page = self::findPageLocale($arg[0],$arg['locale']);


        if ($page) {
            return Yii::$app->urlManager->createUrl(['page/show-single','locale' =>  $arg['locale'], 'slug' => $page->slug,'id'=> $page->id]);
        }
        return Yii::$app->urlManager->createUrl(['page/show-single','locale' => $arg['locale'], 'slug' => $this->slug,'id'=>$this->id]);

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
     * @return array|null| CommonPageItem
     * @var $localeItem CommonLocale
     */
    public static function findPageLocale($code,$locale = null) {
        if (!$locale) $locale = DEFAULT_LOCALE;
        $localeItem = CommonLocale::find()->where(['locale' => $locale])->one();
        $page = CommonPageItem::find()->where(['code' => $code, 'locale_id' => $localeItem->id])->one();
        if($page) {
            return $page;
        }
        return CommonPageItem::find()->where(['code' => $code])->one();
    }
}
