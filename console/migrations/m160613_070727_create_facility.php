<?php

use yii\db\Migration;

/**
 * Handles the creation for table `facility`.
 */
class m160613_070727_create_facility extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%facility}}', [
            'id' => $this->primaryKey(),
            'facility_type' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%facility}}');
    }
}
