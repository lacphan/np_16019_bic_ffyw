<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\models;

use common\enpii\components\grid\Column;
use common\models\CommonContestItem;
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
class ImageThumbnailColumn extends Column
{
    /**
     * @inheritdoc
     */
    public $header = 'No.';

    public $value = null;

    /**
     * @inheritdoc
     */

    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param CommonContestItem $model
     * @param mixed $key
     * @param int $index
     * @return string
     */
    protected function renderDataCellContent($model, $key, $index)
    {

        $attachment = $model->attachment;
        $thumbnail = '';

        if ($attachment) {
            $thumbnail = '<a href="' . $attachment->getAttachmentUrl() . '" class="image-thumb image-modal" style="background: url(' . $attachment->getAttachmentUrl('thumbnail') . ') center no-repeat;" >';

            $thumbnail .= '</a>';
        };

        return $thumbnail;
    }
}
