<?php
/* @var $this DataRequestController */
/* @var $model DataRequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-request-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'request_date'); ?>
		<?php echo $form->textField($model,'request_date'); ?>
		<?php echo $form->error($model,'request_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_requested'); ?>
		<?php echo $form->textField($model,'data_requested',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'data_requested'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requester'); ?>
		<?php echo $form->textField($model,'requester',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'requester'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requester_org'); ?>
		<?php echo $form->textField($model,'requester_org',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'requester_org'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requester_email'); ?>
		<?php echo $form->textField($model,'requester_email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'requester_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requester_phone'); ?>
		<?php echo $form->textField($model,'requester_phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'requester_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'need_by_date'); ?>
		<?php echo $form->textField($model,'need_by_date'); ?>
		<?php echo $form->error($model,'need_by_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_made_public'); ?>
		<?php echo $form->textField($model,'data_made_public'); ?>
		<?php echo $form->error($model,'data_made_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descrip'); ?>
		<?php echo $form->textField($model,'descrip',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'descrip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purpose'); ?>
		<?php echo $form->textField($model,'purpose',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'purpose'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sources'); ?>
		<?php echo $form->textField($model,'sources',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'sources'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'difficulty_score'); ?>
		<?php echo $form->textField($model,'difficulty_score'); ?>
		<?php echo $form->error($model,'difficulty_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importance_score'); ?>
		<?php echo $form->textField($model,'importance_score'); ?>
		<?php echo $form->error($model,'importance_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost_score'); ?>
		<?php echo $form->textField($model,'cost_score'); ?>
		<?php echo $form->error($model,'cost_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_notes'); ?>
		<?php echo $form->textField($model,'status_notes',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'status_notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creator'); ?>
		<?php echo $form->textField($model,'creator',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'creator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_updated'); ?>
		<?php echo $form->textField($model,'last_updated'); ?>
		<?php echo $form->error($model,'last_updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user'); ?>
		<?php echo $form->textField($model,'update_user',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'update_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hubid'); ?>
		<?php echo $form->textField($model,'hubid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hubid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->