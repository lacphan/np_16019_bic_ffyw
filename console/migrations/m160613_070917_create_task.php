<?php

use yii\db\Migration;

/**
 * Handles the creation for table `task`.
 */
class m160613_070917_create_task extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%task}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string('255'),
            'facility_id' => $this->integer(),
            'building_facility_id' => $this->integer()
        ]);
        $this->addForeignKey('FK_Task_Facility_ID', '{{%task}}', 'facility_id', '{{%facility}}', 'id', 'CASCADE', 'CASCADE');
       
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('FK_Task_Facility_ID','{{%task}}');
        $this->dropTable('{{%task}}');
    }
}
