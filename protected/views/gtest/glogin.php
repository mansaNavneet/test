<?php
//print_r($model);
?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'glogin-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname'); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

  <div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
