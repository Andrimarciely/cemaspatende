<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_ALUNO".
 *
 * @property string $ALUNO_COD_PK
 * @property string $ALUNO_NOME
 * @property string $ALUNO_DT_NASC
 * @property string $ALUNO_ENDERECO
 * @property string $ALUNO_FOTO
 * @property string $TIPO_ALUNO_COD_FK
 *
 * @property TIPOALUNO $tIPOALUNOCODFK
 */
class ALUNO extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_ALUNO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           // [['ALUNO_COD_PK'], 'required'],
            [['ALUNO_COD_PK', 'TIPO_ALUNO_COD_FK'], 'number'],
            [['ALUNO_NOME', 'ALUNO_ENDERECO'], 'string', 'max' => 100],
            [['ALUNO_DT_NASC'], 'string', 'max' => 10],
            [['ALUNO_FOTO'], 'string', 'max' => 50],
            [['ALUNO_COD_PK'], 'unique'],
            [['TIPO_ALUNO_COD_FK'], 'exist', 'skipOnError' => true, 'targetClass' => TIPOALUNO::className(), 'targetAttribute' => ['TIPO_ALUNO_COD_FK' => 'TIPO_ALUNO_COD_PK']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ALUNO_COD_PK' => 'Aluno Cod Pk',
            'ALUNO_NOME' => 'Aluno Nome',
            'ALUNO_DT_NASC' => 'Aluno Dt Nasc',
            'ALUNO_ENDERECO' => 'Aluno Endereco',
            'ALUNO_FOTO' => 'Aluno Foto',
            'TIPO_ALUNO_COD_FK' => 'Tipo Aluno Cod Fk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTIPOALUNOCODFK()
    {
        return $this->hasOne(TIPOALUNO::className(), ['TIPO_ALUNO_COD_PK' => 'TIPO_ALUNO_COD_FK']);
    }
}