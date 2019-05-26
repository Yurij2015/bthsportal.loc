<?php

namespace app\modules\admin\models;

/**
 * This is the ActiveQuery class for [[MotivationMeans]].
 *
 * @see MotivationMeans
 */
class MotivationMeansQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return MotivationMeans[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return MotivationMeans|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
