<?php

use yii\db\Migration;

/**
 * Class m190103_103918_document
 */
class m190103_103918_document extends Migration
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

		$this->createTable('document', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'doc_cat' => $this->integer(11)->notNull(),
            'status' => $this->string(50)->notNull(),
            'created' => $this->DATETIME()->notNull(),
            'status_date' => $this->DATETIME()->notNull()
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_103918_document cannot be reverted.\n";
		$this->dropTable('document');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_103918_document cannot be reverted.\n";

        return false;
    }
    */
}
