<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\search\DataSetSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="dataset-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'data_set_name') ?>

    <?= $form->field($model, 'data_set_abbrev') ?>

    <?= $form->field($model, 'data_source') ?>

    <?= $form->field($model, 'data_source_name') ?>

    <?= $form->field($model, 'data_source_abbrev') ?>

    <?php // echo $form->field($model, 'access_restricted')->checkbox() ?>

    <?php // echo $form->field($model, 'public')->checkbox() ?>

    <?php // echo $form->field($model, 'metadata_public')->checkbox() ?>

    <?php // echo $form->field($model, 'data_public')->checkbox() ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'terms_of_use') ?>

    <?php // echo $form->field($model, 'software_platform') ?>

    <?php // echo $form->field($model, 'other_platform') ?>

    <?php // echo $form->field($model, 'overall_quality') ?>

    <?php // echo $form->field($model, 'overall_accuracy') ?>

    <?php // echo $form->field($model, 'overall_completeness') ?>

    <?php // echo $form->field($model, 'matchability') ?>

    <?php // echo $form->field($model, 'periodicity') ?>

    <?php // echo $form->field($model, 'granularity') ?>

    <?php // echo $form->field($model, 'first_received') ?>

    <?php // echo $form->field($model, 'most_recent_update') ?>

    <?php // echo $form->field($model, 'initial_import_est_hours') ?>

    <?php // echo $form->field($model, 'initial_import_comments') ?>

    <?php // echo $form->field($model, 'routine_import_est_hours') ?>

    <?php // echo $form->field($model, 'routine_import_comments') ?>

    <?php // echo $form->field($model, 'data_quality_score') ?>

    <?php // echo $form->field($model, 'importance_score') ?>

    <?php // echo $form->field($model, 'difficulty_score') ?>

    <?php // echo $form->field($model, 'cost_score') ?>

    <?php // echo $form->field($model, 'data_cost_est') ?>

    <?php // echo $form->field($model, 'data_cost_timeperiod') ?>

    <?php // echo $form->field($model, 'data_cost_comments') ?>

    <?php // echo $form->field($model, 'owner') ?>

    <?php // echo $form->field($model, 'contact_name') ?>

    <?php // echo $form->field($model, 'contact_email') ?>

    <?php // echo $form->field($model, 'contact_phone') ?>

    <?php // echo $form->field($model, 'contact_fax') ?>

    <?php // echo $form->field($model, 'contact_address') ?>

    <?php // echo $form->field($model, 'contact_address2') ?>

    <?php // echo $form->field($model, 'contact_address3') ?>

    <?php // echo $form->field($model, 'contact_city') ?>

    <?php // echo $form->field($model, 'contact_state') ?>

    <?php // echo $form->field($model, 'contact_zip') ?>

    <?php // echo $form->field($model, 'url1') ?>

    <?php // echo $form->field($model, 'url2') ?>

    <?php // echo $form->field($model, 'url3') ?>

    <?php // echo $form->field($model, 'internal_location') ?>

    <?php // echo $form->field($model, 'transfer_method') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'update_user') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'last_updated') ?>

    <?php // echo $form->field($model, 'views') ?>

    <?php // echo $form->field($model, 'business_owner') ?>

    <?php // echo $form->field($model, 'contact_information') ?>

    <?php // echo $form->field($model, 'exclude')->checkbox() ?>

    <?php // echo $form->field($model, 'delete_row')->checkbox() ?>

    <?php // echo $form->field($model, 'import_flag') ?>

    <?php // echo $form->field($model, 'database_name') ?>

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
