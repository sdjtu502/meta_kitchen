<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\search\DataSourceSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="datasource-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'data_source_abbrev') ?>

    <?= $form->field($model, 'data_source_name') ?>

    <?= $form->field($model, 'data_source_url') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'restricted')->checkbox() ?>

    <?php // echo $form->field($model, 'terms_of_use') ?>

    <?php // echo $form->field($model, 'nmfldfordatsrc') ?>

    <?php // echo $form->field($model, 'contracts') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'last_updated') ?>

    <?php // echo $form->field($model, 'update_user') ?>

    <?php // echo $form->field($model, 'exclude')->checkbox() ?>

    <?php // echo $form->field($model, 'delete_row')->checkbox() ?>

    <?php // echo $form->field($model, 'rowsource') ?>

    <?php // echo $form->field($model, 'hubid') ?>

    <?php // echo $form->field($model, 'orgid') ?>

    <?php // echo $form->field($model, 'projid') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
