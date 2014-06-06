<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\OutboundDataRequest $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Outbound Data Request',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Outbound Data Requests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outbounddatarequest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
