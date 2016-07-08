<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 3/22/16
 * Time: 7:08 PM
 */

namespace common\models;


use common\enpii\components\NpActiveQuery;
use creocoder\nestedsets\NestedSetsQueryBehavior;

class CommonTermQuery extends NpActiveQuery
{
    public function behaviors() {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
}