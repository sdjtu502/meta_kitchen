<?php
/* @var $this BusinessFunctionsController */
/* @var $model BusinessFunctions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'business-functions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Business_Function_Name'); ?>
		<?php echo $form->textField($model,'Business_Function_Name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Business_Function_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Business_Function_Description'); ?>
		<?php echo $form->textField($model,'Business_Function_Description',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'Business_Function_Description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->