<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bic_ffyw_contest_item".
 * @property $uploadFile
 * @property $popupFile
 */
class ContestItem extends \common\models\CommonContestItem
{
    public $uploadFile;
    public $popupFile;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date'], 'safe'],
            [['attachment_id', 'locale_id', 'popup_id', 'parent_id', 'week_number'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
            [['uploadFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg',  'maxSize' => 5242880, 'tooBig' => 'Limit is 5MB'],
            [['popupFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg',  'maxSize' => 5242880, 'tooBig' => 'Limit is 5MB'],
        ];
    }
}
