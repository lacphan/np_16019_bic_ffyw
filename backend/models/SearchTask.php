<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\Task;

/**
 * SearchTask represents the model behind the search form about `backend\models\Task`.
 */
class SearchTask extends Task
{
    /**
    * @var $globalSearch
    */
    public $globalSearch;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'facility_id', 'building_facility_id'], 'integer'],
            [['name'], 'safe'],
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
    public function search($params, $facilityID = null)
    {
        $query = Task::find();
        if($facilityID) {
            $query->andFilterWhere(['facility_id' => $facilityID]);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'facility_id' => $this->facility_id,
            'building_facility_id' => $this->building_facility_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        $query->orFilterWhere(['like','id', $this->globalSearch]);
        $query->orFilterWhere(['like','name', $this->globalSearch]);
        $query->orFilterWhere(['like','facility_id', $this->globalSearch]);
        $query->orFilterWhere(['like','building_facility_id', $this->globalSearch]);
        
        return $dataProvider;
    }
}
