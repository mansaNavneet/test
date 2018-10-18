<?php
class Gmsg extends CActiveRecord
{
  public function tableName()
  {
    return 'qury';
  }
  public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, lname, email', 'qury','required'),
      array('email','filter','filter'=>'strtolower'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fname, lname, email', 'qury','safe', 'on'=>'search'),
		);
	}
  public function attributeLabels()
  {
    return array(
      'id' => 'ID',
      'fname' => 'First Name',
      'lname' => 'Last Name',
      'email' => 'Email',
      'qury' => 'Your Message',
    );
  }
  public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}




}

?>
