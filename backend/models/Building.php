<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelle_building".
 * @property $supervisor
 * @property $client
 */
class Building extends \common\models\CommonBuilding
{
    public $supervisor;
    public $client;

    public function rules()
    {
        return [
            [['name', 'address', 'contact_person', 'contact_number', 'contract_start_date', 'created_at', 'updated_at', 'creator_id'], 'required'],
            [['author', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['created_at', 'updated_at', 'published_at','client','supervisor'], 'safe'],
            [['params'], 'string'],
            [['name', 'address', 'contact_person', 'contact_number', 'contract_start_date'], 'string', 'max' => 255]
        ];
    }
}
