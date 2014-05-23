<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\search\DataReceiptSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="data-receipt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'data_source') ?>

    <?= $form->field($model, 'data_set') ?>

    <?= $form->field($model, 'db') ?>

    <?= $form->field($model, 'reason') ?>

    <?= $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'file_format') ?>

    <?php // echo $form->field($model, 'file_format_other') ?>

    <?php // echo $form->field($model, 'person_sending') ?>

    <?php // echo $form->field($model, 'org_sending') ?>

    <?php // echo $form->field($model, 'person_receiving') ?>

    <?php // echo $form->field($model, 'saved_to_loc') ?>

    <?php // echo $form->field($model, 'export_date') ?>

    <?php // echo $form->field($model, 'rcv_date') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
