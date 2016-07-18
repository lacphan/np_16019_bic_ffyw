<?php

namespace common\models;

use common\enpii\components\NpItemDataSub;
use yii;
use common\models\base\BaseContestSession;

/**
 * This is the model class for table "bic_ffyw_contest_session".
 * @property CommonContestItem $week ;
 * @property CommonAttachment $attachment
 */
class CommonContestSession extends BaseContestSession
{
    use NpItemDataSub;

    public function getAge()
    {
        return date_diff(date_create($this->birth_year), date_create('today'))->y;
    }

    public function setAge($age)
    {
        if ($age) {
            $this->birth_year = date('Y-m-d', strtotime($age . ' years ago'));
        } else {
            $this->birth_year = '00-00-00 00:00:00';
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttachment()
    {
        return $this->hasOne(CommonAttachment::className(), ['id' => 'attachment_id']);
    }
    

}
