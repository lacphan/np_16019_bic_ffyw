<?php

use yii\db\Migration;

class m160610_063954_add_building_data extends Migration
{
    public function up()
    {
//        $this->insert('{{%building}}', ['id' => 1, 'name' => 'Yong An Park','author' => 3, 'address' => '123 Lorem Ipsum Acet #01-23 Magnum Vestibulum, Singapore 123456', 'number_of_block' => 4, 'number_of_facility_type' => 1, 'created_at' => date("Y-m-d H:i:s")]);
//        $this->insert('{{%building}}', ['id' => 2, 'name' => 'Building B','author' => 4, 'address' => '123 Lorem Ipsum Acet #01-23 Magnum Vestibulum, Singapore 123456', 'number_of_block' => 21, 'number_of_facility_type' => 10, 'created_at' => date("Y-m-d H:i:s")]);
//        $this->insert('{{%building}}', ['id' => 3, 'name' => 'Building C','author' => 5, 'address' => '123 Lorem Ipsum Acet #01-23 Magnum Vestibulum, Singapore 123456', 'number_of_block' => 21, 'number_of_facility_type' => 10, 'created_at' => date("Y-m-d H:i:s")]);
//        $this->insert('{{%building}}', ['id' => 4, 'name' => 'Building D','author' => 6, 'address' => '123 Lorem Ipsum Acet #01-23 Magnum Vestibulum, Singapore 123456', 'number_of_block' => 21, 'number_of_facility_type' => 10, 'created_at' => date("Y-m-d H:i:s")]);
//        $this->insert('{{%building}}', ['id' => 5, 'name' => 'Building E','author' => 7, 'address' => '123 Lorem Ipsum Acet #01-23 Magnum Vestibulum, Singapore 123456', 'number_of_block' => 21, 'number_of_facility_type' => 10, 'created_at' => date("Y-m-d H:i:s")]);
//        $this->insert('{{%building}}', ['id' => 6, 'name' => 'Building F','author' => 8, 'address' => '123 Lorem Ipsum Acet #01-23 Magnum Vestibulum, Singapore 123456', 'number_of_block' => 21, 'number_of_facility_type' => 10, 'created_at' => date("Y-m-d H:i:s")]);
//        $this->insert('{{%building}}', ['id' => 7, 'name' => 'G','author' => 9, 'address' => '123 Lorem Ipsum Acet #01-23 Magnum Vestibulum, Singapore 123456', 'number_of_block' => 21, 'number_of_facility_type' => 1, 'created_at' => date("Y-m-d H:i:s")]);
//        $this->insert('{{%building}}', ['id' => 8, 'name' => 'G','author' => 9, 'address' => '123 Lorem Ipsum Acet #01-23 Magnum Vestibulum, Singapore 123456', 'number_of_block' => 21, 'number_of_facility_type' => 1, 'created_at' => date("Y-m-d H:i:s")]);
//        $this->insert('{{%building}}', ['id' => 9, 'name' => 'G','author' => 9, 'address' => '123 Lorem Ipsum Acet #01-23 Magnum Vestibulum, Singapore 123456', 'number_of_block' => 21, 'number_of_facility_type' => 1, 'created_at' => date("Y-m-d H:i:s")]);
//        $this->insert('{{%building}}', ['id' => 10, 'name' => 'G','author' => 9, 'address' => '123 Lorem Ipsum Acet #01-23 Magnum Vestibulum, Singapore 123456', 'number_of_block' => 21, 'number_of_facility_type' => 1, 'created_at' => date("Y-m-d H:i:s")]);
    }

    public function down()
    {
        $this->delete('{{%building}}');
    }

}
