<?php

use yii\db\Migration;

class m161101_141201_alter_table_user extends Migration
{
    public function up()
    {
        /*$this->createTable('{{%user}}', [
                    'id' => $this->primaryKey(),
                    'username' => $this->string()->notNull()->unique(),
                    'auth_key' => $this->string(32)->notNull(),
                    'password_hash' => $this->string()->notNull(),
                    'password_reset_token' => $this->string()->unique(),
                    'email' => $this->string()->notNull()->unique(),
                    'status' => $this->smallInteger()->notNull()->defaultValue(10),
                    'created_at' => $this->integer()->notNull(),
                    'updated_at' => $this->integer()->notNull(),
                ], $tableOptions);*/
        $this->addColumn('{{%user}}', 'status', $this->smallInteger()->notNull()->defaultValue(10));
        $this->addColumn('{{%user}}', 'password_hash', $this->string()->notNull());
        $this->addColumn('{{%user}}', 'password_reset_token', $this->string()->unique());
        $this->addColumn('{{%user}}', 'auth_key', $this->string(32)->notNull());
    }

    public function down()
    {
        $this->dropColumn('{{user}}', 'status');
        $this->dropColumn('{{user}}', 'password_hash');
        $this->dropColumn('{{user}}', 'password_reset_token');
        $this->dropColumn('{{user}}', 'auth_key');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
