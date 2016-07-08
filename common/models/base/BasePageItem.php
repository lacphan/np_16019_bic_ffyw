<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%page_item}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $code
 * @property string $description
 * @property string $locale_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $published_at
 * @property integer $creator_id
 * @property integer $is_deleted
 * @property integer $is_enabled
 * @property integer $ordering_weight
 * @property string $params
 */
class BasePageItem extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%page_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'created_at', 'updated_at', 'creator_id'], 'required'],
            [['description', 'params'], 'string'],
            [['created_at', 'updated_at', 'published_at'], 'safe'],
            [['creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['name', 'slug', 'code', 'locale_id'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
            'code' => Yii::t('app', 'Code'),
            'description' => Yii::t('app', 'Description'),
            'locale_id' => Yii::t('app', 'Locale ID'),
            'created_at' => Yii::t('app', 'Created Date'),
            'updated_at' => Yii::t('app', 'Updated Date'),
            'published_at' => Yii::t('app', 'Published Date'),
            'creator_id' => Yii::t('app', 'Creator ID'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'is_enabled' => Yii::t('app', 'Is Enabled'),
            'ordering_weight' => Yii::t('app', 'Ordering Weight'),
            'params' => Yii::t('app', 'Params'),
        ];
    }
}
