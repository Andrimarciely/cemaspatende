<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_TIPO_ALUNO".
 *
 * @property string $TIPO_ALUNO_COD_PK
 * @property string $TIPO_ALUNO_NOME
 *
 * @property ALUNO[] $aLUNOs
 */
class TIPOALUNO extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_TIPO_ALUNO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['TIPO_ALUNO_COD_PK'], 'required'],
            [['TIPO_ALUNO_COD_PK'], 'number'],
            [['TIPO_ALUNO_NOME'], 'string', 'max' => 50],
            [['TIPO_ALUNO_COD_PK'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TIPO_ALUNO_COD_PK' => 'Tipo Aluno Cod Pk',
            'TIPO_ALUNO_NOME' => 'Tipo Aluno Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getALUNOs()
    {
        return $this->hasMany(ALUNO::className(), ['TIPO_ALUNO_COD_FK' => 'TIPO_ALUNO_COD_PK']);
    }
}
