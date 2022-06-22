<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TURMA;

/**
 * TurmaSearch represents the model behind the search form of `app\models\TURMA`.
 */
class TurmaSearch extends TURMA
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TURMA_COD_PK', 'CURSO_COD_FK'], 'number'],
            [['TURMA_DT_INICIO', 'TURMA_DT_FIM'], 'safe'],
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
        $query = TURMA::find();

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
            'TURMA_COD_PK' => $this->TURMA_COD_PK,
            'CURSO_COD_FK' => $this->CURSO_COD_FK,
        ]);

        $query->andFilterWhere(['like', 'TURMA_DT_INICIO', $this->TURMA_DT_INICIO])
            ->andFilterWhere(['like', 'TURMA_DT_FIM', $this->TURMA_DT_FIM]);

        return $dataProvider;
    }
}
