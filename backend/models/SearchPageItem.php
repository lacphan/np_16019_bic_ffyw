<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\PageItem;

/**
 * SearchPageItem represents the model behind the search form about `backend\models\PageItem`.
 */
class SearchPageItem extends PageItem
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
            [['id', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['name', 'slug', 'code', 'description', 'locale_id', 'created_at', 'updated_at', 'published_at', 'params'], 'safe'],
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
        $query = PageItem::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'published_at' => $this->published_at,
            'creator_id' => $this->creator_id,
            'is_deleted' => $this->is_deleted,
            'is_enabled' => $this->is_enabled,
            'ordering_weight' => $this->ordering_weight,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'locale_id', $this->locale_id])
            ->andFilterWhere(['like', 'params', $this->params]);

        if($this->globalSearch) {
            $query->filterWhere(['like','name', $this->globalSearch]);
            $query->orFilterWhere(['like','slug', $this->globalSearch]);
            $query->orFilterWhere(['like','code', $this->globalSearch]);
            $query->orFilterWhere(['like','description', $this->globalSearch]);
            $query->orFilterWhere(['like','locale_id', $this->globalSearch]);
        }

        return $dataProvider;
    }
}
