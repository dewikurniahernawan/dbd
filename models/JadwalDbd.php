<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal_dbd".
 *
 * @property int $id
 * @property string $tempat
 * @property string $tanggal
 * @property string $pemateri
 * @property string $judul
 * @property string $ket
 */
class JadwalDbd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal_dbd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tempat', 'tanggal', 'pemateri', 'judul', 'ket'], 'required'],
            [['tanggal'], 'safe'],
            [['tempat', 'pemateri', 'judul', 'ket'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tempat' => 'Tempat',
            'tanggal' => 'Tanggal',
            'pemateri' => 'Pemateri',
            'judul' => 'Judul',
            'ket' => 'Ket',
        ];
    }
}
