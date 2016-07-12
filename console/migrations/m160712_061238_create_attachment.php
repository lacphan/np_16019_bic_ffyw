<?php

use yii\db\Migration;

/**
 * Handles the creation for table `attachment`.
 */
class m160712_061238_create_attachment extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%attachment}}',[
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'size' => $this->string()->notNull(),
            'image' => $this->string(),
            'caption' => $this->string(),
            'description' => $this->string(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime(),

        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%attachment}}');
    }
}
