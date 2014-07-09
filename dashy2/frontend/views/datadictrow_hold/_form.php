<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\DatadictRow $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="datadictrow-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'column_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'start_pos')->textInput() ?>

    <?= $form->field($model, 'width')->textInput() ?>

    <?= $form->field($model, 'data_format')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'unique_id_yn')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'rownum')->textInput() ?>

    <?= $form->field($model, 'datadict_id')->textInput() ?>
	
    <?= $form->field($model, 'field_reference')->textInput() ?>
	
	<!--
    <?= $form->field($model, 'bigmatch_type')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'matchfield_yn')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'in_match_result')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'load_from_function')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'function_to_load_from')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'last_updated')->textInput() ?>

    <?= $form->field($model, 'exclude')->checkbox() ?>

    <?= $form->field($model, 'delete_row')->checkbox() ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'update_user')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'rowsource')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'hubid')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'orgid')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'projid')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
