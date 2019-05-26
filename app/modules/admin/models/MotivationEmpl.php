<?php

namespace app\modules\admin\models;

use Yii;
use app\models\User;
/**
 * This is the model class for table "motivation_empl".
 *
 * @property int $id
 * @property int $user_id
 * @property int $motivation_means_idmotivation_means
 * @property string $date_add
 * @property string $date_up
 *
 * @property MotivationMeans $motivationMeansIdmotivationMeans
 * @property User $user
 */
class MotivationEmpl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'motivation_empl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'motivation_means_idmotivation_means'], 'required'],
            [['user_id', 'motivation_means_idmotivation_means'], 'integer'],
            [['date_add', 'date_up'], 'safe'],
            [['motivation_means_idmotivation_means'], 'exist', 'skipOnError' => true, 'targetClass' => MotivationMeans::className(), 'targetAttribute' => ['motivation_means_idmotivation_means' => 'idmotivation_means']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'motivation_means_idmotivation_means' => Yii::t('app', 'Motivation Means Idmotivation Means'),
            'date_add' => Yii::t('app', 'Date Add'),
            'date_up' => Yii::t('app', 'Date Up'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMotivationMeansIdmotivationMeans()
    {
        return $this->hasOne(MotivationMeans::className(), ['idmotivation_means' => 'motivation_means_idmotivation_means']);
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
     * @return MotivationEmplMeansQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MotivationEmplMeansQuery(get_called_class());
    }
}
