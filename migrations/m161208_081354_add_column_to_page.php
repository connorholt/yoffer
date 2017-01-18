<?php

use yii\db\Migration;

class m161208_081354_add_column_to_page extends Migration
{
    public function safeUp()
    {
        $this->addColumn('questions', 'ref', $this->string());
    }

    public function safeDown()
    {
        $this->dropColumn('questions', 'ref');
    }
 }
