<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ROTA;

/**
 * RodaSearch represents the model behind the search form of `app\models\ROTA`.
 */
class RodaSearch extends ROTA
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FID', 'NAME', 'LATITUDE', 'LONGITUDE'], 'safe'],
            [['SEQUENCE'], 'integer'],
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
        $query = ROTA::find();

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
            'SEQUENCE' => $this->SEQUENCE,
        ]);

        $query->andFilterWhere(['like', 'FID', $this->FID])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'LATITUDE', $this->LATITUDE])
            ->andFilterWhere(['like', 'LONGITUDE', $this->LONGITUDE]);

        return $dataProvider;
    }
}
