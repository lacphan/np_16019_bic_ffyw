<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contest_item`.
 */
class m160712_061239_create_contest_item extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%contest_item}}', [
            'id' => $this->primaryKey(),
            'start_date' => $this->dateTime(),
            'end_date' => $this->dateTime(),
            'title' => $this->string(),
            'description' => $this->string(),
        ]);

        $this->insert('{{%contest_item}}',[
            'id' => 1 ,
            'start_date' => '2016-07-12 00:00:00',
            'end_date' => '2016-08-15 23:59:59',
            'title' => "
                Week 1: Ask your child what they would do if they were principal for a day…
            ",
            'description' => "<p>It’s the future and your child is the head of their school. The possibilities are endless! <br>Ask your child to complete the following sentence and upload a photo of their handwritten response: “If I were principal for a day…”</p>"
        ]);
        $this->insert('{{%contest_item}}',[
            'id' => 2 ,
            'start_date' => '2016-08-16 00:00:00',
            'end_date' => '2016-08-22 23:59:59',
            'title' => "
                Week 2: Ask your child what they would do if they were principal for a day…
            ",
            'description' => "<p>It’s the future and your child is the head of their school. The possibilities are endless! <br>Ask your child to complete the following sentence and upload a photo of their handwritten response: “If I were principal for a day…”</p>"

        ]);
        $this->insert('{{%contest_item}}',[
            'id' => 3 ,
            'start_date' => '2016-08-23 00:00:00',
            'end_date' => '2016-08-29 23:59:59',
            'title' => "
                Week 3: Ask your child what they would do if they were principal for a day…
            ",
            'description' => "<p>It’s the future and your child is the head of their school. The possibilities are endless! <br>Ask your child to complete the following sentence and upload a photo of their handwritten response: “If I were principal for a day…”</p>"

        ]);
        $this->insert('{{%contest_item}}',[
            'id' => 4 ,
            'start_date' => '2016-08-30 00:00:00',
            'end_date' => '2016-09-05 23:59:59',
            'title' => "
                Week 4: Ask your child what they would do if they were principal for a day…
            ",
            'description' => "<p>It’s the future and your child is the head of their school. The possibilities are endless! <br>Ask your child to complete the following sentence and upload a photo of their handwritten response: “If I were principal for a day…”</p>"

        ]);
        $this->insert('{{%contest_item}}',[
            'id' => 5 ,
            'start_date' => '2016-09-06 00:00:00',
            'end_date' => '2016-09-12 23:59:59',
            'title' => "
                Week 5: Ask your child what they would do if they were principal for a day…
            ",
            'description' => "<p>It’s the future and your child is the head of their school. The possibilities are endless! <br>Ask your child to complete the following sentence and upload a photo of their handwritten response: “If I were principal for a day…”</p>"

        ]);
        $this->insert('{{%contest_item}}',[
            'id' => 6 ,
            'start_date' => '2016-09-13 00:00:00',
            'end_date' => '2016-09-19 23:59:59',
            'title' => "
                Week 6: Ask your child what they would do if they were principal for a day…
            ",
            'description' => "<p>It’s the future and your child is the head of their school. The possibilities are endless! <br>Ask your child to complete the following sentence and upload a photo of their handwritten response: “If I were principal for a day…”</p>"
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%contest_item}}');
    }
}
