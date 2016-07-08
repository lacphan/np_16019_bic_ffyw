<?php

namespace common\models;

use common\enpii\components\NpItemDataSub;
use \common\models\base\BaseTermItem;
use Yii;


/**
 * This is the model class for table "np_term_item".
 */
class CommonTermItem extends BaseTermItem
{
    use NpItemDataSub;

    public function getProductsRelations()
    {
        return $this->hasMany(CommonProductTermRelation::className(), ['term_id' => 'id']);
    }

    /**
     * Function for get Parent of Term Item
     * @return null|static
     */
    public function getParent() {
        if($this->parent != null) {
            return CommonTermItem::findOne(['id' => $this->parent]);
        }
        return null;
    }

    /**
     * Function for set level term item
     */
    public function setLevel() {
        if($this->parent != 0) {
            $this->level = $this->getParent()->level + 1;
        }
    }

    /**
     * @param int $level
     * @return array
     */
    public function getTerm($level = 0, $id = null) {
        $rootTerms = null;
        $rootTerms = CommonTermItem::find()->all();

        return $this->prepareItem($rootTerms,$level);
    }

    public function prepareItem($array, $level) {
        $result = [];
        foreach( $array as $key => $item ) {
            if( $item->parent == $level ) {
                $result[$item->id] = [
                    'object' => $item,
                    'parentId' => $item->parent
                ];
                // using recursion
                $children =  $this->prepareItem( $array, $item->id );
                if( $children ) {
                    $result[$item->id]['children'] = $children;
                }
            }
        }
        return $result;
    }

    public function getChildren() {
        return CommonTermItem::find()->where(['parent' => $this->id])->all();
    }
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

            return true;
        } else {
            return false;
        }
    }
}
