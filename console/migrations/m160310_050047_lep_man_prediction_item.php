<?php

use yii\db\Migration;
use common\enpii\components\NpMigration;
use common\helpers\ChineseCalendar;

class m160310_050047_lep_man_prediction_item extends NpMigration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->commonCreateTable('{{%prediction_year}}', [
            'id' => $this->bigPrimaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'code' => $this->string(),
            'sample_year' => $this->integer(),
            'description' => $this->text(),
            'locale_id' => $this->integer(),
        ], $tableOptions);

        $this->commonCreateTable('{{%lep_main_prediction_item}}', [
            'id' => $this->bigPrimaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'code' => $this->string(),
            'description' => $this->text()->notNull(),
            'prediction_year_id' => $this->bigInteger()->notNull(),
            'locale_id' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('UNIQ_'.'prediction_year_id_is_deleted','{{%lep_main_prediction_item}}',['prediction_year_id', 'is_deleted'], true);

        return true;
    }

    public function down()
    {
        $this->dropTable('{{%prediction_year}}');
        $this->dropTable('{{%lep_main_prediction_item}}');

        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
