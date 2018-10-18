<?php
class Gtest extends CActiveRecord
{
  public function tableName()
  {
    return 'gtest';
  }
  public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.['username', 'string', 'length' => [4, 24]],
		return array(
			array('fname, lname, email', 'required'),
        array('email', 'unique'),
        array('email','filter','filter'=>'strtolower'),
        array('fname,lname', 'match','pattern' => '/^[a-zA-Z\s]+$/','message' => 'Enter only letters'),
        //   array('lname', 'string','length' => [4, 20]),
			array('email', 'length', 'max'=>50,),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fname, lname, email', 'safe', 'on'=>'search'),
		);
	}
  public function attributeLabels()
  {
    return array(
      'id' => 'ID',
      'fname' => 'F Name',
      'lname' => 'L Name',
      'email' => 'Email',
    );
  }


  public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}




}

?>
