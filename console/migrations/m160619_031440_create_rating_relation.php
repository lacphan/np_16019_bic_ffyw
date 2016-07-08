<?php

use common\enpii\components\NpMigration;

/**
 * Handles the creation for table `building_rating_relation`.
 */
class m160619_031440_create_rating_relation extends NpMigration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%building_rating_relation}}', [
            'id' => $this->primaryKey(),
            'rating_id' => $this->integer(),
            'building_id' => $this->integer(),
        ]);

        $this->createTable('{{%building_facility_rating_relation}}', [
            'id' => $this->primaryKey(),
            'rating_id' => $this->integer(),
            'building_facility_id' => $this->integer(),
        ]);

        $this->createTable('{{%facility_rating_relation}}', [
            'id' => $this->primaryKey(),
            'rating_id' => $this->integer(),
            'facility_id' => $this->integer(),
        ]);

        $this->commonCreateIndex('{{%building_rating_relation}}','rating_id');
        $this->commonCreateIndex('{{%building_rating_relation}}','building_id');

        $this->commonCreateIndex('{{%building_facility_rating_relation}}','rating_id');
        $this->commonCreateIndex('{{%building_facility_rating_relation}}','building_facility_id');

        $this->commonCreateIndex('{{%facility_rating_relation}}','rating_id');
        $this->commonCreateIndex('{{%facility_rating_relation}}','facility_id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%building_rating_relation}}');
        $this->dropTable('{{%building_facility_rating_relation}}');
        $this->dropTable('{{%facility_rating_relation}}');
    }
}
