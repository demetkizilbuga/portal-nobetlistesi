<?php

use yii\db\Migration;

/**
 * Class m190103_102100_guard_list
 */
class m190103_102100_guard_list extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(‘guard_list’, [
            ‘id’ => $this->primaryKey(),
            ‘user_id’ => $this->integer(11)->notNull(),
            ‘latitude’ => $this->double(11)->notNull(),
            ‘longitude’ => $this->double(11)->notNull(),
            ‘start’ => $this->DATETIME()->notNull(),
            ‘end’ => $this->DATETIME()->notNull(),
            ‘category_id’ => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_102100_guard_list cannot be reverted.\n";
        $this->dropTable('guard_list');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_102100_guard_list cannot be reverted.\n";

        return false;
    }
    */
}
