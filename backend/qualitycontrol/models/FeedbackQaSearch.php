<?php

namespace backend\qualitycontrol\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\qualitycontrol\models\FeedbackQa;

/**
 * FeedbackQaSearch represents the model behind the search form of `backend\qualitycontrol\models\FeedbackQa`.
 */
class FeedbackQaSearch extends FeedbackQa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'STATUS'], 'integer'],
            [['ID_OPEN_TIKET', 'DESKRIPSI', 'TGL', 'ID_USER', 'USER_NM'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = FeedbackQa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'STATUS' => $this->STATUS,
            'TGL' => $this->TGL,
        ]);

        $query->andFilterWhere(['like', 'ID_OPEN_TIKET', $this->ID_OPEN_TIKET])
            ->andFilterWhere(['like', 'DESKRIPSI', $this->DESKRIPSI])
            ->andFilterWhere(['like', 'ID_USER', $this->ID_USER])
            ->andFilterWhere(['like', 'USER_NM', $this->USER_NM]);

        return $dataProvider;
    }
}
