<?php

use yii\db\Migration;

class m170123_121853_add_columns extends Migration
{
    public function up()
    {
        // добавить поле Совет
        // уровень сложности
        $this->addColumn('questions', 'hint', 'TEXT');
        $this->addColumn('questions', 'level', 'INT default 0');
    }

    public function down()
    {
        echo "m170123_121853_add_columns cannot be reverted.\n";

        return false;
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
