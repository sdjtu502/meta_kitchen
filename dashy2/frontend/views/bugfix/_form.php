<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\Bugfix $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="bugfix-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'requester')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'site')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
