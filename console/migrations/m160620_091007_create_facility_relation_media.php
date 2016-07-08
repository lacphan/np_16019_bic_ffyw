<?php

use yii\db\Migration;

/**
 * Handles the creation for table `facility_relation_media`.
 */
class m160620_091007_create_facility_relation_media extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%facility_relation_media}}', [
            'id' => $this->primaryKey(),
            'object_id' => $this->integer(),
            'media_id' => $this->integer(),
            'sort_order' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%facility_relation_media}}');
    }
}
