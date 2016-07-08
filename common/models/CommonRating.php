<?php

namespace common\models;

use common\enpii\components\NpItemDataSub;
use Yii;

/**
 * This is the model class for table "kelle_rating".
 */
class CommonRating extends \common\models\base\BaseRating
{
    use NpItemDataSub;
    
    public function getRatingRelation() {
        
    }
}
