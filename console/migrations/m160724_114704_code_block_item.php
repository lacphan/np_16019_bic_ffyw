<?php

use yii\db\Migration;

class m160724_114704_code_block_item extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%code_block_item}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(255),
            'content'=> $this->text()
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%code_block_item}}');
    }
}
