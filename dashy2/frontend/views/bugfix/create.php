<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\Bugfix $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Bugfix',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bugfixes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bugfix-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
