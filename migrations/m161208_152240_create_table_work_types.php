<?php

use yii\db\Migration;

class m161208_152240_create_table_work_types extends Migration
{
    public function safeUp()
    {
        $this->createTable('types', [
            'id'       => $this->primaryKey(),
            'name'     => $this->string()->notNull(),
            'created'  => $this->timestamp(),
            'modified' => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('types');
    }
}
