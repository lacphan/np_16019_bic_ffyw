<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\models;
use common\enpii\components\grid\Column;
use yii\helpers\Html;
use Yii;
/**
 * SerialColumn displays a column of row numbers (1-based).
 *
 * To add a SerialColumn to the [[GridView]], add it to the [[GridView::columns|columns]] configuration as follows:
 *
 * ```php
 * 'columns' => [
 *     // ...
 *     [
 *         'class' => 'yii\grid\SerialColumn',
 *         // you may configure additional properties here
 *     ],
 * ]
 * ```
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ImagesTaskColumn extends Column
{
    /**
     * @inheritdoc
     */
    public $header = 'No.';

    public $value = null;

    /**
     * @inheritdoc
     */

    public function getValue() {
        return $this->value;
    }
    
    protected function renderDataCellContent($model, $key, $index)
    {

        $images = '';
        $attachments = $model->attachment;

        if($attachments && $attachments[0] != '' && !empty($attachments[0])) {
            $images = '<ul class="image-list">';
            foreach ($attachments as $key => $item ) {
                $images .= '<li class="image-item">' . $item[0]->getAttachmentImage('thumbnail') . '</li>';
            }
            $images .= '</ul>';
        };
        $button =   Html::button(
            Yii::t('app', '<i class="fa fa-camera" aria-hidden="true"></i>'),
            [
                'value' => Yii::$app->urlManager->createUrl(['task/update-media', 'ajax-call' => 1,'id' => $model->id]),
                'class' => 'image-button btn-image-update'
            ]
        );
        if(Yii::$app->user->can('admin') || Yii::$app->user->can('supervisor')) {
            return $images . $button;
        }
        return $images;
    }
}
