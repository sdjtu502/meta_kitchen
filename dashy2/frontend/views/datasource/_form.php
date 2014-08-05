<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataSource $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="datasource-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data_source_name')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'data_source_abbrev')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'data_source_url')->textInput(['maxlength' => 400]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 800]) ?>

    <?= $form->field($model, 'contracts')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => 600]) ?>

    <?= $form->field($model, 'terms_of_use')->textInput(['maxlength' => 500]) ?>

	<!--
    <?= $form->field($model, 'restricted')->checkbox() ?>

    <?= $form->field($model, 'exclude')->checkbox() ?>

    <?= $form->field($model, 'delete_row')->checkbox() ?>

    <?= $form->field($model, 'nmfldfordatsrc')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'last_updated')->textInput() ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'update_user')->textInput(['maxlength' => 20]) ?>

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
