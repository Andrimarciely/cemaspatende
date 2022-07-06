<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_MATRICULA".
 *
 * @property string $MATRICULA_COD_PK
 * @property string $ALUNO_COD_FK
 * @property string $CURSO_COD_FK
 * @property string $TURMA_COD_FK
 *
 * @property TURMA $tURMACODFK
 * @property ALUNO $aLUNOCODFK
 */
class MATRICULA extends \yii\db\ActiveRecord
{
    

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_MATRICULA';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MATRICULA_COD_PK', 'ALUNO_COD_FK', 'CURSO_COD_FK',], 'number'],
            [['TURMA_COD_FK'],'string', 'max' => 20],
            [['MATRICULA_COD_PK'], 'unique'],
            [['TURMA_COD_FK'], 'exist', 'skipOnError' => true, 'targetClass' => TURMA::className(), 'targetAttribute' => ['TURMA_COD_FK' => 'TURMA_COD_PK']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MATRICULA_COD_PK' => 'Matricula Cod Pk',
            'ALUNO_COD_FK' => 'Aluno Cod Fk',
            'CURSO_COD_FK' => 'Curso Cod Fk',
            'TURMA_COD_FK' => 'Turma Cod Fk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTURMACODFK()
    {
        return $this->hasOne(TURMA::className(), ['TURMA_COD_PK' => 'TURMA_COD_FK']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getALUNOCODFK()
    {
        return $this->hasOne(ALUNO::className(), ['ALUNO_COD_PK' => 'ALUNO_COD_FK']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCURSOCODFK()
    {
        return $this->hasOne(CURSO::className(), ['CURSO_COD_PK' => 'CURSO_COD_FK']);
    }



    

}
