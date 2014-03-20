<?php
/* @var $this DatabasesController */
/* @var $model Databases */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'databases-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Database_Name'); ?>
		<?php echo $form->textField($model,'Database_Name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Database_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>8000)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Business_Owner'); ?>
		<?php echo $form->textField($model,'Business_Owner',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Business_Owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact_Information'); ?>
		<?php echo $form->textField($model,'Contact_Information',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'Contact_Information'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Data_Period'); ?>
		<?php echo $form->textField($model,'Data_Period',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'Data_Period'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Software_Platform'); ?>
		<?php echo $form->textField($model,'Software_Platform',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'Software_Platform'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'General_Accuracy'); ?>
		<?php echo $form->textField($model,'General_Accuracy',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'General_Accuracy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Comments'); ?>
		<?php echo $form->textField($model,'Comments',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'Comments'); ?>
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