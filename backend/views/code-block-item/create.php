<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CodeBlockItem */

$this->title = Yii::t('app', 'Create Code Block Item');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Code Block Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="code-block-item-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
