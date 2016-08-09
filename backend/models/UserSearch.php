<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 * @property integer $sortBy
 * @property integer $filterBuilding
 * @property integer $postPerPage
 */
class UserSearch extends User
{
    /**
    * @var $globalSearch
    * @property $sortBy;
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
            [['id', 'profile_id', 'parent_id', 'level', 'status', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['username','sortBy', 'postPerPage','building_id','email', 'first_name', 'last_name', 'password_hash', 'password_reset_token', 'auth_key', 'created_at', 'updated_at', 'published_at', 'params'], 'safe'],
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
        $this->load(Yii::$app->request->post());
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
            'profile_id' => $this->profile_id,
            'parent_id' => $this->parent_id,
            'level' => $this->level,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'published_at' => $this->published_at,
            'creator_id' => $this->creator_id,
            'is_deleted' => 1,
            'is_enabled' => $this->is_enabled,
            'ordering_weight' => $this->ordering_weight,
            'building_id' => $this->building_id
        ]);

        return $dataProvider;
    }


}
