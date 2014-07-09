<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\DatadictRow $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Datadict Row',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Datadict Rows'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadictrow-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
