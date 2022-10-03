<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_PSICOTXT".
 *
 * @property string $CODIGO_ENCAMINHAMENTO
 * @property string $STATUS_ATENDIMENTO
 * @property string $ANO_LETIVO
 * @property string $NOME_POLO
 * @property string $NOME_MOTIVO
 * @property string $ZONA
 * @property string $CODIGO_ESCOLA
 * @property string $NOME_ESCOLA
 * @property string $CODIGO_ALUNO
 * @property string $NOME_ALUNO
 * @property string $ENDERECO_ALUNO
 * @property string $BAIRRO_ALUNO
 * @property string $MUNICIPIO_ALUNO
 * @property string $NOME_ENSINO
 * @property string $FASE
 * @property string $NOME_PROJETO
 * @property string $TURNO
 * @property string $TURMA
 * @property string $COMUNICOU_PAIS
 * @property string $MATRICULA_PEDAGOGO
 * @property string $NOME_PEDAGOGO
 * @property string $DATA_ENCAMINHAMENTO
 * @property string $MES_ENCAMINHAMENTO
 * @property string $MATRICULA_PROFESSOR
 * @property string $NOME_PROFESSOR
 * @property string $DATA_CONVOCACAO_RESP
 * @property string $DATA_ORIENTACAO
 * @property string $STATUS_ALUNO
 * @property string $RECEBE_BOLSA_FAMILIA
 * @property string $NOME_PROFISSAO
 * @property string $MATRICULA_PROFISSIONAL
 * @property string $NOME_PROFISSIONAL
 * @property string $DATA_PARECER_TEC
 * @property string $QUANT_LIGACAO_TEL
 * @property string $QUANT_CONTATO_REDESOCIAL
 * @property string $STATUS_VISITA
 * @property string $JUSTIF_INFREQUENCIA
 */
class PSICOTXT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_PSICOTXT';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['QUANT_LIGACAO_TEL', 'QUANT_CONTATO_REDESOCIAL'], 'number'],
            [['CODIGO_ENCAMINHAMENTO', 'STATUS_ATENDIMENTO', 'BAIRRO_ALUNO', 'MATRICULA_PEDAGOGO', 'MATRICULA_PROFESSOR', 'MATRICULA_PROFISSIONAL', 'STATUS_VISITA'], 'string', 'max' => 30],
            [['ANO_LETIVO', 'TURMA'], 'string', 'max' => 10],
            [['NOME_POLO', 'STATUS_ALUNO'], 'string', 'max' => 50],
            [['NOME_MOTIVO'], 'string', 'max' => 29],
            [['ZONA'], 'string', 'max' => 14],
            [['CODIGO_ESCOLA'], 'string', 'max' => 13],
            [['NOME_ESCOLA'], 'string', 'max' => 45],
            [['CODIGO_ALUNO'], 'string', 'max' => 12],
            [['NOME_ALUNO'], 'string', 'max' => 42],
            [['ENDERECO_ALUNO'], 'string', 'max' => 116],
            [['MUNICIPIO_ALUNO'], 'string', 'max' => 15],
            [['NOME_ENSINO'], 'string', 'max' => 17],
            [['FASE'], 'string', 'max' => 9],
            [['NOME_PROJETO', 'NOME_PROFISSAO', 'NOME_PROFISSIONAL'], 'string', 'max' => 100],
            [['TURNO', 'COMUNICOU_PAIS', 'DATA_ENCAMINHAMENTO', 'MES_ENCAMINHAMENTO', 'DATA_CONVOCACAO_RESP', 'DATA_ORIENTACAO', 'RECEBE_BOLSA_FAMILIA', 'DATA_PARECER_TEC'], 'string', 'max' => 20],
            [['NOME_PEDAGOGO', 'NOME_PROFESSOR', 'JUSTIF_INFREQUENCIA'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CODIGO_ENCAMINHAMENTO' => 'Codigo Encaminhamento',
            'STATUS_ATENDIMENTO' => 'Status Atendimento',
            'ANO_LETIVO' => 'Ano Letivo',
            'NOME_POLO' => 'Nome Polo',
            'NOME_MOTIVO' => 'Nome Motivo',
            'ZONA' => 'Zona',
            'CODIGO_ESCOLA' => 'Codigo Escola',
            'NOME_ESCOLA' => 'Nome Escola',
            'CODIGO_ALUNO' => 'Codigo Aluno',
            'NOME_ALUNO' => 'Nome Aluno',
            'ENDERECO_ALUNO' => 'Endereco Aluno',
            'BAIRRO_ALUNO' => 'Bairro Aluno',
            'MUNICIPIO_ALUNO' => 'Municipio Aluno',
            'NOME_ENSINO' => 'Nome Ensino',
            'FASE' => 'Fase',
            'NOME_PROJETO' => 'Nome Projeto',
            'TURNO' => 'Turno',
            'TURMA' => 'Turma',
            'COMUNICOU_PAIS' => 'Comunicou Pais',
            'MATRICULA_PEDAGOGO' => 'Matricula Pedagogo',
            'NOME_PEDAGOGO' => 'Nome Pedagogo',
            'DATA_ENCAMINHAMENTO' => 'Data Encaminhamento',
            'MES_ENCAMINHAMENTO' => 'Mes Encaminhamento',
            'MATRICULA_PROFESSOR' => 'Matricula Professor',
            'NOME_PROFESSOR' => 'Nome Professor',
            'DATA_CONVOCACAO_RESP' => 'Data Convocacao Resp',
            'DATA_ORIENTACAO' => 'Data Orientacao',
            'STATUS_ALUNO' => 'Status Aluno',
            'RECEBE_BOLSA_FAMILIA' => 'Recebe Bolsa Familia',
            'NOME_PROFISSAO' => 'Nome Profissao',
            'MATRICULA_PROFISSIONAL' => 'Matricula Profissional',
            'NOME_PROFISSIONAL' => 'Nome Profissional',
            'DATA_PARECER_TEC' => 'Data Parecer Tec',
            'QUANT_LIGACAO_TEL' => 'Quant Ligacao Tel',
            'QUANT_CONTATO_REDESOCIAL' => 'Quant Contato Redesocial',
            'STATUS_VISITA' => 'Status Visita',
            'JUSTIF_INFREQUENCIA' => 'Justif Infrequencia',
        ];
    }
}
