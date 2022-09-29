<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_TXTALUNO".
 *
 * @property string $CODIGO_SIGEAM
 * @property string $ANO_MATRICULA
 * @property string $BAIRRO_ALUNO
 * @property string $CODIGO_INEP_ALUNO
 * @property string $COR
 * @property string $CPF_DO_ALUNO
 * @property string $CPF_DO_RESPONSAVEL
 * @property string $CURSO
 * @property string $DATA_DE_NASCIMENTO
 * @property string $DATA_DE_OBITO
 * @property string $DISTRITO
 * @property string $EMAIL_INSTITUCIONAL
 * @property int $CODIGO_ESCOLA
 * @property string $ESCOLA
 * @property string $FASE
 * @property string $FASE_ORIGEM
 * @property string $GEMEO
 * @property string $INDÍGENA
 * @property string $MUNICIPIO_ESCOLA
 * @property string $MUNICIPIO_NASCIMENTO
 * @property string $NACIONALIDADE
 * @property string $NECESSIDADES
 * @property string $NOME_DA_MAE
 * @property string $NOME_DO_PAI
 * @property int $PROJETO
 * @property string $SEXO
 * @property string $TELEFONE
 * @property string $TURNO
 * @property string $ZONA_DA_ESCOLA
 * @property string $NIS
 * @property string $TIPO_SANGUINEO
 * @property string $LOCALIZACAO
 * @property string $RG
 * @property string $LOCAL_SALA
 * @property string $CARTAO_SUS_ALUNO
 * @property string $BOLSA_FAMILIA
 * @property string $IMC
 */
class TXTALUNO extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_TXTALUNO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CODIGO_SIGEAM'], 'required'],
            [['CODIGO_ESCOLA', 'PROJETO'], 'integer'],
            [['CODIGO_SIGEAM', 'SEXO', 'IMC'], 'string', 'max' => 10],
            [['ANO_MATRICULA'], 'string', 'max' => 4],
            [['BAIRRO_ALUNO', 'ESCOLA', 'MUNICIPIO_ESCOLA', 'NACIONALIDADE', 'NOME_DA_MAE', 'NOME_DO_PAI', 'ZONA_DA_ESCOLA', 'LOCALIZACAO', 'LOCAL_SALA'], 'string', 'max' => 255],
            [['CODIGO_INEP_ALUNO'], 'string', 'max' => 12],
            [['COR', 'EMAIL_INSTITUCIONAL', 'FASE', 'FASE_ORIGEM'], 'string', 'max' => 100],
            [['CPF_DO_ALUNO', 'CPF_DO_RESPONSAVEL', 'DISTRITO', 'TELEFONE', 'RG', 'CARTAO_SUS_ALUNO'], 'string', 'max' => 15],
            [['CURSO'], 'string', 'max' => 50],
            [['DATA_DE_NASCIMENTO', 'DATA_DE_OBITO', 'MUNICIPIO_NASCIMENTO'], 'string', 'max' => 11],
            [['GEMEO', 'INDÍGENA', 'NECESSIDADES', 'BOLSA_FAMILIA'], 'string', 'max' => 3],
            [['TURNO', 'NIS', 'TIPO_SANGUINEO'], 'string', 'max' => 20],
            [['CODIGO_SIGEAM'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CODIGO_SIGEAM' => 'Codigo Sigeam',
            'ANO_MATRICULA' => 'Ano Matricula',
            'BAIRRO_ALUNO' => 'Bairro Aluno',
            'CODIGO_INEP_ALUNO' => 'Codigo Inep Aluno',
            'COR' => 'Cor',
            'CPF_DO_ALUNO' => 'Cpf Do Aluno',
            'CPF_DO_RESPONSAVEL' => 'Cpf Do Responsavel',
            'CURSO' => 'Curso',
            'DATA_DE_NASCIMENTO' => 'Data De Nascimento',
            'DATA_DE_OBITO' => 'Data De Obito',
            'DISTRITO' => 'Distrito',
            'EMAIL_INSTITUCIONAL' => 'Email Institucional',
            'CODIGO_ESCOLA' => 'Codigo Escola',
            'ESCOLA' => 'Escola',
            'FASE' => 'Fase',
            'FASE_ORIGEM' => 'Fase Origem',
            'GEMEO' => 'Gemeo',
            'INDÍGENA' => 'Indígena',
            'MUNICIPIO_ESCOLA' => 'Municipio Escola',
            'MUNICIPIO_NASCIMENTO' => 'Municipio Nascimento',
            'NACIONALIDADE' => 'Nacionalidade',
            'NECESSIDADES' => 'Necessidades',
            'NOME_DA_MAE' => 'Nome Da Mae',
            'NOME_DO_PAI' => 'Nome Do Pai',
            'PROJETO' => 'Projeto',
            'SEXO' => 'Sexo',
            'TELEFONE' => 'Telefone',
            'TURNO' => 'Turno',
            'ZONA_DA_ESCOLA' => 'Zona Da Escola',
            'NIS' => 'Nis',
            'TIPO_SANGUINEO' => 'Tipo Sanguineo',
            'LOCALIZACAO' => 'Localizacao',
            'RG' => 'Rg',
            'LOCAL_SALA' => 'Local Sala',
            'CARTAO_SUS_ALUNO' => 'Cartao Sus Aluno',
            'BOLSA_FAMILIA' => 'Bolsa Familia',
            'IMC' => 'Imc',
        ];
    }
}
