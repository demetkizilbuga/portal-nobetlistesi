<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Guardcategory]].
 *
 * @see Guardcategory
 */
class GuardcategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Guardcategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Guardcategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
