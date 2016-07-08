<?php

use yii\db\Migration;
use common\enpii\components\NpMigration;

/**
 * Handles the creation for table `building_table`.
 */
class m160601_120237_create_building_table extends NpMigration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->commonCreateTable('{{%building}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'author' => $this->integer(),
            'address' => $this->string()->notNull(),
            'contact_person' => $this->string()->notNull(),
            'contact_number' => $this->string()->notNull(),
            'contract_start_date' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%building}}');
    }
}
