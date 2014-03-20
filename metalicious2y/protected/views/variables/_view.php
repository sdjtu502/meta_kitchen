<?php
/* @var $this VariablesController */
/* @var $data Variables */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_ID')); ?>:</b>
	<?php /* METALICIOUS CUSTOM: DISPLAY ID AS PLAIN TEXT, NOT HYPERLINK. echo CHtml::link(CHtml::encode($data->Variable_ID), array('view', 'id'=>$data->Variable_ID)); */ ?>
	<?php echo CHtml::encode($data->Variable_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_Name')); ?>:</b>
	<?php /* METALICIOUS CUSTOM: DISPLAY NAME AS HYPERLINK, NOT PLAIN TEXT.  echo CHtml::encode($data->Variable_Name); */ ?>
	<?php echo CHtml::link(CHtml::encode($data->Variable_Name), array('view', 'id'=>$data->Variable_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_Description')); ?>:</b>
	<?php echo CHtml::encode($data->Variable_Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_Type_Format')); ?>:</b>
	<?php echo CHtml::encode($data->Variable_Type_Format); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_Length')); ?>:</b>
	<?php echo CHtml::encode($data->Variable_Length); ?>
	<br />

	<?php	/*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Table_Id')); ?>:</b>
	<?php echo CHtml::encode($data->Table_Id); ?>
	<br />  */  ?>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_Values')); ?>:</b>
	<?php echo CHtml::encode($data->Variable_Values); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_Example')); ?>:</b>
	<?php echo CHtml::encode($data->Variable_Example); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_Comments')); ?>:</b>
	<?php echo CHtml::encode($data->Variable_Comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Data_Portal')); ?>:</b>
	<?php echo CHtml::encode($data->Data_Portal); ?>
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