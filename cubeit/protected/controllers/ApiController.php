<?php

class ApiController extends Controller
{
	/*
	public function actionGetSolutions()
	{
		$this->render('getSolutions');
	}
	*/

	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionGetSolutions()
	{
	  header('Content-type: application/json');

	  $solutions = Solution::model()->findAll();

	  echo CJSON::encode($solutions);

	  Yii::app()->end();
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}