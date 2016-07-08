<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%term_item}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property integer $term_group
 * @property string $taxonomy
 * @property string $description
 * @property integer $parent
 * @property integer $level
 * @property integer $count
 * @property integer $term_order
 * @property string $created_at
 * @property string $updated_at
 * @property string $published_at
 * @property integer $creator_id
 * @property integer $is_deleted
 * @property integer $is_enabled
 * @property integer $ordering_weight
 * @property string $params
 *
 * @property ProductTermRelations[] $productTermRelations
 */
class BaseTermItem extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%term_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'params'], 'string'],
            [['term_group', 'parent', 'level', 'count', 'term_order', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['created_at', 'updated_at', 'creator_id'], 'required'],
            [['created_at', 'updated_at', 'published_at'], 'safe'],
            [['slug', 'taxonomy'], 'string', 'max' => 255]
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
            'term_group' => Yii::t('app', 'Term Group'),
            'taxonomy' => Yii::t('app', 'Taxonomy'),
            'description' => Yii::t('app', 'Description'),
            'parent' => Yii::t('app', 'Parent'),
            'level' => Yii::t('app', 'Level'),
            'count' => Yii::t('app', 'Count'),
            'term_order' => Yii::t('app', 'Term Order'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductTermRelations()
    {
        return $this->hasMany(ProductTermRelations::className(), ['term_id' => 'id']);
    }
}
