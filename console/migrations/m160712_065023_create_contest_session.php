<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contest_session`.
 */
class m160712_065023_create_contest_session extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%contest_session}}', [
            'id' => $this->primaryKey(),
            'contest_item_id' => $this->integer(),
            'user_id' => $this->integer(),
            'user_email' => $this->string(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'birth_year' => $this->dateTime(),
            'attachment_id' => $this->integer()
        ]);

        $this->addForeignKey('FK_ContestSession_ContestSessionItem_ID', '{{%contest_session}}', 'contest_item_id', '{{%contest_item}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('FK_ContestSession_User_ID', '{{%contest_session}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('FK_ContestSession_Attachment_ID', '{{%contest_session}}', 'attachment_id', '{{%attachment}}', 'id', 'NO ACTION', 'CASCADE');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('FK_ContestSession_ContestSessionItem_ID','{{%contest_session}}');
        $this->dropForeignKey('FK_ContestSession_User_ID','{{%contest_session}}');
        $this->dropForeignKey('FK_ContestSession_Attachment_ID','{{%contest_session}}');
        $this->dropTable('{{%contest_session}}');
    }
}
