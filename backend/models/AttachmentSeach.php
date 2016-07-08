<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\enpii\components\widget\datepicker\DateRangePicker;
use backend\models\Attachment;

/**
 * AttachmentSeach represents the model behind the search form about `backend\models\Attachment`.
 */
class AttachmentSeach extends Attachment
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
            [['id', 'size'], 'integer'],
            [['title', 'image', 'caption', 'description', 'created_at', 'updated_at'], 'safe'],
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
        $query = Attachment::find();

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
            'size' => $this->size,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'caption', $this->caption])
            ->andFilterWhere(['like', 'description', $this->description]);

        $query->orFilterWhere(['like','id', $this->globalSearch]);
        $query->orFilterWhere(['like','title', $this->globalSearch]);
        $query->orFilterWhere(['like','size', $this->globalSearch]);
        $query->orFilterWhere(['like','image', $this->globalSearch]);
        $query->orFilterWhere(['like','caption', $this->globalSearch]);
        $query->orFilterWhere(['like','description', $this->globalSearch]);
        $query->orFilterWhere(['like','created_at', $this->globalSearch]);
        $query->orFilterWhere(['like','updated_at', $this->globalSearch]);
        
        return $dataProvider;
    }
}
