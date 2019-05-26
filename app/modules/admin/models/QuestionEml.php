<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "questionary_eml".
 *
 * @property int $idquestionary_eml
 * @property int $question_idquestion
 * @property int $achievement_idachievement
 * @property string $answertoquestion
 * @property string $date_add
 *
 * @property Achievement $achievementIdachievement
 * @property Question $questionIdquestion
 */
class QuestionEml extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'questionary_eml';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_idquestion', 'achievement_idachievement'], 'required'],
            [['question_idquestion', 'achievement_idachievement'], 'integer'],
            [['date_add'], 'safe'],
            [['answertoquestion'], 'string', 'max' => 45],
            [['achievement_idachievement'], 'exist', 'skipOnError' => true, 'targetClass' => Achievement::className(), 'targetAttribute' => ['achievement_idachievement' => 'idachievement']],
            [['question_idquestion'], 'exist', 'skipOnError' => true, 'targetClass' => Question::className(), 'targetAttribute' => ['question_idquestion' => 'idquestion']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idquestionary_eml' => Yii::t('app', 'Idquestionary Eml'),
            'question_idquestion' => Yii::t('app', 'Question Idquestion'),
            'achievement_idachievement' => Yii::t('app', 'Achievement Idachievement'),
            'answertoquestion' => Yii::t('app', 'Answertoquestion'),
            'date_add' => Yii::t('app', 'Date Add'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAchievementIdachievement()
    {
        return $this->hasOne(Achievement::className(), ['idachievement' => 'achievement_idachievement']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionIdquestion()
    {
        return $this->hasOne(Question::className(), ['idquestion' => 'question_idquestion']);
    }

    /**
     * {@inheritdoc}
     * @return QestionEmlQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QestionEmlQuery(get_called_class());
    }
}
