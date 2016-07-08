<?php

use yii\db\Migration;

/**
 * Handles the creation for table `task_media_relation`.
 */
class m160624_024355_create_task_relation_media extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%task_relation_media}}', [
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
        $this->dropTable('{{%task_relation_media}}');
    }
}
