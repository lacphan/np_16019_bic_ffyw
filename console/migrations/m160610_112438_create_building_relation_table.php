<?php

use yii\db\Migration;
use common\enpii\components\NpMigration;
/**
 * Handles the creation for table `building_relatetion_table`.
 */
class m160610_112438_create_building_relation_table extends NpMigration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%building_relation}}', [
            'building_id' => $this->integer(),
            'user_id' => $this->integer(),
        ]);
        $this->commonCreateIndex('{{%building_relation}}','building_id');
        $this->commonCreateIndex('{{%building_relation}}','user_id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%building_relation}}');
    }
}
