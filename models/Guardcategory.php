<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "guard_category".
 *
 * @property int $id
 * @property string $name
 */
class Guardcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guard_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['name'], 'unique'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * {@inheritdoc}
     * @return GuardcategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GuardcategoryQuery(get_called_class());
    }
}
