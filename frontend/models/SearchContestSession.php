<?php

namespace frontend\models;

use yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\Expression;

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
            [['id', 'user_id', 'attachment_id'], 'integer'],
            [['first_name', 'last_name', 'birth_year','user_email'], 'safe'],
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
        $query = ContestSession::find()->where(['accepted' => 1])->orderBy(new Expression('rand()'));;

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => array('pageSize' => 20),
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'birth_year' => $this->birth_year,
            'attachment_id' => $this->attachment_id,
            'user_email' => $this->user_email,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name]);

        $query->orFilterWhere(['like','id', $this->globalSearch]);
        $query->orFilterWhere(['like','user_id', $this->globalSearch]);
        $query->orFilterWhere(['like','first_name', $this->globalSearch]);
        $query->orFilterWhere(['like','last_name', $this->globalSearch]);
        $query->orFilterWhere(['like','birth_year', $this->globalSearch]);
        $query->orFilterWhere(['like','attachment_id', $this->globalSearch]);
        
        return $dataProvider;
    }
}
