<?php
/* @var $this SolutionController */
/* @var $data Solution */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scramble')); ?>:</b>
	<?php echo CHtml::encode($data->scramble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('solve_time')); ?>:</b>
	<?php echo CHtml::encode($data->solve_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goal')); ?>:</b>
	<?php echo CHtml::encode($data->goal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cube_type')); ?>:</b>
	<?php echo CHtml::encode($data->cube_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />


</div>