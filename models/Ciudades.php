<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciudades".
 *
 * @property int $id_ciudades
 * @property string $nomb_ciudades
 * @property string $comu_ciudades
 */
class Ciudades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciudades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomb_ciudades', 'comu_ciudades'], 'required'],
            [['nomb_ciudades', 'comu_ciudades'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ciudades' => 'Id Ciudades',
            'nomb_ciudades' => 'Nomb Ciudades',
            'comu_ciudades' => 'Comu Ciudades',
        ];
    }
}
