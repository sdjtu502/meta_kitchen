<?php
/* @var $this TablesController */
/* @var $model Tables */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tables-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Table_Name'); ?>
		<?php echo $form->textField($model,'Table_Name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Table_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Table_Description'); ?>
		<?php echo $form->textField($model,'Table_Description',array('size'=>60,'maxlength'=>8000)); ?>
		<?php echo $form->error($model,'Table_Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Table_Comments'); ?>
		<?php echo $form->textField($model,'Table_Comments',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'Table_Comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Public'); ?>
		<?php echo $form->textField($model,'Public'); ?>
		<?php echo $form->error($model,'Public'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Creator'); ?>
		<?php echo $form->textField($model,'Creator'); ?>
		<?php echo $form->error($model,'Creator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Views'); ?>
		<?php echo $form->textField($model,'Views'); ?>
		<?php echo $form->error($model,'Views'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date_Created'); ?>
		<?php echo $form->textField($model,'Date_Created'); ?>
		<?php echo $form->error($model,'Date_Created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Last_Updated'); ?>
		<?php echo $form->textField($model,'Last_Updated'); ?>
		<?php echo $form->error($model,'Last_Updated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->