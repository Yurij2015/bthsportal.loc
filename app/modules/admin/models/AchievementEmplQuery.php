<?php

namespace app\modules\admin\models;

/**
 * This is the ActiveQuery class for [[AchievementEmpl]].
 *
 * @see AchievementEmpl
 */
class AchievementEmplQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return AchievementEmpl[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return AchievementEmpl|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
