<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "guard_list".
 *
 * @property int $id
 * @property int $user_id
 * @property double $latitude
 * @property double $longitude
 * @property string $start
 * @property string $end
 * @property int $category_id
 */
class GuardList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guard_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'latitude', 'longitude', 'start', 'end', 'category_id'], 'required'],
            [['id', 'user_id', 'category_id'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['start', 'end'], 'safe'],
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
            'user_id' => 'User ID',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'start' => 'Start',
            'end' => 'End',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return GuardListQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GuardListQuery(get_called_class());
    }
}
