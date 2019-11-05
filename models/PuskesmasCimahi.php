<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "puskesmas_cimahi".
 *
 * @property int $id
 * @property string $kode_puskesmas
 * @property string $nama_puscim
 * @property string $alamat_puscim
 * @property string $telepon_puscim
 * @property string $jenis_puscim
 * @property string $coordinates_puscim
 * @property string $kepala_puskesmas
 */
class PuskesmasCimahi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'puskesmas_cimahi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_puskesmas', 'nama_puscim', 'alamat_puscim', 'telepon_puscim', 'jenis_puscim', 'coordinates_puscim', 'kepala_puskesmas'], 'required'],
            [['alamat_puscim', 'coordinates_puscim'], 'string'],
            [['kode_puskesmas'], 'string', 'max' => 20],
            [['nama_puscim', 'jenis_puscim', 'kepala_puskesmas'], 'string', 'max' => 255],
            [['telepon_puscim'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_puskesmas' => 'Kode Puskesmas',
            'nama_puscim' => 'Nama Puscim',
            'alamat_puscim' => 'Alamat Puscim',
            'telepon_puscim' => 'Telepon Puscim',
            'jenis_puscim' => 'Jenis Puscim',
            'coordinates_puscim' => 'Coordinates Puscim',
            'kepala_puskesmas' => 'Kepala Puskesmas',
        ];
    }
}
