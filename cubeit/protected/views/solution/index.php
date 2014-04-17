<?php
/* @var $this SolutionController */
/* @var $dataProvider CActiveDataProvider */
/*
$this->breadcrumbs=array(
	'Solution History',
);


$this->menu=array(
	array('label'=>'Create Solution', 'url'=>array('create')),
	array('label'=>'Manage Solution', 'url'=>array('admin')),
);
*/
?>

<h1>Solution History</h1>

<table>
	<thead>
		<th>Cube Type</th>
		<th>Scramble</th>
		<th>Solve Time</th>
		<th>Goal</th>
		<th>Date/Time</th>
	</thead>
	<tbody>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'cssFile'=>Yii::app()->request->baseUrl."/css/listView.css",
)); ?>

	</tbody>
</table>