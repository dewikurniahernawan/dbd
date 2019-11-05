<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rumkit_cimahi".
 *
 * @property int $id_rumkit
 * @property string $nama_rumkit
 * @property string $alamat_rumkit
 * @property string $coordinate_rumkit
 */
class RumkitCimahi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rumkit_cimahi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_rumkit', 'alamat_rumkit', 'coordinate_rumkit'], 'required'],
            [['nama_rumkit', 'alamat_rumkit', 'coordinate_rumkit'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rumkit' => 'Id Rumkit',
            'nama_rumkit' => 'Nama Rumkit',
            'alamat_rumkit' => 'Alamat Rumkit',
            'coordinate_rumkit' => 'Coordinate Rumkit',
        ];
    }
}
