<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\search\DataReceiptSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="datareceipt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'data_received') ?>

    <?= $form->field($model, 'data_set_abbrev') ?>

    <?= $form->field($model, 'data_set') ?>

    <?= $form->field($model, 'data_source_abbrev') ?>

    <?= $form->field($model, 'data_source') ?>

    <?php // echo $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'file_format') ?>

    <?php // echo $form->field($model, 'file_format_other') ?>

    <?php // echo $form->field($model, 'person_sending') ?>

    <?php // echo $form->field($model, 'person_receiving') ?>

    <?php // echo $form->field($model, 'export_date') ?>

    <?php // echo $form->field($model, 'receipt_date') ?>

    <?php // echo $form->field($model, 'saved_to_loc') ?>

    <?php // echo $form->field($model, 'comments') ?>

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
