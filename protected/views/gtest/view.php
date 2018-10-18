<?php
use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use app\models\Status;
//print_r($command);
//print_r($model);
?>
  <!-- <h1>Sign Up Form</h1> -->
<div class="form-signup form-group">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gtable-form',
	'enableAjaxValidation'=>true,
  'enableClientValidation'=>true,
  'clientOptions'=>array(
    'validateOnSubmit'=>true,
  ),
));  ?>

    <?php echo CHtml::errorSummary($model); ?>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'fname',array('class' => 'control-label')); ?>
        <?php echo CHtml::activeTextField($model,'fname',array('class' => 'form-control','required' => 'required','maxlength' => '10')) ?>
        <div class="jerror"></div>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'lname',array('class' => 'control-label')); ?>
        <?php echo CHtml::activeTextField($model,'lname',array('class' => 'form-control','required' => 'required','maxlength' => '10')) ?>
        <div class="jerror"></div>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'email',array('class' => 'control-label')); ?>
        <?php echo CHtml::activeEmailField($model,'email',array('class' => 'form-control','required' => 'required','maxlength' => '50')) ?>
        <div class="jerror"></div>
    </div>

    <div class="row submit ">
        <?php echo CHtml::submitButton('SignUp',array('class' => 'btn btn-primary','id' => 'sb','name' => 'signup',)); ?>
    </div>

<?php $this->endWidget();  ?>
</div><!-- form -->
