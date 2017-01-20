<?php

use yii\db\Migration;

class m170120_210759_add_column extends Migration
{
    public function up()
    {
        $this->addColumn('questions', 'question', 'TEXT');
    }

    public function down()
    {
        $this->dropColumn('questions', 'question');
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
