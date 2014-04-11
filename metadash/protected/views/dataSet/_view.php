<?php
/* @var $this DataSetController */
/* @var $data DataSet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<?php //echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_set_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->data_set_name), array('view', 'id'=>$data->id)); ?>
	<?php //echo CHtml::encode($data->data_set_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abbreviation')); ?>:</b>
	<?php echo CHtml::encode($data->abbreviation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_source')); ?>:</b>
	<?php echo CHtml::encode($data->data_source); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('access_restricted')); ?>:</b>
	<?php echo CHtml::encode($data->access_restricted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('public')); ?>:</b>
	<?php echo CHtml::encode($data->public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metadata_public')); ?>:</b>
	<?php echo CHtml::encode($data->metadata_public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_public')); ?>:</b>
	<?php echo CHtml::encode($data->data_public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terms_of_use')); ?>:</b>
	<?php echo CHtml::encode($data->terms_of_use); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('software_platform')); ?>:</b>
	<?php echo CHtml::encode($data->software_platform); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_platform')); ?>:</b>
	<?php echo CHtml::encode($data->other_platform); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overall_quality')); ?>:</b>
	<?php echo CHtml::encode($data->overall_quality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overall_accuracy')); ?>:</b>
	<?php echo CHtml::encode($data->overall_accuracy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overall_completeness')); ?>:</b>
	<?php echo CHtml::encode($data->overall_completeness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matchability')); ?>:</b>
	<?php echo CHtml::encode($data->matchability); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodicity')); ?>:</b>
	<?php echo CHtml::encode($data->periodicity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('granularity')); ?>:</b>
	<?php echo CHtml::encode($data->granularity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_received')); ?>:</b>
	<?php echo CHtml::encode($data->first_received); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('most_recent_update')); ?>:</b>
	<?php echo CHtml::encode($data->most_recent_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initial_import_est_hours')); ?>:</b>
	<?php echo CHtml::encode($data->initial_import_est_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initial_import_comments')); ?>:</b>
	<?php echo CHtml::encode($data->initial_import_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('routine_import_est_hours')); ?>:</b>
	<?php echo CHtml::encode($data->routine_import_est_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('routine_import_comments')); ?>:</b>
	<?php echo CHtml::encode($data->routine_import_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_quality_score')); ?>:</b>
	<?php echo CHtml::encode($data->data_quality_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importance_score')); ?>:</b>
	<?php echo CHtml::encode($data->importance_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('difficulty_score')); ?>:</b>
	<?php echo CHtml::encode($data->difficulty_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost_score')); ?>:</b>
	<?php echo CHtml::encode($data->cost_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_cost_est')); ?>:</b>
	<?php echo CHtml::encode($data->data_cost_est); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_cost_timeperiod')); ?>:</b>
	<?php echo CHtml::encode($data->data_cost_timeperiod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_cost_comments')); ?>:</b>
	<?php echo CHtml::encode($data->data_cost_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner')); ?>:</b>
	<?php echo CHtml::encode($data->owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_name')); ?>:</b>
	<?php echo CHtml::encode($data->contact_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_email')); ?>:</b>
	<?php echo CHtml::encode($data->contact_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_phone')); ?>:</b>
	<?php echo CHtml::encode($data->contact_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_fax')); ?>:</b>
	<?php echo CHtml::encode($data->contact_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_address')); ?>:</b>
	<?php echo CHtml::encode($data->contact_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_address2')); ?>:</b>
	<?php echo CHtml::encode($data->contact_address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_address3')); ?>:</b>
	<?php echo CHtml::encode($data->contact_address3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_city')); ?>:</b>
	<?php echo CHtml::encode($data->contact_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_state')); ?>:</b>
	<?php echo CHtml::encode($data->contact_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_zip')); ?>:</b>
	<?php echo CHtml::encode($data->contact_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url1')); ?>:</b>
	<?php echo CHtml::encode($data->url1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url2')); ?>:</b>
	<?php echo CHtml::encode($data->url2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url3')); ?>:</b>
	<?php echo CHtml::encode($data->url3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internal_location')); ?>:</b>
	<?php echo CHtml::encode($data->internal_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transfer_method')); ?>:</b>
	<?php echo CHtml::encode($data->transfer_method); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creator')); ?>:</b>
	<?php echo CHtml::encode($data->creator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user')); ?>:</b>
	<?php echo CHtml::encode($data->update_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_updated')); ?>:</b>
	<?php echo CHtml::encode($data->last_updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('views')); ?>:</b>
	<?php echo CHtml::encode($data->views); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('business_owner')); ?>:</b>
	<?php echo CHtml::encode($data->business_owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_information')); ?>:</b>
	<?php echo CHtml::encode($data->contact_information); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exclude')); ?>:</b>
	<?php echo CHtml::encode($data->exclude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delete_row')); ?>:</b>
	<?php echo CHtml::encode($data->delete_row); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('import_flag')); ?>:</b>
	<?php echo CHtml::encode($data->import_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('database_name')); ?>:</b>
	<?php echo CHtml::encode($data->database_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hubid')); ?>:</b>
	<?php echo CHtml::encode($data->hubid); ?>
	<br />

	*/ ?>

</div>