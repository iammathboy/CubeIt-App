<?php
/* @var $this SolutionController */
/* @var $model Solution */

$this->breadcrumbs=array(
	'Solutions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Solution', 'url'=>array('index')),
	array('label'=>'Create Solution', 'url'=>array('create')),
	array('label'=>'View Solution', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Solution', 'url'=>array('admin')),
);
?>

<h1>Update Solution <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>