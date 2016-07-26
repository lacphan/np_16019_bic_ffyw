<?php

use yii\db\Migration;

class m160723_032445_add_field_is_winner extends Migration
{
    public function up()
    {
        $this->addColumn('{{%contest_session}}', 'is_winner', $this->integer()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('{{%contest_session}}', 'is_winner');
    }

}
