<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\ContestSession;

/**
 * SearchContestSession represents the model behind the search form about `backend\models\ContestSession`.
 */
class SearchContestSession extends ContestSession
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
            [['id', 'user_id', 'attachment_id','contest_item_id','is_winner'], 'integer'],
            [['first_name', 'last_name', 'birth_year'], 'safe'],
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
    public function search($params, $week = null, $winner = null)
    {
        $query = ContestSession::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' =>  ['created_at' => SORT_DESC]
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'birth_year' => $this->birth_year,
            'attachment_id' => $this->attachment_id,
            'contest_item_id' => $this->contest_item_id ? $this->contest_item_id : 1,
        ]);
        if($winner) {
            $query->andFilterWhere(['is_winner' => $winner]);
        }

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name]);

        $query->orFilterWhere(['like','first_name', $this->globalSearch]);
        $query->orFilterWhere(['like','last_name', $this->globalSearch]);
        $query->orFilterWhere(['like','birth_year', $this->globalSearch]);
        return $dataProvider;
    }
}
