<?php
/* @var $this DataRequestController */
/* @var $model DataRequest */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'request_date'); ?>
		<?php echo $form->textField($model,'request_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_requested'); ?>
		<?php echo $form->textField($model,'data_requested',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requester'); ?>
		<?php echo $form->textField($model,'requester',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requester_org'); ?>
		<?php echo $form->textField($model,'requester_org',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requester_email'); ?>
		<?php echo $form->textField($model,'requester_email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requester_phone'); ?>
		<?php echo $form->textField($model,'requester_phone',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'need_by_date'); ?>
		<?php echo $form->textField($model,'need_by_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_made_public'); ?>
		<?php echo $form->textField($model,'data_made_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descrip'); ?>
		<?php echo $form->textField($model,'descrip',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purpose'); ?>
		<?php echo $form->textField($model,'purpose',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sources'); ?>
		<?php echo $form->textField($model,'sources',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'difficulty_score'); ?>
		<?php echo $form->textField($model,'difficulty_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importance_score'); ?>
		<?php echo $form->textField($model,'importance_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cost_score'); ?>
		<?php echo $form->textField($model,'cost_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_notes'); ?>
		<?php echo $form->textField($model,'status_notes',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creator'); ?>
		<?php echo $form->textField($model,'creator',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_updated'); ?>
		<?php echo $form->textField($model,'last_updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user'); ?>
		<?php echo $form->textField($model,'update_user',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hubid'); ?>
		<?php echo $form->textField($model,'hubid',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->