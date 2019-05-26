<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property int $idquestion
 * @property string $question
 * @property string $date_add
 *
 * @property QuestionaryEml[] $questionaryEmls
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_add'], 'safe'],
            [['question'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idquestion' => Yii::t('app', 'Idquestion'),
            'question' => Yii::t('app', 'Question'),
            'date_add' => Yii::t('app', 'Date Add'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionaryEmls()
    {
        return $this->hasMany(QuestionaryEml::className(), ['question_idquestion' => 'idquestion']);
    }

    /**
     * {@inheritdoc}
     * @return QestionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QestionQuery(get_called_class());
    }
}
