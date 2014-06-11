<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\Document $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="document-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'last_updated')->textInput() ?>

    <?= $form->field($model, 'exclude')->checkbox() ?>

    <?= $form->field($model, 'delete_row')->checkbox() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'descrip')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'doc_author')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'update_user')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'hubid')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'orgid')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'projid')->textInput(['maxlength' => 12]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
