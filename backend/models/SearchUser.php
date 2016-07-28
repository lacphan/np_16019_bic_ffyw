<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\User;

/**
 * SearchUser represents the model behind the search form about `backend\models\User`.
 * @property  $globalSearch
 */
class SearchUser extends User
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
            [['id', 'profile_id', 'parent_id', 'level', 'status', 'building_id', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['username', 'email', 'first_name', 'last_name', 'password_hash', 'password_reset_token', 'auth_key', 'created_at', 'updated_at', 'published_at', 'params'], 'safe'],
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
        $query = User::find();

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
            'profile_id' => $this->profile_id,
            'parent_id' => $this->parent_id,
            'level' => $this->level,
            'status' => $this->status,
            'building_id' => $this->building_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'published_at' => $this->published_at,
            'creator_id' => $this->creator_id,
            'is_deleted' => 0,
            'is_enabled' => $this->is_enabled,
            'ordering_weight' => $this->ordering_weight,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'params', $this->params]);
        if($this->globalSearch) {
            $query->filterWhere(['like','username', $this->globalSearch]);
            $query->orFilterWhere(['like','email', $this->globalSearch]);
            $query->orFilterWhere(['like','first_name', $this->globalSearch]);
            $query->orFilterWhere(['like','last_name', $this->globalSearch]);
        }

        return $dataProvider;
    }
}
