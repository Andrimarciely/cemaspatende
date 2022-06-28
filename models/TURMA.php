<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_TURMA".
 *
 * @property string $TURMA_COD_PK
 * @property string $TURMA_DT_INICIO
 * @property string $TURMA_DT_FIM
 * @property string $CURSO_COD_FK
 *
 * @property MATRICULA[] $mATRICULAs
 * @property CURSO $cURSOCODFK
 */
class TURMA extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_TURMA';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['TURMA_COD_PK'], 'required'],
            [['TURMA_COD_PK', 'CURSO_COD_FK'], 'number'],
            [['TURMA_DT_INICIO', 'TURMA_DT_FIM'], 'string', 'max' => 10],
            [['TURMA_COD_PK'], 'unique'],
            [['CURSO_COD_FK'], 'exist', 'skipOnError' => true, 'targetClass' => CURSO::className(), 'targetAttribute' => ['CURSO_COD_FK' => 'CURSO_COD_PK']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TURMA_COD_PK' => 'Turma Cod Pk',
            'TURMA_DT_INICIO' => 'Turma Dt Inicio',
            'TURMA_DT_FIM' => 'Turma Dt Fim',
            'CURSO_COD_FK' => 'Curso Cod Fk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMATRICULAs()
    {
        return $this->hasMany(MATRICULA::className(), ['TURMA_COD_FK' => 'TURMA_COD_PK']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCURSOCODFK()
    {
        return $this->hasOne(CURSO::className(), ['CURSO_COD_PK' => 'CURSO_COD_FK']);
    }
}
