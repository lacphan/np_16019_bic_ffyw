<?php

use yii\db\Migration;

class m160322_023358_create_product_term_relations extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%product_term_relations}}', [
            'term_id' => $this->integer(),
            'product_id' => $this->integer()
        ],$tableOptions);
        $this->addForeignKey('FK_ProductTermRelation_Product_ID', '{{%product_term_relations}}', 'product_id', '{{%product}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('FK_ProductTermRelation_Term_ID', '{{%product_term_relations}}', 'term_id', '{{%term_item}}', 'id', 'NO ACTION', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('FK_ProductTermRelation_Product_ID','{{%product_term_relations}}');
        $this->dropForeignKey('FK_ProductTermRelation_Term_ID','{{%product_term_relations}}');
        $this->dropTable('{{%product_term_relations}}');
    }
}
