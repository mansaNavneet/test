<?php
class GloginController extends Controller
{
//  public $layout='//layouts/front';
  public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
  public $defaultAction = 'glogin';
  public function actionGlogin()
  {
    $this->layout = 'gtest';
     $this->render('user');
  }
  public function actionIndex()
  {
     $this->render('index');
  }

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
      array('allow',  // deny all users
        'users'=>array('*'),
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
  public function actionLoga()
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
            $error = 'Your login not successful';
              $this->render('error', array('error'=>$error));
            }
                //$this->redirect(Yii::app()->user->returnUrl);
        }

        // display the login form
        $this->renderPartial('glogin',array('model'=>$model),false,true);
  }
  public function actionMsg()
  {
    $this->layout = 'gtest';
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $qury = $_POST['qury'];
      $command= Yii::app()->db->createCommand(
        "INSERT INTO qury
        (`fname`,`lname`,`email`,`qury`)
        VALUES
        (:fname,:lname,:email,:qury)");
        $command->bindValue(':fname', $fname);
        $command->bindValue(':lname', $lname);
        $command->bindValue(':email', $email);
        $command->bindValue(':qury', $qury);
        $sql_result = $command->execute();
        if($sql_result)
        {
          echo 'You message is submitted!';
        }
}
  public function actionError()
  {
    if($error=Yii::app()->errorHandler->error)
      $this->render('error', array('error'=>$error));
  }
  public function actionTry()
  {
    echo 'jhgifh';
  }




}

?>
