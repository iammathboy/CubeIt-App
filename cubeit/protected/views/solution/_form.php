<?php
/* @var $this SolutionController */
/* @var $model Solution */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solution-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'action' => array( '/solution/create' )
)); 
 
?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'scramble'); ?>
		<?php echo $model->getGeneratedScramble(); ?>
		<!--<?php echo $form->textField($model,'scramble',array('size'=>30,'maxlength'=>128)); ?>-->
		<?php echo $form->error($model,'scramble'); ?>
	</div>
	
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>
	-->
	

	<div class="row">
		<?php echo $form->labelEx($model,'solve_time'); ?>
		<?php echo $form->textField($model,'solve_time',array('size'=>30,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'solve_time'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'goal'); ?>
		<?php echo $form->dropDownList($model,'goal',$model->goalOptions); ?>
		<?php echo $form->error($model,'goal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cube_type'); ?>
		<?php echo $form->dropDownList($model,'cube_type',$model->cubeTypes); ?>
		<?php echo $form->error($model,'cube_type'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
