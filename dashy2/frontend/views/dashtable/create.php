<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\DashTable $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Dash Table',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dash Tables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dashtable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
