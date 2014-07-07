<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\Datadict $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Datadict',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Datadicts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadict-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
