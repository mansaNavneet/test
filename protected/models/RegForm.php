<?php
namespace app\models;
use Yii;
use yii\base\Model;



class RegForm extends Model
{
	public $name;
	public $email;
	public $gender;
	public $phone;

  public function rules()
  {
    return array(
      // name, email, subject and body are required
      array('name, email, gender, phone', 'required'),
      // email has to be a valid email address
      array('email', 'email'),
    );
  }
  public function attributeLabels()
	{
		return array(
			'name'=>'Name',
      'email'=>'Email',
      'gender'=>'Gender',
      'phone'=>'Phone',
		);
	}
	public function utest()
	{
		echo ' This is to test model.';
	}
}
?>
