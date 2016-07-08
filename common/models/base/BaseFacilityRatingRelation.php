<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%facility_rating_relation}}".
 *
 * @property integer $id
 * @property integer $rating_id
 * @property integer $facility_id
 */
class BaseFacilityRatingRelation extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%facility_rating_relation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rating_id', 'facility_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'rating_id' => Yii::t('app', 'Rating ID'),
            'facility_id' => Yii::t('app', 'Facility ID'),
        ];
    }
}
