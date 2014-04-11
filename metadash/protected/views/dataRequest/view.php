<?php
/* @var $this DataRequestController */
/* @var $model DataRequest */

$this->breadcrumbs=array(
	'Data Requests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DataRequest', 'url'=>array('index')),
	array('label'=>'Create DataRequest', 'url'=>array('create')),
	array('label'=>'Update DataRequest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DataRequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DataRequest', 'url'=>array('admin')),
);
?>

<h1>View DataRequest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'request_date',
		'data_requested',
		'requester',
		'requester_org',
		'requester_email',
		'requester_phone',
		'need_by_date',
		'data_made_public',
		'descrip',
		'purpose',
		'sources',
		'difficulty_score',
		'importance_score',
		'cost_score',
		'status',
		'status_notes',
		'comments',
		'date_created',
		'creator',
		'last_updated',
		'update_user',
		'hubid',
		'id',
	),
)); ?>
