<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "motivation_means".
 *
 * @property int $idmotivation_means
 * @property string $motivation_means_name
 * @property int $created_at
 * @property int $updated_at
 *
 * @property MotivationEmpl[] $motivationEmpls
 */
class MotivationMeans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'motivation_means';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['motivation_means_name'], 'string', 'max' => 155],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idmotivation_means' => Yii::t('app', 'Idmotivation Means'),
            'motivation_means_name' => Yii::t('app', 'Motivation Means Name'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMotivationEmpls()
    {
        return $this->hasMany(MotivationEmpl::className(), ['motivation_means_idmotivation_means' => 'idmotivation_means']);
    }

    /**
     * {@inheritdoc}
     * @return MotivationMeansQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MotivationMeansQuery(get_called_class());
    }
}
