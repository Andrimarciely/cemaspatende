<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CURSO;

/**
 * CursoSearch represents the model behind the search form of `app\models\CURSO`.
 */
class CursoSearch extends CURSO
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CURSO_NOME', 'CURSO_CARGA_HORARIA'], 'safe'],
            [['CURSO_COD_PK'], 'number'],
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
        $query = CURSO::find();

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
            'CURSO_COD_PK' => $this->CURSO_COD_PK,
        ]);

        $query->andFilterWhere(['like', 'CURSO_NOME', $this->CURSO_NOME])
            ->andFilterWhere(['like', 'CURSO_CARGA_HORARIA', $this->CURSO_CARGA_HORARIA]);

        return $dataProvider;
    }
}
