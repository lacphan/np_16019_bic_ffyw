<?php

use yii\db\Migration;

class m160809_095445_add_is_grand_prize extends Migration
{
    public function up()
    {
        $this->addColumn('{{%contest_session}}', 'is_grand_prize', $this->integer()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('{{%contest_session}}', 'is_grand_prize');
    }

}
