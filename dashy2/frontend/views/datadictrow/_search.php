<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\search\DatadictRowSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="datadictrow-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'column_name') ?>

    <?= $form->field($model, 'start_pos') ?>

    <?= $form->field($model, 'width') ?>

    <?= $form->field($model, 'data_format') ?>

    <?= $form->field($model, 'unique_id_yn') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'rownum') ?>

    <?php // echo $form->field($model, 'bigmatch_type') ?>

    <?php // echo $form->field($model, 'matchfield_yn') ?>

    <?php // echo $form->field($model, 'in_match_result') ?>

    <?php // echo $form->field($model, 'load_from_function') ?>

    <?php // echo $form->field($model, 'function_to_load_from') ?>

    <?php // echo $form->field($model, 'datadict_id') ?>

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

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
