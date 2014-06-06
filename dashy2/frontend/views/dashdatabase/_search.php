<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\search\DashDatabaseSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="dashdatabase-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'descrip') ?>

    <?= $form->field($model, 'owner') ?>

    <?= $form->field($model, 'contact_name') ?>

    <?= $form->field($model, 'contact_email') ?>

    <?php // echo $form->field($model, 'contact_phone1') ?>

    <?php // echo $form->field($model, 'contact_fax') ?>

    <?php // echo $form->field($model, 'contact_address1') ?>

    <?php // echo $form->field($model, 'contact_address2') ?>

    <?php // echo $form->field($model, 'contact_address3') ?>

    <?php // echo $form->field($model, 'contact_city') ?>

    <?php // echo $form->field($model, 'contact_state') ?>

    <?php // echo $form->field($model, 'contact_zip') ?>

    <?php // echo $form->field($model, 'timeperiod') ?>

    <?php // echo $form->field($model, 'last_data_update') ?>

    <?php // echo $form->field($model, 'platform') ?>

    <?php // echo $form->field($model, 'quality') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'datasource') ?>

    <?php // echo $form->field($model, 'steward') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'last_updated') ?>

    <?php // echo $form->field($model, 'update_user') ?>

    <?php // echo $form->field($model, 'exclude')->checkbox() ?>

    <?php // echo $form->field($model, 'delete_row')->checkbox() ?>

    <?php // echo $form->field($model, 'abbrev') ?>

    <?php // echo $form->field($model, 'hubid') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
