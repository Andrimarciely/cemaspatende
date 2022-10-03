<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_ROTA".
 *
 * @property string $FID
 * @property string $NAME
 * @property int $SEQUENCE
 * @property string $LATITUDE
 * @property string $LONGITUDE
 */
class ROTA extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_ROTA';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SEQUENCE'], 'integer'],
            [['FID'], 'string', 'max' => 5],
            [['NAME', 'LATITUDE', 'LONGITUDE'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'FID' => 'Fid',
            'NAME' => 'Name',
            'SEQUENCE' => 'Sequence',
            'LATITUDE' => 'Latitude',
            'LONGITUDE' => 'Longitude',
        ];
    }
}
