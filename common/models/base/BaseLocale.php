<?php

namespace common\models\base;

use yii;

/**
 * This is the model class for table "{{%locale}}".
 *
 * @property integer $id
 * @property string $locale
 */
class BaseLocale extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%locale}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['locale'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'locale' => Yii::t('app', 'Locale'),
        ];
    }
}
