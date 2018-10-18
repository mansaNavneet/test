<?php
 /* @var $this FormdataController */
 /* @var $model Formdata */
 /* @var $form CActiveForm */
 ?>

 <div class="form container">

 <?php $form=$this->beginWidget('CActiveForm', array(
 	'id'=>'gtest-form',
 	'enableAjaxValidation'=>false,
 )); ?>

 	<p class="note">Fields with <span class="required">*</span> are required.</p>

 	<?php echo $form->errorSummary($model); ?>

 	<div class="row">
 		<?php echo CHtml::activeLabel($model,'fname',array('class' => 'control-label')); ?>
 		<?php echo CHtml::activeTextField($model,'fname',array('class' => 'form-control','maxlength' => '10'))  ?>
 		<?php echo $form->error($model,'fname'); ?>
    <div class="jerror"></div>
 	</div>

 	<div class="row">
    <?php echo CHtml::activeLabel($model,'lname',array('class' => 'control-label')); ?>
    <?php echo CHtml::activeTextField($model,'lname',array('class' => 'form-control','maxlength' => '10')) ?>
 		<?php echo $form->error($model,'lname'); ?>
    <div class="jerror"></div>
 	</div>

 	<div class="row">
    <?php echo CHtml::activeLabel($model,'email',array('class' => 'control-label')); ?>
    <?php echo CHtml::activeEmailField($model,'email',array('class' => 'form-control','maxlength' => '50')) ?>
 		<?php echo $form->error($model,'email'); ?>
    <div class="jerror"></div>
 	</div>


 	<div class="row submit">
 		<!-- <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?> -->
    <?php echo CHtml::submitButton('Save',array('class' => 'btn btn-primary','name' => 'save',)); ?>
 	</div>

 <?php $this->endWidget(); ?>

 </div><!-- form -->
