<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_dbd".
 *
 * @property string $id
 * @property string $timestamp
 * @property string $coordinates
 * @property string $ns_1
 * @property int $fday
 * @property int $age
 * @property string $sex
 * @property string $prevd
 */
class DataDbd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_dbd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'timestamp', 'coordinates', 'ns_1', 'fday', 'age', 'sex', 'prevd'], 'required'],
            [['timestamp'], 'safe'],
            [['coordinates', 'sex'], 'string'],
            [['fday', 'age'], 'integer'],
            [['id', 'ns_1'], 'string', 'max' => 255],
            [['prevd'], 'string', 'max' => 5],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'timestamp' => 'Timestamp',
            'coordinates' => 'Coordinates',
            'ns_1' => 'Ns 1',
            'fday' => 'Fday',
            'age' => 'Age',
            'sex' => 'Sex',
            'prevd' => 'Prevd',
        ];
    }
}
