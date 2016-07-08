<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\Building;


/**
 * SearchBuilding represents the model behind the search form about `backend\models\Building`.
 * @property integer $sortBy
 * @property integer $filterBuilding
 * @property integer $postPerPage
 */
class SearchBuilding extends Building
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
            [['id', 'author', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['name','sortBy', 'postPerPage','address', 'contact_person', 'contact_number', 'contract_start_date', 'created_at', 'updated_at', 'published_at', 'params'], 'safe'],
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
    public function search($params,$userID = null)
    {

        if($userID) {
            $user = User::findOne(['id' => $userID]);
            $query = Building::find()->where(['id' => $user->building_id]);
        } else {
            $query = Building::find();
        }

        $this->load(Yii::$app->request->post());
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' =>  $this->sortByAlphabetChecker()
            ],
            'pagination' => [
                'pageSize' => $this->postPerPage,
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
            'author' => $this->author,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'published_at' => $this->published_at,
            'creator_id' => $this->creator_id,
            'is_deleted' => $this->is_deleted,
            'is_enabled' => $this->is_enabled,
            'ordering_weight' => $this->ordering_weight,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'contact_person', $this->contact_person])
            ->andFilterWhere(['like', 'contact_number', $this->contact_number])
            ->andFilterWhere(['like', 'contract_start_date', $this->contract_start_date])
            ->andFilterWhere(['like', 'params', $this->params]);

        $query->orFilterWhere(['like','id', $this->globalSearch]);
        $query->orFilterWhere(['like','name', $this->globalSearch]);
        $query->orFilterWhere(['like','author', $this->globalSearch]);
        $query->orFilterWhere(['like','address', $this->globalSearch]);
        $query->orFilterWhere(['like','contact_person', $this->globalSearch]);
        $query->orFilterWhere(['like','contact_number', $this->globalSearch]);
        $query->orFilterWhere(['like','contract_start_date', $this->globalSearch]);
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
    public function sortByAlphabetChecker() {

        if( $this->sortBy == SORT_ASC || $this->sortBy == SORT_DESC) {
            return ['name' => intval($this->sortBy)];
        }
        return ['id' => SORT_DESC];
    }
}
