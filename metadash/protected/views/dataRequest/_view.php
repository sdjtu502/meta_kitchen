<?php
/* @var $this DataRequestController */
/* @var $data DataRequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date')); ?>:</b>
	<?php echo CHtml::encode($data->request_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_requested')); ?>:</b>
	<?php echo CHtml::encode($data->data_requested); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requester')); ?>:</b>
	<?php echo CHtml::encode($data->requester); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requester_org')); ?>:</b>
	<?php echo CHtml::encode($data->requester_org); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requester_email')); ?>:</b>
	<?php echo CHtml::encode($data->requester_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requester_phone')); ?>:</b>
	<?php echo CHtml::encode($data->requester_phone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('need_by_date')); ?>:</b>
	<?php echo CHtml::encode($data->need_by_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_made_public')); ?>:</b>
	<?php echo CHtml::encode($data->data_made_public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip')); ?>:</b>
	<?php echo CHtml::encode($data->descrip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purpose')); ?>:</b>
	<?php echo CHtml::encode($data->purpose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sources')); ?>:</b>
	<?php echo CHtml::encode($data->sources); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('difficulty_score')); ?>:</b>
	<?php echo CHtml::encode($data->difficulty_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importance_score')); ?>:</b>
	<?php echo CHtml::encode($data->importance_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost_score')); ?>:</b>
	<?php echo CHtml::encode($data->cost_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_notes')); ?>:</b>
	<?php echo CHtml::encode($data->status_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creator')); ?>:</b>
	<?php echo CHtml::encode($data->creator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_updated')); ?>:</b>
	<?php echo CHtml::encode($data->last_updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user')); ?>:</b>
	<?php echo CHtml::encode($data->update_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hubid')); ?>:</b>
	<?php echo CHtml::encode($data->hubid); ?>
	<br />

	*/ ?>

</div>