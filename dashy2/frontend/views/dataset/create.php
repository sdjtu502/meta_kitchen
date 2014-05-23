<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataSet $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Data Set',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Sets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataset-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
