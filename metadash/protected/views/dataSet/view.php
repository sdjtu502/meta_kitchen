<?php
/* @var $this DataSetController */
/* @var $model DataSet */

$this->breadcrumbs=array(
	'Data Sets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DataSet', 'url'=>array('index')),
	array('label'=>'Create DataSet', 'url'=>array('create')),
	array('label'=>'Update DataSet', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DataSet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DataSet', 'url'=>array('admin')),
);
?>

<!-- <h1>View Data set #<?php echo $model->id; ?></h1>  -->
<h1>Data set: <?php echo $model->data_set_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'data_set_name',
		'abbreviation',
		'data_source',
		'access_restricted',
		'public',
		'metadata_public',
		'data_public',
		'description',
		'terms_of_use',
		/*
		'software_platform',
		'other_platform',
		*/
		'overall_quality',
		'overall_accuracy',
		'overall_completeness',
		'matchability',
		'periodicity',
		'granularity',
		'first_received',
		'most_recent_update',
		'initial_import_est_hours',
		'initial_import_comments',
		'routine_import_est_hours',
		'routine_import_comments',
		'data_quality_score',
		'importance_score',
		'difficulty_score',
		/*
		'cost_score',
		'data_cost_est',
		'data_cost_timeperiod',
		'data_cost_comments',
		'owner',
		'contact_name',
		'contact_email',
		'contact_phone',
		'contact_fax',
		'contact_address',
		'contact_address2',
		'contact_address3',
		'contact_city',
		'contact_state',
		'contact_zip',
		'url1',
		'url2',
		'url3',
		'internal_location',
		'transfer_method',
		'comments',
		'creator',
		'update_user',
		'date_created',
		'last_updated',
		'views',
		'business_owner',
		'contact_information',
		'exclude',
		'delete_row',
		'import_flag',
		'database_name',
		'hubid',
		*/
		'id',
	),
)); ?>
