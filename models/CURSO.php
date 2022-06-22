<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_CURSO".
 *
 * @property string $CURSO_NOME
 * @property string $CURSO_CARGA_HORARIA
 * @property string $CURSO_COD_PK
 *
 * @property TURMA[] $tURMAs
 */
class CURSO extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_CURSO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CURSO_COD_PK'], 'required'],
            [['CURSO_COD_PK'], 'number'],
            [['CURSO_NOME'], 'string', 'max' => 50],
            [['CURSO_CARGA_HORARIA'], 'string', 'max' => 20],
            [['CURSO_COD_PK'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CURSO_NOME' => 'Curso Nome',
            'CURSO_CARGA_HORARIA' => 'Curso Carga Horaria',
            'CURSO_COD_PK' => 'Curso Cod Pk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTURMAs()
    {
        return $this->hasMany(TURMA::className(), ['CURSO_COD_FK' => 'CURSO_COD_PK']);
    }
}
