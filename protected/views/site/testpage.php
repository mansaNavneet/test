<?php
use yii\helpers\Html;


$this->pageTitle=Yii::app()->name . ' - My test page';
echo $a;
?>
<h1>View Page</h1>
<form action="" method="post" name="CstForm">
Name : <input type="text" name="txt" id="txt">
<input type="submit" name="sb" id="sb" value="submit">
</form>

     <?php echo CHtml::beginForm(); ?>

         <?php echo CHtml::errorSummary($model); ?>

         <div class="row">
             <?php echo CHtml::activeLabel($model,'name'); ?>
          <?php echo CHtml::endForm(); ?>
