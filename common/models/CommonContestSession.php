<?php

namespace common\models;

use common\enpii\components\NpItemDataSub;
use yii;
use common\models\base\BaseContestSession;
use common\helpers\HashHelper;
/**
 * This is the model class for table "bic_ffyw_contest_session".
 * @property CommonContestItem $week ;
 * @property CommonAttachment $attachment
 */
class CommonContestSession extends BaseContestSession
{
    use NpItemDataSub;

    /**
     * Encrypt data before save to database
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if(!$this->is_encrypted) {
                $this->user_email = HashHelper::encrypt($this->user_email);
                $this->first_name = HashHelper::encrypt($this->first_name);
                $this->last_name = HashHelper::encrypt($this->last_name);
            }
            return true;
        } else {
            return false;
        }

    }

    /**
     * Decrypt data to view on backend
     */
    public function afterFind() {
        parent::afterFind();
        if ($this->is_encrypted) {
            $this->user_email =  HashHelper::decrypt($this->user_email);
            $this->first_name =  HashHelper::decrypt($this->first_name);
            $this->last_name =  HashHelper::decrypt($this->last_name);
        }

    }

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
