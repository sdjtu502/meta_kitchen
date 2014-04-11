<?php
/* @var $this DataSetController */
/* @var $model DataSet */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'data_set_name'); ?>
		<?php echo $form->textField($model,'data_set_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abbreviation'); ?>
		<?php echo $form->textField($model,'abbreviation',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_source'); ?>
		<?php echo $form->textField($model,'data_source',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'access_restricted'); ?>
		<?php echo $form->textField($model,'access_restricted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'public'); ?>
		<?php echo $form->textField($model,'public'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metadata_public'); ?>
		<?php echo $form->textField($model,'metadata_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_public'); ?>
		<?php echo $form->textField($model,'data_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terms_of_use'); ?>
		<?php echo $form->textField($model,'terms_of_use',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'software_platform'); ?>
		<?php echo $form->textField($model,'software_platform',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other_platform'); ?>
		<?php echo $form->textField($model,'other_platform',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'overall_quality'); ?>
		<?php echo $form->textField($model,'overall_quality',array('size'=>60,'maxlength'=>600)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'overall_accuracy'); ?>
		<?php echo $form->textField($model,'overall_accuracy',array('size'=>60,'maxlength'=>600)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'overall_completeness'); ?>
		<?php echo $form->textField($model,'overall_completeness',array('size'=>60,'maxlength'=>600)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matchability'); ?>
		<?php echo $form->textField($model,'matchability',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodicity'); ?>
		<?php echo $form->textField($model,'periodicity',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'granularity'); ?>
		<?php echo $form->textField($model,'granularity',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_received'); ?>
		<?php echo $form->textField($model,'first_received'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'most_recent_update'); ?>
		<?php echo $form->textField($model,'most_recent_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'initial_import_est_hours'); ?>
		<?php echo $form->textField($model,'initial_import_est_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'initial_import_comments'); ?>
		<?php echo $form->textField($model,'initial_import_comments',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'routine_import_est_hours'); ?>
		<?php echo $form->textField($model,'routine_import_est_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'routine_import_comments'); ?>
		<?php echo $form->textField($model,'routine_import_comments',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_quality_score'); ?>
		<?php echo $form->textField($model,'data_quality_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importance_score'); ?>
		<?php echo $form->textField($model,'importance_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'difficulty_score'); ?>
		<?php echo $form->textField($model,'difficulty_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cost_score'); ?>
		<?php echo $form->textField($model,'cost_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_cost_est'); ?>
		<?php echo $form->textField($model,'data_cost_est'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_cost_timeperiod'); ?>
		<?php echo $form->textField($model,'data_cost_timeperiod',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_cost_comments'); ?>
		<?php echo $form->textField($model,'data_cost_comments',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'owner'); ?>
		<?php echo $form->textField($model,'owner',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_name'); ?>
		<?php echo $form->textField($model,'contact_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_email'); ?>
		<?php echo $form->textField($model,'contact_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_phone'); ?>
		<?php echo $form->textField($model,'contact_phone',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_fax'); ?>
		<?php echo $form->textField($model,'contact_fax',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_address'); ?>
		<?php echo $form->textField($model,'contact_address',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_address2'); ?>
		<?php echo $form->textField($model,'contact_address2',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_address3'); ?>
		<?php echo $form->textField($model,'contact_address3',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_city'); ?>
		<?php echo $form->textField($model,'contact_city',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_state'); ?>
		<?php echo $form->textField($model,'contact_state',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_zip'); ?>
		<?php echo $form->textField($model,'contact_zip',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url1'); ?>
		<?php echo $form->textField($model,'url1',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url2'); ?>
		<?php echo $form->textField($model,'url2',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url3'); ?>
		<?php echo $form->textField($model,'url3',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'internal_location'); ?>
		<?php echo $form->textField($model,'internal_location',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transfer_method'); ?>
		<?php echo $form->textField($model,'transfer_method',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>4000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creator'); ?>
		<?php echo $form->textField($model,'creator',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user'); ?>
		<?php echo $form->textField($model,'update_user',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_updated'); ?>
		<?php echo $form->textField($model,'last_updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'business_owner'); ?>
		<?php echo $form->textField($model,'business_owner',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_information'); ?>
		<?php echo $form->textField($model,'contact_information',array('size'=>60,'maxlength'=>600)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exclude'); ?>
		<?php echo $form->textField($model,'exclude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'delete_row'); ?>
		<?php echo $form->textField($model,'delete_row'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'import_flag'); ?>
		<?php echo $form->textField($model,'import_flag',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'database_name'); ?>
		<?php echo $form->textField($model,'database_name',array('size'=>60,'maxlength'=>100)); ?>
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