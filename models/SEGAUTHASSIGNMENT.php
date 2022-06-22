<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SEG_SEMED.AUTH_ASSIGNMENT".
 *
 * @property string $ITEM_NAME
 * @property string $USER_ID
 * @property int $CREATED_AT
 * @property int $SIS_ID_SISTEMA_FK
 */
class SEGAUTHASSIGNMENT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SEG_SEMED.AUTH_ASSIGNMENT';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ITEM_NAME', 'USER_ID'], 'required'],
            [['CREATED_AT', 'SIS_ID_SISTEMA_FK'], 'integer'],
            [['ITEM_NAME', 'USER_ID'], 'string', 'max' => 64],
            [['ITEM_NAME', 'USER_ID'], 'unique', 'targetAttribute' => ['ITEM_NAME', 'USER_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ITEM_NAME' => 'Item Name',
            'USER_ID' => 'User ID',
            'CREATED_AT' => 'Created At',
            'SIS_ID_SISTEMA_FK' => 'Sis Id Sistema Fk',
        ];
    }
}
