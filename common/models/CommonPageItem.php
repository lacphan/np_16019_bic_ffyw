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
     *  ['code', 'locale' => 'fr_FR', 'param2' => 'value2']
     * @param string|array $params
     */
    public static function getPermalink($params){

        $params = (array) $params;

        $locale = Yii::$app->request->get('locale') ? Yii::$app->request->get('locale') : DEFAULT_LOCALE;

        $arg = array_merge($params);

        $page = self::findPageLocale($arg[0],$locale);

        if ($page) {
            if($locale != DEFAULT_LOCALE) {
                return Yii::$app->urlManager->createUrl(['page/show-single','locale' =>  $locale, 'slug' => $page->slug,'id'=> $page->id]);
            }
            return Yii::$app->urlManager->createUrl(['page/show-single', 'slug' => $page->slug,'id'=> $page->id]);
        }
        if($locale != DEFAULT_LOCALE) {
            return Yii::$app->urlManager->createUrl(['page/show-single','locale' => $locale , 'slug' => $arg[0]]);
        }
        return Yii::$app->urlManager->createUrl(['page/show-single', 'slug' => $arg[0]]);

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
    public static function getContentByCode($code,$locale = null){
        if (!$locale) $locale = DEFAULT_LOCALE;
        $localeItem = CommonLocale::find()->where(['locale' => $locale])->one();
        $content = CommonPageItem::find()->where(['code' => $code, 'locale_id' => $localeItem->id])->all();
        if($content) {
            return $content;
        }
        return CommonPageItem::find()->where(['code' => $code])->all();
    }
}
