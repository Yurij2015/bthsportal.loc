<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\MotivationEmpl;

/**
 * MotivationEmplSearch represents the model behind the search form of `app\modules\admin\models\MotivationEmpl`.
 */
class MotivationEmplSearch extends MotivationEmpl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'motivation_means_idmotivation_means'], 'integer'],
            [['date_add', 'date_up'], 'safe'],
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
        $query = MotivationEmpl::find();

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
            'user_id' => $this->user_id,
            'motivation_means_idmotivation_means' => $this->motivation_means_idmotivation_means,
            'date_add' => $this->date_add,
            'date_up' => $this->date_up,
        ]);

        return $dataProvider;
    }
}
