<?php
/* @var $this DatabasesController */
/* @var $data Databases */
?>

<div class="view">
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Database_ID')); ?>:</b>
	<?php /* METALICIOUS CUSTOM: DISPLAY ID AS PLAIN TEXT, NOT HYPERLINK. [GMS] echo CHtml::link(CHtml::encode($data->Database_ID), array('view', 'id'=>$data->Database_ID)); ?>
	<?php echo CHtml::encode($data->Database_ID); 
	*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Database_Name')); ?>:</b>
	<?php /* METALICIOUS CUSTOM: DISPLAY DB NAME AS HYPERLINK, NOT PLAIN TEXT. [GMS 3/18/14] echo CHtml::encode($data->Database_Name); */ ?>
	<?php echo CHtml::link(CHtml::encode($data->Database_Name), array('databases/view', 'id'=>$data->Database_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />
	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Business_Owner')); ?>:</b>
	<?php echo CHtml::encode($data->Business_Owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contact_Information')); ?>:</b>
	<?php echo CHtml::encode($data->Contact_Information); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Data_Period')); ?>:</b>
	<?php echo CHtml::encode($data->Data_Period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Software_Platform')); ?>:</b>
	<?php echo CHtml::encode($data->Software_Platform); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('General_Accuracy')); ?>:</b>
	<?php echo CHtml::encode($data->General_Accuracy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comments')); ?>:</b>
	<?php echo CHtml::encode($data->Comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Public')); ?>:</b>
	<?php echo CHtml::encode($data->Public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Creator')); ?>:</b>
	<?php echo CHtml::encode($data->Creator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Views')); ?>:</b>
	<?php echo CHtml::encode($data->Views); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_Created')); ?>:</b>
	<?php echo CHtml::encode($data->Date_Created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Last_Updated')); ?>:</b>
	<?php echo CHtml::encode($data->Last_Updated); ?>
	<br />

	*/ ?>

</div>