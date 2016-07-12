<?php

namespace common\models;

use yii;
use DateTime;
use common\models\base\BaseContestSession;

    /**
 * This is the model class for table "bic_ffyw_contest_session".
 */
class CommonContestSession extends BaseContestSession
{
    public function getAge() {
        return date_diff(date_create($this->birth_year), date_create('today'))->y;
    }
    public function setAge($age) {
        if($age) {
            $this->birth_year = date('Y-m-d', strtotime($age . ' years ago'));
        } else {
            $this->birth_year = '00-00-00 00:00:00';
        }
    }
}
