<?php

use yii\db\Migration;

class m160809_065152_add_locale_to_user_and_submission extends Migration
{
    public function up()
    {
        $this->addColumn('{{%contest_session}}', 'locale_id', $this->integer()->defaultValue(1));
        $this->addColumn('{{%user}}', 'locale_id', $this->integer()->defaultValue(1));
    }

    public function down()
    {
        $this->dropColumn('{{%contest_session}}', 'locale_id');
        $this->dropColumn('{{%user}}', 'locale_id');
    }

}
