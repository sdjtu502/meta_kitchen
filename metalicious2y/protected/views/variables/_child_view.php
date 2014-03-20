<?php
/* @var $this VariablesController */
/* @var $data Variables */
?>

<!-- METALICIOUS CUSTOM: REDUCE THE NUMBER OF FIELDS DISPLAYED FOR CHILD RECORDS, SINCE THIS VIEW IS INTENDED TO LIST JUST BASIC INFO FOR EACH CHILD, ON PARENT DETAIL PAGE. [GMS 3/18/14] -->
<style type='text/css'> 
.metlis2_childview { border-spacing:0px; border:0px; border-collapse:collapse; margin:0px; border-style:none; border-width:0;} 
.td { padding:0px; margin:0px; border:0px; border-style:none; border-width:0;} 
</style>

<div class="view">

	<?php
	/* METALICIOUS CUSTOM: REDUCE THE NUMBER OF FIELDS DISPLAYED FOR CHILD RECORDS, SINCE THIS VIEW IS INTENDED TO LIST JUST BASIC INFO FOR EACH CHILD, ON PARENT DETAIL PAGE. [GMS 3/18/14] */
	/*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_ID')); ?>:</b>
	<?php /* METALICIOUS CUSTOM: DISPLAY ID AS PLAIN TEXT, NOT HYPERLINK. echo CHtml::link(CHtml::encode($data->Variable_ID), array('view', 'id'=>$data->Variable_ID)); ?>
	echo CHtml::encode($data->Variable_ID);
	<br />
	*/ ?>
	
	<table class='metlis2_childview' border=0 cellpadding=0 cellspacing=0>
	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('Variable_Name')); ?>:</b>  -->
	<?php /* METALICIOUS CUSTOM: DISPLAY NAME AS HYPERLINK, NOT PLAIN TEXT.  echo CHtml::encode($data->Variable_Name); */ ?>
	<tr><td width='25%'> <?php echo CHtml::link(CHtml::encode($data->Variable_Name), array('variables/view', 'id'=>$data->Variable_ID)); ?>  </td> 
	<!-- <br /> -->

	<?php /* echo CHtml::encode($data->getAttributeLabel('Variable_Description')); */ ?>
	<td width='75%'> <?php echo CHtml::encode($data->Variable_Description); ?> </td></tr>
	</table>	     

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_Type_Format')); ?>:</b>
	<?php echo CHtml::encode($data->Variable_Type_Format); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Variable_Length')); ?>:</b>
	<?php echo CHtml::encode($data->Variable_Length); ?>
	<br />

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