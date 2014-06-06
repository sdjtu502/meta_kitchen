<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataSource $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Data Source',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Sources'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datasource-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
