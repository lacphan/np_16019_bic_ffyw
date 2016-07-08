<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%product_term_relations}}".
 *
 * @property integer $term_id
 * @property integer $product_id
 *
 * @property BaseProduct $product
 * @property BaseTermItem $term
 */
class BaseProductTermRelation extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_term_relations}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['term_id', 'product_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'term_id' => Yii::t('app', 'Term ID'),
            'product_id' => Yii::t('app', 'Product ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(BaseProduct::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTerm()
    {
        return $this->hasOne(BaseTermItem::className(), ['id' => 'term_id']);
    }
}
