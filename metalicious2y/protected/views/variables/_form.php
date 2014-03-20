<?php
/* @var $this VariablesController */
/* @var $model Variables */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'variables-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Variable_Name'); ?>
		<?php echo $form->textField($model,'Variable_Name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Variable_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Variable_Description'); ?>
		<?php echo $form->textField($model,'Variable_Description',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'Variable_Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Variable_Type_Format'); ?>
		<?php echo $form->textField($model,'Variable_Type_Format',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Variable_Type_Format'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Variable_Length'); ?>
		<?php echo $form->textField($model,'Variable_Length',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Variable_Length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Variable_Values'); ?>
		<?php echo $form->textField($model,'Variable_Values',array('size'=>60,'maxlength'=>3000)); ?>
		<?php echo $form->error($model,'Variable_Values'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Variable_Example'); ?>
		<?php echo $form->textField($model,'Variable_Example',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'Variable_Example'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Variable_Comments'); ?>
		<?php echo $form->textField($model,'Variable_Comments',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'Variable_Comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Data_Portal'); ?>
		<?php echo $form->textField($model,'Data_Portal',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Data_Portal'); ?>
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