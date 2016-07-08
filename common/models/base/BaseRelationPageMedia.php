<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "np_relation_page_media".
 *
 * @property integer $page_id
 * @property integer $media_id
 */
class BaseRelationPageMedia extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'np_relation_page_media';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id', 'media_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'page_id' => Yii::t('app', 'Page ID'),
            'media_id' => Yii::t('app', 'Media ID'),
        ];
    }
}
