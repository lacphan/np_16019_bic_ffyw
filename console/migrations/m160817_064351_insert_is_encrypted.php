<?php

use yii\db\Migration;

class m160817_064351_insert_is_encrypted extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'is_encrypted', $this->integer()->defaultValue(0));
        $this->addColumn('{{%contest_session}}', 'is_encrypted', $this->integer()->defaultValue(0));
        $this->db->createCommand('ALTER TABLE `bic_ffyw_user` DROP INDEX `IX_bic_ffyw_user578d0768222f8_email`')->execute();
        $this->db->createCommand('ALTER TABLE `bic_ffyw_user` MODIFY COLUMN `email` text')->execute();
        $this->db->createCommand('ALTER TABLE `bic_ffyw_user` MODIFY COLUMN `first_name` text')->execute();
        $this->db->createCommand('ALTER TABLE `bic_ffyw_user` MODIFY COLUMN `last_name` text')->execute();
        $this->db->createCommand('ALTER TABLE `bic_ffyw_contest_session` MODIFY COLUMN `user_email` text')->execute();
        $this->db->createCommand('ALTER TABLE `bic_ffyw_contest_session` MODIFY COLUMN `first_name` text')->execute();
        $this->db->createCommand('ALTER TABLE `bic_ffyw_contest_session` MODIFY COLUMN `last_name` text')->execute();
        $this->db->createCommand('ALTER TABLE `bic_ffyw_user_profile` MODIFY COLUMN `phone_number` text')->execute();

    }

    public function down()
    {
//        $this->dropColumn('{{%user}}', 'is_encrypted');
//        $this->dropColumn('{{%contest_session}}', 'is_encrypted');
    }

}
