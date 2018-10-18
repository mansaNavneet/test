<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user = Gtest::model()->findByAttributes(array('fname'=>$this->username));
		if(!isset($user))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
                else if($this->password != $user->email)//You should salt your password using CPasswordHelper
                    $this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->errorCode=self::ERROR_NONE;

                        $this->setState("id", $user->id);
                        $this->setState("firstName", $user->fname);
                        $this->setState("lastName", $user->lname);
                        //$this->setState("userType", $user->userType);
                        $user->save();
                }
		return !$this->errorCode;
	}
}
