<?php

namespace common\models\base;

use yii;

/**
 * This is the model class for table "{{%code_block_item}}".
 *
 * @property integer $id
 * @property string $code
 * @property string $content
 */
class BaseCodeBlockItem extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%code_block_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['code'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'code' => Yii::t('app', 'Code'),
            'content' => Yii::t('app', 'Content'),
        ];
    }
}
