<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RumkitCimahi;

/**
 * RUmkitcimahiSearch represents the model behind the search form of `app\models\RumkitCimahi`.
 */
class RUmkitcimahiSearch extends RumkitCimahi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rumkit'], 'integer'],
            [['nama_rumkit', 'alamat_rumkit', 'coordinate_rumkit'], 'safe'],
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
        $query = RumkitCimahi::find();

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
            'id_rumkit' => $this->id_rumkit,
        ]);

        $query->andFilterWhere(['like', 'nama_rumkit', $this->nama_rumkit])
            ->andFilterWhere(['like', 'alamat_rumkit', $this->alamat_rumkit])
            ->andFilterWhere(['like', 'coordinate_rumkit', $this->coordinate_rumkit]);

        return $dataProvider;
    }
}
