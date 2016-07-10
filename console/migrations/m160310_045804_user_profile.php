<?php

use yii\db\Migration;

class m160310_045804_user_profile extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_profile}}', [
            'id' => $this->primaryKey(),
            'address' => $this->string(),
            'city' => $this->string(),
            'street' => $this->string(),
            'province' => $this->string(255),
            'post_code' => $this->string(255),
            'phone_number' => $this->string(32),
            'united' => $this->string(32),
            'date_of_birth' => $this->dateTime(),

        ], $tableOptions);
        $this->addForeignKey('FK_User_UserProfile_ID', '{{%user}}', 'profile_id', '{{%user_profile}}', 'id', 'CASCADE', 'CASCADE');

        return true;
    }

    public function down()
    {
        $this->dropForeignKey('FK_User_UserProfile_ID','{{%user}}');
        $this->dropTable('{{%user_profile}}');

        return true;
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
