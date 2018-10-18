<?php
//print_r($model);
?>
<div class="form-group">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'glogin-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fname',array('class' => 'control-label')); ?>
		<?php echo $form->textField($model,'fname',array('class' => 'form-control','maxlength' => '10')); ?>
		<?php echo $form->error($model,'fname'); ?>
		<div class="jerror"></div>
	</div>

  <div class="row">
		<?php echo $form->labelEx($model,'email',array('class' => 'control-label')); ?>
		<?php echo $form->EmailField($model,'email',array('class' => 'form-control','maxlength' => '50')); ?>
		<?php echo $form->error($model,'email'); ?>
		<div class="jerror"></div>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton('Login',array('class' => 'btn btn-primary','id' => 'sb','name' => 'login',)); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
