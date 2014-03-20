<?php

class DatabasesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','viewsingle'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		/* METALICIOUS CUSTOM: ADD LIST OF CHILD RECORDS FOR THE PARENT RECORD BEING DISPLAYED. */
		$tableDataProvider=new CActiveDataProvider('Tables', array(
			'criteria'=>array(
		 		'condition'=>'Database_ID=:Database_Id',
		 		'params'=>array(':Database_Id'=>$this->loadModel($id)->Database_ID),
		 	),
		 	'pagination'=>array(
		 		'pageSize'=>10,
		 	),
		 ));    /* END CUSTOM */
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			/* METALICIOUS CUSTOM: ADD THE CHILD-LIST DATA PROVIDER TO THE ARRAY OF PROVIDERS ACCEPTED BY RENDER(). */
			'tableDataProvider'=>$tableDataProvider,
		));
	}

	public function actionViewsingle($id)
	{
		$this->render('viewsingle',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Databases;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Databases']))
		{
			$model->attributes=$_POST['Databases'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Database_ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Databases']))
		{
			$model->attributes=$_POST['Databases'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Database_ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Databases');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Databases('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Databases']))
			$model->attributes=$_GET['Databases'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Databases the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Databases::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Databases $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='databases-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
