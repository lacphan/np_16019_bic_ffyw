<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%building}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $author
 * @property string $address
 * @property string $contact_person
 * @property string $contact_number
 * @property string $contract_start_date
 * @property string $created_at
 * @property string $updated_at
 * @property string $published_at
 * @property integer $creator_id
 * @property integer $is_deleted
 * @property integer $is_enabled
 * @property integer $ordering_weight
 * @property string $params
 *
 * @property BuildingFacility[] $buildingFacilities
 */
class BaseBuilding extends \common\enpii\components\NpActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%building}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'contact_person', 'contact_number', 'contract_start_date', 'created_at', 'updated_at', 'creator_id'], 'required'],
            [['author', 'creator_id', 'is_deleted', 'is_enabled', 'ordering_weight'], 'integer'],
            [['created_at', 'updated_at', 'published_at'], 'safe'],
            [['params'], 'string'],
            [['name', 'address', 'contact_person', 'contact_number', 'contract_start_date'], 'string', 'max' => 255]
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
            'author' => Yii::t('app', 'Author'),
            'address' => Yii::t('app', 'Address'),
            'contact_person' => Yii::t('app', 'Contact Person'),
            'contact_number' => Yii::t('app', 'Contact Number'),
            'contract_start_date' => Yii::t('app', 'Contract Start Date'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'published_at' => Yii::t('app', 'Published At'),
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
    public function getBuildingFacilities()
    {
        return $this->hasMany(BaseBuildingFacility::className(), ['building_id' => 'id']);
    }
}
