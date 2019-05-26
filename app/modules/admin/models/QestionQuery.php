<?php

namespace app\modules\admin\models;

/**
 * This is the ActiveQuery class for [[Question]].
 *
 * @see Question
 */
class QestionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Question[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Question|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
