<?php

use \common\enpii\components\NpMigration;

class m130524_201442_init extends NpMigration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->commonCreateTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'profile_id' => $this->integer(),
            'parent_id' => $this->integer(),
            'level' => $this->integer(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'building_id' => $this->integer(),
        ], $tableOptions);
        $this->commonCreateIndex('{{%user}}', 'username');
        $this->commonCreateIndex('{{%user}}', 'email');
        $this->commonCreateIndex('{{%user}}', 'profile_id');
        $this->commonCreateIndex('{{%user}}', 'parent_id');
        $this->commonCreateIndex('{{%user}}', 'level');

        return true;
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
        return true;
    }
}
