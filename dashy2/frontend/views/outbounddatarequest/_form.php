<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\OutboundDataRequest $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="outbounddatarequest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data_requested')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'provider_org')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'subcategory')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'request_date')->textInput() ?>
	
    <?= $form->field($model, 'receipt_date')->textInput() ?>

    <?= $form->field($model, 'requester')->textInput(['maxlength' => 50]) ?>

	<!--
    <?= $form->field($model, 'requester_org')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'requester_email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'requester_phone')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'provider_name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'need_by_date')->textInput() ?>

    <?= $form->field($model, 'verified_date')->textInput() ?>
	
    <?= $form->field($model, 're_request_date')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'last_updated')->textInput() ?>

    <?= $form->field($model, 'data_made_public')->checkbox() ?>

    <?= $form->field($model, 'data_set')->textInput() ?>

    <?= $form->field($model, 'data_source')->textInput() ?>
	-->
	
    <?= $form->field($model, 'status')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'last_follow_up')->textInput(['maxlength' => 20]) ?>
	<!--
    <?= $form->field($model, 'verified_by')->textInput(['maxlength' => 20]) ?>
	-->
    <?= $form->field($model, 'data_set_abbrev')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'data_source_abbrev')->textInput(['maxlength' => 20]) ?>
	<!--
    <?= $form->field($model, 'creator')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'update_user')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'provider_email')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'provider_phone')->textInput(['maxlength' => 16]) ?>
	-->
    <?= $form->field($model, 'description')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'purpose')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'data_sharing_agrmnt_status')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'status_notes')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'verification_notes')->textInput(['maxlength' => 400]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => 500]) ?>
	<!--
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
