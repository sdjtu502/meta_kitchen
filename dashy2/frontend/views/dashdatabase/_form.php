<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\DashDatabase $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="dashdatabase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'last_data_update')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'last_updated')->textInput() ?>

    <?= $form->field($model, 'exclude')->checkbox() ?>

    <?= $form->field($model, 'delete_row')->checkbox() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'contact_email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'platform')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'steward')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'descrip')->textInput(['maxlength' => 400]) ?>

    <?= $form->field($model, 'quality')->textInput(['maxlength' => 400]) ?>

    <?= $form->field($model, 'owner')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'contact_zip')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'datasource')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'abbrev')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'hubid')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'contact_name')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'contact_address1')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'contact_address2')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'contact_address3')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'contact_phone1')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'contact_fax')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'update_user')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'contact_city')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'timeperiod')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'contact_state')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => 1000]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
