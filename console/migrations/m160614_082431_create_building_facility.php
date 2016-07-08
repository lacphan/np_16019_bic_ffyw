<?php

use common\enpii\components\NpMigration;

/**
 * Handles the creation for table `building_facility`.
 */
class m160614_082431_create_building_facility extends NpMigration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->commonCreateTable('{{%building_facility}}', [
            'id' => $this->primaryKey(),
            'block' => $this->string(255)->notNull(),
            'facility_id' => $this->integer()->notNull(),
            'building_id' => $this->integer()->notNull(),
            'inspection_id' => $this->integer()->notNull(),
            'floor' => $this->string()->notNull(),
            'facility_name' => $this->string()->notNull(),
            'time_per_day' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('FK_BuildingFacility_Facility_ID', '{{%building_facility}}', 'facility_id', '{{%facility}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('FK_BuildingFacility_Building_ID', '{{%building_facility}}', 'building_id', '{{%building}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('FK_Task_BuildingFacility_ID', '{{%task}}', 'building_facility_id', '{{%building_facility}}', 'id', 'SET NULL', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('FK_BuildingFacility_Facility_ID','{{%building_facility}}');
        $this->dropForeignKey('FK_BuildingFacility_Building_ID','{{%building_facility}}');
        $this->dropForeignKey('FK_Task_BuildingFacility_ID','{{%task}}');
        $this->dropTable('{{%building_facility}}');
    }
}
