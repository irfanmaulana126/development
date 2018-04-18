<?php

namespace backend\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\admin\models\AppKtg;

/**
 * AppKtgSearch represents the model behind the search form of `backend\admin\models\AppKtg`.
 */
class AppKtgSearch extends AppKtg
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['KODE_KTG', 'KTG_NM', 'DESKRIPSI'], 'safe'],
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
        $query = AppKtg::find();

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
        ]);

        $query->andFilterWhere(['like', 'KODE_KTG', $this->KODE_KTG])
            ->andFilterWhere(['like', 'KTG_NM', $this->KTG_NM])
            ->andFilterWhere(['like', 'DESKRIPSI', $this->DESKRIPSI]);

        return $dataProvider;
    }
}
