<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\ContestItem;

/**
 * SearchContestItem represents the model behind the search form about `backend\models\ContestItem`.
 */
class SearchContestItem extends ContestItem
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
            [['id','locale_id'], 'integer'],
            [['start_date', 'end_date', 'title', 'description'], 'safe'],
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
    public function search($params)
    {
        $query = ContestItem::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query->orderBy(['end_date' => SORT_ASC]),
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);

        if($this->globalSearch) {
            $query->filterWhere(['like', 'start_date', $this->globalSearch]);
            $query->orFilterWhere(['like', 'end_date', $this->globalSearch]);
            $query->orFilterWhere(['like', 'title', $this->globalSearch]);
            $query->orFilterWhere(['like', 'description', $this->globalSearch]);
        }
        return $dataProvider;
    }
}
