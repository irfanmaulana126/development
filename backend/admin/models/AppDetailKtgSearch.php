<?php

namespace backend\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\admin\models\AppDetailKtg;

/**
 * AppDetailKtgSearch represents the model behind the search form of `backend\admin\models\AppDetailKtg`.
 */
class AppDetailKtgSearch extends AppDetailKtg
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'STATUS'], 'integer'],
            [['KTG_NM'], 'safe'],
            [['MODUL_NM'],'unique', 'message'=>'This issue already exists.'],
            [['KODE_KTG', 'KTG_NM', 'MODUL_NM', 'KODE_USER', 'USERNAME', 'TGL1', 'TGL2', 'DESKRIPSI'], 'safe'],
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
        $query = AppDetailKtg::find();

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
            'TGL1' => $this->TGL1,
            'TGL2' => $this->TGL2,
            'STATUS' => $this->STATUS,
        ]);

        $query->andFilterWhere(['like', 'KODE_KTG', $this->KODE_KTG])
            ->andFilterWhere(['like', 'KTG_NM', $this->KTG_NM])
            ->andFilterWhere(['like', 'MODUL_NM', $this->MODUL_NM])
            ->andFilterWhere(['like', 'KODE_USER', $this->KODE_USER])
            ->andFilterWhere(['like', 'USERNAME', $this->USERNAME])
            ->andFilterWhere(['like', 'DESKRIPSI', $this->DESKRIPSI]);

        return $dataProvider;
    }
}
