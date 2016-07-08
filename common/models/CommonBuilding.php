<?php

namespace common\models;

use common\enpii\components\NpItemDataSub;
use Yii;

/**
 * This is the model class for table "kelle_building".
 * @property CommonUser[] $supervisors
 */
class CommonBuilding extends \common\models\base\BaseBuilding
{
    use NpItemDataSub;
    
    public function getSupervisors(){
        return CommonUser::find()
            ->join('LEFT JOIN','{{%auth_assignment}}','{{%auth_assignment}}.user_id = id')
            ->where(['building_id' => $this->id])
            ->andWhere(['{{%auth_assignment}}.item_name' => 'supervisor'])
            ->all();
    }
    public function getClients() {
        return CommonUser::find()
            ->join('LEFT JOIN','{{%auth_assignment}}','{{%auth_assignment}}.user_id = id')
            ->where(['building_id' => $this->id])
            ->andWhere(['{{%auth_assignment}}.item_name' => 'client'])
            ->all();
    }
    public function getRatingRelations()
    {
        return $this->hasMany(CommonBuildingRatingRelation::className(),['building_id' => 'id']);
    }
}
