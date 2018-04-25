<?php

namespace backend\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\admin\models\OpenTicket;

/**
 * OpenTicketSearch represents the model behind the search form of `backend\admin\models\OpenTicket`.
 */
class OpenTicketSearch extends OpenTicket
{
    public $getStatusqapesan;
    public $ktgnm;
    public $modulnm;
    public $statuspesan;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'STATUS','STATUS_QA','statuspesan','getStatusqapesan'], 'integer'],
            [['KODE_KTG','TITLE', 'KTG_NM','ktgnm','modulnm','KODE_MODUL', 'MODUL_NM', 'KODE_USER', 'USERNAME', 'TGL1', 'TGL2', 'DESKRIPSI', 'API_KEY'], 'safe'],
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
        $query = OpenTicket::find();

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
            'STATUS_QA' => $this->STATUS_QA,
        ]);

        $query->andFilterWhere(['like', 'KODE_KTG', $this->KODE_KTG])
            ->andFilterWhere(['like', 'KTG_NM', $this->KTG_NM])
            ->andFilterWhere(['like', 'TITLE', $this->TITLE])
            ->andFilterWhere(['like', 'KODE_MODUL', $this->KODE_MODUL])
            ->andFilterWhere(['like', 'MODUL_NM', $this->MODUL_NM])
            ->andFilterWhere(['like', 'KODE_USER', $this->KODE_USER])
            ->andFilterWhere(['like', 'USERNAME', $this->USERNAME])
            ->andFilterWhere(['like', 'DESKRIPSI', $this->DESKRIPSI])
            ->andFilterWhere(['like', 'API_KEY', $this->API_KEY]);

        return $dataProvider;
    }
    public function searchPesan($params)
    {
        $query = OpenTicket::find();

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
            'STATUS' => $this->statuspesan,
            'STATUS_QA' => $this->getStatusqapesan,
        ]);

        $query->andFilterWhere(['like', 'KODE_KTG', $this->KODE_KTG])
            ->andFilterWhere(['like', 'KTG_NM', $this->ktgnm])
            ->andFilterWhere(['like', 'TITLE', $this->TITLE])
            ->andFilterWhere(['like', 'KODE_MODUL', $this->KODE_MODUL])
            ->andFilterWhere(['like', 'MODUL_NM', $this->modulnm])
            ->andFilterWhere(['like', 'KODE_USER', $this->KODE_USER])
            ->andFilterWhere(['like', 'USERNAME', $this->USERNAME])
            ->andFilterWhere(['like', 'DESKRIPSI', $this->DESKRIPSI])
            ->andFilterWhere(['like', 'API_KEY', $this->API_KEY]);

        return $dataProvider;
    }
}
