<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataReceipt $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="data-receipt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'export_date')->textInput() ?>

    <?= $form->field($model, 'rcv_date')->textInput() ?>

    <?= $form->field($model, 'data_source')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'data_set')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'db')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'reason')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'file_format')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'file_format_other')->textInput(['maxlength' => 80]) ?>

    <?= $form->field($model, 'org_sending')->textInput(['maxlength' => 80]) ?>

    <?= $form->field($model, 'person_sending')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'person_receiving')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'saved_to_loc')->textInput(['maxlength' => 200]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
