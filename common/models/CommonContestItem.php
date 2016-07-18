<?php

namespace common\models;

use common\enpii\components\NpItemDataSub;
use Yii;

/**
 * This is the model class for table "bic_ffyw_contest_item".
 * @property CommonAttachment $attachment
 */
class CommonContestItem extends \common\models\base\BaseContestItem
{
    use NpItemDataSub;

    /**
     * @return CommonContestItem
     */
    public static function getWeek() {
        $day = NpItemDataSub::getGMTTime();
        $contestItem = CommonContestItem::find()->where(['<=','start_date',$day])->andWhere(['>=','end_date',$day])->one();
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
    
}
