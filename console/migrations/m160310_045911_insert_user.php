<?php

use yii\db\Migration;

class m160310_045911_insert_user extends Migration
{
    public function up()
    {
        $this->insert('{{%user}}', ['username' => 'appadmin','first_name' => 'Enpii', 'last_name' => 'Admin', 'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('Admin@123'), 'email' => 'contact@enpii.com', 'created_at' => date("Y-m-d H:i:s"), 'auth_key' => Yii::$app->getSecurity()->generateRandomString()]);
        $this->insert('{{%user}}', ['username' => 'johndoe','first_name' => 'John', 'last_name' => 'Doe', 'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('eNpii@123'), 'email' => 'johndoe@enpii.com', 'created_at' => date("Y-m-d H:i:s"), 'auth_key' => Yii::$app->getSecurity()->generateRandomString()]);
    }

    public function down()
    {

    }
}
