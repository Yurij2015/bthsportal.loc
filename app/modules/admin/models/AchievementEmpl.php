<?php

namespace app\modules\admin\models;

use Yii;
use app\models\User;
/**
 * This is the model class for table "achievement_empl".
 *
 * @property int $idachievement_empl
 * @property int $user_id
 * @property int $achievement_idachievement
 * @property string $date_add
 * @property string $date_up
 *
 * @property Achievement $achievementIdachievement
 * @property User $user
 */
class AchievementEmpl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'achievement_empl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'achievement_idachievement'], 'required'],
            [['user_id', 'achievement_idachievement'], 'integer'],
            [['date_add', 'date_up'], 'safe'],
            [['achievement_idachievement'], 'exist', 'skipOnError' => true, 'targetClass' => Achievement::className(), 'targetAttribute' => ['achievement_idachievement' => 'idachievement']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idachievement_empl' => Yii::t('app', 'Idachievement Empl'),
            'user_id' => Yii::t('app', 'User ID'),
            'achievement_idachievement' => Yii::t('app', 'Achievement Idachievement'),
            'date_add' => Yii::t('app', 'Date Add'),
            'date_up' => Yii::t('app', 'Date Up'),
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return AchievementEmplQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AchievementEmplQuery(get_called_class());
    }
}
