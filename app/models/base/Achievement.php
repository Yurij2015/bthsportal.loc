<?php

namespace app\models\base;

use Yii;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "achievement".
 *
 * @property integer $idachievement
 * @property string $name
 * @property string $description
 * @property string $date_add
 * @property string $date_up
 *
 * @property \app\models\AchievementEmpl[] $achievementEmpls
 * @property \app\models\QuestionaryEml[] $questionaryEmls
 */
class Achievement extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'achievementEmpls',
            'questionaryEmls'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_add', 'date_up'], 'safe'],
            [['name'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 255],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'achievement';
    }

    /**
     *
     * @return string
     * overwrite function optimisticLock
     * return string name of field are used to stored optimistic lock
     *
     */
    public function optimisticLock() {
        return 'lock';
    }

    /**
     * @inheritdoc
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
        return $this->hasMany(\app\models\AchievementEmpl::className(), ['achievement_idachievement' => 'idachievement']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionaryEmls()
    {
        return $this->hasMany(\app\models\QuestionaryEml::className(), ['achievement_idachievement' => 'idachievement']);
    }
    
    /**
     * @inheritdoc
     * @return array mixed
     */
    public function behaviors()
    {
        return [
            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
    }


    /**
     * @inheritdoc
     * @return \app\models\AchievementQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\AchievementQuery(get_called_class());
    }
}
