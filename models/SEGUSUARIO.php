<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SEG_SEMED.TB_SEG_USUARIO".
 *
 * @property int $USU_ID_USUARIO
 * @property string $USU_NOME
 * @property string $USU_APELIDO
 * @property string $USU_EMAIL
 * @property string $USU_FONE_CONTATO
 * @property string $USU_CELULAR_CONTATO
 * @property string $USU_SENHA
 * @property string $USU_MOTIVO
 * @property string $USU_MATRICULA
 * @property int $USU_SITUACAO
 * @property int $USU_ORG_CODIGO
 * @property string $USU_DT_CADASTRO
 * @property string $USU_DT_APROVACAO
 * @property int $USU_APROVADOR_ID_APROVADOR
 */
class SEGUSUARIO extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SEG_SEMED.TB_SEG_USUARIO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USU_ID_USUARIO'], 'required'],
            [['USU_ID_USUARIO', 'USU_SITUACAO', 'USU_ORG_CODIGO', 'USU_APROVADOR_ID_APROVADOR'], 'integer'],
            [['USU_NOME', 'USU_APELIDO', 'USU_MOTIVO'], 'string', 'max' => 255],
            [['USU_EMAIL', 'USU_SENHA'], 'string', 'max' => 100],
            [['USU_FONE_CONTATO', 'USU_CELULAR_CONTATO'], 'string', 'max' => 15],
            [['USU_MATRICULA'], 'string', 'max' => 30],
            [['USU_DT_CADASTRO', 'USU_DT_APROVACAO'], 'string', 'max' => 7],
            [['USU_ID_USUARIO'], 'unique'],
            [['USU_NOME'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'USU_ID_USUARIO' => 'Usu Id Usuario',
            'USU_NOME' => 'Usu Nome',
            'USU_APELIDO' => 'Usu Apelido',
            'USU_EMAIL' => 'Usu Email',
            'USU_FONE_CONTATO' => 'Usu Fone Contato',
            'USU_CELULAR_CONTATO' => 'Usu Celular Contato',
            'USU_SENHA' => 'Usu Senha',
            'USU_MOTIVO' => 'Usu Motivo',
            'USU_MATRICULA' => 'Usu Matricula',
            'USU_SITUACAO' => 'Usu Situacao',
            'USU_ORG_CODIGO' => 'Usu Org Codigo',
            'USU_DT_CADASTRO' => 'Usu Dt Cadastro',
            'USU_DT_APROVACAO' => 'Usu Dt Aprovacao',
            'USU_APROVADOR_ID_APROVADOR' => 'Usu Aprovador Id Aprovador',
        ];
    }
}
