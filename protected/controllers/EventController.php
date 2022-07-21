<?php

class EventController extends Controller
{
	/**
	 * The function filters() returns an array of filters that will be applied to the controller
	 */
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'accessControl',
		);
	}

	/**
	 * > Allow all users to perform the actions 'index', 'view', and 'create', but deny all users
	 */
	public function accessRules()
	{
		return array(
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('index', 'create'),
				'users' => array('*'),
			),
			array(
				'deny',  // deny all users
				'users' => array('*'),
			),
		);
	}

	/**
	 * If the user has submitted the form, then save the model
	 */
	public function actionCreate()
	{
		$model = new Event();

		if (isset($_POST['Event'])) {
			$model->attributes = $_POST["Event"];
			$model->save();
		}

		$this->render('create', ['model' => $model]);
	}


	/**
	 * The function `actionIndex()` is called when the user visits the URL
	 * `http://example.com/index.php?r=site/index`
	 */
	public function actionIndex()
	{
		echo "Index page";
	}

	/**
	 * > This function will display the text "viewing a event"
	 */
	public function actionView()
	{
		echo "viewing a event";
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
