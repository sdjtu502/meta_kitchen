<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataReceipt $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="datareceipt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data_set')->textInput() ?>

    <?= $form->field($model, 'data_source')->textInput() ?>

    <?= $form->field($model, 'receipt_date')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'last_updated')->textInput() ?>

    <?= $form->field($model, 'exclude')->checkbox() ?>

    <?= $form->field($model, 'delete_row')->checkbox() ?>

    <?= $form->field($model, 'data_received')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'data_set_abbrev')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'data_source_abbrev')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'export_date')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'update_user')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'reason')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'file_format')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'hubid')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'orgid')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'projid')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'file_format_other')->textInput(['maxlength' => 80]) ?>

    <?= $form->field($model, 'person_sending')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'person_receiving')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'saved_to_loc')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'detail_url')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'rowsource')->textInput(['maxlength' => 12]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
