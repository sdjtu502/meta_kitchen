<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataReceipt $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Data Receipt',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Receipts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-receipt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
