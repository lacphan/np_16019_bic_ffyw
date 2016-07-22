<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bic_ffyw_contest_session".
 * @property $uploadFile
 */
class ContestSession extends \common\models\CommonContestSession
{
    public $uploadFile;

    public function rules()
    {
        return [
            [['contest_item_id', 'user_id', 'attachment_id', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight', 'accepted'], 'integer'],
            [['birth_year', 'created_at', 'updated_at', 'published_at'], 'safe'],
            [['created_at', 'updated_at', 'creator_id'], 'required'],
            [['params'], 'string'],
            [['user_email', 'first_name', 'last_name'], 'string', 'max' => 255],
            [['uploadFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg',  'maxSize' => 5242880, 'tooBig' => 'Limit is 5MB'],
        ];
    }
}
