<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\QuestionEml;

/**
 * QuestionEmlSearch represents the model behind the search form of `app\modules\admin\models\QuestionEml`.
 */
class QuestionEmlSearch extends QuestionEml
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idquestionary_eml', 'question_idquestion', 'achievement_idachievement'], 'integer'],
            [['answertoquestion', 'date_add'], 'safe'],
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
        $query = QuestionEml::find();

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
            'idquestionary_eml' => $this->idquestionary_eml,
            'question_idquestion' => $this->question_idquestion,
            'achievement_idachievement' => $this->achievement_idachievement,
            'date_add' => $this->date_add,
        ]);

        $query->andFilterWhere(['like', 'answertoquestion', $this->answertoquestion]);

        return $dataProvider;
    }
}
