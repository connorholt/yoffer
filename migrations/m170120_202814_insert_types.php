<?php

use yii\db\Migration;

class m170120_202814_insert_types extends Migration
{
    public function up()
    {
        $this->insert('types', ['name' => 'PHP']);
        $this->insert('types', ['name' => 'Базы данных, SQL']);
        $this->insert('types', ['name' => 'ООП, Паттерны, код']);
        $this->insert('types', ['name' => 'JavaScript']);
    }

    public function down()
    {
        echo "m170120_202814_insert_types cannot be reverted.\n";

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
