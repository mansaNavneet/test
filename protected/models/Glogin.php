<?php

class Glogin extends CFormModel
{
	public $fname;
  public $email;
	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('fname, email', 'required'),
            array('email', 'email'),
						array('email','filter','filter'=>'strtolower'),
			// password needs to be authenticated
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'fname'=>'Your First Name',
      'email'=>'Registered Email',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */




	 public function authenticate($attribute,$params)
 	{
 		if(!$this->hasErrors())
 		{
 			$this->_identity=new UserIdentity($this->fname,$this->email);
 			if(!$this->_identity->authenticate())
 				$this->addError('password','Incorrect username or password.');
 		}
 	}





	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	 public function login()
 	{
 		if($this->_identity===null)
 		{
 			$this->_identity=new UserIdentity($this->fname,$this->email);
 			$this->_identity->authenticate();
 		}
 		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
 		{
 			//$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
 			Yii::app()->user->login($this->_identity);
 			return true;
 		}
 		else
 			return false;
 	}
}
