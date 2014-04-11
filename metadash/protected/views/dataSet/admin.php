<?php
/* @var $this DataSetController */
/* @var $model DataSet */

$this->breadcrumbs=array(
	'Data Sets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DataSet', 'url'=>array('index')),
	array('label'=>'Create DataSet', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#data-set-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Data Sets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'data-set-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'data_set_name',
		'abbreviation',
		'data_source',
		'access_restricted',
		'public',
		'metadata_public',
		/*
		'data_public',
		'description',
		'terms_of_use',
		'software_platform',
		'other_platform',
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
		'id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
