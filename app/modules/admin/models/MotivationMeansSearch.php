<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\MotivationMeans;

/**
 * MotivationMeansSearch represents the model behind the search form of `app\modules\admin\models\MotivationMeans`.
 */
class MotivationMeansSearch extends MotivationMeans
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idmotivation_means', 'created_at', 'updated_at'], 'integer'],
            [['motivation_means_name'], 'safe'],
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
        $query = MotivationMeans::find();

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
            'idmotivation_means' => $this->idmotivation_means,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'motivation_means_name', $this->motivation_means_name]);

        return $dataProvider;
    }
}
