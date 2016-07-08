<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\BuildingFacility;

/**
 * SearchBuildingFacility represents the model behind the search form about `backend\models\BuildingFacility`.
 */
class SearchBuildingFacility extends BuildingFacility
{
    /**
    * @var $globalSearch
    */
    public $globalSearch;
    public $postPerPage = 10;
    public $sortBy ;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'facility_id', 'building_id', 'inspection_id', 'time_per_day', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['block', 'floor', 'facility_name', 'created_at', 'updated_at', 'published_at', 'params'], 'safe'],
            [['globalSearch'],'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params,$buildingID = null)
    {
        $query = BuildingFacility::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => $this->postPerPage,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'facility_id' => $this->facility_id,
            'inspection_id' => $this->inspection_id,
            'time_per_day' => $this->time_per_day,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'published_at' => $this->published_at,
            'creator_id' => $this->creator_id,
            'is_deleted' => $this->is_deleted,
            'is_enabled' => $this->is_enabled,
            'ordering_weight' => $this->ordering_weight,
        ]);
        if($buildingID) {
            $query->andFilterWhere([
                'building_id' => $buildingID,
            ]);
        }

        $query->andFilterWhere(['like', 'block', $this->block])
            ->andFilterWhere(['like', 'floor', $this->floor])
            ->andFilterWhere(['like', 'facility_name', $this->facility_name])
            ->andFilterWhere(['like', 'params', $this->params]);

        $query->orFilterWhere(['like','id', $this->globalSearch]);
        $query->orFilterWhere(['like','block', $this->globalSearch]);
        $query->orFilterWhere(['like','facility_id', $this->globalSearch]);
        $query->orFilterWhere(['like','building_id', $this->globalSearch]);
        $query->orFilterWhere(['like','inspection_id', $this->globalSearch]);
        $query->orFilterWhere(['like','floor', $this->globalSearch]);
        $query->orFilterWhere(['like','facility_name', $this->globalSearch]);
        $query->orFilterWhere(['like','time_per_day', $this->globalSearch]);
        $query->orFilterWhere(['like','created_at', $this->globalSearch]);
        $query->orFilterWhere(['like','updated_at', $this->globalSearch]);
        $query->orFilterWhere(['like','published_at', $this->globalSearch]);
        $query->orFilterWhere(['like','creator_id', $this->globalSearch]);
        $query->orFilterWhere(['like','is_deleted', $this->globalSearch]);
        $query->orFilterWhere(['like','is_enabled', $this->globalSearch]);
        $query->orFilterWhere(['like','ordering_weight', $this->globalSearch]);
        $query->orFilterWhere(['like','params', $this->globalSearch]);

        return $dataProvider;
    }
}
