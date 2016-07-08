<?php

use \common\enpii\components\NpMigration;

class m160321_050010_create_term_item extends NpMigration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->commonCreateTable('{{%term_item}}', [
            'id' => $this->primaryKey(20),
            'name' => $this->text(),
            'slug' => $this->string(),
            'term_group' => $this->bigInteger(10),
            'taxonomy' => $this->string(255),
            'description' => $this->text(),
            'parent'    => $this->bigInteger(20)->defaultValue(null),
            'level' => $this->integer()->defaultValue(0),
            'count'     => $this->bigInteger(20),
            'term_order' => $this->integer(),
        ], $tableOptions);
        $this->commonCreateIndex('{{%term_item}}','parent');
    }

    public function down()
    {
        $this->dropTable('{{%term_item}}');
    }
}
