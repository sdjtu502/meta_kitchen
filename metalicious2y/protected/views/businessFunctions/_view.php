<?php
/* @var $this BusinessFunctionsController */
/* @var $data BusinessFunctions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Business_Function_ID')); ?>:</b>
	<?php /* METALICIOUS CUSTOM: DISPLAY ID AS PLAIN TEXT, NOT HYPERLINK. [GMS] echo CHtml::link(CHtml::encode($data->Business_Function_ID), array('view', 'id'=>$data->Business_Function_ID)); */ ?>
	<?php echo CHtml::encode($data->Business_Function_ID); ?>	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Business_Function_Name')); ?>:</b>
	<?php /* METALICIOUS CUSTOM: DISPLAY DB NAME AS HYPERLINK, NOT PLAIN TEXT. [GMS 3/18/14] echo CHtml::encode($data->Business_Function_Name); */ ?>
	<?php echo CHtml::link(CHtml::encode($data->Business_Function_Name), array('view', 'id'=>$data->Business_Function_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Business_Function_Description')); ?>:</b>
	<?php echo CHtml::encode($data->Business_Function_Description); ?>
	<br />


</div>