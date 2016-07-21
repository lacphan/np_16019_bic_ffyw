<?php

use yii\db\Migration;

class m160721_072619_add_contest_item extends Migration
{
    public function up()
    {
        $this->addColumn('{{%contest_item}}', 'locale_id', $this->integer()->defaultValue(1));
        $this->addColumn('{{%contest_item}}', 'popup_id', $this->integer());
        $this->addColumn('{{%contest_item}}', 'parent_id', $this->integer());
        $this->addColumn('{{%contest_item}}', 'week_number', $this->integer());
    }

    public function down()
    {
        $this->dropColumn('{{%contest_item}}', 'locale_id');
        $this->dropColumn('{{%contest_item}}', 'popup_id');
        $this->dropColumn('{{%contest_item}}', 'parent_id');
        $this->dropColumn('{{%contest_item}}', 'week_number');
    }
}
