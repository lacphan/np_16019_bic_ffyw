<?php

use \common\enpii\components\NpMigration;

class m160718_094225_create_page_item extends NpMigration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->commonCreateTable('{{%page_item}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'code' => $this->string(),
            'description' => $this->text(),
            'locale_id' =>  $this->string(),
        ], $tableOptions);
    }
    public function down()
    {
        $this->dropTable('{{%page_item}}');
    }
}
