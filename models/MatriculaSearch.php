<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MATRICULA;

/**
 * MatriculaSearch represents the model behind the search form of `app\models\MATRICULA`.
 */
class MatriculaSearch extends MATRICULA
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MATRICULA_COD_PK', 'ALUNO_COD_FK', 'CURSO_COD_FK', 'TURMA_COD_FK'], 'number'],
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
        $query = MATRICULA::find();

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
            'MATRICULA_COD_PK' => $this->MATRICULA_COD_PK,
            'ALUNO_COD_FK' => $this->ALUNO_COD_FK,
            'CURSO_COD_FK' => $this->CURSO_COD_FK,
            'TURMA_COD_FK' => $this->TURMA_COD_FK,
        ]);

        return $dataProvider;
    }
}
