<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ALUNOSEMED;

/**
 * AlunosemedSearch represents the model behind the search form of `app\models\ALUNOSEMED`.
 */
class AlunosemedSearch extends ALUNOSEMED
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CODIGO_SIGEAM', 'ANO_MATRICULA', 'BAIRRO_ALUNO', 'CODIGO_INEP_ALUNO', 'COR', 'CPF_DO_ALUNO', 'CPF_DO_RESPONSAVEL', 'CURSO', 'DATA_DE_NASCIMENTO', 'DATA_DE_OBITO', 'DISTRITO', 'EMAIL_INSTITUCIONAL', 'ESCOLA', 'FASE', 'FASE_ORIGEM', 'GEMEO', 'INDÍGENA', 'MUNICIPIO_ESCOLA', 'MUNICIPIO_NASCIMENTO', 'NACIONALIDADE', 'NECESSIDADES', 'NOME_DA_MAE', 'NOME_DO_PAI', 'SEXO', 'TELEFONE', 'TURNO', 'ZONA_DA_ESCOLA', 'NIS', 'TIPO_SANGUINEO', 'LOCALIZACAO', 'RG', 'LOCAL_SALA', 'CARTAO_SUS_ALUNO', 'BOLSA_FAMILIA', 'IMC'], 'safe'],
            [['CODIGO_ESCOLA', 'PROJETO'], 'integer'],
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
        $query = ALUNOSEMED::find();

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
            'CODIGO_ESCOLA' => $this->CODIGO_ESCOLA,
            'PROJETO' => $this->PROJETO,
        ]);

        $query->andFilterWhere(['like', 'CODIGO_SIGEAM', $this->CODIGO_SIGEAM])
            ->andFilterWhere(['like', 'ANO_MATRICULA', $this->ANO_MATRICULA])
            ->andFilterWhere(['like', 'BAIRRO_ALUNO', $this->BAIRRO_ALUNO])
            ->andFilterWhere(['like', 'CODIGO_INEP_ALUNO', $this->CODIGO_INEP_ALUNO])
            ->andFilterWhere(['like', 'COR', $this->COR])
            ->andFilterWhere(['like', 'CPF_DO_ALUNO', $this->CPF_DO_ALUNO])
            ->andFilterWhere(['like', 'CPF_DO_RESPONSAVEL', $this->CPF_DO_RESPONSAVEL])
            ->andFilterWhere(['like', 'CURSO', $this->CURSO])
            ->andFilterWhere(['like', 'DATA_DE_NASCIMENTO', $this->DATA_DE_NASCIMENTO])
            ->andFilterWhere(['like', 'DATA_DE_OBITO', $this->DATA_DE_OBITO])
            ->andFilterWhere(['like', 'DISTRITO', $this->DISTRITO])
            ->andFilterWhere(['like', 'EMAIL_INSTITUCIONAL', $this->EMAIL_INSTITUCIONAL])
            ->andFilterWhere(['like', 'ESCOLA', $this->ESCOLA])
            ->andFilterWhere(['like', 'FASE', $this->FASE])
            ->andFilterWhere(['like', 'FASE_ORIGEM', $this->FASE_ORIGEM])
            ->andFilterWhere(['like', 'GEMEO', $this->GEMEO])
            ->andFilterWhere(['like', 'INDÍGENA', $this->INDÍGENA])
            ->andFilterWhere(['like', 'MUNICIPIO_ESCOLA', $this->MUNICIPIO_ESCOLA])
            ->andFilterWhere(['like', 'MUNICIPIO_NASCIMENTO', $this->MUNICIPIO_NASCIMENTO])
            ->andFilterWhere(['like', 'NACIONALIDADE', $this->NACIONALIDADE])
            ->andFilterWhere(['like', 'NECESSIDADES', $this->NECESSIDADES])
            ->andFilterWhere(['like', 'NOME_DA_MAE', $this->NOME_DA_MAE])
            ->andFilterWhere(['like', 'NOME_DO_PAI', $this->NOME_DO_PAI])
            ->andFilterWhere(['like', 'SEXO', $this->SEXO])
            ->andFilterWhere(['like', 'TELEFONE', $this->TELEFONE])
            ->andFilterWhere(['like', 'TURNO', $this->TURNO])
            ->andFilterWhere(['like', 'ZONA_DA_ESCOLA', $this->ZONA_DA_ESCOLA])
            ->andFilterWhere(['like', 'NIS', $this->NIS])
            ->andFilterWhere(['like', 'TIPO_SANGUINEO', $this->TIPO_SANGUINEO])
            ->andFilterWhere(['like', 'LOCALIZACAO', $this->LOCALIZACAO])
            ->andFilterWhere(['like', 'RG', $this->RG])
            ->andFilterWhere(['like', 'LOCAL_SALA', $this->LOCAL_SALA])
            ->andFilterWhere(['like', 'CARTAO_SUS_ALUNO', $this->CARTAO_SUS_ALUNO])
            ->andFilterWhere(['like', 'BOLSA_FAMILIA', $this->BOLSA_FAMILIA])
            ->andFilterWhere(['like', 'IMC', $this->IMC]);

        return $dataProvider;
    }
}
