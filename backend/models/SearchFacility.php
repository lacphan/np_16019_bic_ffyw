<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\Facility;
use yii\data\Sort;
/**
 * SearchFacility represents the model behind the search form about `backend\models\Facility`.
 * @property integer $sortBy
 * @property integer $filterBuilding
 * @property integer $postPerPage
 */
class SearchFacility extends Facility
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
            [['id'], 'integer'],
            [['facility_type','postPerPage','sortBy'], 'safe'],
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
    public function search($params,$buildingFacilityID = null)
    {

        $this->load(Yii::$app->request->post());
        $query = Facility::find();
        if($buildingFacilityID) {
            $query = Facility::find()->where(['id' => $buildingFacilityID]);
        } else {
            $query = Facility::find();
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => $this->sortByAlphabetChecker()
            ],
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
        ]);

        $query->andFilterWhere(['like', 'facility_type', $this->facility_type]);

        $query->orFilterWhere(['like','id', $this->globalSearch]);
        $query->orFilterWhere(['like','facility_type', $this->globalSearch]);
        
        return $dataProvider;
    }
    public function sortByAlphabetChecker() {

        if( $this->sortBy == SORT_ASC || $this->sortBy == SORT_DESC) {
            return ['facility_type' => intval($this->sortBy)];
        }
        return ['id' => SORT_DESC];
    }
}
