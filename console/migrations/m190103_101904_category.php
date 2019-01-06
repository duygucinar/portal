<?php

use yii\db\Migration;

/**
 * Class m190103_101904_category
 */
class m190103_101904_category extends Migration
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

		$this->createTable('category', [
			'id' => $this->primaryKey(),
			'document' => $this->string(200)->notNull()
		], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_101904_category cannot be reverted.\n";
		$this->dropTable('category');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_101904_category cannot be reverted.\n";

        return false;
    }
    */
}
