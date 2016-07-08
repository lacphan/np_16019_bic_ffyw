<?php

use common\enpii\components\NpMigration;

/**
 * Handles the creation for table `rating`.
 */
class m160618_035936_create_rating extends NpMigration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->commonCreateTable('{{%rating}}', [
            'id' => $this->primaryKey(),
            'value' => $this->integer()->defaultValue(0)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%rating}}');
    }
}
