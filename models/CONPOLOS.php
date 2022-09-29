<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_CONPOLOS".
 *
 * @property string $COD_POLO
 * @property string $DESCRICAO_POLO
 * @property string $ENDERECO_POLO
 */
class CONPOLOS extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_CONPOLOS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['COD_POLO'], 'required'],
            [['COD_POLO'], 'number'],
            [['DESCRICAO_POLO', 'ENDERECO_POLO'], 'string', 'max' => 255],
            [['COD_POLO'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'COD_POLO' => 'Cod Polo',
            'DESCRICAO_POLO' => 'Descricao Polo',
            'ENDERECO_POLO' => 'Endereco Polo',
        ];
    }
}
