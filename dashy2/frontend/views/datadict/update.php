<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\Datadict $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Datadict',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Datadicts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="datadict-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
