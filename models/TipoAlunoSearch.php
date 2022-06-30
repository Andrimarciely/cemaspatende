<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TIPOALUNO;

/**
 * tipoalunoSearch represents the model behind the search form of `app\models\TIPOALUNO`.
 */
class tipoalunoSearch extends TIPOALUNO
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO_ALUNO_COD_PK'], 'number'],
            [['TIPO_ALUNO_NOME'], 'safe'],
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
        $query = TIPOALUNO::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        

        $query->orderBy([
            'TIPO_ALUNO_COD_PK' => SORT_ASC,
        //'ALUNO_COD_PK' => SORT_DESC,
         ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'TIPO_ALUNO_COD_PK' => $this->TIPO_ALUNO_COD_PK,
        ]);

        $query->andFilterWhere(['like', 'TIPO_ALUNO_NOME', $this->TIPO_ALUNO_NOME]);

        return $dataProvider;
    }
}
