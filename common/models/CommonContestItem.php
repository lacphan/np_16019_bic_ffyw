<?php

namespace common\models;

use common\enpii\components\NpItemDataSub;

/**
 * This is the model class for table "bic_ffyw_contest_item".
 * @property CommonAttachment $attachment
 * @property CommonAttachment $popup
 * @property CommonContestItem $parent
 * @property CommonContestItem $children
 */
class CommonContestItem extends \common\models\base\BaseContestItem
{
    use NpItemDataSub;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date'], 'safe'],
            [['attachment_id', 'locale_id', 'popup_id', 'parent_id', 'week_number'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
            [['locale_id','parent_id'], 'unique', 'targetAttribute' => ['locale_id','parent_id'],'message' => 'This item already exists'],

        ];
    }
    /**
     * @return array | CommonContestItem
     */
    public static function getWeek() {
        $day = NpItemDataSub::getGMTTime();

        $contestItem = CommonContestItem::find()->where(['<=','start_date',$day])->andWhere(['>=','end_date',$day])->andWhere(['locale_id' => 1])->one();
        if($contestItem) {
            return $contestItem;
        }
        return  CommonContestItem::find()->where(['id' => CommonContestItem::find()->max('id')])->one();
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttachment()
    {
        return $this->hasOne(CommonAttachment::className(), ['id' => 'attachment_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPopup()
    {
        return $this->hasOne(CommonAttachment::className(), ['id' => 'popup_id']);
    }
    /**
     * Function for get locale from locale table
     * @return \yii\db\ActiveQuery
     */
    public function getLocale(){
        return $this->hasOne(CommonLocale::className(), ['id' => 'locale_id']);
    }

    /**
     * Function for get locale from locale table
     * @return \yii\db\ActiveQuery
     */
    public function getParent() {
        return $this->hasOne(CommonContestItem::className(), ['id' => 'parent_id']);
    }

    /**
     * Function for get locale from locale table
     * @return \yii\db\ActiveQuery
     */
    public function getChildren() {
        return $this->hasOne(CommonContestItem::className(), ['parent_id' => 'id']);
    }

}
