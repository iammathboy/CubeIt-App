<?php
/* @var $this SolutionController */
/* @var $model Solution */

$this->breadcrumbs=array(
	'Solutions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Solution', 'url'=>array('index')),
	array('label'=>'Manage Solution', 'url'=>array('admin')),
);
?>

<h1>Create Solution</h1>

<?php
$this->renderPartial('_form', array('model'=>$model)); ?>