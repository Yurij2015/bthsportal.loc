<?php

namespace app\modules\admin\models;

/**
 * This is the ActiveQuery class for [[MotivationEmpl]].
 *
 * @see MotivationEmpl
 */
class MotivationEmplMeansQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return MotivationEmpl[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return MotivationEmpl|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
