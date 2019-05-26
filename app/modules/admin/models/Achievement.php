<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "achievement".
 *
 * @property int $idachievement
 * @property string $name
 * @property string $description
 * @property string $date_add
 * @property string $date_up
 *
 * @property AchievementEmpl[] $achievementEmpls
 * @property QuestionaryEml[] $questionaryEmls
 */
class Achievement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'achievement';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_add', 'date_up'], 'safe'],
            [['name'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idachievement' => Yii::t('app', 'Idachievement'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'date_add' => Yii::t('app', 'Date Add'),
            'date_up' => Yii::t('app', 'Date Up'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAchievementEmpls()
    {
        return $this->hasMany(AchievementEmpl::className(), ['achievement_idachievement' => 'idachievement']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionaryEmls()
    {
        return $this->hasMany(QuestionaryEml::className(), ['achievement_idachievement' => 'idachievement']);
    }

    /**
     * {@inheritdoc}
     * @return AchievementQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AchievementQuery(get_called_class());
    }
}
