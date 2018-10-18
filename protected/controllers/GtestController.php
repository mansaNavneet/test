<?php
class GtestController extends Controller
{
  public $layout='//layouts/gtest';
  public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
/*  public $defaultAction = 'gtest';*/
  public function actionIndex()
  {
  $this->layout = 'gtest';
     $this->render('index');
  }
/*  public function beforeAction()

{

  Yii::app()->user->returnUrl = Yii::app()->createUrl('gtest/Log');
  return parent::beforeAction();
          //  $this->redirect(Yii::app()->createUrl('user/login'));

} */

  public function accessRules()
  {
    return array(
      array('allow',  // allow all users to perform 'index' and 'view' actions
        'actions'=>array('index','view'),
        'users'=>array('*'),
      ),
      array('allow', // allow authenticated user to perform 'create' and 'update' actions
        'actions'=>array('create','update'),
        'users'=>array('@'),
      ),
      array('allow', // allow admin user to perform 'admin' and 'delete' actions
        'actions'=>array('admin','delete'),
        'users'=>array('user'),
      ),
      array('deny',  // deny all users
        'users'=>array('?'),
      ),
    );
  }
  public function loadModel($id)
	{
		$model=Gtest::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
  public function actionLogout()
	{
		Yii::app()->user->logout();
	//	$this->redirect(Yii::app()->homeUrl);
    //$this->redirect(array('glogin/Log'));
    $this->redirect(Yii::app()->baseUrl);
	}
  public function actionHel()
	{
    $this->layout = 'gtest';
    //echo 'Hello !!';
    $connection=Yii::app()->db;
    $command=$connection->createCommand('SELECT * from gtest')->queryAll();
    //var_dump($command);
     $this->render('update',array('command' => $command));
	}
  public function actionView()
  {
    // $this->render('view');
    $this->layout = 'gtest';
    $model = new Gtest;


       if (isset($_POST['signup']))
       {
      $model->attributes=$_POST['Gtest'];
      //print_r( $_POST['Gtest']).' gt <br>';
      if($model->save())
      {
        $this->redirect(Yii::app()->baseUrl);
      }
      else {
        $error = $model->getErrors();
        $this->render('error',array('error'=>$error));
      }
    }
    $this->renderPartial('view',array('model'=>$model),false,true);
  }

  public function actionUpd($id)
  {
    $this->layout = 'gtest';
    $model=$this->loadModel($id);
    if(isset($_POST['Gtest']))
    {
      $model->attributes=$_POST['Gtest'];
      if($model->save())
      {
        echo 'success';
      }
    }

    $this->render('edit',array(
      'model'=>$model,
    ));
  }
  public function actionDel($id)
  {
    $this->layout = 'gtest';
  $model = $this->loadModel($id)->delete();
  $msg = 'Data is deletd';
       if ($model)
       {
         echo $msg;

       }
  }
  public function actionLog()
  {
$this->layout = 'gtest';
      $model=new Glogin;
      if(isset($_POST['Glogin']))
        {
            $model->attributes=$_POST['Glogin'];
            print_r($_POST['Glogin']);
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
            {
              echo 'login successful';
              @session_start();
              $_SESSION['user'] = $model['fname'];
             $this->redirect(array('gtest/Hel',));
            }
            else {
              print_r($model->getErrors());
            }
                //$this->redirect(Yii::app()->user->returnUrl);
        }

        // display the login form
        $this->render('glogin',array('model'=>$model));
  }
  public function actionIns()
	{
    $this->layout = 'gtest';
    //echo 'Hello !!';
    $connection=Yii::app()->db;
    $sql="INSERT INTO gtest (fname,lname, email) VALUES(:try,:try,:email)";
    $command=$connection->createCommand()->insert('gtest',[
      'fname' => 'try',
      'lname' => 'try2',
      'email' => 'email@email.com',
    ])->execute();
    //var_dump($command);
	}
  public function actionList($id)
  {
    $this->layout = 'gtest';
  $this->render('list',array(
      'model'=>$this->loadModel($id),
    ));
  }

  public function actionImg()
  	{
      $this->layout = 'gtest';
  		$model=new Item;
  		if(isset($_POST['Item']))
  		{
  			$model->attributes=$_POST['Item'];
  			$model->image=CUploadedFile::getInstance($model,'image');
  			if($model->save())
  			{
          print_r($model->image->name);
  				$model->image->saveAs(Yii::app()->basePath.'/upload/'.$model->image->name.'');
  				// redirect to success page
  			}
  		}
  		$this->render('imag', array('model'=>$model));
  	}
    public function actionPic()
      {
        $this->layout = 'gtest';
        $connection=Yii::app()->db;
        $command=$connection->createCommand('SELECT * from Item')->queryAll();
        //var_dump($command);
        $this->render('pic',array('command' => $command));
      }

    public function actionAbout()
    {
      // $this->render('view');
      $this->layout = 'gtest';
      $this->render('about');
    }
  public function actionTry()
  {
    // $this->render('view');
    $this->layout = 'gtest';
    $model = new Ytable;


       if (isset($_POST['signup']))
       {
      $model->attributes=$_POST['Gtest'];
      //print_r( $_POST['Gtest']).' gt <br>';
      if($model->save())
      {
        $this->redirect(array('glogin/Log'));
      }
      else {
        print_r($model->getErrors());
      }
    }
    $this->render('user',array('model'=>$model));
  }




}

?>
