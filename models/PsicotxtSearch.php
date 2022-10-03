<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PSICOTXT;

/**
 * PsicotxtSearch represents the model behind the search form of `app\models\PSICOTXT`.
 */
class PsicotxtSearch extends PSICOTXT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CODIGO_ENCAMINHAMENTO', 'STATUS_ATENDIMENTO', 'ANO_LETIVO', 'NOME_POLO', 'NOME_MOTIVO', 'ZONA', 'CODIGO_ESCOLA', 'NOME_ESCOLA', 'CODIGO_ALUNO', 'NOME_ALUNO', 'ENDERECO_ALUNO', 'BAIRRO_ALUNO', 'MUNICIPIO_ALUNO', 'NOME_ENSINO', 'FASE', 'NOME_PROJETO', 'TURNO', 'TURMA', 'COMUNICOU_PAIS', 'MATRICULA_PEDAGOGO', 'NOME_PEDAGOGO', 'DATA_ENCAMINHAMENTO', 'MES_ENCAMINHAMENTO', 'MATRICULA_PROFESSOR', 'NOME_PROFESSOR', 'DATA_CONVOCACAO_RESP', 'DATA_ORIENTACAO', 'STATUS_ALUNO', 'RECEBE_BOLSA_FAMILIA', 'NOME_PROFISSAO', 'MATRICULA_PROFISSIONAL', 'NOME_PROFISSIONAL', 'DATA_PARECER_TEC', 'STATUS_VISITA', 'JUSTIF_INFREQUENCIA'], 'safe'],
            [['QUANT_LIGACAO_TEL', 'QUANT_CONTATO_REDESOCIAL'], 'number'],
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
        $query = PSICOTXT::find();

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

        $query->andFilterWhere([
            'CODIGO_ENCAMINHAMENTO' => $this->CODIGO_ENCAMINHAMENTO,
        ]);


        $query->andFilterWhere(['like', 'CODIGO_ENCAMINHAMENTO', $this->CODIGO_ENCAMINHAMENTO])
            ->andFilterWhere(['like', 'STATUS_ATENDIMENTO', $this->STATUS_ATENDIMENTO])
            ->andFilterWhere(['like', 'ANO_LETIVO', $this->ANO_LETIVO])
            ->andFilterWhere(['like', 'NOME_POLO', $this->NOME_POLO])
            ->andFilterWhere(['like', 'NOME_MOTIVO', $this->NOME_MOTIVO])
            ->andFilterWhere(['like', 'ZONA', $this->ZONA])
            ->andFilterWhere(['like', 'CODIGO_ESCOLA', $this->CODIGO_ESCOLA])
            ->andFilterWhere(['like', 'NOME_ESCOLA', $this->NOME_ESCOLA])
            ->andFilterWhere(['like', 'CODIGO_ALUNO', $this->CODIGO_ALUNO])
            ->andFilterWhere(['like', 'NOME_ALUNO', $this->NOME_ALUNO])
            ->andFilterWhere(['like', 'ENDERECO_ALUNO', $this->ENDERECO_ALUNO])
            ->andFilterWhere(['like', 'BAIRRO_ALUNO', $this->BAIRRO_ALUNO])
            ->andFilterWhere(['like', 'MUNICIPIO_ALUNO', $this->MUNICIPIO_ALUNO])
            ->andFilterWhere(['like', 'NOME_ENSINO', $this->NOME_ENSINO])
            ->andFilterWhere(['like', 'FASE', $this->FASE])
            ->andFilterWhere(['like', 'NOME_PROJETO', $this->NOME_PROJETO])
            ->andFilterWhere(['like', 'TURNO', $this->TURNO])
            ->andFilterWhere(['like', 'TURMA', $this->TURMA])
            ->andFilterWhere(['like', 'COMUNICOU_PAIS', $this->COMUNICOU_PAIS])
            ->andFilterWhere(['like', 'MATRICULA_PEDAGOGO', $this->MATRICULA_PEDAGOGO])
            ->andFilterWhere(['like', 'NOME_PEDAGOGO', $this->NOME_PEDAGOGO])
            ->andFilterWhere(['like', 'DATA_ENCAMINHAMENTO', $this->DATA_ENCAMINHAMENTO])
            ->andFilterWhere(['like', 'MES_ENCAMINHAMENTO', $this->MES_ENCAMINHAMENTO])
            ->andFilterWhere(['like', 'MATRICULA_PROFESSOR', $this->MATRICULA_PROFESSOR])
            ->andFilterWhere(['like', 'NOME_PROFESSOR', $this->NOME_PROFESSOR])
            ->andFilterWhere(['like', 'DATA_CONVOCACAO_RESP', $this->DATA_CONVOCACAO_RESP])
            ->andFilterWhere(['like', 'DATA_ORIENTACAO', $this->DATA_ORIENTACAO])
            ->andFilterWhere(['like', 'STATUS_ALUNO', $this->STATUS_ALUNO])
            ->andFilterWhere(['like', 'RECEBE_BOLSA_FAMILIA', $this->RECEBE_BOLSA_FAMILIA])
            ->andFilterWhere(['like', 'NOME_PROFISSAO', $this->NOME_PROFISSAO])
            ->andFilterWhere(['like', 'MATRICULA_PROFISSIONAL', $this->MATRICULA_PROFISSIONAL])
            ->andFilterWhere(['like', 'NOME_PROFISSIONAL', $this->NOME_PROFISSIONAL])
            ->andFilterWhere(['like', 'DATA_PARECER_TEC', $this->DATA_PARECER_TEC])
            ->andFilterWhere(['like', 'STATUS_VISITA', $this->STATUS_VISITA])
            ->andFilterWhere(['like', 'JUSTIF_INFREQUENCIA', $this->JUSTIF_INFREQUENCIA]);

        return $dataProvider;
    }
}
