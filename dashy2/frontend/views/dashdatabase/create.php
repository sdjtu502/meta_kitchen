<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\DashDatabase $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Dash Database',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dash Databases'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dashdatabase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
