<?php

use yii\db\Migration;

class m170120_130219_add_column extends Migration
{
    public function up()
    {
        $this->addColumn('questions', 'answer', 'text');
    }

    public function down()
    {
        $this->dropColumn('questions', 'answer');
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
