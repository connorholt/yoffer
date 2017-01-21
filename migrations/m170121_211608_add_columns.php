<?php

use yii\db\Migration;

class m170121_211608_add_columns extends Migration
{
    public function up()
    {
        /**
         * 1. Публикация на сайте
         * 2. Показать ответ на сайте
         * 3. Часто встречающийся вопрос
         * 4. Вопрос из известной компании
         * 5. Like
         * 6. Dislike
         *
         * // abtest
         * // statistic
         */
        $this->addColumn('questions', 'is_public', 'boolean DEFAULT false');
        $this->addColumn('questions', 'is_show_answer', 'boolean DEFAULT false');
        $this->addColumn('questions', 'is_often', 'boolean DEFAULT false');
        $this->addColumn('questions', 'is_famous', 'boolean DEFAULT false');
        $this->addColumn('questions', 'like', 'int DEFAULT 0');
        $this->addColumn('questions', 'dislike', 'int DEFAULT 0');
    }

    public function down()
    {
        echo "m170121_211608_add_columns cannot be reverted.\n";

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
