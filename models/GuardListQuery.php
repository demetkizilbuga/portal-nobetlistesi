<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[GuardList]].
 *
 * @see GuardList
 */
class GuardListQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return GuardList[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return GuardList|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
