<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\AchievementEmpl;

/**
 * AchievementEmplSearch represents the model behind the search form of `app\modules\admin\models\AchievementEmpl`.
 */
class AchievementEmplSearch extends AchievementEmpl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idachievement_empl', 'user_id', 'achievement_idachievement'], 'integer'],
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
        $query = AchievementEmpl::find();

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
            'idachievement_empl' => $this->idachievement_empl,
            'user_id' => $this->user_id,
            'achievement_idachievement' => $this->achievement_idachievement,
            'date_add' => $this->date_add,
            'date_up' => $this->date_up,
        ]);

        return $dataProvider;
    }
}
