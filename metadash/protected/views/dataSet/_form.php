<?php
/* @var $this DataSetController */
/* @var $model DataSet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-set-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'data_set_name'); ?>
		<?php echo $form->textField($model,'data_set_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'data_set_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abbreviation'); ?>
		<?php echo $form->textField($model,'abbreviation',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'abbreviation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_source'); ?>
		<?php echo $form->textField($model,'data_source',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'data_source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'access_restricted'); ?>
		<?php echo $form->textField($model,'access_restricted'); ?>
		<?php echo $form->error($model,'access_restricted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'public'); ?>
		<?php echo $form->textField($model,'public'); ?>
		<?php echo $form->error($model,'public'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metadata_public'); ?>
		<?php echo $form->textField($model,'metadata_public'); ?>
		<?php echo $form->error($model,'metadata_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_public'); ?>
		<?php echo $form->textField($model,'data_public'); ?>
		<?php echo $form->error($model,'data_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terms_of_use'); ?>
		<?php echo $form->textField($model,'terms_of_use',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'terms_of_use'); ?>
	</div>

	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'software_platform'); ?>
		<?php echo $form->textField($model,'software_platform',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'software_platform'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_platform'); ?>
		<?php echo $form->textField($model,'other_platform',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'other_platform'); ?>
	</div>
	-->
	
	<div class="row">
		<?php echo $form->labelEx($model,'overall_quality'); ?>
		<?php echo $form->textField($model,'overall_quality',array('size'=>60,'maxlength'=>600)); ?>
		<?php echo $form->error($model,'overall_quality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overall_accuracy'); ?>
		<?php echo $form->textField($model,'overall_accuracy',array('size'=>60,'maxlength'=>600)); ?>
		<?php echo $form->error($model,'overall_accuracy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overall_completeness'); ?>
		<?php echo $form->textField($model,'overall_completeness',array('size'=>60,'maxlength'=>600)); ?>
		<?php echo $form->error($model,'overall_completeness'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'matchability'); ?>
		<?php echo $form->textField($model,'matchability',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'matchability'); ?>
	</div> 
	-->

	<div class="row">
		<?php echo $form->labelEx($model,'periodicity'); ?>
		<?php echo $form->textField($model,'periodicity',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'periodicity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'granularity'); ?>
		<?php echo $form->textField($model,'granularity',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'granularity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_received'); ?>
		<?php echo $form->textField($model,'first_received'); ?>
		<?php echo $form->error($model,'first_received'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'most_recent_update'); ?>
		<?php echo $form->textField($model,'most_recent_update'); ?>
		<?php echo $form->error($model,'most_recent_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'initial_import_est_hours'); ?>
		<?php echo $form->textField($model,'initial_import_est_hours'); ?>
		<?php echo $form->error($model,'initial_import_est_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'initial_import_comments'); ?>
		<?php echo $form->textField($model,'initial_import_comments',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'initial_import_comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'routine_import_est_hours'); ?>
		<?php echo $form->textField($model,'routine_import_est_hours'); ?>
		<?php echo $form->error($model,'routine_import_est_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'routine_import_comments'); ?>
		<?php echo $form->textField($model,'routine_import_comments',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'routine_import_comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_quality_score'); ?>
		<?php echo $form->textField($model,'data_quality_score'); ?>
		<?php echo $form->error($model,'data_quality_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importance_score'); ?>
		<?php echo $form->textField($model,'importance_score'); ?>
		<?php echo $form->error($model,'importance_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'difficulty_score'); ?>
		<?php echo $form->textField($model,'difficulty_score'); ?>
		<?php echo $form->error($model,'difficulty_score'); ?>
	</div>

	<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'cost_score'); ?>
		<?php echo $form->textField($model,'cost_score'); ?>
		<?php echo $form->error($model,'cost_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_cost_est'); ?>
		<?php echo $form->textField($model,'data_cost_est'); ?>
		<?php echo $form->error($model,'data_cost_est'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_cost_timeperiod'); ?>
		<?php echo $form->textField($model,'data_cost_timeperiod',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'data_cost_timeperiod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_cost_comments'); ?>
		<?php echo $form->textField($model,'data_cost_comments',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'data_cost_comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'owner'); ?>
		<?php echo $form->textField($model,'owner',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_name'); ?>
		<?php echo $form->textField($model,'contact_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'contact_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_email'); ?>
		<?php echo $form->textField($model,'contact_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contact_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_phone'); ?>
		<?php echo $form->textField($model,'contact_phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'contact_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_fax'); ?>
		<?php echo $form->textField($model,'contact_fax',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'contact_fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_address'); ?>
		<?php echo $form->textField($model,'contact_address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contact_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_address2'); ?>
		<?php echo $form->textField($model,'contact_address2',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'contact_address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_address3'); ?>
		<?php echo $form->textField($model,'contact_address3',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'contact_address3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_city'); ?>
		<?php echo $form->textField($model,'contact_city',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'contact_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_state'); ?>
		<?php echo $form->textField($model,'contact_state',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'contact_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_zip'); ?>
		<?php echo $form->textField($model,'contact_zip',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'contact_zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url1'); ?>
		<?php echo $form->textField($model,'url1',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'url1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url2'); ?>
		<?php echo $form->textField($model,'url2',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'url2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url3'); ?>
		<?php echo $form->textField($model,'url3',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'url3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'internal_location'); ?>
		<?php echo $form->textField($model,'internal_location',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'internal_location'); ?>
	</div>
	-->
	<div class="row">
		<?php echo $form->labelEx($model,'transfer_method'); ?>
		<?php echo $form->textField($model,'transfer_method',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'transfer_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>4000)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'creator'); ?>
		<?php echo $form->textField($model,'creator',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'creator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user'); ?>
		<?php echo $form->textField($model,'update_user',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'update_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_updated'); ?>
		<?php echo $form->textField($model,'last_updated'); ?>
		<?php echo $form->error($model,'last_updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
		<?php echo $form->error($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'business_owner'); ?>
		<?php echo $form->textField($model,'business_owner',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'business_owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_information'); ?>
		<?php echo $form->textField($model,'contact_information',array('size'=>60,'maxlength'=>600)); ?>
		<?php echo $form->error($model,'contact_information'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exclude'); ?>
		<?php echo $form->textField($model,'exclude'); ?>
		<?php echo $form->error($model,'exclude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delete_row'); ?>
		<?php echo $form->textField($model,'delete_row'); ?>
		<?php echo $form->error($model,'delete_row'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'import_flag'); ?>
		<?php echo $form->textField($model,'import_flag',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'import_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'database_name'); ?>
		<?php echo $form->textField($model,'database_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'database_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hubid'); ?>
		<?php echo $form->textField($model,'hubid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hubid'); ?>
	</div>
	-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->