<?php

use yii\db\Migration;

/**
 * Handles the creation for table `inspection_frequency`.
 */
class m160618_034756_create_inspection_frequency extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%inspection_frequency}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);

        $this->insert('{{%inspection_frequency}}', ['id' => 1, 'name' => 'Everyday' ]);
        $this->insert('{{%inspection_frequency}}', ['id' => 2, 'name' => 'Excluding Saturday, Sunday, PH' ]);
        $this->insert('{{%inspection_frequency}}', ['id' => 3, 'name' => 'Excluding Sunday, PH' ]);
        $this->addForeignKey('FK_BuildingFacility_Inspection_ID', '{{%building_facility}}', 'inspection_id', '{{%inspection_frequency}}', 'id', 'NO ACTION', 'CASCADE');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('FK_BuildingFacility_Inspection_ID', '{{%building_facility}}');
        $this->dropTable('{{%inspection_frequency}}');
    }
}
