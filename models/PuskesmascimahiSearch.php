<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PuskesmasCimahi;

/**
 * PuskesmascimahiSearch represents the model behind the search form of `app\models\PuskesmasCimahi`.
 */
class PuskesmascimahiSearch extends PuskesmasCimahi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['kode_puskesmas', 'nama_puscim', 'alamat_puscim', 'telepon_puscim', 'jenis_puscim', 'coordinates_puscim', 'kepala_puskesmas'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PuskesmasCimahi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'kode_puskesmas', $this->kode_puskesmas])
            ->andFilterWhere(['like', 'nama_puscim', $this->nama_puscim])
            ->andFilterWhere(['like', 'alamat_puscim', $this->alamat_puscim])
            ->andFilterWhere(['like', 'telepon_puscim', $this->telepon_puscim])
            ->andFilterWhere(['like', 'jenis_puscim', $this->jenis_puscim])
            ->andFilterWhere(['like', 'coordinates_puscim', $this->coordinates_puscim])
            ->andFilterWhere(['like', 'kepala_puskesmas', $this->kepala_puskesmas]);

        return $dataProvider;
    }
}
