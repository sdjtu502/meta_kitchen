<?php
/* @var $this TablesController */
/* @var $data Tables */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Table_ID')); ?>:</b>
	<?php /* METALICIOUS CUSTOM: DISPLAY ID AS PLAIN TEXT, NOT HYPERLINK. echo CHtml::link(CHtml::encode($data->Table_ID), array('view', 'id'=>$data->Table_ID)); */ ?>
	<?php echo CHtml::encode($data->Table_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Table_Name')); ?>:</b>
	<?php /* METALICIOUS CUSTOM: DISPLAY NAME AS HYPERLINK, NOT PLAIN TEXT.  echo CHtml::encode($data->Table_Name); */ ?>
	<?php echo CHtml::link(CHtml::encode($data->Table_Name), array('view', 'id'=>$data->Table_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Table_Description')); ?>:</b>
	<?php echo CHtml::encode($data->Table_Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Table_Comments')); ?>:</b>
	<?php echo CHtml::encode($data->Table_Comments); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_Created')); ?>:</b>
	<?php echo CHtml::encode($data->Date_Created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Last_Updated')); ?>:</b>
	<?php echo CHtml::encode($data->Last_Updated); ?>
	<br />

	*/ ?>

</div>