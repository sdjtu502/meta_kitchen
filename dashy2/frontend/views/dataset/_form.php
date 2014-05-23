<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataSet $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="dataset-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'access_restricted')->checkbox() ?>

    <?= $form->field($model, 'public')->checkbox() ?>

    <?= $form->field($model, 'metadata_public')->checkbox() ?>

    <?= $form->field($model, 'data_public')->checkbox() ?>

    <?= $form->field($model, 'exclude')->checkbox() ?>

    <?= $form->field($model, 'delete_row')->checkbox() ?>

    <?= $form->field($model, 'first_received')->textInput() ?>

    <?= $form->field($model, 'most_recent_update')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'last_updated')->textInput() ?>

    <?= $form->field($model, 'initial_import_est_hours')->textInput() ?>

    <?= $form->field($model, 'routine_import_est_hours')->textInput() ?>

    <?= $form->field($model, 'data_cost_est')->textInput() ?>

    <?= $form->field($model, 'views')->textInput() ?>

    <?= $form->field($model, 'data_quality_score')->textInput() ?>

    <?= $form->field($model, 'importance_score')->textInput() ?>

    <?= $form->field($model, 'difficulty_score')->textInput() ?>

    <?= $form->field($model, 'cost_score')->textInput() ?>

    <?= $form->field($model, 'data_set_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'matchability')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'periodicity')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'contact_email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'transfer_method')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'business_owner')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'database_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'abbreviation')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'data_source')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'data_cost_timeperiod')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'hubid')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'initial_import_comments')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'routine_import_comments')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'data_cost_comments')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'terms_of_use')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'internal_location')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'software_platform')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'other_platform')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'contact_city')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'overall_quality')->textInput(['maxlength' => 600]) ?>

    <?= $form->field($model, 'overall_accuracy')->textInput(['maxlength' => 600]) ?>

    <?= $form->field($model, 'overall_completeness')->textInput(['maxlength' => 600]) ?>

    <?= $form->field($model, 'contact_information')->textInput(['maxlength' => 600]) ?>

    <?= $form->field($model, 'granularity')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'contact_address2')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'contact_address3')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'owner')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'contact_name')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'contact_phone')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'contact_fax')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'update_user')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'contact_address')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'contact_state')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'contact_zip')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'url1')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'url2')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'url3')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => 4000]) ?>

    <?= $form->field($model, 'import_flag')->textInput(['maxlength' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
