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
    public $userEmail;
    public $userFirstName;
    public $userLastName;

    public function attributes()
    {
        // add related fields to searchable attributes
        return array_merge(parent::attributes(), ['serviceName.services']);

    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'attachment_id','contest_item_id','is_winner'], 'integer'],
            [['first_name', 'last_name', 'birth_year','userEmail','userFirstName','userLastName'], 'safe'],
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

        $query->join('LEFT JOIN', '{{%user}}', '{{%user}}.id = user_id');

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
            '{{%contest_session}}.first_name' => $this->first_name,
            '{{%contest_session}}.last_name' => $this->last_name,
        ]);
        if($winner) {
            $query->andFilterWhere(['is_winner' => $winner]);
        }
        $query->andFilterWhere(['like', '{{%user}}.email', $this->userEmail])
            ->andFilterWhere(['like', '{{%user}}.first_name', $this->userFirstName])
            ->andFilterWhere(['like', '{{%user}}.last_name', $this->userLastName]);

        if($this->globalSearch) {
            $query->filterWhere(['like','first_name', $this->globalSearch]);
            $query->orFilterWhere(['like','last_name', $this->globalSearch]);
            $query->orFilterWhere(['like','birth_year', $this->globalSearch]);
        }

        return $dataProvider;
    }
    public function searchGrandPrize($params)
    {
        $query = ContestSession::find();

        $query->join('LEFT JOIN', '{{%user}}', '{{%user}}.id = user_id');

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
            '{{%contest_session}}.first_name' => $this->first_name,
            '{{%contest_session}}.last_name' => $this->last_name,
        ]);

        $query->andFilterWhere(['is_grand_prize' => 1]);

        $query->andFilterWhere(['like', '{{%user}}.email', $this->userEmail])
            ->andFilterWhere(['like', '{{%user}}.first_name', $this->userFirstName])
            ->andFilterWhere(['like', '{{%user}}.last_name', $this->userLastName]);

        if($this->globalSearch) {
            $query->filterWhere(['like','first_name', $this->globalSearch]);
            $query->orFilterWhere(['like','last_name', $this->globalSearch]);
            $query->orFilterWhere(['like','birth_year', $this->globalSearch]);
        }

        return $dataProvider;
    }
}
