<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ALUNO;

/**
 * AlunoSearch represents the model behind the search form of `app\models\ALUNO`.
 */
class AlunoSearch extends ALUNO
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ALUNO_COD_PK', 'TIPO_ALUNO_COD_FK'], 'number'],
            [['ALUNO_NOME', 'ALUNO_DT_NASC', 'ALUNO_ENDERECO', 'ALUNO_FOTO'], 'safe'],
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
        $query = ALUNO::find();

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
            'ALUNO_COD_PK' => $this->ALUNO_COD_PK,
            'TIPO_ALUNO_COD_FK' => $this->TIPO_ALUNO_COD_FK,
        ]);

        $query->andFilterWhere(['like', 'ALUNO_NOME', $this->ALUNO_NOME])
            ->andFilterWhere(['like', 'ALUNO_DT_NASC', $this->ALUNO_DT_NASC])
            ->andFilterWhere(['like', 'ALUNO_ENDERECO', $this->ALUNO_ENDERECO])
            ->andFilterWhere(['like', 'ALUNO_FOTO', $this->ALUNO_FOTO]);

        return $dataProvider;
    }
}
