<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\Datadict $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="datadict-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dataset_abbrev')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'datadict_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'time_period')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'dict_file_type')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'dict_file_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'data_file_name')->textInput(['maxlength' => 100]) ?>

	<!-- <?= $form->field($model, 'dataset')->textInput() ?> 

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'last_updated')->textInput() ?>

    <?= $form->field($model, 'exclude')->checkbox() ?>

    <?= $form->field($model, 'delete_row')->checkbox() ?>

    <?= $form->field($model, 'datadict_types')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'data_file_type')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'update_user')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'etl_stage')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'source_data_table')->textInput(['maxlength' => 120]) ?>

    <?= $form->field($model, 'dict_file_location')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'data_file_location')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'rowsource')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'hubid')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'orgid')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'projid')->textInput(['maxlength' => 10]) ?>
    -->
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
