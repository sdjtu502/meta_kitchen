<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\search\OutboundDataRequestSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="outbounddatarequest-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'request_date') ?>

    <?= $form->field($model, 'data_requested') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'subcategory') ?>

    <?= $form->field($model, 'requester') ?>

    <?php // echo $form->field($model, 'requester_org') ?>

    <?php // echo $form->field($model, 'requester_email') ?>

    <?php // echo $form->field($model, 'requester_phone') ?>

    <?php // echo $form->field($model, 'provider_org') ?>

    <?php // echo $form->field($model, 'provider_name') ?>

    <?php // echo $form->field($model, 'provider_email') ?>

    <?php // echo $form->field($model, 'provider_phone') ?>

    <?php // echo $form->field($model, 'need_by_date') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'purpose') ?>

    <?php // echo $form->field($model, 'data_made_public')->checkbox() ?>

    <?php // echo $form->field($model, 'data_sharing_agrmnt_status') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'status_notes') ?>

    <?php // echo $form->field($model, 'last_follow_up') ?>

    <?php // echo $form->field($model, 'receipt_date') ?>

    <?php // echo $form->field($model, 'verified_by') ?>

    <?php // echo $form->field($model, 'verified_date') ?>

    <?php // echo $form->field($model, 'verification_notes') ?>

    <?php // echo $form->field($model, 're_request_date') ?>

    <?php // echo $form->field($model, 'data_set_abbrev') ?>

    <?php // echo $form->field($model, 'data_set') ?>

    <?php // echo $form->field($model, 'data_source_abbrev') ?>

    <?php // echo $form->field($model, 'data_source') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'last_updated') ?>

    <?php // echo $form->field($model, 'update_user') ?>

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
