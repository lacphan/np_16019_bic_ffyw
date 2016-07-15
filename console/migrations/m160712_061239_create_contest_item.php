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

        $this->insert('{{%contest_item}}', [
            'id' => 1,
            'start_date' => '2016-07-12 00:00:00',
            'end_date' => '2016-08-15 23:59:59',
            'title' => 'Ask your child what they would do if they were principal for a day…',
            'description' => '<p>It’s the future and your child is the head of their school. The possibilities are endless! Ask your child to complete the following sentence and upload a photo of their handwritten response: "If I were principal for a day…" </p>'
        ]);
        $this->insert('{{%contest_item}}', [
            'id' => 2,
            'start_date' => '2016-08-16 00:00:00',
            'end_date' => '2016-08-22 23:59:59',
            'title' => 'Ask your child what they want to be when they grow up…',
            'description' => '<p>Your kids are more likely to achieve their goals if they write them down, whether that’s a doctor, a rock star, an astronaut, or a professional baseball player! Ask your child to complete the following sentence and upload a photo of their handwritten response: "When I grow up, I want to…"</p>'

        ]);
        $this->insert('{{%contest_item}}', [
            'id' => 3,
            'start_date' => '2016-08-23 00:00:00',
            'end_date' => '2016-08-29 23:59:59',
            'title' => 'Ask your child to write out "I love handwriting" in 3 languages',
            'description' => '<p>No matter where you go, handwriting will always be important. Ask your child to write out “I love handwriting” in three different languages and upload a photo of their handwritten response!</p>'

        ]);
        $this->insert('{{%contest_item}}', [
            'id' => 4,
            'start_date' => '2016-08-30 00:00:00',
            'end_date' => '2016-09-05 23:59:59',
            'title' => 'Ask your child to include these 10 words in their next story',
            'description' => '<p>Creativity is key! Ask your child to include these 10 words in their next story and upload a photo of their masterpiece!</p>'

        ]);
        $this->insert('{{%contest_item}}', [
            'id' => 5,
            'start_date' => '2016-09-06 00:00:00',
            'end_date' => '2016-09-12 23:59:59',
            'title' => 'Ask your child to transcribe this handwritten message',
            'description' => '<p>Good penmanship is important. Ask your child to transcribe the handwritten message and submit a photo of their handwritten response.</p>'

        ]);
        $this->insert('{{%contest_item}}', [
            'id' => 6,
            'start_date' => '2016-09-13 00:00:00',
            'end_date' => '2016-09-19 23:59:59',
            'title' => 'Ask your child what is the first thing they would do when school finishes',
            'description' => "<p>It's the last day of school and the bell just rang! Ask your child what is the first thing they would do when school finishes and upload a photo of their handwritten response!</p>"
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
