<?php

use yii\db\Migration;

class m161207_155501_create_table_pages extends Migration
{
    public function safeUp()
    {
        $this->createTable('questions', [
            'id'              => $this->primaryKey(),
            'title'           => $this->string()->notNull(),
            'category_id'     => $this->bigInteger(),
            'slug'            => $this->string()->notNull()->unique(),
            'created'         => $this->timestamp(),
            'modified'        => $this->timestamp(),
            'seo_title'       => $this->string(),
            'seo_keyword'     => $this->string(),
            'seo_description' => $this->text(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('questions');
    }
}
