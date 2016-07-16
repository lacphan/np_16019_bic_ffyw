<?php

use yii\db\Migration;

class m160716_011907_add_accepted_to_contest_session extends Migration
{
    public function up()
    {
        $this->addColumn('{{%contest_session}}', 'accepted', $this->integer()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'accepted');
    }
}
