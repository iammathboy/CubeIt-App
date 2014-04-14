<?php
/* @var $this SolutionController */
/* @var $model Solution */

$this->breadcrumbs=array(
	'Solutions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Solution', 'url'=>array('index')),
	array('label'=>'Create Solution', 'url'=>array('create')),
	array('label'=>'Update Solution', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Solution', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Solution', 'url'=>array('admin')),
);
?>

<h1>View Solution #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'scramble',
		'user_id',
		'solve_time',
		'goal',
		'cube_type',
		'date',
	),
)); ?>
