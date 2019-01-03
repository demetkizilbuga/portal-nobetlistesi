<?php

use yii\db\Migration;

/**
 * Class m190103_103841_guard_category
 */
class m190103_103841_guard_category extends Migration
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

        $this->createTable(‘guard_category’, [
            ‘id’ => $this->primaryKey(),
            ‘name’ => $this->string(50)->notNull()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_103841_guard_category cannot be reverted.\n";
        $this->dropTable('guard_category');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_103841_guard_category cannot be reverted.\n";

        return false;
    }
    */
}
